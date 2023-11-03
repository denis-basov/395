/**
 * for
 */
// for (let i = 1; i < 5; i++) {
//   console.log(`Значение переменной i: ${i}`);
// }

// for (let i = 10; i <= 100; i += 5) {
//   console.log(`Значение переменной i: ${i}`);
// }

// for (let i = 10; i > 0; i--) {
//   console.log(`Значение переменной i: ${i}`);
// }
// console.log("Конец цикла");

// 2 задание
// выведите в консоль числа от 50 до 20 с шагом 7

//1
// for (let i = 50; i >= 20; i -= 7) {
//   console.log(`Значение переменной i: ${i}`);
// }

/**
 * БЕСКОНЕЧНЫЙ ЦИКЛ
 */
// for (let i = 50; i >= 20; i++) {
//   console.log(`Значение переменной i: ${i}`);
// }

// console.log(fruits);
// for (let i = 0; i <= 5; i++) {
//   console.log(fruits[i]);
// }
// for (let i = 5; i >= 0; i--) {
//   console.log(fruits[i]);
// }

// for (let i = 0; i < fruits.length; i++) {
//   console.log(fruits[i]);
// }

// let fruits = ["Киви", "Кокос", "Апельсин", "Банан", "Яблоко"];
// let arrLength = fruits.length; // получаем длину массива = 5
// for (let i = 0; i < arrLength; i++) {
//   console.log(i, fruits[i]);
// }

// let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
// console.log(pets, animals);

// for (let i = 0; i < pets.length; i++) {
//   console.log(i, pets[i]);
// }

// 3 задание
// - выведите всех авторов в консоль через цикл
// - выведите все имена авторов в консоль

//1
// for (let i = 0; i < authors.length; i++) {
//   console.log(authors[i]);
// }

// for (let i = 0; i < authors.length; i++) {
//   console.log(authors[i].firstName);
// }

//2
// for (let i = 0; i < authors.length; i++) {
//   console.log(`${authors[i].firstName} ${authors[i].lastName}`);
//   console.log(authors[i]);
// }

//3
// for (let i = 0; i < authors.length; i++) {
//   console.log(`${authors[i].id} ${authors[i].firstName}`);
// }

// получить индекс элемента и элемент в массиве где id автора = 4
//1
// for (let i = 0; i < authors.length; i++) {
//   if (authors[i].id === 4) {
//     console.log(`Индекс элемента: ${i}`);
//     console.log(authors[i]);
//     console.log("ID: " + authors[i].id);
//     console.log("Имя: " + authors[i].firstName);
//   }
// }

//2
// let author = []; // объявляю массив для сохранения значений
// for (let i = 0; i < authors.length; i++) {
//   if (authors[i].id === 4) {
//     // если ID автора 4
//     author[0] = i; // сохраняю индекс в массив
//     author[1] = authors[i]; // сохраняю весь объект в массив
//   }
// }
// console.log(author);

//3
// let authorsArr = []; // объявляю массив для сохранения значений
// for (let i = 0; i < authors.length; i++) {
//   if (authors[i].id < 4) {
//     authorsArr.push({ ind: i, obj: authors[i] });
//   }
// }
// console.log(authorsArr);

/**
 * while
 */
// for (let i = 1; i < 5; i++) {
//   console.log(`Значение переменной i: ${i}`);
// }

// let i = 1;
// while (i < 5) {
//   console.log(`Значение переменной i: ${i}`);
//   i++;
// }

// console.log(Math);

// break - прерывание цикла

// если значение переменной i равно 5, прервать цикл
// for (let i = 0; i < 10; i++) {
//   console.log(`Значение переменной i: ${i}`);
//   if(i === 5){
//     break;
//   }
// }

// найти Толстого в массиве
// let lev;
// for (let i = 0; i < authors.length; i++) {
//   if (authors[i].lastName === "Толстой") {
//     lev = authors[i];
//     break;
//   }
// }
// console.log(lev);

// найти ВСЕХ Толстых в массиве
// let levs = [];
// for (let i = 0; i < authors.length; i++) {
//   if (authors[i].lastName === "Толстой") {
//     levs.push(authors[i]);
//   }
// }
// console.log(levs);

