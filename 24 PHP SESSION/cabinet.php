<?php
    session_start(); // начинаем сессию
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Личный кабинет</title>
</head>
<body>
    <!-- если есть данные в сессии, показываем приветствие -->
    <?php if( isset($_SESSION['firstName']) && isset($_SESSION['lastName']) ):?>
        <h1>Привет, <?=$_SESSION['firstName']?> <?=$_SESSION['lastName']?></h1>
        <a href="shop.php">Магазин</a>
        <a href="exit.php">Выйти</a>
        <a href="/">Главная</a>
    <!-- если нет, перенаправляем клиента на главную страницу -->
    <?php else:?>
        <?php header('Location: /');?>
    <?php endif;?>

</body>
</html>