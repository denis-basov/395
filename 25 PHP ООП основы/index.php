<?php
/**
 * ООП
 *
 * Класс - шаблон, каркас, для создания объектов
 * Объект - экземпляр класса
 * Свойство - переменная, объявленная в классе
 * Метод - функция, объявленная в классе
 *
 *  модификаторы доступа: public, protected, private
 */

// создаем класс
class Cars{
    // свойства
    public $maker;
    public $model;
    public $color;
    public $weight;

    // конструктор
    public function __construct($makerPar, $modelPar, $colorPar, $weightPar){
        $this->maker = $makerPar;
        $this->model = $modelPar;
        $this->color = $colorPar;
        $this->weight = $weightPar;
    }
    // методы
    public function sayHello(){
        echo '<h2>Hello, winter</h2>';
    }

    public function getCarInfo($tag){
        echo "<$tag>Производитель: $this->maker. Модель: $this->model.
            Цвет кузова: $this->color. Масса: $this->weight </$tag>";
    }

}// окончание кода класса

// создаем объект
$car1 = new Cars('VAZ', '2101', 'Красный', 950);
$car2 = new Cars('VAZ', '2110', 'Синий', 850);

//$car1->maker = 'VAZ';
//$car1->model = '2101';
//$car1->color = 'Красный';
//$car1->weight = 950;
echo '<pre>';
print_r($car1);
print_r($car2);
echo '</pre>';

//$car1->sayHello();
//$car2->sayHello();

$car1->getCarInfo('h1');
$car2->getCarInfo('p');



