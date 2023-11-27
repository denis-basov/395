<?php
/**
 * ООП Наследование
 *
 * Класс - шаблон, каркас, для создания объектов
 * Объект - экземпляр класса
 * Свойство - переменная, объявленная в классе
 * Метод - функция, объявленная в классе
 *
 *  модификаторы доступа:
 *  public - общедоступное свойство, есть доступ за пределами класса
 *  protected - защищенное свойство, свойства доступны в текущем классе и в дочерних классах
 *  private - использование свойства только в текущем класса
 */


/**
 * Class Dogs - родительский класс
 */
class Dogs{
    protected $name;
    protected $age;
    protected $weight;
    protected $color;

    // конструктор
    public function __construct($name, $age, $weight, $color){
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
        $this->color = $color;
    }

    public function getName(){
        echo "<h2>Кличка: $this->name .</h2>";
    }

    public function getSummary(){
        echo <<<_HTML_
            <div class="dog">
                <h2>Кличка: $this->name</h2>
                <p>Возраст: $this->age лет</p>
                <p>Вес: $this->weight кг</p>
                <p>Цвет шерсти: $this->color</p>
            </div>
_HTML_;
    }
}

$belka = new Dogs('Белка', 5, 9, 'Белый');
//echo '<pre>';
//print_r($belka);
//echo '</pre>';
//$belka->getSummary();

//$belka->name = 'Бобик';


/**
 * Class RaceDogs - дочерний класс, наследник класса Dogs
 */
class RaceDogs extends Dogs{
    // уникальное для класса свойство
    public $speed;

    // конструктор
    public function __construct($name, $age, $weight, $color, $speed){
        // вызываем конструктор родителя
        parent::__construct($name, $age, $weight, $color);
        $this->speed = $speed;
    }

    public function getSummary()
    {
        echo <<<_HTML_
            <div class="dog race-dog">
                <h2>Кличка: $this->name</h2>
                <p>Цвет шерсти: $this->color</p>
                <p>Максимальная скорость погони за добычей: $this->speed м/с</p>
            </div>
_HTML_;
    }
}
$bobik = new RaceDogs('Бобик', 6, 19, 'Рыжий', 90);
//echo '<pre>';
//print_r($bobik);
//echo '</pre>';
//$bobik->getSummary();

/**
 * Class ExpoDogs - дочерний класс, наследник класса Dogs
 */
class ExpoDogs extends Dogs{
    public $breed;

    // конструктор
    public function __construct($name, $age, $weight, $color, $breed){
        // вызываем конструктор родителя
        parent::__construct($name, $age, $weight, $color);
        $this->breed = $breed;
    }

    public function getSummary(){
        echo <<<_HTML_
            <div class="dog expo-dog">
                <h2>Кличка: $this->name</h2>
                <p>Вес: $this->weight кг</p>
                <p>Цвет шерсти: $this->color</p>
                <p>Порода: $this->breed</p>
            </div>
_HTML_;
    }
}

$strelka = new ExpoDogs('Стрелка', 3,54, 'Серый', 'Пудель');
//echo '<pre>';
//print_r($strelka);
//echo '</pre>';
//$strelka->getSummary();

