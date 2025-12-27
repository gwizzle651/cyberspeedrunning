<?php
declare(strict_types=1);

class User
{
    private PDO $db;

    public function __construct(PDO $pdo)
    {
        $this->db = $pdo;
    }

    public function create(string $username, string $password): bool
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "
            INSERT INTO users (username, password_hash)
            VALUES (:username, :password_hash)
        ";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            'username'      => $username,
            'password_hash' => $hash
        ]);
    }

    public function verifyCredentials(string $username, string $password): ?array
    {
        $sql = "
            SELECT id, username, password_hash, status
            FROM users
            WHERE username = :username
            LIMIT 1
        ";

        $stmt = $this->db->prepare($sql);
        $stmt->execute(['username' => $username]);

        $user = $stmt->fetch();

        if (!$user) {
            return null;
        }

        if (!password_verify($password, $user['password_hash'])) {
            return null;
        }

        if ($user['status'] === 'suspended') {
            return null;
        }

        unset($user['password_hash']);
        return $user;
    }

    public function exists(string $username): bool
    {
        $stmt = $this->db->prepare(
            "SELECT 1 FROM users WHERE username = :username"
        );

        $stmt->execute(['username' => $username]);
        return (bool) $stmt->fetchColumn();
    }

    public function findById(int $id): ?array
    {
        $stmt = $this->db->prepare(
            "SELECT id, username, status, created_at
             FROM users
             WHERE id = :id"
        );

        $stmt->execute(['id' => $id]);
        return $stmt->fetch() ?: null;
    }

    public function setStatus(int $userId, string $status): bool
    {
        $allowed = ['admin', 'standard', 'suspended'];

        if (!in_array($status, $allowed, true)) {
            throw new InvalidArgumentException('Invalid user status');
        }

        $stmt = $this->db->prepare(
            "UPDATE users SET status = :status WHERE id = :id"
        );

        return $stmt->execute([
            'status' => $status,
            'id'     => $userId
        ]);
    }
}

