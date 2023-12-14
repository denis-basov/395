<!-- вид с главной страницей новостного раздела -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title ?? 'MVC'?></title>
</head>
<body>
    <h1>Новости</h1>
    <?php foreach ($newsList as $newsItem):?>
        <div class="news-item">
            <h2><?=$newsItem['title']?></h2>
            <img src="<?=$newsItem['image']?>" width="200" alt="<?=$newsItem['title']?>">
            <a href="news/<?=$newsItem['id']?>">Подробнее...</a>
        </div>
    <?php endforeach;?>
</body>
</html>
