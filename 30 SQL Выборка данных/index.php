<?php

require 'DBConnect.php';

$pdo = DBConnect::getConnection();
var_dump($pdo);


/**
 * SQL - Structured Query Language
 * БД - набор табличек
 * СУБД - Система управления базой данных
 *
 * CREATE - создание БД, таблицы
 * INSERT INTO - добавление строк в таблицу
 */

// создание таблицы
/**
 CREATE TABLE authors(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL
);
 */

// вставка данных в таблицу
/**
INSERT INTO authors(firstName, lastName)
VALUES('Иван', 'Бунин');
 */

/**
INSERT INTO authors(firstName, lastName)
VALUES('Лев', 'Толстой'),
('Александр', 'Пушкин'),
('Федор', 'Достоевский'),
('Максим', 'Горький'),
('Николай', 'Гоголь'),
('Александр', 'Грибоедов'),
('Александр', 'Островский'),
('Константин', 'Паустовский');
 */


// создание дочерней таблицы и связка внешний-первичный плюч
/**
CREATE TABLE books(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    authorId INT NOT NULL,
    FOREIGN KEY(authorId) REFERENCES authors(id)
);
 */

/**
INSERT INTO books(`title`,`description`,`authorId`)
VALUES
('Господин из Сан-Франциско','Рассказ Ивана Алексеевича Бунина. Представляет собой притчу, повествующую о ничтожности богатства и власти перед лицом смерти.', 1),
('Война и мир','Роман-эпопея Льва Николаевича Толстого, описывающий русское общество в эпоху войн против Наполеона в 1805 — 1812 годах.', 2),
('Анна Каренина','Роман Льва Толстого о трагической любви замужней дамы Анны Карениной и блестящего офицера Вронского на фоне счастливой семейной жизни дворян Константина Лёвина и Кити Щербацкой.', 2),
('Капитанская дочка','Исторический роман Александра Пушкина, действие которого происходит во время восстания Емельяна Пугачёва. Впервые опубликован без указания имени автора в 4-й книжке журнала «Современник», поступившей в продажу в последней декаде 1836 года.', 3),
('Руслан и Людмила','Первая законченная поэма Александра Сергеевича Пушкина; волшебная сказка, вдохновлённая древнерусскими былинами.', 3),
('Преступление и наказание','Социально-психологический и социально-философский роман Фёдора Михайловича Достоевского, над которым писатель работал в 1865—1866 годах. Впервые опубликован в 1866 году в журнале «Русский вестник».', 4),
('Старуха Изергиль','Рассказ Максима Горького, написанный в 1894 году, состоящий из трёх частей. В рассказ вошли две «легенды»: легенда о Ларре и легенда о Данко, а также рассказ старухи о мужчинах, которых она любила на протяжении жизни.', 5);
 */

// удаление таблицы
// DROP TABLE books;
// DROP TABLE authors;

// удаление БД
// DROP DATABASE 395_books;

// удаление строк из таблицы
/**
DELETE
FROM books
WHERE id = 9;
 */

/**
DELETE
FROM books
WHERE authorId = 2;
 */

// удаление всех строк
/**
DELETE
FROM books;
 */

// изменение данных в строках
/**
UPDATE authors
SET `firstName` = 'Максим'
WHERE id = 8;
 */

/**
UPDATE authors
SET `firstName` = 'Александр', `lastName` = 'Солженицин'
WHERE id = 8;
 */

// SELECT - выборка данных

// SELECT title, description FROM books;

// SELECT firstName, lastName
//FROM authors;

// получить инфу об офисах и менеджерах этих офисов
// SELECT `OFFICE`, `CITY`, `REGION`, NAME, TITLE
// FROM `offices`, salesreps
// WHERE MGR = EMPL_NUM;

// получить инфу о сотрудниках и об офисах, к которым они прикреплены
//SELECT `EMPL_NUM`,`NAME`,`AGE`,`TITLE`, CITY, REGION
//FROM `salesreps`, offices
//WHERE REP_OFFICE = OFFICE;

// получить инфу о заказах, а также клиентах, менеджерах и продукции в заказе
//SELECT `ORDER_NUM`, `ORDER_DATE`, `QTY`,`AMOUNT`, COMPANY, NAME, DESCRIPTION, PRICE
//FROM `orders`, customers, salesreps, products
//WHERE CUST = CUST_NUM
//AND REP = EMPL_NUM
//AND MFR = MFR_ID
//AND PRODUCT = PRODUCT_ID;

// запрос на 5 таблиц
//SELECT `ORDER_NUM`, `ORDER_DATE`, COMPANY, NAME AS EMPL_NAME, CITY, REGION, DESCRIPTION, PRICE, `QTY`,`AMOUNT`
//FROM `orders`, customers, salesreps, products, offices
//WHERE CUST = CUST_NUM
//AND REP = EMPL_NUM
//AND MFR = MFR_ID
//AND PRODUCT = PRODUCT_ID
//AND REP_OFFICE = OFFICE;

// запрос к 5 таблицам с условием
// SELECT `ORDER_NUM`, `ORDER_DATE`, COMPANY, NAME AS EMPL_NAME, CITY, REGION, DESCRIPTION, PRICE, `QTY`,`AMOUNT`
// FROM `orders`, customers, salesreps, products, offices
// WHERE CUST = CUST_NUM AND REP = EMPL_NUM AND MFR = MFR_ID AND PRODUCT = PRODUCT_ID AND REP_OFFICE = OFFICE AND REGION = 'Eastern' AND NAME = 'Bill Adams';

/**
 * пример создания связанных таблиц
 */
/*
CREATE TABLE authors(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    shortInfo TEXT NOT NULL,
    biography TEXT NOT NULL,
    avatar TEXT NOT NULL
);*/

/*
CREATE TABLE categories(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    translation VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    className VARCHAR(255) NOT NULL
);*/

/*
CREATE TABLE news(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    text TEXT NOT NULL,
    add_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    image TEXT NOT NULL,
    authorId INT NOT NULL,
    categoryId INT NOT NULL,
    FOREIGN KEY(authorId) REFERENCES authors(id),
    FOREIGN KEY(categoryId) REFERENCES categories(id)
);*/