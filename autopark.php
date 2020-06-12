<?php
    require_once "head.php";
?>

<link rel="stylesheet" href="/css/autopark.min.css">

<?php
    require_once "header.php";
?>


    <main>

        <div class="page-title">
            <div class="wrapper">
                <div class="inner">
                    <h1 class="block-heading">Автопарк</h1>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <div class="wrapper">
                <div class="inner">
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="autopark.php">Автопарк</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="autopark autopark-detail">
            <div class="wrapper">
                <div class="inner">
                    <div class="content">
                        <div class="head">
                            <div class="section-tabs">
                                <div class="flat-btn green active">
                                    Бортовой
                                </div>
                                <div class="flat-btn green">
                                    Тентованый
                                </div>
                                <div class="flat-btn green">
                                    Рефрижератор
                                </div>
                                <div class="flat-btn green">
                                    Фургон
                                </div>
                                <a href="/rent.php" class="flat-btn green">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="15" viewBox="0 0 26 15"
                                        fill="none">
                                        <path
                                            d="M0.618963 11.3332L1.69359 6.38467C1.76358 6.06234 2.04884 5.83238 2.37869 5.83238H3.66212V3.50108C3.66212 3.11391 3.97598 2.79999 4.36321 2.79999C4.75043 2.79999 5.06429 3.11391 5.06429 3.50108V5.83238H7.33357V1.2576C7.33357 0.870381 7.64748 0.556519 8.03465 0.556519H12.0088C12.3155 0.556519 12.5865 0.755851 12.678 1.04857L14.1722 5.83238H16.2232C16.551 5.83238 16.8351 6.05959 16.9071 6.37945L17.7048 9.92224H18.0677C18.1101 8.92782 18.5134 7.99846 19.2179 7.28475C19.9762 6.51653 20.9882 6.09341 22.0676 6.09341C22.4549 6.09341 22.7687 6.40733 22.7687 6.7945C22.7687 8.86567 23.3045 10.8994 24.3206 12.6997H25.2352C25.6224 12.6997 25.9363 13.0135 25.9363 13.4007C25.9363 13.788 25.6224 14.1018 25.2352 14.1018H22.1169C20.3241 14.1018 18.7877 12.9317 18.2593 11.3244H18.034C18.0365 11.3767 18.038 11.4293 18.038 11.4823C18.038 13.3265 16.5376 14.8269 14.6934 14.8269C13.0895 14.8269 11.7463 13.6919 11.4232 12.1832H9.55864C9.23558 13.6919 7.8923 14.8269 6.2885 14.8269C4.68464 14.8269 3.34136 13.6919 3.0183 12.1831H1.30417C1.09211 12.1831 0.891432 12.0871 0.758394 11.922C0.625189 11.7569 0.573982 11.5405 0.618963 11.3332ZM22.1169 12.6997H22.7361C21.9529 11.102 21.4947 9.36299 21.3898 7.58414C20.9489 7.70221 20.5454 7.93581 20.2158 8.26975C19.7231 8.76887 19.4567 9.43035 19.4659 10.1323C19.4843 11.548 20.6735 12.6997 22.1169 12.6997ZM11.4934 1.95869H8.73579V5.83238H12.7033L11.4934 1.95869ZM14.6934 13.4247C15.7645 13.4247 16.6358 12.5533 16.6358 11.4823C16.6358 10.4113 15.7644 9.53983 14.6934 9.53983C13.6224 9.53983 12.7509 10.4113 12.7509 11.4823C12.7509 12.5533 13.6223 13.4247 14.6934 13.4247ZM6.28844 13.4247C7.35953 13.4247 8.2309 12.5533 8.2309 11.4823C8.2309 10.4113 7.35948 9.53983 6.28844 9.53983C5.21741 9.53983 4.34599 10.4113 4.34599 11.4823C4.34599 12.5533 5.21735 13.4247 6.28844 13.4247ZM3.01836 10.7809C3.34159 9.27236 4.68475 8.13766 6.28844 8.13766C7.89214 8.13766 9.2353 9.27241 9.55853 10.781H11.4233C11.7465 9.27241 13.0897 8.13766 14.6934 8.13766C15.1257 8.13766 15.5387 8.22101 15.9183 8.37099L15.6624 7.23455H2.94387L2.17374 10.7809H3.01836Z"
                                            fill="#00982F" />
                                    </svg>
                                    Спецтехника
                                </a>
                            </div>
                            <form action="" class="filter">
                                <label class="custom-checkbox">5т
                                    <input type="checkbox"  value="tonnage5">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="custom-checkbox">10т
                                    <input type="checkbox" value="tonnage10">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="custom-checkbox">Более 10т
                                    <input type="checkbox"  value="tonnage11">
                                    <span class="checkmark"></span>
                                </label>
                            </form>
                        </div>
                        <div class="section-tabs__content">
                            <div class="tab">
                                <div class="autopark-detail--items">
                                    <div class="item tonnage5">
                                        <div class="item-image">
                                            <img src="/img/truck1.png" alt="">
                                        </div>
                                        <div class="item-name">Газель тент</div>
                                        <div class="item-volume">10.8 м<sup>3</sup></div>
                                        <div class="item-dimensions">
                                            <div class="item-dimensions-l">
                                                <span class="name">Длина</span>
                                                <span class="value">3</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-w">
                                                <span class="name">Ширина</span>
                                                <span class="value">2</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-h">
                                                <span class="name">Высота</span>
                                                <span class="value">1,8</span>
                                            </div>
                                        </div>
                                        <a href="#callback" data-fancybox class="flat-btn yellow">Заказать</a>
                                        <div class="item-more">
                                            <span class="ic info-g"></span>
                                            Доп. информация
                                        </div>
                                        <div class="item-more--content">
                                            <div class="title">
                                                <span class="ic pallets"></span>
                                                Количество паллет: 4
                                            </div>
                                            <div class="desc">
                                                Просто незаменим при Крайне удобное решение для деловых грузоперевозок в
                                                черте
                                                города: машина небольшая, но очень грузоподъёмная, что позволяет
                                                сэкономить
                                                на
                                                количестве рейсов и не переживать о том, что автомобиль не сможет
                                                развернуться в
                                                небольшом дворе.
                                            </div>
                                            <span class="ic arrow-down"></span>
                                        </div>
                                    </div>
                                    <div class="item tonnage5">
                                        <div class="item-image">
                                            <img src="/img/truck2.png" alt="">
                                        </div>
                                        <div class="item-name">Газель тент</div>
                                        <div class="item-volume">10.8 м<sup>3</sup></div>
                                        <div class="item-dimensions">
                                            <div class="item-dimensions-l">
                                                <span class="name">Длина</span>
                                                <span class="value">3</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-w">
                                                <span class="name">Ширина</span>
                                                <span class="value">2</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-h">
                                                <span class="name">Высота</span>
                                                <span class="value">1,8</span>
                                            </div>
                                        </div>
                                        <a href="#callback" data-fancybox class="flat-btn yellow">Заказать</a>
                                        <div class="item-more">
                                            <span class="ic info-g"></span>
                                            Доп. информация
                                        </div>
                                    </div>
                                    <div class="item tonnage10">
                                        <div class="item-image">
                                            <img src="/img/truck3.png" alt="">
                                        </div>
                                        <div class="item-name">Газель тент</div>
                                        <div class="item-volume">10.8 м<sup>3</sup></div>
                                        <div class="item-dimensions">
                                            <div class="item-dimensions-l">
                                                <span class="name">Длина</span>
                                                <span class="value">3</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-w">
                                                <span class="name">Ширина</span>
                                                <span class="value">2</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-h">
                                                <span class="name">Высота</span>
                                                <span class="value">1,8</span>
                                            </div>
                                        </div>
                                        <a href="#callback" data-fancybox class="flat-btn yellow">Заказать</a>
                                        <div class="item-more">
                                            <span class="ic info-g"></span>
                                            Доп. информация
                                        </div>
                                    </div>
                                    <div class="item tonnage10">
                                        <div class="item-image">
                                            <img src="/img/truck4.png" alt="">
                                        </div>
                                        <div class="item-name">Газель тент</div>
                                        <div class="item-volume">10.8 м<sup>3</sup></div>
                                        <div class="item-dimensions">
                                            <div class="item-dimensions-l">
                                                <span class="name">Длина</span>
                                                <span class="value">3</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-w">
                                                <span class="name">Ширина</span>
                                                <span class="value">2</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-h">
                                                <span class="name">Высота</span>
                                                <span class="value">1,8</span>
                                            </div>
                                        </div>
                                        <a href="#callback" data-fancybox class="flat-btn yellow">Заказать</a>
                                        <div class="item-more">
                                            <span class="ic info-g"></span>
                                            Доп. информация
                                        </div>
                                    </div>
                                    <div class="item tonnage11">
                                        <div class="item-image">
                                            <img src="/img/truck1.png" alt="">
                                        </div>
                                        <div class="item-name">Газель тент</div>
                                        <div class="item-volume">10.8 м<sup>3</sup></div>
                                        <div class="item-dimensions">
                                            <div class="item-dimensions-l">
                                                <span class="name">Длина</span>
                                                <span class="value">3</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-w">
                                                <span class="name">Ширина</span>
                                                <span class="value">2</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-h">
                                                <span class="name">Высота</span>
                                                <span class="value">1,8</span>
                                            </div>
                                        </div>
                                        <a href="#callback" data-fancybox class="flat-btn yellow">Заказать</a>
                                        <div class="item-more">
                                            <span class="ic info-g"></span>
                                            Доп. информация
                                        </div>
                                    </div>
                                    <div class="item tonnage11">
                                        <div class="item-image">
                                            <img src="/img/truck2.png" alt="">
                                        </div>
                                        <div class="item-name">Газель тент</div>
                                        <div class="item-volume">10.8 м<sup>3</sup></div>
                                        <div class="item-dimensions">
                                            <div class="item-dimensions-l">
                                                <span class="name">Длина</span>
                                                <span class="value">3</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-w">
                                                <span class="name">Ширина</span>
                                                <span class="value">2</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-h">
                                                <span class="name">Высота</span>
                                                <span class="value">1,8</span>
                                            </div>
                                        </div>
                                        <a href="#callback" data-fancybox class="flat-btn yellow">Заказать</a>
                                        <div class="item-more">
                                            <span class="ic info-g"></span>
                                            Доп. информация
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div class="autopark-detail--items">
                                    <div class="item tonnage5">
                                        <div class="item-image">
                                            <img src="/img/truck1.png" alt="">
                                        </div>
                                        <div class="item-name">Газель тент</div>
                                        <div class="item-volume">10.8 м<sup>3</sup></div>
                                        <div class="item-dimensions">
                                            <div class="item-dimensions-l">
                                                <span class="name">Длина</span>
                                                <span class="value">3</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-w">
                                                <span class="name">Ширина</span>
                                                <span class="value">2</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-h">
                                                <span class="name">Высота</span>
                                                <span class="value">1,8</span>
                                            </div>
                                        </div>
                                        <a href="#callback" data-fancybox class="flat-btn yellow">Заказать</a>
                                        <div class="item-more">
                                            <span class="ic info-g"></span>
                                            Доп. информация
                                        </div>
                                        <div class="item-more--content">
                                            <div class="title">
                                                <span class="ic pallets"></span>
                                                Количество паллет: 4
                                            </div>
                                            <div class="desc">
                                                Просто незаменим при Крайне удобное решение для деловых грузоперевозок в
                                                черте
                                                города: машина небольшая, но очень грузоподъёмная, что позволяет
                                                сэкономить
                                                на
                                                количестве рейсов и не переживать о том, что автомобиль не сможет
                                                развернуться в
                                                небольшом дворе.
                                            </div>
                                            <span class="ic arrow-down"></span>
                                        </div>
                                    </div>
                                    <div class="item tonnage10">
                                        <div class="item-image">
                                            <img src="/img/truck2.png" alt="">
                                        </div>
                                        <div class="item-name">Газель тент</div>
                                        <div class="item-volume">10.8 м<sup>3</sup></div>
                                        <div class="item-dimensions">
                                            <div class="item-dimensions-l">
                                                <span class="name">Длина</span>
                                                <span class="value">3</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-w">
                                                <span class="name">Ширина</span>
                                                <span class="value">2</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-h">
                                                <span class="name">Высота</span>
                                                <span class="value">1,8</span>
                                            </div>
                                        </div>
                                        <a href="#callback" data-fancybox class="flat-btn yellow">Заказать</a>
                                        <div class="item-more">
                                            <span class="ic info-g"></span>
                                            Доп. информация
                                        </div>
                                    </div>
                                </div>
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
    