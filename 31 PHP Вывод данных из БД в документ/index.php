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
$query = "SELECT books.id AS bookId, title, description, authors.id AS authorId, firstName, lastName 
          FROM books, authors
          WHERE authorId = authors.id;";
// выполняем запрос к БД
$statement = $pdo->query($query);// получаем объект класса PDOStatement
//var_dump($statement);

//$row = $statement->fetch();// получаем одну строку из набора данных
$books = $statement->fetchAll();// получаем все что осталось

//DBConnect::d($row);
//DBConnect::d($books);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Книги</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Книги</h2>
    <div class="books">
        <?php foreach ($books as $book):?>
            <div class="book">
                <h3><?=$book['title']?></h3>
                <p><?=$book['description']?></p>
                <p>Автор: <a href="author_detail.php?id=<?=$book['authorId']?>"><?=$book['firstName']?> <?=$book['lastName']?></a></p>
                <a href="book_detail.php?id=<?=$book['bookId']?>">Подробнее...</a>
            </div>
        <?php endforeach;?>
    </div>
</body>
</html>
