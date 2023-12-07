/**
 * получение и отображение списка новостей
 */
(function (){
    let countNewsItems = null;// кол-во новостей


    let newsContainer = document.querySelector('#news-container');// контейнер для новостей
    let moreNewsBtn = document.querySelector('#more-news');// кнопка для подгрузки

    if(!newsContainer || !moreNewsBtn)return;// если элементов на странице нет, выходим из функции

    let start = 0;// начальная строка в БД, с кторой начинаем выборку
    let limit = 3;// кол-во новостей в запросе


    /**
     * функция для формирования строки из массива объектов и вывода в документ
     */
    function showPosts(newsList){
        // формируем строку из массива
        let output = newsList.reduce(function(acc, value){
            return acc + `
                 <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <a href="blog-details.php?newsId=${value.id}">
                            <div class="blog__item__pic set-bg" style="background-image: url('${value.image}')"></div>
                        </a>
                        <div class="blog__item__text">
                            <h6><a href="blog-details.php?newsId=${value.id}">${value.title}</a></h6>
                            <ul>
                                <li><span>${value.first_name} ${value.last_name}</span></li>
                                <li>${value.add_date}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            `;
        }, '');

        // выводим строку в документ
        newsContainer.insertAdjacentHTML('beforeend', output);
    }

    /**
     * функция для получения новостей от сервера
     */
    async function getPosts(){
        let response = await fetch(`server/getNewsList.php?start=${start}&limit=${limit}`);
        let newsList = await response.json();

        showPosts(newsList);

        // если новости кончились, скрываем кнопку
        if(newsList.length < limit){
            moreNewsBtn.style.display = 'none';
        }

    }
    getPosts();


    /**
     * подгрузка новостей при клике на кнопку
     */
    moreNewsBtn.addEventListener('click', function(event){
        event.preventDefault();// отменяем стандартное поведение браузера при переходе по ссылке

        start += limit;// увеличиваем строку начала выбора на значение кол-ва новостей в выборке
        getPosts();

    });

})();