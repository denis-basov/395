<?php

require 'Dogs.php';

$dogs = [$belka, $bobik, $strelka];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мои питомцы</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Мои питомцы</h1>
    <div class="dogs">
        <?php
            foreach($dogs as $dog){
                $dog->getSummary();
            }
        ?>
    </div>
</body>
</html>
