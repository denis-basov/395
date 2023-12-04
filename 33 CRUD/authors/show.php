<?php
// файл для показа всех авторов

session_start();

if(!$_SESSION['admin']){// если админ не авторизован
    header('Location: /');// перенаправляем на главную
}

// подключение к БД
require '../DBConnect.php';
$pdo = DBConnect::getConnection();// получаем соединение с БД

// получаем данные об аторах
$query = "SELECT id, first_name, last_name, short_info, biography, avatar
            FROM authors
            ORDER BY id DESC;";
$statement = $pdo->query($query);
$authors = $statement->fetchAll();

//DBConnect::d($authors);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список авторов в таблице authors</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Список авторов в таблице authors</h1>
    <a href="../admin.php">В панель администратора</a>

    <div class="authors-show">
        <?php foreach($authors as $author):?>
            <div class="author">
                <img src="<?=$author['avatar']?>" alt="<?=$author['first_name']?> <?=$author['last_name']?>">
                <h2><?=$author['first_name']?> <?=$author['last_name']?> ID: <?=$author['id']?></h2>
                <p><?=$author['short_info']?></p>
                <h3>Биография</h3>
                <p><?=str_replace('<p></p>', '', str_replace("\r\n", '</p><p>', $author['biography']))?></p>
            </div>
        <?php endforeach;?>
    </div>
</body>
</html>
