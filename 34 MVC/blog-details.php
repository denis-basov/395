<?php
// контроллер страницы детального просмотра новости

// получаем ID новости
$id = (int)$_GET['newsId'];

require 'models/News.php';
require 'models/Category.php';
require 'models/Comments.php';

// получаем информацию об одной новости
$newsItem = News::getNewsItemById($id);
//DBConnect::d($newsItem);
// задаем title страницы
$title = $newsItem['newsTitle'];

// получаем информацию о всех категориях
$categoryList = Category::getCategoryList();

// получаем комментарии к текущей новости
$comments = Comments::getCommentsByNewsId($id);
//DBConnect::d($comments);

// если отправлена форма на добавление комментария
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    session_start();
//    DBConnect::d($_POST);
//    DBConnect::d(['newsId' => $id]);
//    DBConnect::d(['userId' => $_SESSION['userId']]);

    $comment = htmlspecialchars(trim($_POST['news-comment']));

    Comments::addNewComment($comment, $id, $_SESSION['userId']);

    header("Location: blog-details.php?newsId=$id");

}else{
    require 'views/blog-details_view.php';
}






