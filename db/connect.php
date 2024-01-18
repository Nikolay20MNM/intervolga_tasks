<?php

$servername = 'localhost';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$servername;dbname=task_3", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo "Ошибка подключения: " . $e->getMessage();
}