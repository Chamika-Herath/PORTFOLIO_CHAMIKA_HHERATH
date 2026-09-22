<?php
$host = '127.0.0.1'; // Use localhost or remote host
$db   = 'portfolio_db';
$user = 'root'; // Change for production
$pass = '';     // Change for production
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Throw exceptions on error
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Fetch associative arrays
    PDO::ATTR_EMULATE_PREPARES   => false,                  // True prepared statements
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // In production, do not echo the exact error to the user, log it instead.
    die("Database connection failed: " . $e->getMessage());
}
?>
