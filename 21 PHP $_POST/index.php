<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Регистрация</h1>

    <form action="cabinet.php" method="POST" enctype="multipart/form-data">

        <div class="form-input">
            <label>Имя:</label>
            <input type="text" name="firstName">
        </div>

        <div class="form-input">
            <label>Фамилия:</label>
            <input type="text" name="lastName">
        </div>

        <div class="form-input">
            <label>Логин:</label>
            <input type="text" name="login">
        </div>

        <div class="form-input">
            <label>Электронная почта:</label>
            <input type="email" name="email">
        </div>

        <div class="form-input">
            <label>Пароль:</label>
            <input type="password" name="password">
        </div>

        <div class="form-input">
            <label>Аватар:</label>
            <input type="file" name="avatar">
        </div>

        <div class="form-input">
            <input type="submit" value="Зарегистрироваться">
        </div>
    </form>

</body>
</html>