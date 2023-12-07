<!-- шаблон (view) страницы блога-->
<?php
DBConnect::d($newsList);

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
        <div class="row">

            <?php foreach ($newsList as $newsItem):?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-9.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#"><?=$newsItem['title']?></a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

<!--            <div class="col-lg-12 text-center">-->
<!--                <a href="#" class="primary-btn load-btn">Load more posts</a>-->
<!--            </div>-->
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