<?php

require 'models/People.php';
require 'framework/database/connect.php';
require 'framework/database/queryBuilder.php';

$pdo = connect();
$people = fetchAll($pdo,'people');
require 'views/people.blade.php';