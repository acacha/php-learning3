<?php

//require 'models/Task.php';
//
//new Task();
//
////new PDO()
///

//$task1= [ 'name' => 'Comprar pa', 'completed' => false ];
//$task2= [ 'name' => 'Comprar llet', 'completed' => false ];
//$task3= [ 'name' => 'fer llit pa', 'completed' => true ];
//
//$tasks = [$task1, $task2, $task3];

$tasks = [
    [
        'name' => 'Comprar pa',
        'completed' => false
    ],
    [
        'name' => 'Comprar llet',
        'completed' => true
    ],
    [
        'name' => 'Fer el llit',
        'completed' => false
    ]
];

require 'views/tasks.blade.php';