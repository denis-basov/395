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
