<?php
session_start();

if(!$_SESSION['admin']){// если админ не авторизован
    header('Location: /');// перенаправляем на главную
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Панель администратора</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Панель администратора</h1>
    <a href="exit.php">Выйти</a>

    <h2>Авторы</h2>
    <nav class="nav authors-nav">
        <a href="authors/show.php">Просмотр списка авторов</a>
        <a href="authors/add.php">Добавить автора</a>
        <a href="authors/delete.php">Удалить автора</a>
        <a href="authors/edit.php">Отредактировать автора</a>
    </nav>

    <h2>Новости</h2>
    <nav class="nav news-nav">
        <a href="news/add.php">Добавить новость</a>
    </nav>

</body>
</html>
