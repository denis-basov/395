<?php
    $firstName = 'Игорь';
    $lastName = 'Петров';
    $age = 22;
    $salary = 23234.66;
    $avatar = 'https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
    $CSSClass = 'student';


    //var_dump( mb_strlen($firstName) );

//    $CSSClass[0] = strtoupper($CSSClass[0]);
//    var_dump($CSSClass);

//    var_dump($firstName[0].$firstName[1]);

    //echo 3 . 5;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Основы PHP</title>
</head>

<body>
    <h1>Основы PHP</h1>

    <?php
        //echo 'first name: $firstName. last name: $lastName. age: $age. salary: $salary';
        //echo "<h3>First name: $firstName. Last name: $lastName. Age: $age. Salary: $salary</h3>";
        //echo '<h3 class="user-info">first name: ' . $firstName . '. last name: ' . $lastName .'. age: '. $age+1 .'. salary: '.$salary.'</h3>';
    ?>

    <div class="<?=$CSSClass?>">
        <img src="<?=$avatar?>" width="300" alt="<?=$firstName.' '.$lastName?>">
        <h2><?=$firstName.' '.$lastName?></h2>
        <p>Age: <?=$age?></p>
        <p>Salary: <?=$salary?></p>
    </div>

    <a href="test.php">test</a>
</body>

</html>