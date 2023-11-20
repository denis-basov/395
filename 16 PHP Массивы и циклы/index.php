<?php
/**
 * массивы и циклы
 */

require 'arrays.php';// подключаю файл с массивами

//var_dump($numbers);
//var_dump($_SERVER);

//print_r($numbers);
//print_r($_SERVER);

//d($numbers);
//d($pets);

//echo count($fruits);

//$animals[1] = 'tiger';
//$str = "Мои любимые животные: $animals[1], $animals[4].";
//echo $str;

// копирование массива по значению
//$newFruits = $fruits;
//$newFruits[0] = 'Арбуз';
//d($fruits);
//d($newFruits);

// копирование по ссылке
//$newFruits = &$fruits;
//$newFruits[0] = 'Арбуз';
//d($fruits);
//d($newFruits);
//
//unset($fruits); // удаляем переменную
//d($newFruits);
//d($fruits);

/**
 * ассоциативные массивы
 */
/*
let student = {
    firstName: "Иван",
    lastName: "Сидоров",
    age: 11,
};*/

/*
$student = [
    'firstName' => "Иван",
    'lastName' => "Сидоров",
    'age' => 11,
];*/

//d($student);

//$student['firstName'] = 'Петр';
//echo $student['firstName'];
//var_dump($student['childCount']);

//$userInfo = "<h2>Имя: {$student['firstName']}, фамилия: {$student['lastName']}.</h2>";
//$userInfo = "<h2>Имя: $student[firstName], фамилия: $student[lastName].</h2>";
//echo $userInfo;

//$userInfo = "<h2>Имя: $student[firstName], фамилия: $student[lastName], телефоны: $student[phones][0].</h2>";
//$userInfo = "<h2>Имя: {$student['firstName']}, фамилия: {$student['lastName']}, телефоны: {$student['phones'][0]},
//            {$student['phones'][1]}, {$student['phones'][2]}.</h2>";
//echo $userInfo;
/*
echo "
    <div class='student'>
        <h2>Имя: {$student['firstName']}</h2>
        <h3>Фамилия: {$student['lastName']}</h3>
        <p>Возраст: {$student['age']}</p>
    </div>
";
*/
?>
<!--<div class="student">-->
<!--    <h2>Имя: --><?//= $student['firstName']?><!--</h2>-->
<!--    <h3>Фамилия: --><?//= $student['lastName']?><!--</h3>-->
<!--    <p>Возраст: --><?//= $student['age']?><!--</p>-->
<!--</div>-->
<?php
// 1 задание
// добавьте в разметку вывод данных об адресе студента
?>
<!-- 1 -->
<!--<div class="student">-->
<!--    <h2>Город: --><?//= $address['city']?><!--</h2>-->
<!--    <h3>Улица: --><?//= $address['street']?><!--</h3>-->
<!--    <p>номер дома: --><?//= $address['houseNumber']?><!--</p>-->
<!--</div>-->

<!-- 2 -->
<!--<p>Адрес: --><?//= $student['address']['city']?><!--, --><?//= $student['address']['street']?><!--, --><?//= $student['address']['houseNumber']?><!--</p>-->

<!-- 3 -->
<!--<div class = "student">-->
<!--    <h2>Имя: --><?//=$student['firstName']?><!--</h2>-->
<!--    <h3>Фамилия: --><?//=$student['lastName']?><!--</h3>-->
<!--    <p>Возраст: --><?//=$student['age']?><!--<p>-->
<!--    <p>Адрес: г. --><?//= $student['address']['city'] ?><!--, ул. --><?//= $student['address']['street' ] ?><!--, д. --><?//= $student['address']['houseNumber'] ?><!--</p>-->
<!--</div>-->

