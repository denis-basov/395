<?php

$headerMenu = [
    '/' => 'На главную',
    'news.php' => 'Новости',
    'shop.php' => 'Магазин',
    'contacts.php' => 'Контакты',
    'about.php' => 'О компании',
];

$footerMenu = [
    '/' => 'На главную',
    'contacts.php' => 'Контакты',
    'about.php' => 'О компании',
];

function printMenu($menuPar){
    foreach ($menuPar as $link => $description) {
        echo "<li><a href='$link'>$description</a></li>";
    }
}


/**
<li><a href="/">На главную</a></li>
<li><a href="news.php">Новости</a></li>
<li><a href="shop.php">Магазин</a></li>
<li><a href="contacts.php">Контакты</a></li>
<li><a href="about.php">О компании</a></li>
 */