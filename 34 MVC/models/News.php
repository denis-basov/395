<?php
// модель для работы с таблицей Новости

require 'DBConnect.php';

class News
{
    /**
     * метод для получения всех новостей
     */
    public static function getNewsList(){
        $pdo = DBConnect::getConnection();

        $query = "SELECT news.id, title, add_date, image,
                        first_name, last_name
                        FROM news, authors
                        WHERE author_id = authors.id
                        ORDER BY add_date DESC;";
        return $pdo->query($query)->fetchAll();
    }

    /**
     * метод для получения новостей для асинхронного запроса через JS
     */
    public static function getMoreNews($start, $limit){
        $pdo = DBConnect::getConnection();

        $query = "SELECT news.id, title, add_date, image,
                        first_name, last_name
                        FROM news, authors
                        WHERE author_id = authors.id
                        ORDER BY add_date DESC
                        LIMIT $start, $limit;";
        return $pdo->query($query)->fetchAll();
    }
}