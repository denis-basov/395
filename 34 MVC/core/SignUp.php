<?php
// вспомогательный класс для провеки данных при регистрации, сохранение данных

class SignUp
{

    /**
     * метод для проверки имени
     */
    private static function validateFirstName($first_name){
        $regExp = "/^[а-яё]{2,}$/iu";

        if(strlen($first_name) === 0){// если строка пуста
            return 'Введите имя';
        }elseif (!preg_match($regExp, $first_name)){// если строка НЕ соответствует рв
            return 'Имя должно быть не короче двух символов кириллицы';
        }
    }

    /**
     * метод для проверки фамилии
     */
    private static function validateLastName($last_name){
        $regExp = "/^[а-яё]{2,}$/iu";

        if(strlen($last_name) === 0){// если строка пуста
            return 'Введите фамилию';
        }elseif (!preg_match($regExp, $last_name)){// если строка НЕ соответствует рв
            return 'Фамилия должна быть не короче двух символов кириллицы';
        }
    }

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

        // проверка на уникальность по БД
        $rows = Users::checkLoginUnique($login);

        if($rows){
            return 'Извините, такой логин уже занят';
        }
    }


    /**
     * метод для проверки данных, полученных при регистрации
     */
    public static function validateForm(){

        // создаем массивы для ошибок и для введееных клиентом данных
        $errors = [];
        $input = [];

        // получаем данные из глобальных массивов и обрабатываем
        $input['first_name'] = htmlspecialchars(trim($_POST['first_name']));
        $input['last_name'] = htmlspecialchars(trim($_POST['last_name']));
        $input['login'] = htmlspecialchars(trim($_POST['login']));
        $input['email'] = htmlspecialchars(trim($_POST['email']));
        $input['password'] = htmlspecialchars(trim($_POST['password']));
        $input['avatar'] = $_FILES['avatar'];


        /**
         * проверка имени
         */
        $firstNameError = self::validateFirstName($input['first_name']);
        if($firstNameError){// если ошибка есть
            $errors['first_name'] = $firstNameError;
        }

        /**
         * проверка фамилии
         */
        $lastNameError = self::validateLastName($input['last_name']);
        if($lastNameError){
            $errors['last_name'] = $lastNameError;
        }

        /**
         * проверка логина
         */
         $loginError = self::validateLogin($input['login']);
         if($loginError){
             $errors['login'] = $loginError;
         }

        // возвращаем массивы с ошибками и данными клиента
        return [$errors, $input];
    }

}