<?php

require 'DBConnect.php';

$pdo = DBConnect::getConnection();
var_dump($pdo);









/*
$dbLogin = 'root';
$dbPassword = '';
$dbName = 'test';
$dbHost = 'localhost';

// создаем объект класса PDO для работы с БД
$pdo = new PDO("mysql:dbname=$dbName;host=$dbHost", $dbLogin, $dbPassword);

var_dump($pdo);*/