<?php
declare(strict_types=1);

// Read the file

// BEST PRACTICE (Run this in BASH)
# composer require vlucas/phpdotenv
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dbHost = 'localhost'; # Name of the dbHost in the .env
$dbName = getenv('DB_NAME'); # Name of the dbName in the .env
$dbUser = getenv('DB_USER'); # Name of the dbUser in the .env 
$dbPass = getenv('DB_PASS'); # Name of the dbPass in the .env
$dbCharset = 'utf8mb4';

// DO NOT TOUCH ANYTHING BELOW
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

return $pdo;
