<?php

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();


$host = trim($_ENV['DB_HOST']);
$dbname = trim($_ENV['DB_NAME']);
$username = trim($_ENV['DB_USER']);
$password = trim($_ENV['DB_PASSWORD']);

try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo "Erreur : " . $e->getMessage();

}