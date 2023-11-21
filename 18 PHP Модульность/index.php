<?php
    $title = 'Главная страница';
    $headerTitle = 'Шапка главной страницы';
    $footerTitle = 'Подвал главной страницы';

    // подключаем шапку сайта
    include 'components/header.php';
?>

    <div class="main-page">
        <h2>Главная страница</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias consequuntur culpa dignissimos ducimus, earum fugit illum in laborum, minima omnis perferendis provident quasi repellat sequi similique sunt tempore totam.</p>
    </div>

<?php
    require 'components/footer.php';
?>