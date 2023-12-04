<?php
// файл для показа всех авторов

session_start();

if(!$_SESSION['admin']){// если админ не авторизован
    header('Location: /');// перенаправляем на главную
}