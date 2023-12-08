<?php
// контроллер страницы регистрации
$title = 'Регистрация';

require_once 'models/DBConnect.php';


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    DBConnect::d($_POST);
    DBConnect::d($_FILES);

    // 1. получаем данные
    // 2. проверяем
    // 3. если ошибки есть, показываем форму и отображаем ошибки
    // 4. если все ок, то записываем данные в бд
    // 5. стартуем сессию и записываем в нее данные клиента

}else{
    require 'views/registration_view.php';
}



