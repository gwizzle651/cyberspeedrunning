<?php
declare(strict_types=1);

$dbHost = 'localhost';
$dbName = 'cyber_speedrunning' # may change later
$dbUser = 'db_user'; # change later
$dbPass = 'db_password'; # change later
$dbCharset = 'utf8mb4';

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=$dbCharset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass, $options);
} catch (PDOException $e) {
    error_log('Database connection error: ' . $e->getMessage());
    http_response_code(500);
    exit('Database connection failed.');
}
