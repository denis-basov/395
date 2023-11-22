<?php

// получаем данные
var_dump($_GET);

$userLogin = $_GET['userLogin'];
$userId = $_GET['userId'];

echo "<h1>Hello, $userLogin, ID: $userId</h1>";

//http://localhost/cabinet.php ? userLogin=anna555 & userId=4556