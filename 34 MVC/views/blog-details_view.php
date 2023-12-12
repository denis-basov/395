<!-- шаблон (view) страницы детального просмотра новости -->
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
                    <a href="blog.php">Блог</a>
                    <span><?=$newsItem['newsTitle']?></span>
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
            <div class="col-lg-8 col-md-8">
                <div class="blog__details__content">
                    <div class="blog__details__item">
                        <img src="<?=$newsItem['image']?>" alt="<?=$newsItem['newsTitle']?>">
                        <div class="blog__details__item__title">
                            <span class="tip <?=$newsItem['class_name']?>"><?=$newsItem['categoryTitle']?></span>
                            <h4><?=$newsItem['newsTitle']?></h4>
                            <ul>
                                <li>
                                    <a href="author-details.php?authorId=<?=$newsItem['authorId']?>">
                                        <span><?=$newsItem['first_name']?> <?=$newsItem['last_name']?></span>
                                    </a>
                                </li>
                                <li><?=substr($newsItem['add_date'], 10, 6)?></li>
                                <li>39 Comments</li>
                            </ul>
                        </div>
                    </div>

                    <div class="blog__details__desc">
                        <p><?=str_replace("\r\n\r\n", '</p></div><div class="blog__details__desc"><p>', $newsItem['text'])?>
                        </p>
                    </div>


                    <div class="blog__details__tags">
                        <?php foreach ($categoryList as $category):?>
                            <a href="category.php?categoryId=<?=$category['id']?>" class="<?=$category['class_name']?> text-white"><?=$category['translation']?></a>
                        <?php endforeach;?>
                    </div>
                    <div class="blog__details__btns">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__details__btn__item">
                                    <h6><a href="#"><i class="fa fa-angle-left"></i> Previous posts</a></h6>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__details__btn__item blog__details__btn__item--next">
                                    <h6><a href="#">Next posts <i class="fa fa-angle-right"></i></a></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog__details__comment">
                        <?php if(count($comments)):?>
                            <h5>Комментариев: <?=count($comments)?></h5>
                        <?php else:?>
                            <h5>Комментариев нет</h5>
                        <?php endif;?>

                        <?php if(isset($_SESSION['userId'])):?>
                            <a href="#" class="leave-btn">Оставить комментарий</a>
                        <?php else:?>
                            <a href="registration.php" class="leave-btn">Для добавления комментария авторизуйтесь</a>
                        <?php endif;?>

                        <?php foreach($comments as $comment):?>
                            <div class="blog__comment__item">
                                <div class="blog__comment__item__pic">
                                    <img src="<?=$comment['image']?>" alt="<?=$comment['first_name']?> <?=$comment['last_name']?>">
                                </div>
                                <div class="blog__comment__item__text">
                                    <h6><?=$comment['first_name']?> <?=$comment['last_name']?></h6>
                                    <p><?=$comment['comment']?></p>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> <?=$comment['add_date']?></li>
                                        <li><i class="fa fa-heart-o"></i> 12</li>
                                        <li><i class="fa fa-share"></i> 1</li>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="blog__sidebar">
                    <div class="blog__sidebar__item">
                        <div class="section-title">
                            <h4>Categories</h4>
                        </div>
                        <ul>
                            <li><a href="#">All <span>(250)</span></a></li>
                            <li><a href="#">Fashion week <span>(80)</span></a></li>
                            <li><a href="#">Street style <span>(75)</span></a></li>
                            <li><a href="#">Lifestyle <span>(35)</span></a></li>
                            <li><a href="#">Beauty <span>(60)</span></a></li>
                        </ul>
                    </div>
                    <div class="blog__sidebar__item">
                        <div class="section-title">
                            <h4>Feature posts</h4>
                        </div>
                        <a href="#" class="blog__feature__item">
                            <div class="blog__feature__item__pic">
                                <img src="img/blog/sidebar/fp-1.jpg" alt="">
                            </div>
                            <div class="blog__feature__item__text">
                                <h6>Amf Cannes Red Carpet Celebrities Kend...</h6>
                                <span>Seb 17, 2019</span>
                            </div>
                        </a>
                        <a href="#" class="blog__feature__item">
                            <div class="blog__feature__item__pic">
                                <img src="img/blog/sidebar/fp-2.jpg" alt="">
                            </div>
                            <div class="blog__feature__item__text">
                                <h6>Amf Cannes Red Carpet Celebrities Kend...</h6>
                                <span>Seb 17, 2019</span>
                            </div>
                        </a>
                        <a href="#" class="blog__feature__item">
                            <div class="blog__feature__item__pic">
                                <img src="img/blog/sidebar/fp-3.jpg" alt="">
                            </div>
                            <div class="blog__feature__item__text">
                                <h6>Amf Cannes Red Carpet Celebrities Kend...</h6>
                                <span>Seb 17, 2019</span>
                            </div>
                        </a>
                    </div>
                    <div class="blog__sidebar__item">
                        <div class="section-title">
                            <h4>Категории</h4>
                        </div>
                        <div class="blog__sidebar__tags">
                            <?php foreach ($categoryList as $category):?>
                                <a href="category.php?categoryId=<?=$category['id']?>" class="<?=$category['class_name']?> text-white"><?=$category['translation']?></a>
                            <?php endforeach;?>
                        </div>
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