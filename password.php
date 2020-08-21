<?php
    require_once "head.php";
?>

<link rel="stylesheet" href="/css/password.min.css">

<?php
    require_once "header.php";
?>

    <main>

        <div class="page-title">
            <div class="wrapper">
                <div class="inner">
                    <h1 class="block-heading">Восстановление пароля</h1>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <div class="wrapper">
                <div class="inner">
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="password.php">Восстановление пароля</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="password">
            <div class="wrapper">
                <div class="inner">
                    <div class="content">
                        <div class="content-left">
                        <div class="block-desc">
                            Код для восстановления пароля будет отправлен вам на почту
                        </div>
                            <form action="">
                                <div class="fields-item green">
                                    <label for="email" class="grey">логин</label>
                                    <input type="email" name="email" id="email">
                                </div>
                                <div class="submit">
                                    <button class="flat-btn yellow">Отправить</button>
                                </div>
                            </form>
                            <a href="#authorise" data-fancybox>Вход в личный кабинет</a>
                        </div>
                        <div class="content-right">
                            <div class="car-image">
                                <img src="/img/images/car.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php
    require_once "footer.php";
?>