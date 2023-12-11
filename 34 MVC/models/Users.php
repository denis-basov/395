<?php
// модель для работы с пользователями
require_once 'DBConnect.php';

class Users
{

    /**
     * проверка логина на уникальность
     */
    public static function checkLoginUnique($login){
        $pdo = DBConnect::getConnection();

        $query = "SELECT login
                    FROM users
                    WHERE login = ?;";
        $statement = $pdo->prepare($query);
        $statement->execute([$login]);
        return $statement->rowCount();
    }
}