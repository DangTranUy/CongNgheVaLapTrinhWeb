<?php

$dsn = 'mysql:host=localhost;dbname=sneaker_store';
$username = 'root';
$password = '';
try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    exit();
}
