<?php
// FRONT CONTROLLER
const ROOT = __DIR__;// константа, содержащая корень проекта

require ROOT.'/components/Router.php';// подключаем роутер

require ROOT.'/components/DBConnect.php';// подключение к БД

$router = new Router();// создаем объект класса Router
$router->run();// запускаем
