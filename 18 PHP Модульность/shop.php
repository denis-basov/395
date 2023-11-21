<?php
    $title = 'Каталог товаров';
    $headerTitle = 'Шапка магазина';
    $footerTitle = 'Подвал магазина';

    // подключаем шапку сайта
    require 'components/header.php';
?>

<div class="shop-page">
    <h2>Каталог товаров</h2>

    <div class="products-list">
        <div class="product-item">
            <h3>Lorem ipsum dolor sit amet.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, repudiandae.</p>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="product-item">
            <h3>Lorem ipsum dolor sit amet.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, repudiandae.</p>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="product-item">
            <h3>Lorem ipsum dolor sit amet.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, repudiandae.</p>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="product-item">
            <h3>Lorem ipsum dolor sit amet.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, repudiandae.</p>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="product-item">
            <h3>Lorem ipsum dolor sit amet.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, repudiandae.</p>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
</div>

<?php
require 'components/footer.php';
?>
