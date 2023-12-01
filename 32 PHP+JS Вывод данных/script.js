// получаем контейнер для вставки книг
let booksContainer = document.querySelector('#books');
let showBooksBtn = booksContainer.children[0];// кнопка для загрузки книг

/**
 * функция для преобразования массива в строку
 * и отображения на странице
 */
function showBooks(books){
    // формируем из массива объектов строку
    let output = books.reduce(function (accStr, book){
        return accStr + `
           <div class="book">
                <h3>${book.title}</h3>
                <p>${book.description}</p>
                <p>Автор: <a href="author_detail.php?id=${book.authorId}">${book.firstName} ${book.lastName}</a></p>
                <a href="book_detail.php?id=${book.bookId}">Подробнее...</a>
           </div>
        `
    }, '');

    /*
    // формируем из массива объектов массив строк
    let output = books.map(function(book){
        return `
            <div class="book">
                <h3>${book.title}</h3>
                <p>${book.description}</p>
                <p>Автор: <a href="author_detail.php?id=${book.authorId
                    }">${book.firstName} ${book.lastName}</a></p>
                <a href="book_detail.php?id=${book.bookId}">Подробнее...</a>
            </div>
        `;
    });
    // объединяем массив строк в одну строку
    output = output.join('');
    */

    // выводим в документ сформированную строку
    booksContainer.insertAdjacentHTML('beforeend', output);
}


/**
 * получаем данные о книгах
 */
async function getBooks(){
    let response = await fetch('server/get_books.php');
    //console.log(response);

    if(!response.ok){// если от сервера нет ответа
        booksContainer.insertAdjacentHTML('beforeend', '<h2>Данные не получены</h2>');
        return;
    }

    let books = await response.json();

    // показываем книги
    showBooks(books);
}
//getBooks();

/**
 * при нажатии на кнопку отправлятся запрос на сервер
 */
showBooksBtn.addEventListener('click', function(){
    getBooks();
    showBooksBtn.disabled = true;
});
