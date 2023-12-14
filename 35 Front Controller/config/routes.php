<?php
// файл с маршрутами

return [
    'contacts' => 'contacts/index',
    'shop' => 'shop/index', // просмотр главвной страницы каталога товаров
    'shop/([0-9]+)' => 'shop/view/$1', // просмотр товара детально
    'shop/category/([a-z]+)' => 'shop/catView/$1',// просмотр категории товаров
    'shop/category/([a-z]+)/([0-9]+)' => 'shop/catView/$1/$2',// просмотр категории товаров
    'news' => 'news/index', // просмотр главной страницы новостного раздела
    'news/([0-9]+)' => 'news/view/$1', // просмотр новости детально
    '' => 'index/index' // главная страница

];
// shop/index : контроллер - ShopController.php, метод - actionIndex()
// shop/view/garden : контроллер - ShopController.php, метод - actionView(garden)
// news/index : контроллер - NewsController.php, метод - actionIndex()
?>


<!--<a href="/">Главная</a>-->
<!--<a href="shop">Магазин</a>-->
<!--<a href="news">Новости</a>-->
<!---->
<!--<a href="news/3">Позробнее...</a>-->