// let levs = authors.filter((author) => author.lastName === "Толстой");
// console.log(levs);

/**
 * for...of
 */
//1
// for (let fruit of fruits) {
//   console.log(fruit);
// }

//2
// let authorsContainer = document.querySelector("#authors");

// for (let author of authors) {
//   let authorStr = `
//       <div class="author">
//         <h2>${author.firstName} ${author.lastName}</h2>
//       </div>
//   `;
//   authorsContainer.insertAdjacentHTML("afterbegin", authorStr);
// }

//3
// let authorsContainer = document.querySelector("#authors");
// let output = '';

// for (let author of authors) {
//   output += `
//       <div class="author">
//         <h2>${author.firstName} ${author.lastName}</h2>
//       </div>
//   `;
// }
// authorsContainer.insertAdjacentHTML('beforeend', output);

/*
// получить сумму элементов массива
// let numbers = [6, 3, 5, 8, 9, 3, 4, 5, 1, 6, 8, 9, 3, 4];
let sum = 0; // контейнер для суммы
for (let num of numbers) {
  sum = sum + num; // складываем
  //sum += num;
}
console.log(sum);*/

// 1 задание
// let fruits = ["Киви", "Кокос", "Апельсин", "Банан", "Яблоко"];
// соберите из масива строку по типу
// Киви, Кокос, Апельсин, Банан, Яблоко

//1
// let fruitsStr = "";
// for (let fruit of fruits) {
//   fruitsStr += fruit;
// }
// console.log(fruitsStr);

//2
// let fruitsStr = "";
// for (let fruit of fruits) {
//   fruitsStr += fruit + ", ";
// }
// console.log(fruitsStr);

//3
// let str = "";
// for (let i = 0; i < fruits.length; i++) {
//   str = str + fruits[i] + ", ";
// }
// console.log(str);

//4
// let string = "";
// for (let fruit of fruits) {
//   if (string === "") {
//     // если первая итерация, то запятую и пробел не ставим
//     string = `${fruit}`;
//   } else {
//     string = `${string}, ${fruit}`;
//   }
// }
// console.log(string);

//5
// let fruitStr = "";

// let i = 0;
// for (let fruit of fruits) {
//   if (i === fruits.length - 1) {
//     fruitStr += fruit;
//     break;
//   }
//   fruitStr += fruit + ", ";
//   i++;
// }
// console.log(fruitStr);

// 6
// let fruitsStr = "";
// for (let i = 0; i < fruits.length; i++) {
//   if (i === fruits.length - 1) {
//     // если последняя итерация, добавляем без запятой
//     fruitsStr = fruitsStr + fruits[i];
//   } else {
//     fruitsStr = fruitsStr + fruits[i] + ", ";
//   }
// }
// console.log(fruitsStr);

//7
// let fruitsStr = fruits.join(", ");
// console.log(fruitsStr);

// Получить на основе массива массив со строками в верхнем регистре
// let fruits = ["Киви", "Кокос", "Апельсин", "Банан", "Яблоко"];
//console.log('hello'.toUpperCase());

// let fruitsCaps = [];
// for (let fruit of fruits) {
//   let friutsUpper = fruit.toUpperCase(); // увеличиваем регистр
//   fruitsCaps.push(friutsUpper); // добавляем в массив
// }
// console.log(fruitsCaps);

// fruits.toUpperCase();
// console.log(fruits);

// "hello".push(" !!!");

// let str = "hello!";
// for (let char of str) {
//   console.log(char);
// }

// получение суммы товаров по корзине
// let sum = 0;
// for (let item of cart) {
//   sum += item.price;
// }
// console.log(sum);

/*
// получение максимального значения в массиве
// let numbers = [6, 3, 5, 8, 9, 3, 4, 5, 1, 6, 8, 9, 3, 4];
let max = 0;
for (let num of numbers) {
  // если текущий элемент больше максимума
  if (num > max) {
    max = num; // обновляем максимум
  }
}
console.log(max);*/

/**
 * for ... in - перебор ключей объектов
 */
// for (let key in post) {
//   console.log(key);
//   console.log(post[key]);
// }
