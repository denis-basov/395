<?php
// контроллер страницы регистрации
$title = 'Регистрация';

require 'models/Users.php';
require 'core/SignUp.php';

// если отправлена форма регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    // 1. получаем данные, проверяем
    list($errors, $input) = SignUp::validateForm();
    DBConnect::d($errors);
    DBConnect::d($input);

    if($errors){
        // 2. если ошибки есть, показываем форму и отображаем ошибки и ранее введенные данные
        require 'views/registration_view.php';
    }else{
        // 3. если все ок, то записываем данные в бд
        // 4. стартуем сессию и записываем в нее данные клиента
    }
}else{
    require 'views/registration_view.php';
}



