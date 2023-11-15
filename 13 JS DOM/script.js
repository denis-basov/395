/**
 * document.getElementById()
 */
// let head1 = document.getElementById("head-1");
// console.dir(head1);
// head1.textContent = "Hello";

/*
let pressBtn = document.getElementById("press-btn"); // получаем кнопку
// при клике на кнопку
pressBtn.addEventListener("click", function () {
  pressBtn.textContent = "Кнопка нажата";
  pressBtn.style.color = "red";
});*/

/**
 * q u e r y S e l e c t o r - выбор ОДНОГО элемента
 */
// let buttonEl = document.querySelector("button");
// console.log(buttonEl);

// let parEl = document.querySelector("p");
// console.log(parEl);

// let head1 = document.querySelector("#head-1");
// console.log(head1);

// let usersEl = document.querySelector(".users");
// console.log(usersEl);
// console.dir(usersEl);

// let userEl = document.querySelector(".user");
// console.log(userEl);

// let user1Img = document.querySelector(".users .user img");
// console.log(user1Img);

/**
 * получаем элемент относительно другого элемента
 */
/*
let user1Img = document.querySelector(".users .user img"); // исходная картинка
let parent = user1Img.parentElement; // родитель картинки
let nextUser = parent.nextElementSibling; // сосед родителя картинки
let targetImage = nextUser.children[0]; // получаем картинку
console.log(targetImage);*/

// let imageUser2 = document.querySelector(".users .user-2 img");
// console.log(imageUser2);

// 1 задание
// получите элемент <h2>Имя: Петр. Фамилия: Сидоров</h2>
// получите элемент <li>Гулять</li>
//1
/*
let user1Name = document.querySelector(".users .user-1 h2");
console.log(user1Name);

let hobby2 = document.querySelector(".users .user-2 ol li");
console.log(hobby2);
console.log(hobby2.nextElementSibling);*/

//2
/*
let someParUserName = document.querySelector(".users .user-1 h2");
console.log(someParUserName);

let someListItem = document.querySelector(".users .user-2 ol li");
let myListItem = someListItem.nextElementSibling;
console.log(myListItem);*/

// выборка при помощи псевдо-класса
// let hobby2 = document.querySelector(".user-2 ol li:nth-of-type(2)");
// console.log(hobby2);
// console.log(hobby2.textContent);

/**
 * q u e r y S e l e c t o r A l l - выбор коллекции элементов
 */
/*
let parsCollection = document.querySelectorAll("p");

// превращаем nodeList в массив
parsCollection = [...parsCollection];

console.log(parsCollection);

// parsCollection.forEach(function (par) {
//   console.log(par.textContent);
// });

let parTexts = parsCollection.map(function (par) {
  return par.textContent;
});
console.log(parTexts);*/

// получаем все элементы списка user-1
// let user1Hobbies = document.querySelectorAll(".users .user-1 ol li");
// console.log(user1Hobbies);

// let user1Hobbies = document.querySelectorAll(".user-1 li");
// console.log(user1Hobbies);

// выбор всех пользователей
/*
let users = document.querySelectorAll(".users .user");

users = [...users];
console.log(users);

// перебираем массив с пользователями и меняем каждому из них стили
users.forEach(function (user) {
  user.style.background = "rgb(200, 200, 200)";
  user.style.color = "orange";
});*/

/**
 * обработка кнопок добавления в друзья
 */
/*
// 1. получаем все кнопки
let addBtns = document.querySelectorAll(".add-to-friends");
console.log(addBtns);

// 2. перебираем кнопки
addBtns.forEach(function (btn) {
  // 3. на каждую кнопку добавляем обработчик события по клику
  btn.addEventListener("click", function () {
    btn.textContent = "В друзьях";
    btn.style.background = "blue";
    btn.style.color = "white";

    // получаю родителя кнопки
    let parent = btn.parentElement;
    parent.style.background = "rgb(172, 212, 244)";
    parent.style.border = "2px solid rgb(213, 231, 246)";
  });
});
*/

