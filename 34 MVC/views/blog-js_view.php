<!-- шаблон (view) страницы блога JS-->
<?php
    require 'components/header.php';
?>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                    <span>Blog</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">

        <div class="row" id="news-container"></div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="#" id="more-news" class="primary-btn load-btn">Ещё новости</a>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

<!-- Instagram Begin -->
<?php
    require 'components/instagram.php';
?>
<!-- Instagram End -->

<?php
    require 'components/footer.php';
?>