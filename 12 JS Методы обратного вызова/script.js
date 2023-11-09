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

/**
 * find
 */
// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];

/*
let myAnimal = animals.find(function (animal) {
  return animal === "duck";
});
console.log(myAnimal);
*/

/*
let myAnimal = animals.find(function (animal) {
  return animal === "lion";
});
console.log(myAnimal);*/

/*
let myAuthor = authors.find(function (author) {
  return author.id === 8;
});
console.log(myAuthor);
*/

/*
let myAuthor = authors.find(function (author) {
  return author.lastName === "Толстой";
});
console.log(myAuthor);*/

// 1 задание
// в массиве cart найдите элемент с ценой больше 5

//1
// let myItem = cart.find((item) => item.price > 5);
// console.log(myItem);

//2
// let someItem = cart.find(function (item) {
//   return item.price > 5;
// });

// console.log(someItem);

//3
// let mySearchItem = cart.find((item) => {
//   return item.price > 5;
// });
// console.log(mySearchItem);

// получить товар, итоговая сумма за который больше или равно 30
// let mySearchItem = cart.find(function (cartElement) {
//   return cartElement.price * cartElement.qty >= 30;
// });
// console.log(mySearchItem);

/**
 * filter
 */
// let numbers = [6, 3, 5, 8, 1, 9, 3, 4, 5, 1, 6, 8, 9, 3, 4];
/*
let newNum = numbers.find(function (num) {
  return num === 3;
});
console.log(newNum);
*/

/*
let newNums = numbers.filter(function (num) {
  return num === 3;
});
console.log(newNums);*/

/*
let newNums = numbers.filter(function (num) {
  return num ** 2 < 3;
});
console.log(newNums);*/

// найти всех пользователей с фамилией Иванов или Иванова
/*
let myUsers = users.filter(function (user) {
  return user.lastName === "Иванов" || user.lastName === "Иванова" || user.firstName === "Анна";
});
console.log(myUsers);*/

//2 задание
// получите из массива cart только элементы
// с ценой за позицию больше 5

//1
// let someItems = cart.filter((item) => item.price > 5);
// console.log(someItems);

//2
// let myItems = cart.filter((item) => item.price * item.qty > 5);
// console.log(myItems);

//3
// let sumCart = cart.filter(function (sum) {
//   return sum.price * sum.qty > 5;
// });
// console.log(sumCart);

/**
 * reduce
 */
// let numbers = [6, 3, 5, 8, 1, 9, 3, 4, 5, 1, 6, 8, 9, 3, 4];

// получение суммы
/*
let sum = 0;
numbers.forEach(function (num) {
  sum += num;
});
console.log(sum);
*/

// получить массив четных чисел
/*
let evenNums = [];
numbers.forEach(function (num) {
  // проверяем, четное ли число
  if (num % 2 === 0) {
    evenNums.push(num);
  }
});
console.log(evenNums);*/
/*
let evenNums = numbers.map(function (num) {
  if (num % 2 === 0) {
    return num;
  }
});
console.log(evenNums);*/

// let evenNums = numbers.filter((num) => num % 2 === 0);
// console.log(evenNums);

// сумма через reduce
// let numbers = [6, 3, 5, 8, 1, 9, 3, 4, 5, 1, 6, 8, 9, 3, 4];
// let sum = numbers.reduce(function (acc, num) {
//   return acc + num;
// }, 0);
// console.log(sum);
// 1: acc = 0, num = 6, return = 6
// 2: acc = 6, num = 3, return = 9
// 3: acc = 9, num = 5, return = 14
// 4: acc = 14, num = 8, return = 22

// let sum = numbers.reduce((acc, num) => acc + num, 0);
// console.log(sum);

// let sum = numbers.reduce((accumulator, num) => accumulator + num);
// console.log(sum);

// сумма товаров по корзине
// let sum = cart.reduce((acc, item) => acc + item.qty * item.price, 0);
// console.log(sum);

/*
// формирование объекта
let excludeFiveNums = numbers.reduce(
  function (acc, num) {
    if (num > 5) {
      acc["More then 5"].push(num);
    }
    if (num < 5) {
      acc["Less then 5"].push(num);
    }
    if (num === 5) {
      acc["Five"].push(num);
    }
    return acc;
  },
  { "More then 5": [], "Less then 5": [], Five: [] }
);
console.log(excludeFiveNums);*/

//3 задание
// let fruits = ["Киви", "Кокос", "Апельсин", "Банан", "Яблоко"];
// получите из массива friuts одну строку

//1
// let string = fruits.reduce((acc, item) => acc + ", " + item);
// console.log(string);

//2
// let myMixedFruits = fruits.reduce((string, word) => `${string}, ${word}`);
// console.log(myMixedFruits);

//3
// let fruits = ["Киви", "Кокос", "Апельсин", "Банан", "Яблоко"];
// let str = fruits.reduce(function (acc, item) {
//   return acc + " " + item;
// });
// console.log(str);

/*
// нахождение максимума
// let numbers = [6, 3, 5, 8, 1, 9, 3, 4, 5, 1, 6, 8, 9, 3, 4];
let maxNumber = numbers.reduce(function (max, num) {
  // если текущий элемент массива больше максимума
  if (num > max) {
    // обновляем максимум
    return num;
  } else {
    // иначе, оставляем текущий максимум
    return max;
  }
});
// 1: max = 6, num = 3, return = 6
// 2: max = 6, num = 5, return = 6
// 3: max = 6, num = 8, return = 8
console.log(maxNumber);*/

/*
// найти цену самого дорогого товара в корзине
let maxPrice = cart.reduce(function (max, item) {
  // если стоимость текущего товара больше максимума
  if (item.price > max) {
    return item.price;
  } else {
    return max;
  }
}, 0);
console.log(maxPrice);
*/

/*
// найти самый дорогой товар (объект) в корзине
let maxPrice = cart.reduce(function (max, item) {
  // если стоимость текущего товара больше, чем стоимость товара с максимальным ценником на текущий момент
  if (item.price > max.price) {
    return item;
  } else {
    return max;
  }
});
console.log(maxPrice);*/

/*
let objKeys = ["firstName", "lastName", "age"];
let objValues = ["Иван", "Сидоров", 11];

let student = {
  firstName: "Иван",
  lastName: "Сидоров",
  age: 11,
};
*/

/*
let objKeys = ["firstName", "lastName", "age", "hobby"];
let objValues = ["Иван", "Сидоров", 11, "Гулять"];

// let student = objKeys.reduce(function (studentData, key, i) {
//   studentData[key] = objValues[i];
//   return studentData;
// }, {});
// console.log(student);

// for
let student = {};
for (let i = 0; i < objKeys.length; i++) {
  student[objKeys[i]] = objValues[i];
}
console.log(student);
*/

/**
 * sort
 */
