<?php
// вспомогательный класс для проверки данных при входе


class SignIn
{

    /**
     * метод для проверки логина
     */
    private static function validateLogin($login){
        $regExp = "/^[a-z][a-z0-9]{2,}$/i";

        if(empty($login)){
            return 'Введите логин';
        }elseif (!preg_match($regExp, $login)){
            return 'От трех символов латиницы и цифр, первый - буква';
        }

        $rows = Users::checkLoginUnique($login);

        if($rows === 0){
            return 'Указанный логин не найден';
        }
    }

    /**
     * метод для проверки пароля
     */
    private static function validatePassword($password, $login){
        $regExp = "/^.{8,}$/i";

        if(empty($password)){
            return 'Введите пароль';
        }elseif(!preg_match($regExp, $password)){
            return 'Не менее восьми произвольных символов';
        }

        // получаем пароль пользователя по логину
        $passwordDB = Users::getPasswordByLogin($login);

        // сравниваем пароли
        if( !password_verify($password, $passwordDB) ){// если пароли НЕ совпадают
            return 'Пароль неверен';
        }
    }

    /**
     * метод для проверки данных формы
     */
    public static function validateForm(){
        $errors = [];
        $input = [];

        $input['login'] = htmlspecialchars(trim($_POST['login']));
        $input['password'] = htmlspecialchars(trim($_POST['password']));

        /**
         * проверка логина И пароля
         */
        $loginError = self::validateLogin($input['login']);
        if($loginError){// если логин неверен
            $errors['login'] = $loginError;
        }else{
            // если логин верен, проверяем пароль
            $passwordError = self::validatePassword($input['password'], $input['login']);
            if($passwordError){
                $errors['password'] = $passwordError;
            }
        }


        return [$errors, $input];
    }

    /**
     * метод при успешной проверке данных при входе
     */
    public static function processForm($input){

        // получаем данные о пользователе для записи в сессию
        $userInfo = Users::getUserInfo($input['login']);
        //DBConnect::d($userInfo);

        // запись данных пользователя в сессию
        session_start();
        $_SESSION['userId'] = $userInfo['id'];
        $_SESSION['login'] = $userInfo['login'];
        $_SESSION['firstName'] = $userInfo['first_name'];
        $_SESSION['avatar'] = $userInfo['image'];

        // на главную
        header('Location: /');
    }


}