<?php

class Run
{
    public int $id;
    public int $user_id;
    public string $game;
    public string $category;
    public int $time_ms;
    public string $proof_url;
    public string $created_at;

   public static function create(
        PDO $db,
        int $userId,
        string $game,
        string $category,
        int $timeMs,
        string $proofUrl
    ): int {
        $stmt = $db->prepare(
            "INSERT INTO runs (user_id, game, category, time_ms, proof_url)
             VALUES (:user_id, :game, :category, :time_ms, :proof_url)"
        );

        $stmt->execute([
            'user_id'   => $userId,
            'game'      => $game,
            'category'  => $category,
            'time_ms'   => $timeMs,
            'proof_url' => $proofUrl
        ]);

        return (int) $db->lastInsertId();
    }

   public static function update(
        PDO $db,
        int $id,
        string $game,
        string $category,
        int $timeMs,
        string $proofUrl
    ): bool {
        $stmt = $db->prepare(
            "UPDATE runs
             SET game = :game,
                 category = :category,
                 time_ms = :time_ms,
                 proof_url = :proof_url
             WHERE id = :id"
        );

        return $stmt->execute([
            'id'        => $id,
            'game'      => $game,
            'category'  => $category,
            'time_ms'   => $timeMs,
            'proof_url' => $proofUrl
        ]);
    }

    public static function findById(PDO $db, int $id): ?Run
    {
        $stmt = $db->prepare(
            "SELECT * FROM runs WHERE id = :id LIMIT 1"
        );

        $stmt->execute(['id' => $id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$data) {
            return null;
        }

        return self::hydrate($data);
    }

    public static function findByUser(PDO $db, int $userId): array
    {
        $stmt = $db->prepare(
            "SELECT * FROM runs
             WHERE user_id = :user_id
             ORDER BY created_at DESC"
        );

        $stmt->execute(['user_id' => $userId]);

        $runs = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $runs[] = self::hydrate($row);
        }

        return $runs;
    }

   public static function delete(PDO $db, int $id): bool
    {
        $stmt = $db->prepare(
            "DELETE FROM runs WHERE id = :id"
        );

        return $stmt->execute(['id' => $id]);
    }

   private static function hydrate(array $data): Run
    {
        $run = new Run();

        foreach ($data as $key => $value) {
            $run->$key = $value;
        }

        return $run;
    }
}

