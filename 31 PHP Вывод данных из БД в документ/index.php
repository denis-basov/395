<?php
/**
 * PDO - Представляет соединение между PHP и сервером базы данных.
 * PDOStatement - результат запроса к БД
 *
 * PDOException - Обработка ошибок при работе с БД
 */

require 'DBConnect.php';

try{
    // получаем объект класса PDO - соединение с БД
    $pdo = DBConnect::getConnection();
}catch(PDOException $e){
//    echo $e->getMessage();
    die('Произошла ошибка при подключении к  базе данных');
}

//var_dump($pdo);

// текст запроса к БД
$query = "SELECT id, title, description FROM books;";
// выполняем запрос к БД
$statement = $pdo->query($query);// получаем объект класса PDOStatement
//var_dump($statement);

$row = $statement->fetch();// получаем данные из объекта класса PDOStatement

DBConnect::d($row);
