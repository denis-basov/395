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

// методы
/*
let student = {
  firstName: "Иван",
  lastName: "Петров",
  age: 22,
  getStudentInfo: function () {
    return `Имя: ${this.firstName}, фамилия: ${this.lastName}, возраст: ${this.age}.`;
  },
  sayHi(name) {
    console.log(`Hi, ${name}`);
  },
};
*/
// student.sayHi("Инна");
// console.log(student.getStudentInfo());

//console.log(student);

/**
 * push
 */
// let fruits = ["Киви", "Кокос", "Апельсин", "Банан", "Яблоко"];
// let arrLen = fruits.push("Кокос", "Ананас");
// console.log(arrLen);
//console.log(fruits);

/**
 * pop
 */
// let lastEl = fruits.pop();
// console.log(fruits);
// console.log(lastEl);

/*
const object1 = {
  a: 'somestring',
  b: 42,
  c: false,
};

console.log(Object.values(object1));
// Expected output: Array ["somestring", 42, false]*/

/*



let student = {
  firstName: "Иван",
  lastName: "Петров",
  age: 22,
};

let studentArr = [];
for (let key in student) {
  studentArr.push(student[key]);
}
console.log(studentArr.join());
*/

/**
 * Shift
 */
// let fruits = ["Киви", "Кокос", "Апельсин", "Банан", "Яблоко"];
// console.log(fruits);
// fruits.shift();
// console.log(fruits);

/**
 * unshift
 */
// fruits.unshift("Ананас");
// console.log(fruits);

// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
// 1 задание
// переместите элемент массива со значением "dog" из конца массива
// в его начало

//1
// console.log(animals);
// animals.unshift(animals.pop());
// console.log(animals);

//2
// let lastEl = animals.pop();
// animals.unshift(lastEl);
// console.log(animals);

//3
// let lastEl = animals[animals.length - 1];
// animals.pop();
// animals.unshift(lastEl);
// console.log(animals);

//4
// animals(unshift(animals.pop()));
// animals.unshift(animals.pop());
// console.log(animals);

/**
 * slice - копия части массива
 */
// let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
// let petsPart = pets.slice(3);
// console.log(pets);
// console.log(petsPart);

// let petsPart = pets.slice(1, 5);
// console.log(pets);
// console.log(petsPart);

// let petsPart = pets.slice();
// console.log(pets);
// console.log(petsPart);

/**
 * копирование массива
 */
/*
// копирование по ссылке
let newPets = pets;
newPets.pop();

console.log(pets);
console.log(newPets);*/

/*
// копирование по значению
let petsPart = pets.slice();
petsPart.pop();

console.log(pets);
console.log(petsPart);*/

/*
// копирование с пом. concat
let newPets = pets.concat();
newPets.pop();

console.log(pets);
console.log(newPets);*/

/**
 * splice
 */
// let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
// let newPets = pets.splice(4, 0, "duck", "bison");

// console.log("Исходный массив", pets);
// console.log("Удаленные элементы", newPets);

// let fruits = ["Киви", "Кокос", "Апельсин", "Банан", "Яблоко"];
// 2 задание. Сформируйте на основе исходного массива новый.
// ["Киви", "Кокос", "Банан", "cat", "dog", "Яблоко"]

// 1
/*
let catDog = pets.splice(0, 2); // ["cat", "dog"]
console.log(catDog);
fruits.splice(2, 1); // удаляем апельсин
console.log(fruits);
fruits.splice(3, 0, ...catDog); // добавляем элементы
console.log(fruits);*/

//2
/*
fruits.splice(2, 1);
fruits.splice(3, 0, 'cat', 'dog');
console.log(fruits);*/

//3
// fruits.splice(2, 2, "Банан", "cat", "dog");
// console.log(fruits);

/**
 * sort
 */
// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
// animals.sort();
// console.log(animals);

// animals.sort().reverse();

// numbers.sort();
// console.log(numbers);

// let nums = [1, 11, 21, 25, 74, 34, 8, 99, 111, 15, 26, 8, 4];
// nums.sort();
// console.log(nums);
