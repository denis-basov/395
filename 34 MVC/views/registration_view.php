<!-- шаблон (view) страницы регистрации -->
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
                    <span>Регистрация</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="coupon__link">Регистрация</h3>
            </div>
        </div>
        <form class="checkout__form" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p><span>*</span>Имя: <span class="error"><?=$errors['first_name'] ?? ''?></span></p>
                                <input type="text" name="first_name" placeholder="Только кириллица" value="<?=$input['first_name'] ?? ''?>"/>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p><span>*</span>Фамилия: <span class="error"><?=$errors['last_name'] ?? ''?></span></p>
                                <input type="text" name="last_name" placeholder="Только кириллица" value="<?=$input['last_name'] ?? ''?>"/>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p><span>*</span>Логин: <span class="error"><?=$errors['login'] ?? ''?></span></p>
                                <input type="text" name="login" placeholder="От трех символов латиницы и цифр, первый - буква" value="<?=$input['login'] ?? ''?>"/>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p>Электронная почта <span>*</span></p>
                                <input type="email" name="email" placeholder="example@test.com"/>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p>Пароль <span>*</span></p>
                                <input type="password" name="password" placeholder="От 8 символов"/>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p>Фото профиля <span>*</span></p>
                                <input type="file" name="avatar"/>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="site-btn">Зарегистрироваться</button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Checkout Section End -->


<!-- Instagram Begin -->
<?php
    require 'components/instagram.php';
?>
<!-- Instagram End -->

<?php
    require 'components/footer.php';
?>
