/*
// рекурсия, переполнение стека вызовов
function printHello() {
  console.log("Hello");

  printHello();
}

printHello();*/

/*
function getNum(num) {
  console.log(num);

  if (num === 20) {
    return;
  }
  num++;

  getNum(num);
}
getNum(1);
*/

// fetch("https://jsonplaceholder.typicode.com/posts/1")
//   .then((response) => response.json())
//   .then((json) => console.log(json));

/*
let getInfo = async function () {
  // отправляем запрос на внеший сервер, получаем данные и сохраняем в переменной
  let response = await fetch("https://jsonplaceholder.typicode.com/posts/45");
  // если данные не получены, выходим из функции
  if (!response.ok) return;
  // получаем сами данные в нужном формате
  let data = await response.json();
  console.log(data);
};
getInfo();
*/

/**
 * получение и вывод данных в документ
 */
/*
let photosContainer = document.querySelector(".photos");

// получаем данные от внешнео сервера
let getInfo = async function () {
  let response = await fetch("https://jsonplaceholder.typicode.com/photos/77");
  let data = await response.json();
  console.log(data);

  // формируем строку для вывода в документ
  let output = `<div class="photo">
                    <h2>ID: ${data.id}. ${data.title}</h2>
                    <img src="${data.url}" alt="${data.title}">
                </div>`;
  photosContainer.insertAdjacentHTML("beforeend", output);
};
getInfo();
*/

/**
 * получение данных о странах
 */
let countriesContainer = document.querySelector(".countries");

function showCountry(country) {
  //console.log(country);

  // форматируем число
  //   country.area = new Intl.NumberFormat("ru").format(country.area);
  //   country.population = new Intl.NumberFormat("ru").format(country.population);

  /*
  // проверяем, есть ли граничащие страны
  let borders;
  if (!country.borders) {
    borders = "Граничащих стран нет";
  } else {
    borders = country.borders.join(", ");
  }*/

  let output = `<div class="country">
                    <div class="country-img">
                        <img src="${country.coatOfArms.svg}" alt="Герб страны ${country.translations.rus.official}">
                        <img src="${country.flags.svg}" alt="${country.flags.alt}">
                    </div>
                    <h2>${country.translations.rus.official}</h2>
                    <p>Площадь: <span>${country.area.toLocaleString()}</span> км/кв</p>
                    <p>Население: <span>${country.population.toLocaleString()}</span> чел.</p>
                    <p>Столица: <span>${country.capital[0]}</span></p>
                    <p>FIFA: <span>${country.fifa ?? "-"}</span></p>
                    <p>Граничащие страны: <span>${country.borders ? country.borders.join(", ") : "Граничащих стран нет"}</span></p>
                </div>`;

  countriesContainer.insertAdjacentHTML("beforeend", output);
}

async function getCountryInfo(name) {
  let response = await fetch(`https://restcountries.com/v3.1/name/${name}`);
  let data = await response.json();

  showCountry(data[0]);
}
getCountryInfo("russia");
getCountryInfo("peru");
getCountryInfo("japan");
