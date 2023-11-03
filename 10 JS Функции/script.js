// объявление функции
// function sayHello() {
//   console.log("Hello");
// }

// вызов функции
// sayHello();
// sayHello();

// функции с аргументами
// firstName - параметр функции, переменная внутри функции
// function sayHello(firstName) {
//   console.log(`Hello, ${firstName}`);
// }
// "Ivan" - аргумент, передаваемый функции при ее вызове
// sayHello("Ivan");
// sayHello("Anna");

// function getSum(num1, num2) {
//   console.log(num1 + num2);
// }
// getSum(5, 8);
// getSum(2, 6);
// getSum(2, 7);
// getSum(5, 9);

// 2 задание
// напишите функцию, которая принимает имя клиента и возраст
// и выводит в консоль строку с приветствием, учитывая переданные данные
// 1
// function sayHello(firstName, age) {
//   console.log(`Hello ${firstName}! Your age is ${age}.`);
// }

// sayHello("Petya", 18);

//2
// function makeHelloString(customerName, customerAge) {
//   console.log(`Hello, ${customerName}, ${customerAge} years old!`);
// }

// makeHelloString("Ivan Ivanov", 23);

//3
// function getUser(firstName, age) {
//   console.log(`Привет ${firstName}, твой возраст ${age}`);
// }
// getUser("Илья", "23");

//4
// function getSum(num1, num2) {
//   console.log(`Hello ${num1}! ${num2}.`);
// }

// getSum("иван", 21);

// параметры по умолчанию
//1
/*
function sayHello(firstName) {
  // если значение параметра есть
  if (firstName) {
    console.log(`Hello, ${firstName}!`);
  } else {
    console.log(`Hello, user!`);
  }
}

sayHello();
sayHello("Segey");*/

//2
// function sayHello(firstName = "user", age) {
//   console.log(`Hello, ${firstName}!`);
// }

// sayHello();
// sayHello("Segey");

/**
 *
 * RETURN
 *
 */
/*
// функция для формирования строки с приветствием
function makeHelloString(customerName, customerAge) {
  let result = `Hello, ${customerName}, ${customerAge} years old!`;
  return result;
}
let greetStr = makeHelloString("Inna", 22);

// функция для оформления строки с приветствием в HTML элемент
function makeHTMLString(greet, element) {
  return `<${element}>${greet}</${element}>`;
}
let greetHTML = makeHTMLString(greetStr, "h1");
document.write(greetHTML);*/

// 3 задание
// напишите функцию, которая принимает на вход массив чисел
// и возвращает сумму элементов этого массива

//1
/*
function sumArray(array) {
  let sum = 0;
  for (let num of array) {
    if (typeof num != "number") {
      console.log("В массиве должны быть только числа");
      return 0;
    }
    sum += num;
  }
  return sum;
}
console.log(sumArray(numbers));
console.log(sumArray([1, 2, 3, 4, 5]));*/

//2
/*
let array = [1, 2, 3, 1];
let sum = 0;

function getSum(arr) {
  for (digit of arr) {
    if (arr.length) {
      sum += digit;
    }
  }
}

getSum(array);
getSum([1, 2, 3]);

console.log(sum);*/

//3
// function makeSum(someArr) {
//   let sum = 0;
//   for (let num of someArr) {
//     sum = sum + num;
//   }
//   return sum;
// }
// let sumResult = makeSum(numbers);
// console.log(sumResult);

//4
// function sum_array(array) {
//   let sum = 0;
//   for (let num of array) {
//     sum = sum + num;
//   }
//   return sum;
//
// }
// let array = [6, 3, 5, 8, 9, 3, 4, 5, 1, 6, 8, 9, 3, 4];
// console.log(sum_array(array));

/*
let age = 11;

function checkAge(userAge) {
  if (userAge >= 18) {
    return "+";
  } else {
    return "-";
  }
}

console.log(checkAge(age));*/

/*
function getCalc(num1, num2) {
  let sum = num1 + num2;
  let mult = num1 * num2;

  return { summa: sum, multiple: mult };
  // return { sum, mult };
}

let res = getCalc(4, 7);
console.log(res);*/
