<?php
// 1 задание
// сформируйте из переменных вывод данных на страницу
$catName = 'Барсик';
$color = 'Черный';
$age = 5;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- 1 -->
    <div>
        <img src="https://cdnn21.img.ria.ru/images/07e6/0c/09/1837481284_0:193:810:649_1920x0_80_0_0_75c4cbdc20e2ae9c800313a25cb1a57a.jpg" alt="<?=$catName?>" width = 400>
        <h3>Имя: <?=$catName?></h3>
        <p style = "background: black; color: white; width: fit-content;">Цвет: <?=$color?></p>
        <p>Возраст: <?=$age?></p>
    </div>

<!-- 2 -->
    <div class="card">
        <h1><?=$catName?></h1>
        <p>Цвет: <?=$color?></p>
        <p>Возраст: <?=$age?> года</p>
    </div>

<!-- 3 -->
    <h3>CatName: <?=$catName?></h3>
    <p>color: <?=$color?></p>
    <p>Age: <?=$age?></p>
</body>
</html>


