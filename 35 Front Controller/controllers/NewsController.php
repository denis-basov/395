<?php
/**
 * Class NewsController
 * контролер для работы с разделом новости
 */
require ROOT.'/models/News.php';


class NewsController
{
    /**
     * метод для работы с главной страницей новостного раздела
     */
    public function actionIndex(){
        $title = 'Новости';
        // получаем список всех новостей из БД
        $newsList = News::getNewsList();
        //DBConnect::d($newsList);

        // подключаем шаблон
        require ROOT.'/views/news_view.php';
    }

    /**
     * метод для работы со страницей детального просмотра новости
     */
    public function actionView($newsId){
        $newsId = (int)$newsId;

        // получаем новость по ID
        $newsItem = News::getNewsItemById($newsId);
        //DBConnect::d($newsItem);

        $title = $newsItem['newsTitle'];

        require ROOT.'/views/news-detail_view.php';
    }
}