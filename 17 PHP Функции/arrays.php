<?php

// функция для тестового вывода массивов
function d($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

//$numbers = array(6,3,4,6,7,9,1);
$numbers = [6,3,4,6,7,9,1];
$mix = [42, "hello", true, null, false, [1, 2, 3]];
$fruits = ["Киви", "Кокос", "Апельсин", "Банан", "Яблоко"];
$pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
$animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];

$student = [
    'firstName' => "Иван",
    'lastName' => "Сидоров",
    'age' => 11,
    'childCount' => null,
    'phones' => ['543', '568', '943'],
    'address' => [
        'city' => 'Пермь',
        'street' => 'Гагарина',
        'houseNumber' => 44
    ],
    'avatar' => 'https://images.unsplash.com/photo-1500048993953-d23a436266cf?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
];

$users = [
    [
        'firstName' => "Иван",
        'lastName' => "Иванов",
        'hobby' => ["Гулять"],
    ],
    [
        'firstName' => "Анна",
        'lastName' => "Иванова",
        'hobby' => ["Спать", "Плавать"],
    ],
    [
        'firstName' => "Семен",
        'lastName' => "Петров",
        'hobby' => ["Гулять", "Есть"],
    ],
];

$cart = [
  [
    'name' => "Зубная щетка",
    'price' => 5,
    'qty' => 3
  ],
  [
    'name' => "Зубная паста",
    'price' => 10,
    'qty' => 4
  ],
  [
    'name' => "Зубная нить",
    'price' => 3,
    'qty' => 2
  ],
];

$students = [
    [
        'firstName' => "Иван",
        'lastName' => "Сидоров",
        'age' => 17,
        'childCount' => null,
        'phones' => ['81245698554', '4995846521', '4822456845'],
        'address' => [
            'city' => 'Пермь',
            'street' => 'Гагарина',
            'houseNumber' => 44
        ],
        'avatar' => 'https://images.unsplash.com/photo-1500048993953-d23a436266cf?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    ],
    [
        'firstName' => "Анна",
        'lastName' => "Сидорова",
        'age' => 18,
        'childCount' => 1,
        'phones' => ['235', '863', '156', '345'],
        'address' => [
            'city' => 'Ставрополь',
            'street' => 'Пушкина',
            'houseNumber' => 22
        ],
        'avatar' => 'https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?q=80&w=2076&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    ],
    [
        'firstName' => "Алексей",
        'lastName' => "Петров",
        'age' => 21,
        'childCount' => null,
        'phones' => ['742', '798'],
        'address' => [
            'city' => 'Самара',
            'street' => 'Герцена',
            'houseNumber' => 67
        ],
        'avatar' => 'https://images.unsplash.com/photo-1496302662116-35cc4f36df92?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    ]
];
