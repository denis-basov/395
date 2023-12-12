<?php
// вспомогательный класс для проверки данных при регистрации, сохранение данных

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
     * метод для проверки емейла
     */
    private static function validateEmail($email){
        $regExp = "/^.+@.+\..+$/i";

        if(empty($email)){
            return 'Введите адрес электронной почты';
        }elseif(!preg_match($regExp, $email)){
            return 'Адрес электронной почты введен в неверном формате';
        }

        // проверка на уникальность
        $rows = Users::checkEmailUnique($email);
        if($rows){
            return 'Извините, такой емейл уже зарегистрирован';
        }
    }

    /**
     * метод для проверки пароля
     */
    private static function validatePassword($password){
        $regExp = "/^.{8,}$/i";

        if(empty($password)){
            return 'Введите пароль';
        }elseif(!preg_match($regExp, $password)){
            return 'Не менее восьми произвольных символов';
        }
    }

    /**
     * метод для проверки картинки профиля
     */
    private static function validateAvatar($avatar){
        $allowedSize = 1048576;// 1мб - разрешенный размер картинок
        $allowedExtensions = ['image/jpeg', 'image/gif', 'image/png'];// массив разрешенных форматов

        if($avatar['size'] === 0){// если картинки нет
            return 'Выберите фото профиля';
        }elseif($avatar['size'] > $allowedSize){
            return 'Максимальный размер - 1Мб';
        }elseif(!in_array($avatar['type'], $allowedExtensions)){// если элемент в массиве НЕ найден
            return 'Разрешены форматы картинок только jpeg, gif, png';
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

        /**
         * проверка емейла
         */
         $emailError = self::validateEmail($input['email']);
         if($emailError){
             $errors['email'] = $emailError;
         }

        /**
         * проверка пароля
         */
         $passwordError = self::validatePassword($input['password']);
         if($passwordError){
             $errors['password'] = $passwordError;
         }

        /**
         * проверка аватара
         */
         $avatarError = self::validateAvatar($input['avatar']);
         if($avatarError){
             $errors['avatar'] = $avatarError;
         }

        // возвращаем массивы с ошибками и данными клиента
        return [$errors, $input];
    } // validateForm()

    /**
     * метод для сохранения аватара
     */
    private static function saveAvatar($avatar){
        // создаем путь для перемещения картинки
        $avatarPath = 'template/images/users/'.time().'_'.$avatar['name'];

        // перемещаем картинку
        move_uploaded_file($avatar['tmp_name'], $avatarPath);

        return $avatarPath;
    }

    /**
     * метод для сохранения данных в БД, сохранения картинки, запись данных в сессию
     */
    public static function processForm($input){
        // сохраняем картинку
        $input['avatar'] = self::saveAvatar($input['avatar']);

        // шифрование пароля
        $input['password'] = password_hash($input['password'], PASSWORD_DEFAULT);

        // сохранение данных в БД
        $input['userId'] = Users::addNewUser($input);

        // запись данных сохраненного пользователя в сессию
        session_start();
        $_SESSION['userId'] = $input['userId'];
        $_SESSION['login'] = $input['login'];
        $_SESSION['firstName'] = $input['first_name'];
        $_SESSION['avatar'] = $input['avatar'];

        // перенаправляем на главную
        header('Location: /');
    }

} // SignUp