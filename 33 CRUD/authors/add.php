<?php
// файл для добавления нового автора в таблицу

session_start();

if(!$_SESSION['admin']){// если админ не авторизован
    header('Location: /');// перенаправляем на главную
}


if($_SERVER['REQUEST_METHOD'] === 'POST'){// если отправлена форма
    require '../DBConnect.php';
    $pdo = DBConnect::getConnection();// получаем соединение с БД

    $avatar =  $_FILES['avatar']; // получаем аватар
    // очищаем введенные текстовые данные
    $first_name = htmlspecialchars(trim($_POST['first_name']));
    $last_name = htmlspecialchars(trim($_POST['last_name']));
    $short_info = htmlspecialchars(trim($_POST['short_info']));
    $biography = htmlspecialchars(trim($_POST['biography']));

    // проверка на пустые поля
    if( !empty($first_name)
        && !empty($last_name)
        && !empty($short_info)
        && !empty($biography)
        && $avatar['size'] ){// если значения НЕ пустые

        // работаем с данными
        // 1. формируем путь куда переместим картинку
        $avatarPath = '/template/images/authors/'.time().'_'.$avatar['name'];

        // 2. пермещение картинки
        move_uploaded_file($avatar['tmp_name'], "..$avatarPath");

        // 3. запись данных в БД
        $query = "INSERT INTO authors
                    VALUES(?,?,?,?,?,?);";
        $statement = $pdo->prepare($query);
        $statement->execute([null, $first_name, $last_name, $short_info, $biography, $avatarPath]);

        // 4. перенаправление админа на admin.php
        header('Location: ../admin.php');

    }else{ // если что-то не заполнено
        $errorMsg = '<h2>Заполните все поля</h2>';
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
    <title>Добавление авторов в таблицу authors</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Добавление авторов в таблицу authors</h1>
    <a href="../admin.php">В панель администратора</a>

    <div>
        <span class="error-msg"><?=$errorMsg ?? ''?></span>
    </div>

    <form method="POST" class="add-author" enctype="multipart/form-data">
        <!-- first_name, last_name, short_info, biography, avatar  -->
        <div class="input-data">
            <label>Имя:</label>
            <input type="text" name="first_name">
        </div>

        <div class="input-data">
            <label>Фамилия:</label>
            <input type="text" name="last_name">
        </div>

        <div class="input-data">
            <label>Короткое описание:</label><br>
            <textarea name="short_info" cols="50" rows="10"></textarea>
        </div>

        <div class="input-data">
            <label>Биография:</label><br>
            <textarea name="biography" cols="50" rows="10"></textarea>
        </div>

        <div class="input-data">
            <label>Аватар:</label>
            <input type="file" name="avatar">
        </div>

        <div class="input-data">
            <input type="submit" value="Добавить">
        </div>
    </form>
</body>
</html>
