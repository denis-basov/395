<?php
/**
 * абстрактный класс - класс для хранения основных свойств и методов
 * абстрактный класс - класс экземпляр котрого нельзя создать
 * абстрактный метод - метод, объявленный в классе, который должен быть реализован в классах-потомках
 */

abstract class Publications{
    protected $id;
    protected $category;
    protected $title;
    protected $short_text;
    protected $add_date;

    public function __construct($row){
        $this->id = $row['id'];
        $this->category = $row['category'];
        $this->title = $row['title'];
        $this->short_text = $row['short_text'];
        $this->add_date = $row['add_date'];
    }

    // абстрактный метод - должен быть реализован в дочерних классах
    abstract public function printItem();
}


class SportNews extends Publications{

    // метод для вывода новости в документ
    public function printItem(){
        echo <<<_HTML_
            <div class="news sport-news">
                <h2>$this->title</h2>
                <p>$this->short_text</p>
                <a href="news_detail.php?id=$this->id">Подробнее...</a>
            </div>     
_HTML_;
    }
}


class SpaceNews extends Publications{

    // метод для вывода новости в документ
    public function printItem(){
        echo <<<_HTML_
            <div class="news space-news">
                <h2>$this->title</h2>
                <a href="news_detail.php?id=$this->id">Подробнее...</a>
            </div>     
_HTML_;
    }
}

class ScienceNews extends Publications{

    // метод для вывода новости в документ
    public function printItem(){
        echo <<<_HTML_
            <div class="news science-news">
                <h2>$this->title</h2>
                <p>ID: $this->id</p>
                <p>$this->short_text</p>
                <p>Категория: $this->category</p>
                <p>Дата публикации: $this->add_date</p>
                <a href="news_detail.php?id=$this->id">Подробнее...</a>
            </div>     
_HTML_;
    }
}

class CultureNews extends Publications{
    // метод для вывода новости в документ
    public function printItem(){
        echo <<<_HTML_
            <div class="news culture-news">
                <h2>$this->title</h2>
                <p>Категория: $this->category</p>
                <p>Дата публикации: $this->add_date</p>
                <a href="news_detail.php?id=$this->id">Подробнее...</a>
            </div>     
_HTML_;
    }
}