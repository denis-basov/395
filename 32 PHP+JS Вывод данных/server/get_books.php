<?php
// файл для получения данных из бд и отправки в ответ на запрос

// 1 установка соединения с БД
require 'DBConnect.php';
$pdo = DBConnect::getConnection();

// 2 текст запроса к БД
$query = "SELECT books.id AS bookId, title, description, authors.id AS authorId, firstName, lastName 
          FROM books, authors
          WHERE authorId = authors.id;";

// 3 запрос к БД
$statement = $pdo->query($query);

// 4 полуаем данные из набора
$books = $statement->fetchAll();

// 5 кодируем массив в строку JSON
echo json_encode($books);
