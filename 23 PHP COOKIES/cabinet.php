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
    <!-- если cookies есть, показываем приветствие -->
    <?php if( isset($_COOKIE['firstName']) && isset($_COOKIE['lastName']) ):?>
        <h1>Привет, <?=$_COOKIE['firstName']?> <?=$_COOKIE['lastName']?></h1>
        <a href="shop.php">Магазин</a>
        <a href="exit.php">Выйти</a>
        <a href="/">Главная</a>
    <!-- если нет, перенаправляем клиента на главную страницу -->
    <?php else:?>
        <?php header('Location: /');?>
    <?php endif;?>

</body>
</html>