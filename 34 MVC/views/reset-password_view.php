<!-- шаблон (view) страницы сброса пароля -->
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


<!-- Enter Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="coupon__link"><?=$title ?? ''?></h3>
            </div>
        </div>
        <form class="checkout__form" method="POST">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p><span>*</span>Емейл: <span class="error"></span></p>
                                <input type="email" name="email"/>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="site-btn">Восстановить пароль</button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Enter Section End -->


<!-- Instagram Begin -->
<?php
require 'components/instagram.php';
?>
<!-- Instagram End -->

<?php
require 'components/footer.php';
?>