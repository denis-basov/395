<?php
// файл для получения списка новостей из БД и ответа клиенту в формате JSON

// 1. Получаем данные с клиенткой стороны
$start = (int)$_GET['start'];
$limit = (int)$_GET['limit'];

// 2. Делаем запрос к БД для получения новостей
require '../models/News.php';

$newsList = News::getMoreNews($start, $limit);
//print_r($newsList);

// 3. Кодируем полученные данные в формат JSON
$newsListJSON = json_encode($newsList);

// 4. Отправляем обратно клиенту
echo $newsListJSON;
