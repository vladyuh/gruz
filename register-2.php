<?php
    require_once "head.php";
?>

<link rel="stylesheet" href="/css/register.min.css">

<?php
    require_once "header.php";
?>

    <main>

        <div class="page-title">
            <div class="wrapper">
                <div class="inner">
                    <h1 class="block-heading">Регистрация</h1>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <div class="wrapper">
                <div class="inner">
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="register.php">Регистрация</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="register">
            <div class="wrapper">
                <div class="inner">
                    <div class="content">
                        <div class="content-left">
                            <div class="register-items">
                                <a href="/register-entrepreneur.php" class="item">
                                    <span class="ic location-26"></span>
                                    <p>Заказчик</p>
                                </a>
                                <a href="/register-entity-2.php" class="item">
                                    <span class="ic truck-29"></span>
                                    <p>Исполнитель</p>
                                </a>
                            </div>
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