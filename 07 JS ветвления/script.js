//let adminLogin = "superAdmin"; // логин админа из БД

// если логины совпадают
// if ("superAdmin" === adminLogin) {
//   console.log("Привет, админ!!!");
// } else {
//   console.log("Логин неверен!!!");
// }

// 1 задание
// проверьте возраст клиента и если возраст клиента более или равен 18,
// то выведите сообщение о приветствии
// если возраст менее 18 то сообщение о запрете

//1
// let age = 11;

// if (age >= 18) {
//   console.log("Приветствуем только совершеннолетних");
// } else {
//   console.log("Люди младше 18 приветствию не подлежат");
// }

//2
// let age = 55;
// if (age >= 18) {
//   console.log("Привет старче, иди в ПФР направо!");
// } else {
//   console.log("Иди в школу, малец!");
// }

//3
// let age = 18;

// if (age >= 18) {
//   console.log("Hello");
// } else {
//   console.log("Access denied");
// }

// 1, 2, 3
// let rating = 2;

// if (rating === 3) {
//   console.log("Отличный рейтинг");
// } else if (rating === 2) {
//   console.log("Удовлетворительный рейтинг");
// } else if (rating === 1) {
//   console.log("Плохой рейтинг");
// } else {
//   console.log("Значение рейтинга не распознано");
// }

/*
// вложенные проверки
// логин и пароль пользователя в бд
let dbLogin = "ivan111";
let dbPassword = "123456";

// введенные данные пользователем при входе
let inputLogin = "ivan111";
let inputPassword = "123456";

// если логин введен верно
if (inputLogin === dbLogin) {
  // проверяем пароль
  if (inputPassword === dbPassword) {
    console.log("Добро пожаловать");
  } else {
    console.log("Пароль неверен");
  }
} else {
  console.log("Логин введен неверно");
}*/

/*
// увеличение первой буквы строки
let str = 'mozilla';// Mozilla
//console.log(str.toUpperCase());

// копируем первый символ строки
let firstChar = str[0];
// увеличиваем регистр
firstChar = firstChar.toUpperCase();
console.log(firstChar);

// копируем оставшиеся символы строки
let otherChars = str.substring(1);
console.log(otherChars);

let newStr = firstChar+otherChars;
console.log(newStr);*/

/*
// проверка без вложенных условий
// логин и пароль пользователя в бд
let dbLogin = "ivan111";
let dbPassword = "123456";

// введенные данные пользователем при входе
let inputLogin = "ivan";
let inputPassword = "1111";

// если логин и пароль совпадают
if (inputLogin === dbLogin && inputPassword === dbPassword) {
  console.log("Добро пожаловать");
} else {
  console.log("Логин или пароль введен неверно");
}*/

/*
// ИЛИ ||
let age = 22;
if (age < 6 || age >= 65) {
  console.log("Проходите бесплатно");
} else {
  console.log("С вас 10 руб");
}
*/

// И &&
// let age = 32;
// if (age >= 6 && age < 65) {
//   console.log("С вас 10 руб");
// } else {
//   console.log("Проходите бесплатно");
// }

// тернарный оператор

let login = "User223";
let age = 12;
let msg;

// if (age >= 18) {
//   msg = "Hello";
// } else {
//   msg = "Access denied";
// }

// let str = `
//   <div>
//     <h2>ООО Рога и копыта</h2>
//     <p>${login}, ${msg}</p>
//   </div>
// `;
// console.log(str);

// age >= 18 ? console.log("Hello") : console.log("Access denied");

let str = `
  <div>
    <h2>ООО Рога и копыта</h2>
    <p>${login}, ${age >= 18 ? "Hello" : "Access denied"}</p>
  </div>
`;
console.log(str);
