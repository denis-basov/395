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
// for (let fruit of fruits) {
//   console.log(fruit);
// }

let authorsContainer = document.querySelector("#authors");

for (let author of authors) {
  let authorStr = `
      <div class="author">
        <h2>${author.firstName} ${author.lastName}</h2>
      </div>
  `;
  authorsContainer.insertAdjacentHTML("afterbegin", authorStr);
}
