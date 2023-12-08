<?php
// модель для работы с таблицей Категорий

require_once 'DBConnect.php';

class Category
{
    /**
     * получение данных о категориях
     */
    public static function getCategoryList(){
        $pdo = DBConnect::getConnection();

        $query = "SELECT * FROM category";
        return $pdo->query($query)->fetchAll();
    }
}