/**
 * смена стилей туда-обратно
 */
/*
// 1. получаем все кнопки
let addBtns = document.querySelectorAll(".add-to-friends");

// 2. перебираем кнопки
addBtns.forEach(function (btn) {
  // 3. на каждую кнопку добавляем обработчик события по клику
  btn.addEventListener("click", function () {
    // получаю родителя кнопки
    let parent = btn.parentElement;

    // если на кнопке надпись - 'Добавить в друзья'
    if (btn.textContent === "Добавить в друзья") {
      // меняем стили и текст
      btn.textContent = "В друзьях";
      btn.style.background = "blue";
      btn.style.color = "white";

      parent.style.background = "rgb(172, 212, 244)";
      parent.style.border = "2px solid rgb(213, 231, 246)";
    } else {
      // иначе (если любая другая надпись)
      // возвращаем все в исходное состояние
      btn.textContent = "Добавить в друзья";
      btn.style.background = "buttonface";
      btn.style.color = "black";

      parent.style.background = "rgb(213, 231, 246)";
      parent.style.border = "2px solid transparent";
    }
  });
});*/

/**
 * innerText
 * textContent
 */
// let par1 = document.querySelector("#par-1");
// console.log(par1.textContent);
// console.log(par1.innerText);

// let user1 = document.querySelector(".user-1");
// console.log(user1.textContent);
// console.log(user1.innerText);
// user1.textContent = "Hello";

/**
 * innerHTML
 */
// let par1 = document.querySelector("#par-1");
// console.log(par1.textContent);
// console.log(par1.innerHTML);

/*
let user1 = document.querySelector(".user-1");
console.log(user1.textContent);
console.log(user1.innerHTML);
user1.textContent = "<h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate, voluptate?</h1>";
user1.innerHTML = "<h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate, voluptate?</h1>";*/

/**
 * копируем первого пользователя в <div class="user user-3"></div>
 */
/*
// получаем элементы
let user1 = document.querySelector(".user-1");
let user3 = document.querySelector(".user-3");

// сохраняем содержимое в переменную
let user1InnerHTML = user1.innerHTML;
user3.innerHTML = user1InnerHTML;*/

// 1 задание
// - Поместите картинку с первым рабочим вместо второй картинки.
// - Поменяйте картинки работников местами.

//1
/*
let worker1 = document.querySelector("#worker-1");
let worker2 = document.querySelector("#worker-2");
let worker2InnerHTML = worker2.innerHTML;
worker2.innerHTML = worker1.innerHTML;
worker1.innerHTML = worker2InnerHTML;*/

//2
/*
let worker1Img = document.querySelector("#worker-1");
let worker2Img = document.querySelector("#worker-2");

// 1 пункт
//worker2Img.innerHTML = worker1Img.innerHTML;

// 2 пункт
let temp_img = worker1Img.innerHTML;

worker1Img.innerHTML = worker2Img.innerHTML;
worker2Img.innerHTML = temp_img;*/

//3
/*
let firstWorker = document.querySelector("#worker-1");
let secondWorker = document.querySelector("#worker-2");
let img = secondWorker.innerHTML;
secondWorker.innerHTML = firstWorker.innerHTML;
firstWorker.innerHTML = img;*/

//4
/*
let worker1 = document.querySelector("#worker-1");
let worker2 = document.querySelector("#worker-2");

// сохраняем картинку второго работника
let worker2img = worker2.innerHTML;

// вместо картинки второго работника ставим первую картинку
worker2.innerHTML = worker1.innerHTML;
// из сохраненной переменной восствнавливаем значение картинки второго работника
worker1.innerHTML = worker2img;*/

