<?php

require 'models/Task.php';

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=php_learning','debian-sys-maint','XpYuavOBcoVff67Q');
} catch (\PDOException $e) {
    die('Could not connect: ' . $e);
}

$statement = $pdo->prepare('SELECT * FROM tasks;');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_CLASS);

require 'views/tasks.blade.php';