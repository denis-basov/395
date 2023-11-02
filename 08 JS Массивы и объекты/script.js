// console.log(fruits);
// console.log(fruits.length);
// console.log(animals[4]);
// console.log(fruits[3]);
// console.log(pets[77]);

// 1 задание
// Сформируйте строку: 'Мое любимое число: 1, фрукт: Яблоко, животное: duck'

//1
// console.log(`Мое любимое число: ${numbers[8]}, фрукт: ${fruits[5]}, животное: ${animals[3]}`);

//2
// let str = `Мое любимое число: ${numbers[8]}, фрукт: ${fruits[5]}, животное: ${animals[3]}`;
// console.log(str);

//3
// let str = `Мое любимое число: ${numbers[8]}, фрукт: ${fruits[5]}, животное: ${animals[3]}`;
// console.log(str);

// модификация массива
// mix[1] = "Bye";
// mix[0] = "dog";
// mix[6] = undefined;
// mix[7] = "apple";

// mix = 'hello';
// console.log(mix);

// join - объединение массива в строку
/*
let fruitsStr = fruits.join(", ");

console.log(fruitsStr);
document.write(fruitsStr); // вывод в документ
*/

/*
let petsStr = `<p class="pets">${pets.join(", ")}</p>`;
console.log(petsStr);
document.write(petsStr);*/

/**
 *  <ul>
 * 
      <li>cat<li></li>dog</li><li>bat</li><li>mouse</li>

    </ul>
 */
// let petsList = `<ul><li>${pets.join("</li><li>")}</li></ul>`;
// console.log(petsList);
// document.write(petsList);

// const и массивы
// const mix = [42, "hello", true, null, undefined, false, [1, 2, 3]];
// mix[0] = 456;
// mix[7] = 123;
// mix = "hello";

// console.log(mix);

/*
// получение последнего элемента массива
let lastIndex = pets.length - 1;
console.log(lastIndex);
console.log(pets[lastIndex]);
*/

/**
 * Объекты
 */
// let firstName = "Иван";
// let lastName = "Петров";
// let age = 22;
// let country = "Россия";

let user = {
  firstName: "Иван",
  lastName: "Петров",
  age: 22,
  hobbies: ["Играть на скрипке", "Готовить еду", "Гулять с собакой"],
  country: "Россия",
  "my-phone": "98237392",
  pets: {
    cat: ["Барсик", "Мурка"],
    dog: "Шарик",
    mouse: "Кнопка",
  },
};
// console.log(user);
// console.log(user.firstName);
// console.log(user.lastName);
// console.log(user.age);
// console.log(user.hobbies);
// console.log(user.hobbies[2]);

// console.log(user["my-phone"]);

// let prop = "firstName";
// console.log(user[prop]);

// user.age += 1;
// user["my-phone"] = "234286395";
// user.city = "Пермь";
// console.log(user);

// console.log(user.pets.dog);
// console.log(user.pets.cat[1]);

let post = {
  title: "Тайные наброски Микеланджело открыты в церкви во Флоренции",
  description: `Тайные наброски Микеланджело открыты в церкви во Флоренции
  Тайные наброски Микеланджело под церковью во Флоренции открыты для публики. Великий художник провел месяцы в камере под капеллами Медичи, чтобы избежать смертного приговора, вынесенного папой Климентом VII.`,
  addDate: "2023-11-01 10:21:00",
  categories: ["КУЛЬТУРА", "ИСТОРИЯ"],
  author: "АНДРЕЙ ЯШЛАВСКИЙ",
  views: 441,
};

// let postStr = `
//   <div class="post">
//     <h2>${post.title}</h2>
//     <p>${post.description}</p>
//     <div class="post-info">
//       <span>Дата публикации: ${post.addDate}</span>
//       <span>Категория: ${post.categories.join(", ")}</span>
//       <span>Автор: ${post.author}</span>
//       <span>Просмотры: ${post.views}</span>
//     </div>
//   </div>
// `;

// 1 - получение элемента из документа
//let container = document.querySelector("#container");
// 2 - вставка сформированной строки внутрь выбранного элемента
//container.insertAdjacentHTML("beforeend", postStr);

// массив объектов

// console.log(users[2].firstName[1]);
//console.log(users);
// console.log(users[1].hobby[1][6]);
//console.log(users[1]);

// let testUser = {
//   firstName: "Анна",
//   lastName: "Иванова",
//   hobby: ["Спать", "Плавать"],
// };

// console.log(testUser.hobby[1]);

// 1 задание
// получите строку на стнове массива объектов
// Имя: Иван, фамилия: Петров, хобби: Плавать, Есть

//1
// console.log(`Имя: ${users[0].firstName}, фамилия: ${users[2].lastName}, хобби: ${users[1].hobby[1]}, ${users[2].hobby[1]}`);

//2
// let string = `Имя: ${users[0].firstName}, фамилия: ${users[2].lastName}, хобби: ${users[1].hobby[1]}, ${users[2].hobby[1]}`;
// console.log(string);

//3
// console.log(`Имя: ${users[0].firstName}, фамилия: ${users[2].lastName}, хобби: ${users[1].hobby[1]}, ${users[2].hobby[1]}`);