//5
/*
let worker1 = document.querySelector("#worker-1");
let worker2 = document.querySelector("#worker-2");

// сохраняем картинку первого работника
let worker1img = worker1.innerHTML;
// сохраняем картинку второго работника
let worker2img = worker2.innerHTML;

// кладем в первого работника картинку второго
worker1.innerHTML = worker2img;
// кладем во второго работника картинку первого
worker2.innerHTML = worker1img;*/

/**
 * смена картинок по нажатию на кнопку
 */
/*
let pressBtn = document.getElementById("press-btn");
let worker1 = document.querySelector("#worker-1");
let worker2 = document.querySelector("#worker-2");

pressBtn.addEventListener("click", function () {
  let worker1img = worker1.innerHTML;
  let worker2img = worker2.innerHTML;

  worker1.innerHTML = worker2img;
  worker2.innerHTML = worker1img;
});*/

/**
 * value
 */
/*
let firstName = document.querySelector("#firstName");
let firstNameError = document.querySelector("#firstNameError");

// активация поля ввода
// firstName.addEventListener("focus", function () {
//   console.log("focus");
// });

// ждем событие, когда фокус покинет поле ввода
firstName.addEventListener("blur", function () {
  // получаем введенное значение и удаляем пробелы с концов строки
  let value = firstName.value.trim();

  // if (!value) {
  //   console.log("Поле не должно быть пустым");
  // }

  // если клиент ничего не ввел
  if (value.length === 0) {
    // вставляем в спан текст с ошибкой
    firstNameError.textContent = "Поле не должно быть пустым";
    // задаем полю красный бордер и фон
    firstName.style.border = "1px solid red";
    firstName.style.background = "rgb(253, 217, 217)";
  } else {
    // если введенное значение не пустое
    // убираем ошибку и меняем стили обратно
    firstNameError.textContent = "";
    firstName.style.border = "2px solid rgb(128, 255, 0)";
    firstName.style.background = "";
  }
});
*/

/**
 * parentElement
 * children
 */
// let user1List = document.querySelector(".users .user-1 ol");

/*
// parentElement
// получаю родителя списка
let parent = user1List.parentElement;
// на родителя вешаю обработчик по клику
parent.addEventListener("click", function () {
  parent.style.display = "none";
});
*/

// children
// получить элементы списка в виде массива строк
/*
//1
let listChildren = user1List.children;
console.log(listChildren);

let user2Hobbies = [];
for (let i = 0; i < listChildren.length; i++) {
  user2Hobbies.push(listChildren[i].textContent);
}
console.log(user2Hobbies);
*/

//2
/*
// получить элементы списка в виде массива строк
let listChildren = user1List.children;

// перекладываем элементы списка в массив
listChildren = [...listChildren];

let user2Hobbies = listChildren.map(function (element) {
  return element.textContent;
});

//let user2Hobbies = listChildren.map((element) => element.textContent);
console.log(user2Hobbies);
*/

/**
 * nextSibling / nextElementSibling
 * previousSibling / previousElementSibling
 */
/*
let user1List = document.querySelector(".users .user-1 ol");
console.log(user1List.nextElementSibling);
console.log(user1List.previousElementSibling);
*/

// получение неразмеченного текста
// let head3 = document.querySelector(".user-2 h3");
// console.log(head3.nextSibling);

/**
 * получение span при помощи nextElementSibling
 */
/*
let firstName = document.querySelector("#firstName");
let firstNameError = firstName.nextElementSibling;

// ждем событие, когда фокус покинет поле ввода
firstName.addEventListener("blur", function () {
  // получаем введенное значение и удаляем пробелы с концов строки
  let value = firstName.value.trim();

  // если клиент ничего не ввел
  if (value.length === 0) {
    // вставляем в спан текст с ошибкой
    firstNameError.textContent = "Поле не должно быть пустым";
    // задаем полю красный бордер и фон
    firstName.style.border = "1px solid red";
    firstName.style.background = "rgb(253, 217, 217)";
  } else {
    // если введенное значение не пустое
    // убираем ошибку и меняем стили обратно
    firstNameError.textContent = "";
    firstName.style.border = "2px solid rgb(128, 255, 0)";
    firstName.style.background = "";
  }
});
*/

