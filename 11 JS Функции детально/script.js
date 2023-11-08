/*
let firstName = "Иван";

function sayHello() {
  let firstName = "Светлана";

  console.log(`Привет, ${firstName}`);
}
sayHello();

console.log(`Привет, ${firstName}`);*/

/**
 * функциональное выражение
 */

// 1 определение функции
// function sayHello() {
//   console.log("Hello");
// }
// sayHello();

// 2 функциональное выражение
// let sayHello = function () {
//   console.log("Hello");
// };
// sayHello();

/*
// передача функции как значения
let sayHello = function () {
  console.log("Hello");
};

let myFunc = sayHello;

console.log(myFunc);
myFunc();*/

/**
 * передача функции как аргумент другой функции
 */
//1
/*
function greet() {
  console.log("Hi, user");
}

function mainFunc(func) {
  func();
}

mainFunc(greet);
*/

//2
/*
function greet() {
  console.log("Hi, user");
}

function sayBye() {
  console.log("Bye, user");
}

function mainFunc(func) {
  func();
}

mainFunc(greet);
mainFunc(sayBye);
*/

//3
// function greet(login) {
//   console.log(`Hello, ${login}`);
// }

// function mainFunc(func) {
//   let userLogin = "Tatyana333";
//   func(userLogin);
// }

// mainFunc(greet);

//4
/*
function mainFunc(func) {
  func();
  func();
}

mainFunc(function () {
  console.log("Hi, user");
});
*/

//5
/*
function mainFunc(func) {
  func();
  func();
}

mainFunc(() => console.log("Hi, user"));*/

/**
 * возврат функции как результат работы другой функции
 */
/*
function getTip(tipValue) {
  function calcTotalBill(bill) {
    return bill * tipValue + bill;
  }

  return calcTotalBill;
}

let calcTotalBillToday = getTip(0.05);
console.log(calcTotalBillToday);

console.log(calcTotalBillToday(1000));
console.log(calcTotalBillToday(2000));
console.log(calcTotalBillToday(3000));
*/

/**
 * проверка возраста на принадлежность к диапазону
 */
/*
function setAgeRange(begin, end) {
  return function (age) {
    return age >= begin && age <= end;
  };
}
// 1. установка диапазона возрастов
let checkRange1 = setAgeRange(6, 65);
console.log(checkRange1);

// 2. проверка возраста на принадлежность к диапазону
console.log(checkRange1(2));
console.log(checkRange1(33));

let checkRange2 = setAgeRange(21, 45);
console.log(checkRange2(22));
console.log(checkRange2(78));
*/

/**
 * обработчик нажатия кнопки
 */
//1
/*
let pressBtn = document.querySelector("#press-btn"); // получаю кнопку

// функция, которая срабатывает при нажатии на кнопку
function clickHandler() {
  console.log("click");
  this.style.display = "none";
}

pressBtn.addEventListener("click", clickHandler);*/

//2
/*
let pressBtn = document.querySelector("#press-btn"); // получаю кнопку

pressBtn.addEventListener("click", function () {
  console.log(`hello`);
  pressBtn.style.display = "none";
  pressBtn.previousElementSibling.style.color = "blue";
});*/

//3
/*
let pressBtn = document.querySelector("#press-btn"); // получаю кнопку

function sayHello(fName) {
  return function () {
    console.log(`Привет, ${fName}`);
  };
}

pressBtn.addEventListener("click", sayHello("Петр"));*/

/**
 * setTimeout
 */
//1
// setTimeout(function () {
//   console.log("hello 1");
// }, 3000);

//2
// function test() {
//   console.log("hello 2");
// }
// setTimeout(test, 2000);

// таймер
/*
setTimeout(function () {
  console.log(1);
}, 1000);

setTimeout(function () {
  console.log(2);
}, 2000);

setTimeout(function () {
  console.log(3);
}, 3000);

setTimeout(function () {
  console.log(4);
}, 4000);*/
