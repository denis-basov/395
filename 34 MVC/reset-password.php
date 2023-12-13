<?php
// контроллер страницы сброса пароля

$title = 'Восстановление пароля';

// получаете емейл клиента
// проверяете по БД
// если емейл в БД найден
// генерирование пароля
$str = 'zxcvbnmasdfghjklqwertyuiopQWERTYUIIOPASDFGHJKLZXXCVBNM0123456789';
$newPassword = substr(str_shuffle($str), 0, 10);

//  отправляете на емейл письмо


require 'views/reset-password_view.php';