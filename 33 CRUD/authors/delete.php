<?php
// удаление авторов

session_start();

if(!$_SESSION['admin']){// если админ не авторизован
    header('Location: /');// перенаправляем на главную
}

// подключение к БД
require '../DBConnect.php';
$pdo = DBConnect::getConnection();// получаем соединение с БД

// получаем данные об авторах
$query = "SELECT id, first_name, last_name, avatar
            FROM authors
            ORDER BY id DESC;";
$statement = $pdo->query($query);
$authors = $statement->fetchAll();

//$authors = $pdo->query($query)->fetchAll();
//DBConnect::d($authors);

/**
 * если нажата ссылка на удаление
 */
if( isset($_GET['authorId']) ){
    //DBConnect::d($_GET);

    $authorId = (int)$_GET['authorId'];// получаем ID автора
    $avatarPath = htmlspecialchars('..'.$_GET['avatar']); // ссылка на аватар автора

    // получаем пути к картинкам новостей для удаления картинок
    $query = "SELECT id, image
                FROM news
                WHERE author_id = $authorId;";
    $newsData = $pdo->query($query)->fetchAll();
    //DBConnect::d($newsData);


    // получаем строку с ID новостей
    $newsIdStr = '';
    foreach ($newsData as $value){
        $newsIdStr .= $value['id'].',';
    }
    $newsIdStr = trim($newsIdStr, ',');

    // удаляем комментарии к новостям
    if($newsIdStr){ // если есть у автора новости
        $query = "DELETE 
                FROM comments
                WHERE `news_id` IN($newsIdStr);";
        $pdo->query($query);
    }


    /*
     * // вариант удаления комментариев через подготовленный запрос
    $query = "DELETE
                FROM comments
                WHERE `news_id` = ?;";
    $statement = $pdo->prepare($query);
    foreach ($newsData as $value) {
        $statement->execute([$value['id']]);
    }*/

    // удалить новости автора
    $query = "DELETE
                FROM news
                WHERE author_id = $authorId;";
    $pdo->query($query);

    // удаляем картинки новостей
    foreach ($newsData as $newsImage){
        //DBConnect::d($newsImage['image']);
        $imgPath = '..'.$newsImage['image'];
        // ../template/images/news/piastri-mclaren.jpg

        if(file_exists($imgPath)){// если картинка есть
            unlink($imgPath); // удаляем
        }
    }

    // удалить автора
    $query = "DELETE
                FROM authors
                WHERE id = $authorId;";
    $pdo->query($query);

    // удалить аватар автора
    // ../template/images/authors/ross-geller.jpg
    if(file_exists($avatarPath)){// если картинка есть
        unlink($avatarPath); // удаляем
    }

    // перенаправляем админа на admin.php
    header('Location: ../admin.php');

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Удаление авторов из таблицы authors</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1>Удаление авторов из таблицы authors</h1>
<a href="../admin.php">В панель администратора</a>

<div class="authors-show authors-delete">
    <?php foreach($authors as $author):?>
        <div class="author">
            <img src="<?=$author['avatar']?>" alt="<?=$author['first_name']?> <?=$author['last_name']?>">
            <h2><?=$author['first_name']?> <?=$author['last_name']?></h2>
            <h3>ID: <?=$author['id']?></h3>
            <a href="?authorId=<?=$author['id']?>&avatar=<?=$author['avatar']?>">Удалить</a>
        </div>
    <?php endforeach;?>
</div>
</body>
</html>

