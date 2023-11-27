<?php

// если есть cookie
if( isset($_COOKIE['firstName']) && isset($_COOKIE['lastName']) ){
    echo "<h1>Привет, {$_COOKIE['firstName']} {$_COOKIE['lastName']}</h1>";
    echo "<a href='shop.php'>Магазин</a>";
    echo "<a href='cabinet.php'>Кабинет</a>";
    echo "<a href='exit.php'>Выйти</a>";
}else{
    if($_SERVER['REQUEST_METHOD'] === 'POST'){// если отправлена форма
        // показать приветствие
        // echo "<p>Привет, {$_POST['firstName']} {$_POST['lastName']}</p>";

        // очищаем ввод пользователя
        $firstName = htmlspecialchars(trim($_POST['firstName']));
        $lastName = htmlspecialchars(trim($_POST['lastName']));

        // установка cookies - сохранение на пк клиента имени и фамилии
        setcookie('firstName', $firstName, time() + 60*60);
        setcookie('lastName', $lastName, time() + 60*60);

        // перезагружаем страницу для того, чтобы браузер передал данные из cookies
        header('Location: cabinet.php');

    }else{// если зашли в первый раз
        // показать форму
        echo <<<_HTML_
        <form method="POST">
            <div>
                <label>Имя:</label>
                <input type="text" name="firstName">
            </div>
            <div>
                <label>Фамилия:</label>
                <input type="text" name="lastName">
            </div>
            <input type="submit" value="Войти">
        </form>
_HTML_;
    }
}
