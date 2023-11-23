<?php
//function clear() {
//    if (file_exists('images/')) {
//        foreach (glob('images/*') as $file) {
//            unlink($file);
//        }
//    }
//}
//clear();

    echo "<pre>";
    echo '<h2>$_POST</h2>';
    print_r($_POST);
    echo '<h2>$_FILES</h2>';
    print_r($_FILES);
    echo "</pre>";

    // кладем картинку в отдельный массив
    $avatar = $_FILES['avatar'];

    // формируем путь для перемещения картинки
    $avatarPath = 'images/'.time().'_'.$avatar['size'].'_'.$avatar['name'];
    // echo "<h2>$avatarPath</h2>";
    // перемещаем картинку в нужное место
    move_uploaded_file($avatar['tmp_name'], $avatarPath);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ЛК</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="user">
        <img src="<?=$avatarPath?>" alt="<?=$_POST['firstName']?> <?=$_POST['lastName']?>">
        <h2>Добро пожаловать, <?=$_POST['firstName']?> <?=$_POST['lastName']?></h2>
        <p>Логин: <?=$_POST['login']?></p>
        <p>Емейл: <?=$_POST['email']?></p>
        <p>Пароль: <?=$_POST['password']?></p>
    </div>

</body>
</html>
