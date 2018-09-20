<?php

require 'models/Task.php';



$tasks = [
    new Task('Comprar pa', false),
    new Task('Comprar llet', true),
    new Task('Fer el llit', false)
];

require 'views/tasks.blade.php';