/**
 * style
 */
/*
let user1 = document.querySelector(".user-1");

user1.style.backgroundColor = "blue";
user1.style.backgroundImage =
  "url(https://images.unsplash.com/photo-1682685797332-e678a04f8a64?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)";
user1.style.color = "orange";*/

/**
 * classList
 */
// add - добавление класса(ов) элементу
// let user1Hobbies = document.querySelector(".user-1 ol");

// при клике на список, добавляем класс hobbies
// user1Hobbies.addEventListener("click", function () {
//   user1Hobbies.classList.add("hobbies");
// });

// при клике на список, добавляем класс hidden
// user1Hobbies.addEventListener("click", function () {
//   user1Hobbies.classList.add("hidden");
// });

// user1Hobbies.addEventListener("click", function () {
//   user1Hobbies.classList.add("hobbies", "hidden");
// });

// remove - удаление классов
/*
let user2 = document.querySelector(".user-2");
console.dir(user2);

user2.addEventListener("click", function () {
  // удаление классов у самого элемента
  user2.classList.remove("user-2", "user");
  // удаление классов у соседнего элемента
  //user2.previousElementSibling.classList.remove("user-1", "user");
});
*/

/**
 * contains - проверяет есть ли класс у элемента
 */
// let head1 = document.getElementById("head-1");
// console.log(head1.classList.contains("test"));
// console.log(head1.classList.contains("head"));

/**
 * при нажатии на кнопку показывается форма
 * при повторном нажатии форма скрывается
 */
/*
// 1
// выбираем элементы
let showRegFormBtn = document.querySelector("#show-reg-form");
let regForm = document.querySelector(".reg-form");

// скрываем форму
regForm.classList.add("hidden");

// при нажатии на кнопку
showRegFormBtn.addEventListener("click", function () {
  // если класс hidden есть у формы
  if (regForm.classList.contains("hidden")) {
    // удаляем класс
    regForm.classList.remove("hidden");
  } else {
    // иначе, добавляем класс
    regForm.classList.add("hidden");
  }
});*/

//2
/*
// выбираем элементы
let showRegFormBtn = document.querySelector("#show-reg-form");
let regForm = document.querySelector(".reg-form");

// скрываем форму
regForm.classList.add("hidden");

// при нажатии на кнопку
showRegFormBtn.addEventListener("click", function () {
  // если класс есть, удаляем, если нет, добавляем
  regForm.classList.toggle("hidden");
});
*/

/**
 * createElement
 */
/*
let myPar = document.createElement("p");
myPar.textContent = "Hello, winter";
myPar.classList.add("hello");
myPar.id = "winter";

console.log(myPar);
*/

/**
 * создание элемента списка и добавление его в документ
 */
/*
// 1 создаем элемент
let liItem = document.createElement("li");
liItem.textContent = "Яблоко"; // <li>Яблоко</li>
// 2 получаем контейнер для вставки на страницу
let fruitsList = document.querySelector("#fruits");
// 3 добавляем элемент списка на страницу
fruitsList.insertAdjacentElement("beforeend", liItem);*/

/**
 * при клике на кнопку
 * берем элемент из массива
 * и помещаем в список
 */
//1
/*
let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
let addToListBtn = document.querySelector("#add-to-list");
let fruitsContainer = document.querySelector("#fruits");

// при клике на кнопку
addToListBtn.addEventListener("click", function () {
  // если длина массива не равна 0 (если массив не пустой)
  if (fruits.length !== 0) {
    // 1 получение последнего элемента массива
    let lastFruit = fruits.pop(); // 'Яблоко'
    // 2 создаем элемент (объект) списка <li>
    let fruitLiElement = document.createElement("li");
    // 3 помещаем полученное значение из массива в элемент
    fruitLiElement.textContent = lastFruit;
    // 4 добавляем полученный объект в список на странице
    fruitsContainer.insertAdjacentElement("afterbegin", fruitLiElement);
  }
  // если массив пуст, меняем текст на кнопке и блокируем ее
  if (fruits.length === 0) {
    addToListBtn.textContent = "Фруктов больше нет";
    addToListBtn.disabled = true;
  }
});*/

