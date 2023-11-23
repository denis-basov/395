<?php
// просмотр всего списка авто

$cars = require 'data.php';

echo "<pre>";
// print_r($cars);
echo "</pre>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список авто</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cars-list">
        <?php foreach ($cars as $car):?>
            <div class="car">
                <a href="car_detail.php?carId=<?=$car['id']?>">
                    <img src="<?=$car['image']?>" alt="<?=$car['maker']?> <?=$car['model']?>">
                </a>
                <h2><?=$car['maker']?> <?=$car['model']?> ID: <?=$car['id']?></h2>
                <a href="car_detail.php?carId=<?=$car['id']?>">Подробнее...</a>
            </div>
        <?php endforeach;?>
    </div>
</body>
</html>
