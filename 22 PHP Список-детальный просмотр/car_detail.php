<?php
// просмотр авто детально

$cars = require 'data.php';

// получаем ID авто
$carId = (int)$_GET['carId'];// если в значении не число, получим 0
// var_dump($carId);

// если в переменной 0, то показываем ошибку
if(!$carId){
    //die("<h1>ERROR</h1>");

    // перенаправляем клиента на страницу с ошибкой
    header('Location: error.html');
}

// ищем в массиве автомобиль по указанному ID
//1
//foreach ($cars as $car){
//    if($car['id'] === $carId){
//        break;
//    }
//}
//var_dump($car);

//2
$foundCar = null;
foreach ($cars as $car){
    if($car['id'] === $carId){
        $foundCar = $car;
        break;
    }
}

// если авто в массиве не найден
if( !isset($foundCar) ){
    // перенаправляем клиента на страницу с ошибкой
    header('Location: error.html');
}

//echo "<pre>";
//print_r($foundCar);
//echo "</pre>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$foundCar['maker']?> <?=$foundCar['model']?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="car-item">
        <img src="<?=$foundCar['image']?>" alt="<?=$foundCar['maker']?> <?=$foundCar['model']?>">
        <div class="car-info">
            <h2><?=$foundCar['maker']?> <?=$foundCar['model']?></h2>
            <p>Год выпуска: <?=$foundCar['made_year']?> г.</p>
            <p>Максимальная скорость: <?=$foundCar['top_speed']?> км/ч</p>
            <p>Ускорение до 10км/ч: <?=$foundCar['acceleration_to_100']?> с</p>
            <p>Мощность: <?=$foundCar['power']?> л/с</p>
            <p>Масса: <?=$foundCar['weight']?> кг</p>
            <a href="/">К списку авто</a>
        </div>
    </div>
</body>
</html>
