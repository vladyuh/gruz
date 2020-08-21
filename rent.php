<?php
    require_once "head.php";
?>

<link rel="stylesheet" href="/css/rent.min.css">

<?php
    require_once "header.php";
?>

    <main>

        <div class="page-title">
            <div class="wrapper">
                <div class="inner">
                    <h1 class="block-heading">Аренда спецтехники</h1>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <div class="wrapper">
                <div class="inner">
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="rent.php">Аренда спецтехники</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="autopark rent">
            <div class="wrapper">
                <div class="inner">
                    <div class="content">
                        <div class="head">
                            <div class="section-tabs">
                                <a href="/autopark.php" class="flat-btn green">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="16" viewBox="0 0 26 16"
                                        fill="none">
                                        <path
                                            d="M3.60509 10.4066C4.38487 10.4066 5.08703 10.7449 5.57279 11.2824C6.05855 10.7449 6.7607 10.4066 7.54048 10.4066C8.55852 10.4066 9.44386 10.9833 9.88837 11.8269H16.4173V2.5577C16.4173 2.17948 16.7239 1.87291 17.1021 1.87291H23.3237C23.6243 1.87291 23.8898 2.06898 23.9782 2.35626L25.5097 7.33297C25.5298 7.39822 25.54 7.46609 25.54 7.53441V12.5118C25.54 12.89 25.2335 13.1966 24.8553 13.1966H22.426C22.3542 14.5955 21.1936 15.7115 19.7771 15.7115C18.3606 15.7115 17.1999 14.5955 17.1281 13.1966H17.1021C17.1019 13.1966 17.1018 13.1966 17.1015 13.1966H10.1894C10.1176 14.5955 8.95695 15.7116 7.54043 15.7116C6.76065 15.7116 6.05849 15.3733 5.57273 14.8358C5.08697 15.3733 4.38482 15.7116 3.60504 15.7116C2.14244 15.7116 0.952553 14.5217 0.952553 13.0591C0.952608 11.5965 2.14249 10.4066 3.60509 10.4066ZM22.818 3.24249H20.733V6.84951H23.928L22.818 3.24249ZM19.7771 14.342C20.4845 14.342 21.06 13.7665 21.06 13.0591C21.06 12.3516 20.4845 11.7761 19.7771 11.7761C19.0697 11.7761 18.4942 12.3516 18.4942 13.0591C18.4942 13.7665 19.0697 14.342 19.7771 14.342ZM19.7771 10.4066C20.7951 10.4066 21.6805 10.9833 22.125 11.827H24.1705V8.21909H20.0483C19.67 8.21909 19.3635 7.91252 19.3635 7.5343V3.24249H17.7869V11.3084C18.2733 10.756 18.985 10.4066 19.7771 10.4066ZM7.54043 14.342C8.24784 14.342 8.82334 13.7665 8.82334 13.0591C8.82334 12.3516 8.24784 11.7761 7.54043 11.7761C6.83301 11.7761 6.25752 12.3516 6.25752 13.0591C6.25752 13.7665 6.83307 14.342 7.54043 14.342ZM3.60509 14.342C4.3125 14.342 4.888 13.7665 4.888 13.0591C4.888 12.3516 4.3125 11.7761 3.60509 11.7761C2.89768 11.7761 2.32218 12.3516 2.32218 13.0591C2.32218 13.7665 2.89768 14.342 3.60509 14.342Z"
                                            fill="#00982F" />
                                        <path
                                            d="M1.22482 2.02631H5.84073C5.75976 1.91384 5.7115 1.77622 5.7115 1.62705C5.7115 1.24883 6.01806 0.942261 6.39628 0.942261H9.5737C9.95192 0.942261 10.2585 1.24883 10.2585 1.62705C10.2585 1.77622 10.2103 1.91384 10.1293 2.02631H14.7453C15.1234 2.02631 15.4301 2.33287 15.4301 2.71109V9.09616C15.4301 9.47438 15.1234 9.78095 14.7453 9.78095H1.22482C0.846603 9.78095 0.540039 9.47438 0.540039 9.09616V2.71109C0.540039 2.33293 0.846603 2.02631 1.22482 2.02631ZM1.90961 8.41137H14.0605V3.39588H1.90961V8.41137Z"
                                            fill="#00982F" />
                                    </svg>
                                    Грузовые авто
                                </a>
                                <div class="flat-btn green active">
                                    Автовышка
                                </div>
                                <div class="flat-btn green">
                                    Эксковатор
                                </div>
                                <div class="flat-btn green">
                                    Фургон
                                </div>
                                <div class="flat-btn green">
                                    Самосвал
                                </div>
                            </div>
                        </div>
                        <div class="section-tabs__content">
                            <div class="tab">
                                <div class="rent-items">
                                    <div class="item">
                                        <div class="item-image">
                                            <img src="/img/truck4.png" alt="">
                                        </div>
                                        <div class="item-name">Mercedes-Benz Atego</div>
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
                                <div class="rent-items">
                                    <div class="item">
                                        <div class="item-image">
                                            <img src="/img/rent/car1.png" alt="">
                                        </div>
                                        <div class="item-name">MAN</div>
                                        <div class="item-volume">7 м<sup>3</sup></div>
                                        <div class="item-dimensions">
                                            <div class="item-dimensions-l">
                                                <span class="name">Длина</span>
                                                <span class="value">2,4</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-w">
                                                <span class="name">Ширина</span>
                                                <span class="value">1,7</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-h">
                                                <span class="name">Высота</span>
                                                <span class="value">1,7</span>
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
                                    <div class="item">
                                        <div class="item-image">
                                            <img src="/img/rent/car2.png" alt="">
                                        </div>
                                        <div class="item-name">Mercedes</div>
                                        <div class="item-volume">5 м<sup>3</sup></div>
                                        <div class="item-dimensions">
                                            <div class="item-dimensions-l">
                                                <span class="name">Длина</span>
                                                <span class="value">3</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-w">
                                                <span class="name">Ширина</span>
                                                <span class="value">1,7</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-h">
                                                <span class="name">Высота</span>
                                                <span class="value">1</span>
                                            </div>
                                        </div>
                                        <a href="#callback" data-fancybox class="flat-btn yellow">Заказать</a>
                                        <div class="item-more">
                                            <span class="ic info-g"></span>
                                            Доп. информация
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-image">
                                            <img src="/img/rent/car3.png" alt="">
                                        </div>
                                        <div class="item-name">КамАЗ</div>
                                        <div class="item-volume">17 м<sup>3</sup></div>
                                        <div class="item-dimensions">
                                            <div class="item-dimensions-l">
                                                <span class="name">Длина</span>
                                                <span class="value">3</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-w">
                                                <span class="name">Ширина</span>
                                                <span class="value">1,7</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-h">
                                                <span class="name">Высота</span>
                                                <span class="value">1</span>
                                            </div>
                                        </div>
                                        <a href="#callback" data-fancybox class="flat-btn yellow">Заказать</a>
                                        <div class="item-more">
                                            <span class="ic info-g"></span>
                                            Доп. информация
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-image">
                                            <img src="/img/rent/car4.png" alt="">
                                        </div>
                                        <div class="item-name">MAN</div>
                                        <div class="item-volume">7 м<sup>3</sup></div>
                                        <div class="item-dimensions">
                                            <div class="item-dimensions-l">
                                                <span class="name">Длина</span>
                                                <span class="value">3</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-w">
                                                <span class="name">Ширина</span>
                                                <span class="value">1,7</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-h">
                                                <span class="name">Высота</span>
                                                <span class="value">1</span>
                                            </div>
                                        </div>
                                        <a href="#callback" data-fancybox class="flat-btn yellow">Заказать</a>
                                        <div class="item-more">
                                            <span class="ic info-g"></span>
                                            Доп. информация
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-image">
                                            <img src="/img/rent/car1.png" alt="">
                                        </div>
                                        <div class="item-name">MAN</div>
                                        <div class="item-volume">7 м<sup>3</sup></div>
                                        <div class="item-dimensions">
                                            <div class="item-dimensions-l">
                                                <span class="name">Длина</span>
                                                <span class="value">2,4</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-w">
                                                <span class="name">Ширина</span>
                                                <span class="value">1,7</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-h">
                                                <span class="name">Высота</span>
                                                <span class="value">1,7</span>
                                            </div>
                                        </div>
                                        <a href="#callback" data-fancybox class="flat-btn yellow">Заказать</a>
                                        <div class="item-more">
                                            <span class="ic info-g"></span>
                                            Доп. информация
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-image">
                                            <img src="/img/rent/car2.png" alt="">
                                        </div>
                                        <div class="item-name">Mercedes</div>
                                        <div class="item-volume">5 м<sup>3</sup></div>
                                        <div class="item-dimensions">
                                            <div class="item-dimensions-l">
                                                <span class="name">Длина</span>
                                                <span class="value">3</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-w">
                                                <span class="name">Ширина</span>
                                                <span class="value">1,7</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-h">
                                                <span class="name">Высота</span>
                                                <span class="value">1</span>
                                            </div>
                                        </div>
                                        <a href="#callback" data-fancybox class="flat-btn yellow">Заказать</a>
                                        <div class="item-more">
                                            <span class="ic info-g"></span>
                                            Доп. информация
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-image">
                                            <img src="/img/rent/car3.png" alt="">
                                        </div>
                                        <div class="item-name">КамАЗ</div>
                                        <div class="item-volume">17 м<sup>3</sup></div>
                                        <div class="item-dimensions">
                                            <div class="item-dimensions-l">
                                                <span class="name">Длина</span>
                                                <span class="value">3</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-w">
                                                <span class="name">Ширина</span>
                                                <span class="value">1,7</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-h">
                                                <span class="name">Высота</span>
                                                <span class="value">1</span>
                                            </div>
                                        </div>
                                        <a href="#callback" data-fancybox class="flat-btn yellow">Заказать</a>
                                        <div class="item-more">
                                            <span class="ic info-g"></span>
                                            Доп. информация
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-image">
                                            <img src="/img/rent/car4.png" alt="">
                                        </div>
                                        <div class="item-name">MAN</div>
                                        <div class="item-volume">7 м<sup>3</sup></div>
                                        <div class="item-dimensions">
                                            <div class="item-dimensions-l">
                                                <span class="name">Длина</span>
                                                <span class="value">3</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-w">
                                                <span class="name">Ширина</span>
                                                <span class="value">1,7</span>
                                            </div>
                                            <span>x</span>
                                            <div class="item-dimensions-h">
                                                <span class="name">Высота</span>
                                                <span class="value">1</span>
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