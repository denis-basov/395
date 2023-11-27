<?php
    $publications = require 'data.php';
    require 'Classes.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="news-list">
        <?php
            // перебираем массив с целью создания из каждого массива объекта с новостью
            // у каждого объекта вызываем метод для формирования разметки
            foreach ($publications as $publicationArr) {
                $pubObj = new $publicationArr['category']($publicationArr);
                $pubObj->printItem();
            }
        ?>
    </div>
</body>
</html>
