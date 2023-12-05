<?php
// редактирование информации об авторе

/*
$query = "DELETE
            FROM $tableName
            WHERE $column = ?;";*/

session_start();

if(!$_SESSION['admin']){// если админ не авторизован
    header('Location: /');// перенаправляем на главную
}

require '../DBConnect.php';
$pdo = DBConnect::getConnection();// получаем соединение с БД

// получаем данные об авторах для вывода в выпадающем списке
$query = "SELECT id, first_name, last_name
            FROM authors
            ORDER BY last_name;";
$authors = $pdo->query($query)->fetchAll();

//DBConnect::d($_POST);
/**
 * при выборе автора получаем данные из бд и заполняем ими форму для редактирования
 * если отправлена форма name="action" value="Редактировать"
 */
if( isset($_POST['action']) && $_POST['action'] === 'Редактировать' ){
    DBConnect::d($_POST);
    // 1. получаем ID автора
    $authorId = (int)$_POST['authorId'];

    // 2. получаем данные об авторе из БД
    $query = "SELECT * 
                FROM authors
                WHERE id = $authorId;";
    $author = $pdo->query($query)->fetch();
    DBConnect::d($author);
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование авторов в таблице authors</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Редактирование авторов в таблице authors</h1>
    <a href="../admin.php">В панель администратора</a>

    <!-- форма для выбора автора для редактирования -->
    <form method="POST" class="add-author">
        <div class="input-data">
            <label>Выберите автора для редактирования:</label>
            <select name="authorId">
                <?php foreach ($authors as $author):?>
                    <option value="<?=$author['id']?>"><?=$author['first_name']?> <?=$author['last_name']?></option>
                <?php endforeach;?>
            </select>
        </div>

        <div class="input-data">
            <input type="submit" name="action" value="Редактировать">
        </div>
    </form>

    <div>
        <span class="error-msg"><?=$errorMsg ?? ''?></span>
    </div>

    <!-- форма для редактирования выбранного автора -->
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
            <input type="submit" name="action" value="Сохранить изменения">
        </div>
    </form>
</body>
</html>
