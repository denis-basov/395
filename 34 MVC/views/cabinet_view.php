<!-- шаблон (view) страницы лк -->
<?php
    require 'components/header.php';
?>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="/"><i class="fa fa-home"></i> Домой</a>
                    <span><span><?=$title ?? ''?></span></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Blog Details Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="blog__details__content">
                    <div class="blog__details__item">
                        <img src="<?=$userInfo['image']?>" alt="<?=$userInfo['first_name']?> <?=$userInfo['last_name']?>">
                        <div class="blog__details__item__title">
                            <span class="tip">ID: <?=$userInfo['id']?></span>
                            <h4><?=$userInfo['first_name']?> <?=$userInfo['last_name']?></h4>
                        </div>
                    </div>

                    <div class="blog__details__desc">
                        <p>Логин: <span><?=$userInfo['login']?></span></p>
                        <p>Электронная почта: <span><?=$userInfo['email']?></span></p>
                        <p>Дата регистрации: <span><?=$userInfo['add_date']?></span></p>
                    </div>

                    <?php foreach($comments as $comment):?>
                        <div class="blog__comment__item mb-5">
                            <div class="blog__comment__item__text">
                                <h6><a href="blog-details.php?newsId=<?=$comment['news_id']?>"><?=$comment['news_title']?></a></h6>
                                <p><?=str_replace("\r\n", '</p><p>', $comment['comment'])?></p>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> <?=$comment['add_date']?></li>
                                    <li><i class="fa fa-clock-o"></i> Удалить</li>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->


<!-- Instagram Begin -->
<?php
    require 'components/instagram.php';
?>
<!-- Instagram End -->

<?php
    require 'components/footer.php';
?>
