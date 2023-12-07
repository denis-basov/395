<!-- шаблон (view) страницы блога-->
<?php
//DBConnect::d($newsList);

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
                        <a href="blog-details.php?newsId=<?=$newsItem['id']?>">
                            <div class="blog__item__pic set-bg" data-setbg="<?=$newsItem['image']?>"></div>
                        </a>

                        <div class="blog__item__text">
                            <h6><a href="blog-details.php?newsId=<?=$newsItem['id']?>"><?=$newsItem['title']?></a></h6>
                            <ul>
                                <li><span><?=$newsItem['first_name']?> <?=$newsItem['last_name']?></span></li>
                                <li><?=$newsItem['add_date']?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

<!--            <div class="col-lg-12 text-center">-->
<!--                <a href="#" class="primary-btn load-btn">Ещё новости</a>-->
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