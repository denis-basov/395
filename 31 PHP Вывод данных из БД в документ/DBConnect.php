<?php

class DBConnect
{
    // статические свойства
    private static $dbName = '395_books';
    private static $dbHost = 'localhost';
    private static $dbLogin = 'root';
    private static $dbPassword = '';

    // приватный метод для формирования DSN // "mysql:dbname=$dbName;host=$dbHost"
    private static function getDSN(){
        return 'mysql:dbname='.self::$dbName.';host='.self::$dbHost;
    }

    // метод для получения объекта соединения с БД
    public static function getConnection(){
        return new PDO(self::getDSN(), self::$dbLogin, self::$dbPassword);
    }

    // метод для тестирования массивов
    public static function d($value){
        echo '<pre>';
        print_r($value);
        echo '</pre>';
    }
}
