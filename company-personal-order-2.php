<?php
    require_once "head.php";
?>

<link rel="stylesheet" href="/css/personal.min.css">

<?php
    require_once "header-1.php";
?>

<main>

    <div class="page-title">
        <div class="wrapper">
            <div class="inner">
                <h1 class="block-heading">Личный кабинет</h1>
            </div>
        </div>
    </div>

    <div class="breadcrumbs">
        <div class="wrapper">
            <div class="inner">
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/company-personal.php">Личный кабинет</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="personal-nav">
        <div class="wrapper">
            <div class="inner">
                <div class="content">
                    <a href="/company-personal.php" class="">
                        <span class="ic person"></span>
                        <p>Профиль</p>
                    </a>
                    <a href="/company-personal-orders-2.php" class="active">
                        <span class="ic inwork"></span>
                        <p>В работе</p>
                    </a>
                    <a href="/index.php" class="exit">
                        <p>Выйти</p>
                        <span class="ic exit"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="order-detail">
        <div class="wrapper">
            <div class="inner">
                <div class="content">
                    <div class="left">
                        <div class="order-detail--info">
                            <div class="order-detail__block-head">
                                Заказ 646 578 438
                            </div>
                            <div class="order-detail__block-content">
                                <div class="info-items">
                                    <div class="item">
                                        <div class="item-title">откуда</div>
                                        <div class="item-value">г.Минск, ул. Ленина, д. 43</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">дата создания</div>
                                        <div class="item-value">23.05.2020</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">куда</div>
                                        <div class="item-value">д. Зайцево, пер. Майский, д. 32</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">дата забора груза</div>
                                        <div class="item-value">24.05.2020</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">сумма заказа</div>
                                        <div class="item-value">224 BYN</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title status">Статус</div>
                                        <div class="item-value">Подписание заявки</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Грузчик</div>
                                        <div class="item-value">Иванов Петр</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Телефон</div>
                                        <div class="item-value">+375 (29) 482-25-25</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-customer--docs order-detail--docs">
                            <div class="order-detail__block-head">
                                Документы
                            </div>
                            <div class="order-detail__block-content">
                                <div class="document-items">
                                    <a href="#" download class="item">
                                        <strong class="item-extension">PDF</strong>
                                        <p class="item-filename">
                                            Договор автомобильной перевозки груза.pdf
                                            <span>(236 Кб)</span>
                                        </p>
                                    </a>
                                    <a href="#" download class="item">
                                        <strong class="item-extension">TXT</strong>
                                        <p class="item-filename">
                                            Договор фрахтования для перевозки.pdf
                                            <span>(236 Кб)</span>
                                        </p>
                                    </a>
                                    <a href="#" download class="item">
                                        <strong class="item-extension">PDF</strong>
                                        <p class="item-filename">
                                            Договор об организации автомобильных перевозок грузов — при систематических
                                            перевозках грузов.pdf
                                            <span>(236 Кб)</span>
                                        </p>
                                    </a>                                    
                                </div>
                            </div>
                        </div>
                        <div class="order-detail--photos">
                            <div class="order-detail__block-head">
                                Фото
                            </div>
                            <div class="order-detail__block-content">
                                <div class="uploadedImages">
                                    <a data-fancybox="gallery" href="/img/car-image-1b.png" class="uploadedImages-image">
                                        <img src="/img/uploadedPhotos/car-1.png" alt="">
                                    </a>
                                    <a data-fancybox="gallery" href="/img/car-image-2b.png" class="uploadedImages-image">
                                        <img src="/img/uploadedPhotos/car-2.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="/client-personal-orders.php" class="back-btn">
                            <span class="ic back"></span>
                            <p>К списку заказов</p>
                        </a>
                    </div>
                    <div class="right">
                        <div id="order-map" data-route="53.897663, 30.363937;53.912727, 30.320163" data-current="53.910998, 30.326826">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="profile">
        <div class="wrapper">
            <div class="inner">
                <div class="content">

                </div>
            </div>
        </div>
    </section>


</main>

<?php
    require_once "footer.php";
?>