<?php
// модель для работы с таблицей Новости

require_once 'DBConnect.php';

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

    /**
     * метод для получения одной новости по ID
     */
    public static function getNewsItemById($id){
        $pdo = DBConnect::getConnection();

        $query = "SELECT news.id AS newsId, news.title AS newsTitle, text, add_date, image,
                         authors.id AS authorId, first_name, last_name,
                         translation AS categoryTitle, class_name
                  FROM news, authors, category
                  WHERE author_id = authors.id
                    AND category_id = category.id
                    AND news.id = $id;";
        return $pdo->query($query)->fetch();
    }


}