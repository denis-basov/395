/**
 * foreach
 */
// for (let fruit of fruits) {
//   console.log(fruit);
// }

// fruits.forEach(function (fruit, index) {
//   console.log(fruit, index);
// });

//fruits.forEach((element) => console.log(element));

// fruits.forEach(function (fruit, index) {
//   let par = `<p class="fruit fruit-${index + 1}">${fruit}</p>`;
//   console.log(par);
// });

/*
let total = "";
fruits.forEach(function (fruit, index) {
  let par = `<p class="fruit fruit-${index + 1}">${fruit}</p>`;
  console.log(par);
  total += par;
});
console.log(total);*/

// 1 задание
//let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
// выведите в консоль длину каждого элемента массива
//1
// console.log(animals);
// animals.forEach((element) => {
//   console.log(element.length);
// });

//2
// animals.forEach((item) => console.log(item.length));

//3
// animals.forEach(function (animal, index) {
//   console.log(`Элемент: ${animal}, индекс: ${index},  длина ${animal.length}`);
// });

//4
// animals.forEach(function (animal) {
//   console.log(animal.length);
// });

//5
// animals.forEach(function (animal) {
//   console.log(animal, animal.length);
// });

/**
 * формирование из массива разметки и вывод в документ
 */
/*
//let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
let petsContainer = document.querySelector("#pets");
pets.forEach(function (pet) {
  let petEl = `<li>${pet}</li>`; // формируем элемент списка из эл массива

  petsContainer.insertAdjacentHTML("beforeend", petEl);// добавляю на страницу
});
*/

/**
 * обработка кликов на несколько кнопок
 */
/*
let buttons = document.querySelectorAll(".btn"); // получаем все кнопки с классом btn
// перебираем массив с кнопками
buttons.forEach(function (button) {
  // на каждую кнопку добавляем обработчик события по клику
  button.addEventListener("click", function () {
    console.log(button.textContent);
  });
});
*/

/**
 * map
 */
// let numbers = [6, 3, 5, 8, 9, 3, 4, 5, 1, 6, 8, 9, 3, 4];
// let newNums = numbers.map(function (num, i) {
//   return num * i;
// });
// console.log(newNums);

// foreach
// let newNums2 = [];
// numbers.forEach(function (num, i) {
//   newNums2.push(num * i);
// });
// console.log(newNums2);

//let numbers = [6, 3, 5, 8, 9, 3, 4, 5, 1, 6, 8, 9, 3, 4];
// let newNums = numbers.map(function (num) {
//   return num * num;
// });
// console.log(newNums);

/*
let userNames = users.map(function (user) {
  return user.firstName;
});
console.log(userNames);
*/

/*
//1 получаем из массива объектов массив строк с элементами списка
let userNames = users.map(function (user) {
  return `<li>${user.firstName}</li>`;
});
console.log(userNames);

//2 объединение массива в строку
let userNamesStr = userNames.join("");
console.log(userNamesStr);

//3 получаем контейнер для вставки
let petsEl = document.querySelector("#pets");

//4 вставляем на страницу сформированную строку
petsEl.insertAdjacentHTML("beforeend", userNamesStr);
*/

/*
let prices = cart.map(function (cartItem) {
  return cartItem.price * cartItem.qty;
});
console.log(prices);*/

// 2 задание
// получите на основе массива authors массив строк:
// ['Иван Бунин', 'Лев Толстой'....]

//1
// let authorsStr = authors.map((author) => {
//   return author.firstName + " " + author.lastName;
// });
// console.log(authorsStr);

//2
// let authorsList = authors.map(function (author) {
//   return `${author.firstName} ${author.lastName}`;
// });
// console.log(authorsList);

//3
// let newAuthor = authors.map(function (aut) {
//   return `${aut.firstName} ${aut.lastName}`;
// });
// console.log(newAuthor);
// let newAuthorStr = newAuthor.join(", ");
// console.log(newAuthorStr);

//3.1
// let newAuthor = authors
//   .map(function (aut) {
//     return `${aut.firstName} ${aut.lastName}`;
//   })
//   .join(", ");
// console.log(newAuthor);

//3.2
// let newAuthor = authors.map((aut) => `${aut.firstName} ${aut.lastName}`).join(", ");
// console.log(newAuthor);

//4
// let newAuthors = authors.map(function (author) {
//   return `${author.firstName} ${author.lastName}`;
// });
// console.log(newAuthors);

/**
 * стрелочные функции
 */
// let sayHello = function () {
//   console.log("Hello");
// };

// let sayHello = () => {
//   console.log("Hello");
// };
// sayHello();

// let sayHello = (fName) => {
//   console.log(`Hello, ${fName} `);
// };
// sayHello("Sergey");
// sayHello("Inna");

// let sayHello = (fName) => {
//   console.log(`Hello, ${fName} `);
// };
// sayHello("Sergey");
// sayHello("Inna");

/*
let sayHello = (fName) => {
  return `Hello, ${fName} `;
};

let greet = sayHello("Петр");
console.log(greet);
*/

/*
let sayHello = (fName) => `Hello, ${fName}`;

let greet = sayHello("Петр");
console.log(greet);*/
