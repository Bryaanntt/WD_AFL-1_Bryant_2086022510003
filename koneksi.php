<?php
function db() {
    static $pdo = null;

    if ($pdo === null) {
        $host = 'localhost';
        $port = 3306;
        $nama = 'latihan_mvc';
        $user = 'root';
        $pass = '';

        $pdo = new PDO(
            "mysql:host=$host;port=$port;dbname=$nama;charset=utf8mb4",
            $user,
            $pass,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    }

    return $pdo;
}