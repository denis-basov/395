<?php
// контроллер лк клиента
session_start();
$title = "Лк клиента $_SESSION[firstName]";

require 'models/Users.php';
require 'models/Comments.php';

// получение инфы о клиенте
$userInfo = Users::getUserInfo($_SESSION['login']);
//DBConnect::d($userInfo);

// получение комментариев пользователя
$comments = Comments::getCommentsByUserId($_SESSION['userId']);
//DBConnect::d($comments);

require 'views/cabinet_view.php';
