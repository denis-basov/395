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
