<?php

class DBConnect
{
    // статические свойства
    private static $dbName = 'test';
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
}
