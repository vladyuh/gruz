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
                    <li><a href="/client-personal.php">Личный кабинет</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="personal-nav">
        <div class="wrapper">
            <div class="inner">
                <div class="content">
                    <a href="/client-personal.php">
                        <span class="ic person"></span>
                        <p>Профиль</p>
                    </a>
                    <a href="/client-personal-orders.php" class="active">
                        <span class="ic order"></span>
                        <p>Заказы</p>
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
                                </div>
                            </div>
                        </div>
                        <div class="profile-customer--docs order-detail--docs">
                            <div class="order-detail__block-head">
                                Документы
                            </div>
                            <div class="order-detail__block-content">
                                <form class="attach-files drop-area">
                                    <input type="file" name="files" id="" multiple>
                                    <span class="ic files"></span>
                                    <label for="files">Загрузить документ</label>
                                </form>
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