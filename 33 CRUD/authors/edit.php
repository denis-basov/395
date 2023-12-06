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


/**
 * если отправлена форма name="action" value="Редактировать"
 * при выборе автора получаем данные из бд и заполняем ими форму для редактирования
 */
if( isset($_POST['action']) && $_POST['action'] === 'Редактировать' ){
    //DBConnect::d($_POST);
    // 1. получаем ID автора
    $authorId = (int)$_POST['authorId'];

    // 2. получаем данные об авторе из БД
    $query = "SELECT * 
                FROM authors
                WHERE id = $authorId;";
    $author = $pdo->query($query)->fetch();
    //DBConnect::d($author);
}


/**
 * если надата кнопка name="action" value="Сохранить изменения"
 * получаем данные из формы, проверяем на пустоту, записываем в БД
 */
if( isset($_POST['action']) && $_POST['action'] === 'Сохранить изменения' ){
    DBConnect::d($_POST);
    DBConnect::d($_FILES);

    // обезвреживаем данные
    $first_name = htmlspecialchars(trim($_POST['first_name']));
    $last_name = htmlspecialchars(trim($_POST['last_name']));
    $short_info = htmlspecialchars(trim($_POST['short_info']));
    $biography = htmlspecialchars(trim($_POST['biography']));
    $authorId = (int)$_POST['id'];
    $oldAvatarPath = htmlspecialchars(trim($_POST['avatarPath']));// путь к текущей картинке автора

    // получаем данные новой аватарки
    $avatar = $_FILES['avatar'];

    // проверяем данные на пустоту
    if(!empty($first_name)
        && !empty($last_name)
        && !empty($short_info)
        && !empty($biography) )
    {// если не пусто

        // проверка на наличие новой аватарки
        if( !$avatar['size'] ){// если размер картинки 0, то ее не приложили
            // обновляем только текстовые данные в таблице
            $query = "UPDATE authors
            SET first_name = ?, last_name = ?, short_info = ?, biography = ?
            WHERE id = ?;";
            $statement = $pdo->prepare($query);
            $statement->execute([$first_name, $last_name, $short_info, $biography, $authorId]);
        }else{ // если новая картинка есть

            // формируем путь к новой каринке
            $avatarPath = '/template/images/authors/'.time().'_'.$avatar['name'];

            // обновляем данные в БД
            $query = "UPDATE authors
            SET first_name = ?, last_name = ?, short_info = ?, biography = ?, avatar = ?
            WHERE id = ?;";
            $statement = $pdo->prepare($query);
            $statement->execute([$first_name, $last_name, $short_info, $biography, $avatarPath, $authorId]);

            // перемещаем новую картинку
            move_uploaded_file($avatar['tmp_name'], '..'.$avatarPath);

            // удаляем старую картинку
            if(file_exists('..'.$oldAvatarPath)){
                unlink('..'.$oldAvatarPath);
            }

        }
        // перенаправляем админа на admin.php
        header('Location: ../admin.php');

    }else{
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
                <?php foreach ($authors as $value):?>
                    <option value="<?=$value['id']?>"><?=$value['first_name']?> <?=$value['last_name']?></option>
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
            <input type="text" name="first_name" value="<?=$author['first_name'] ?? ''?>">
        </div>

        <div class="input-data">
            <label>Фамилия:</label>
            <input type="text" name="last_name" value="<?=$author['last_name'] ?? ''?>">
        </div>

        <div class="input-data">
            <label>Короткое описание:</label><br>
            <textarea name="short_info" cols="50" rows="10"><?=$author['short_info'] ?? ''?></textarea>
        </div>

        <div class="input-data">
            <label>Биография:</label><br>
            <textarea name="biography" cols="50" rows="10"><?=$author['biography'] ?? ''?></textarea>
        </div>

        <div class="input-data">
            <label>Аватар:</label>
            <input type="file" name="avatar">
        </div>

        <!-- передаем в скрытых инпутах необходимые данные (id автора, ссылку на картинку)-->
        <div class="input-data">
            <input type="hidden" name="id" value="<?=$author['id'] ?? ''?>">
            <input type="hidden" name="avatarPath" value="<?=$author['avatar'] ?? ''?>">
        </div>

        <div class="input-data">
            <input type="submit" name="action" value="Сохранить изменения">
        </div>
    </form>
</body>
</html>
