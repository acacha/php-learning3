<?php

require 'models/Task.php';
require 'framework/database/connect.php';

//connect();
$pdo = connect();
$statement = $pdo->prepare('SELECT * FROM tasks;');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_CLASS);

require 'views/tasks.blade.php';
