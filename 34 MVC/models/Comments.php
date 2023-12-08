<?php
// модель для работы с таблицей Комментариев

require_once 'DBConnect.php';

class Comments
{
    /**
     * получение списка комментариев к новости по ID
     */
    public static function getCommentsByNewsId($id){
        $pdo = DBConnect::getConnection();

        $query = "SELECT comments.id, comment, comments.add_date,
                            first_name, last_name, image
                  FROM comments, users
                  WHERE user_id = users.id
                  AND news_id = $id
                  AND approved = 1;";
        return $pdo->query($query)->fetchAll();
    }

}