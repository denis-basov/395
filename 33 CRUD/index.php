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

    //print_r($_POST);

    // 1 получаем логин и пароль
    $inputLogin = htmlspecialchars(trim($_POST['login']));
    $inputPassword = htmlspecialchars(trim($_POST['password']));

    // 2 отправляем запрос к БД для получения логина и пароля по введенному логину
    $query = "SELECT id, login, password
                FROM admins
                WHERE login = ?;";
    $statement = $pdo->prepare($query);// 1. подготовка запроса
    $statement->execute([$inputLogin]);// 2. выполнение запроса
    $adminData = $statement->fetch(); // 3. получаем данные админа из БД / false

    //var_dump($adminData);
    if($adminData){ // если введен верный логин
        if($adminData['password'] === $inputPassword){// проверяем пароль
            // если логин и пароль верны
            session_start();// начинаем сессию
            $_SESSION['admin'] = true;// добавляем в сессию инфу о том, что админ авторизован

            header('Location: admin.php');// перенаправляем админа в зону редактирования данных

        }else{
            $errorMsg = '<h2>Неверные данные</h2>';
        }
    }else{ // если логин не найден в БД, выведем ошибку
        $errorMsg = '<h2>Неверные данные</h2>';
    }
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

        <div>
            <span class="error-msg"><?=$errorMsg ?? ''?></span>
        </div>
    </form>
</body>
</html>
