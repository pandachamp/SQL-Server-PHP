<?php


require __DIR__ . '/vendor/autoload.php';
require_once "database.php";

use Testoop\User;

$user = new User;

var_dump($user->getAllData()->toArray());

// $user->insertData('djdjdjd','kdkdkdk');
