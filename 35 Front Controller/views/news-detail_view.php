<!-- вид страницы детального просмотра новости -->
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
<h1><?=$title?></h1>

    <div class="news-item">
        <img src="<?=$newsItem['image']?>" width="200" alt="<?=$newsItem['newsTitle']?>">
    </div>

</body>
</html>