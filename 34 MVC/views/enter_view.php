<!-- шаблон (view) страницы входа -->
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
                                <p><span>*</span>Логин: <span class="error"><?=$errors['login'] ?? ''?></span></p>
                                <input type="text" name="login" placeholder="От трех символов латиницы и цифр, первый - буква" value="<?=$input['login'] ?? ''?>"/>
                            </div>
                        </div>

                        <!-- пароль -->
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                            <div class="checkout__form__input">
                                <p><span>*</span>Пароль <span class="error"><?=$errors['password'] ?? ''?></span></p>
                                <input class="mb-1" type="password" name="password" placeholder="От 8 символов" value="<?=$input['password'] ?? ''?>"/>
                                <button id="show-password">Показать пароль</button>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="site-btn">Войти</button>
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
