<?php
/**
 *
 * C - create (создание таблиц, БД, добавление данных в таблицы, CREATE, INSERT)
 * R - read (получение данных SELECT)
 * U - update (обновление существующих данных, UPDATE, ALTER)
 * D - delete (удаление БД, таблиц, данных из таблиц, DROP, DELETE)
 *
 */

if($_SERVER['REQUEST_METHOD'] === 'POST'){// если отправлена форма

    require 'DBConnect.php';
    $pdo = DBConnect::getConnection();// получаем соединение с БД

    print_r($_POST);

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход в панель администратора</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Вход в панель администратора</h1>
    <form method="POST" class="enter-admin-form">
        <div class="input-data">
            <label>Логин:</label>
            <input type="text" name="login">
        </div>
        <div class="input-data">
            <label>Пароль:</label>
            <input type="password" name="password">
        </div>

        <div class="input-data">
            <input type="submit" value="Войти">
        </div>
    </form>
</body>
</html>
