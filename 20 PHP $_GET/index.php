<?php
// GET - получение данных
// POST - отправка даных

$login = 'anna555';
$id = 4556;

echo "<h1>Hello, $login</h1>";

// отправляем логин в ссылке
echo "<a href='cabinet.php?userLogin=$login&userId=$id'>Перейти в ЛК</a>";