//2
/*
let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
let addToListBtn = document.querySelector("#add-to-list");
let fruitsContainer = document.querySelector("#fruits");

// при клике на кнопку
addToListBtn.addEventListener("click", function () {
  // если длина массива не равна 0 (если массив не пустой)
  if (fruits.length !== 0) {
    // 1 формирование элемента списка
    let fruitLiElement = `<li>${fruits.pop()}</li>`;

    // 2 добавляем полученный объект в список на странице
    fruitsContainer.insertAdjacentHTML("afterbegin", fruitLiElement);
  }
  // если массив пуст, меняем текст на кнопке и блокируем ее
  if (fruits.length === 0) {
    addToListBtn.textContent = "Фруктов больше нет";
    addToListBtn.disabled = true;
  }
});
*/

//3
/*
let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
let addToListBtn = document.querySelector("#add-to-list");
let fruitsContainer = document.querySelector("#fruits");

let addElementToList = function () {
  // если длина массива не равна 0 (если массив не пустой)
  if (fruits.length !== 0) {
    // 1 формирование элемента списка
    let fruitLiElement = `<li>${fruits.pop()}</li>`;

    // 2 добавляем полученный объект в список на странице
    fruitsContainer.insertAdjacentHTML("afterbegin", fruitLiElement);
  }
  // если массив пуст, меняем текст на кнопке и блокируем ее
  if (fruits.length === 0) {
    addToListBtn.textContent = "Фруктов больше нет";
    addToListBtn.disabled = true;
  }
};

// при клике на кнопку
addToListBtn.addEventListener("click", addElementToList);
*/

/**
 * getAttribute
 */
/*
let firstName = document.getElementById("firstName");
console.log(firstName.getAttribute("name"));
console.log(firstName.getAttribute("type"));
console.log(firstName.getAttribute("id"));
firstName.classList.add("test");
console.log(firstName.getAttribute("class"));
console.log(firstName.getAttribute("value")); // null
console.log(firstName.value); // ''
*/

/**
 * setAttribute
 */
/*
let pressBtn = document.getElementById("press-btn");
pressBtn.setAttribute("class", "head");
pressBtn.setAttribute("disabled", "");
pressBtn.setAttribute("style", "color:blue");

console.log(pressBtn);*/

/**
 * Задание 2.8. Дана кнопка. Привяжите к ней три анонимных обработчика двойного клика по ней. Пусть первый обработчик выводит число 1, второй обработчик - число 2, а третий - число 3.
 */
/*
let pressBtn = document.querySelector("#press-btn");

pressBtn.addEventListener("dblclick", function () {
  console.log(1);
});

pressBtn.addEventListener("dblclick", function () {
  console.log(2);
});

pressBtn.addEventListener("dblclick", function () {
  console.log(3);
});
*/

/*
let pressBtn = document.querySelector("#press-btn");
pressBtn.addEventListener("dblclick", function () {
  console.log("dblclick");
});

pressBtn.addEventListener("click", function () {
  console.log("click");
});

pressBtn.addEventListener("mousemove", function () {
  console.log("mousemove");
});
*/

/**
 * объект события
 */
/*
let pressBtn = document.querySelector("#press-btn");

pressBtn.addEventListener("mousemove", function (event) {
  console.log(event.target);
  // console.log(event.clientX, event.clientY);
});*/

/**
 * отмена стандартного поведения браузера
 */
let listener = document.querySelector("#listener");
listener.addEventListener("click", function (event) {
  event.preventDefault();// отменяем переход по ссылке

  console.log("hello");
});
