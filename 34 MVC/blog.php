<?php
// контроллер страницы списка новостей
$title = 'Блог';

require 'models/News.php';

// получаем новости из БД
$newsList = News::getNewsList();


require 'views/blog_view.php';