<!-- 4 -->
<!--<div class="student">-->
<!--    <img src="--><?//=$student['avatar']?><!--" width="300" alt="--><?//= $student['firstName'].' '.$student['lastName'] ?><!--">-->
<!--    <h2>Имя: --><?//= $student['firstName']; ?><!--</h2>-->
<!--    <h3>Фамилия: --><?//= $student['lastName']?><!--</h3>-->
<!--    <p>Возраст: --><?//= $student['age']?><!--</p>-->
<!--    <p>Количество детей: --><?//= $student['childCount'] ?? 'детей еще нет' ?><!--</p>-->
<!--    <p>Телефоны: --><?//= $student['phones'][0].', '.$student['phones'][1].', '.$student['phones'][2] ?><!--</p>-->
<!--    <p>Адрес: г. --><?//= $student['address']['city']?><!--, ул. --><?//= $student['address']['street']?><!--, дом. --><?//= $student['address']['houseNumber']?><!-- </p>-->
<!--</div>-->
<?php

//d($users);

/**
 * for
 */
//for($i = 0; $i <= 10; $i++){
//    echo '<p>$i: '.$i.'</p>';
//}

// $fruits = ["Киви", "Кокос", "Апельсин", "Банан", "Яблоко"];
//for($i = 0; $i < count($fruits); $i++){
//    echo "<p>$fruits[$i]</p>";
//}

/**
 * while
 */
//$i = 0;
//while($i <= 10){
//    echo '<p>$i: '.$i.'</p>';
//    $i++;
//}

// $fruits = ["Киви", "Кокос", "Апельсин", "Банан", "Яблоко"];
//$i = 0;
//while($i < count($fruits)){
//    echo "<p>$fruits[$i]</p>";
//    $i++;
//}

/**
 * foreach
 */
//$animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
//foreach ($animals as $animal) {
//    echo "<p>$animal</p>";
//}

// $fruits = ["Киви", "Кокос", "Апельсин", "Банан", "Яблоко"];
//foreach ($fruits as $key => $fruit){
//    echo "<h2>Ключ: $key. Значение: $fruit</h2>";
//}

//foreach ($student as $key => $value){
//    echo "<h2>Ключ: $key. Значение: $value</h2>";
//}

//d($users);

//foreach ($users as $index => $user){
//    $index++;
//    echo "<div class='user' id='user-$index'>
//            <h2>Имя: {$user['firstName']}</h2>
//            <h3>Фамилия: {$user['lastName']}</h3>
//          </div>";
//}
// 2 задание
// выведите данные из массива cart в документ

// 1
/*
foreach($cart as $key => $item) {
    echo '<div class="item">';
        foreach($item as $itemKey => $value){
            echo "<p>Ключ: $itemKey. Значение: $value</p>";
        }
    echo '</div>';
}*/

//    2
/*
foreach($cart as $key => $item) {
    echo "
            <div>
                <h2>Товар: {$item['name']}</h1>
                <h3>Цена: {$item['price']}</h2>
                <h3>Количество: {$item['qty']}</h3>
                <br>
            </div>
        ";
}*/

//    3
/*
echo '<div class="cart">';
    foreach($cart as $index => $item){
        $index++;
        $total= $item['price'] * $item['qty'];
        echo "<p>$index. Наименование продукта: {$item['name']}, цена: {$item['price']}, кол-во: {$item['qty']} (Итого: $total).";
    }
echo '</div>';*/

// 4
/*
echo '<div class="cart">';
    foreach($cart as $key => $item) {
        $key++;
        echo "<div class='cart-item' id='cart-item-$key'>
                <h2>Товар: {$item['name']}</h1>
                <h3>Цена: {$item['price']}</h2>
                <h3>Количество: {$item['qty']}</h3>
              </div>";
    }
echo '</div>';*/

d($students);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- $pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];   -->
    <div class="pets">
        <?php foreach($pets as $pet): ?>
            <span><?=strtoupper($pet)?></span>
        <?php endforeach; ?>
    </div>

    <div class="students">
        <?php foreach ($students as $student):?>
            <div class="student">
                <img src="<?=$student['avatar']?>" width="300" alt="<?=$student['firstName'].' '.$student['lastName']?>">
                <h3><?=$student['firstName']?> <?=$student['lastName']?></h3>
                <p>Возраст: <?=$student['age']?></p>
                <p>Количество детей: <?=$student['childCount'] ?? 0?></p>
                <p>Телефоны:
                <?php foreach ($student['phones'] as $phone):?>
                    <span><?=$phone?></span>
                <?php endforeach;?>
                </p>
            </div>
        <?php endforeach;?>
    </div>
</body>
</html>
