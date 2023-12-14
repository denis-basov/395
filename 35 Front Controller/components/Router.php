<?php
/**
 * Class Router
 * маршрутизатор, отвечающий за обработку запроса и формирования ответа клиенту
 * получаем путь (uri), подключить нужный контроллер и вызвать нужный метд
 */

class Router
{
    private $routes; // свойство для хранения маршрутов

    /**
     * получаем массив с маршрутами
     */
    public function __construct(){
        $this->routes = require ROOT.'/config/routes.php';
    }

    /**
     * получаем данные из строки запроса (uri)
     */
    private function getUri(){
        return trim($_SERVER['REQUEST_URI'], '/');
    }

    /**
     * метод ищет по данным из строки запроса элемент в массиве с маршрутами
     * формирует название контроллера и подключает его
     * формирует название метода этого контроллера и запускает его
     * если есть аргументы, передает методу
     */
    public function run(){

        // получаем строку запроса
        $uri = $this->getUri();

        // перебираем массив с маршрутами
        foreach ($this->routes as $uriPattern => $path){

            //если есть совпадение ключа в массиве с маршрутами и строки запроса (URI)
            if(preg_match("#^$uriPattern$#", $uri)){
                // получаем внутренний маршрут
                // подлставляем данные из строки запроса
                // в значение текущего элемента мессива по шаблону регулярного выражения

                // #^$uriPattern$# - #^news/([0-9]+)$#
                // $path - news/view/$1
                // $uri - news/32
/*
                echo '$uriPattern:'." $uriPattern<br>";// pattern - шаблон, по которому идет поиск
                echo '$path:'." $path<br>"; // replacement - куда вставляем искомое значение
                echo '$uri:'." $uri<br>"; // subject - донор, откуда берем значение
*/

                // формируем внутренний маршрут,
                // подставляем данные  из строки запроса в значение элемента массива
                $internalRoute = preg_replace("#^$uriPattern$#",$path, $uri);
                //echo 'Внутренний маршрут:'." $internalRoute<br>";

                // разделяем маршрут на массив
                $segments = explode('/', $internalRoute);

                // определяем название контроллера, который будем подключать
                // news/index => NewsController
                $controllerName = ucfirst(array_shift($segments)).'Controller';

                // определяем название метода, который будет обрабатывать запрос
                // index => actionIndex
                $actionName = 'action'.ucfirst(array_shift($segments));;
                //DBConnect::d($segments);

                // переименовывем массив, в нем находятся аргументы для методов
                $arguments = &$segments;

                // формируем путь до контроллера
                $controllerFile = ROOT."/controllers/$controllerName.php";
                if(file_exists($controllerFile)){// если файл существует
                    require $controllerFile;// подключаем контроллер
                }else{
                    die('Контроллер не найден');
                }

                // создаем объект подключенного контроллера
                $controllerObj = new $controllerName();
                $controllerObj->$actionName(...$arguments);

            }// if
        }// foreach
    }// run()
}// Router