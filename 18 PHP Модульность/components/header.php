<?php
    //echo $_SERVER['REQUEST_URI'];
    require 'components/menu.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title ?? 'ООО Рога и копыта'?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="logo">LOGO</div>
    <h1><?=$headerTitle ?? 'Шапка'?></h1>
    <nav>
        <ul>
            <?=printMenu($headerMenu)?>
        </ul>
    </nav>
</header>
