<?php
    require_once "head.php";
?>

<link rel="stylesheet" href="/css/services.min.css">

<?php
    require_once "header.php";
?>

    <main>

        <div class="page-title">
            <div class="wrapper">
                <div class="inner">
                    <h1 class="block-heading"></h1>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <div class="wrapper">
                <div class="inner">
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="services.php">Услуги</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="services-banner">
            <div class="wrapper">
                <div class="inner">
                    <div class="content">
                        <div class="left">
                            <div class="title">
                                Квартирный переезд — <br>
                                <strong> не дорого, под ключ</strong>
                            </div>
                            <div class="subtitle">
                                Недорого выполним квартирный переезд. Заказать переезд квартиры можно по номеру
                                <a href="tel:84955065293">8 (495) 506-52-93</a> или оставьте заявку.
                            </div>
                            <form action="">
                                <div class="fields-item green">
                                    <label for="#phone-number" class="grey">Введите свой номер телефона</label>
                                    <input type="tel" id="phone-number" name="phone">
                                </div>
                                <div class="submit">
                                    <button class="flat-btn yellow">Отправить</button>
                                </div>
                            </form>
                        </div>
                        <div class="right">
                            <div class="banner-image">
                                <img src="/img/services/banner.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="services-form">
            <div class="wrapper">
                <div class="inner">
                <a href="#services-form" data-fancybox="" class="calculate-toggle">
                        <p>Оставьте заявку</p>
                    </a>
                    <div class="block-subheading">Оставьте заявку</div>
                    <div class="block-desc">Получите персональное предложение на оказание транспортных услуг.</div>
                    <form action="" class="services-form__content" id="services-form">
                        <div class="column">
                            <div class="column-fields">
                                <div class="fields-item from">
                                    <label>Откуда</label>
                                    <input type="text" name="from" value="г. Минск, ул. Ленина, д 57">
                                </div>
                                <div class="fields-item to">
                                    <label>Куда</label>
                                    <input type="text" name="to">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="column-fields">
                                <div class="fields-item datetime">
                                    <label>Дата и время</label>
                                    <input type="datetime" name="datetime" value="24.03,17:00">
                                </div>
                                <div class="fields-item duration">
                                    <label>Длительность</label>
                                    <div class="input-box">
                                        <span class="ic minus"></span>
                                        <input type="number" name="duration" min="1" value="1">
                                        <span class="ic plus"></span>
                                    </div>
                                </div>
                                <div class="fields-item select">
                                    <label>Выбрать авто</label>
                                    <select name="car-model" id="">
                                        <option value="" selected="" disabled=""></option>
                                        <option value="Газель тент">Газель тент</option>
                                        <option value="Газель евротент">Газель евротент</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="column-fields">
                                <div class="fields-item passengers">
                                    <label class="switch">
                                        <input type="checkbox" name="passengers" value="Да" checked="">
                                        <span class="slider round"></span>
                                    </label>
                                    <div class="passengers-text">
                                        Пассажиры
                                    </div>
                                </div>
                                <div class="fields-item passengers-count">
                                    <label>Количество</label>
                                    <div class="input-box">
                                        <span class="ic minus"></span>
                                        <input type="number" name="passengers-count" min="1" value="1">
                                        <span class="ic plus"></span>
                                    </div>
                                </div>
                                <div class="fields-item movers">
                                    <label class="switch">
                                        <input type="checkbox" name="movers" value="Да" checked="">
                                        <span class="slider round"></span>
                                    </label>
                                    <div class="movers-text">
                                        Грузчики
                                    </div>
                                </div>
                                <div class="fields-item movers-count">
                                    <label>Количество</label>
                                    <div class="input-box">
                                        <span class="ic minus"></span>
                                        <input type="number" name="movers-count" min="1" value="1">
                                        <span class="ic plus"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="column-fields">
                                <div class="fields-item phone">
                                    <label>Телефон</label>
                                    <input type="tel" name="phone">
                                </div>
                                <div class="submit">
                                    <button class="flat-btn yellow">Заказать</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <section class="work-with-us">
            <div class="wrapper">
                <div class="inner">
                    <div class="block-heading">
                        Основные преимущества работы с нами
                    </div>
                    <div class="work-items">
                        <div class="item">
                            <div class="item-image">
                                <img src="/img/images/advantage-1.png" alt="">
                            </div>
                            <div class="item-title">
                                <strong>01.</strong>
                                Опыт
                            </div>
                            <div class="item-description">
                                Огромный опыт и понимание потребностей корпоративных клиентов
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img src="/img/images/advantage-2.png" alt="">
                            </div>
                            <div class="item-title">
                                <strong>02.</strong>
                                Контроль заказа
                            </div>
                            <div class="item-description">
                                Контроль заказа и перемещения авто грузоперевозчика в личном кабинете
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img src="/img/images/advantage-3.png" alt="">
                            </div>
                            <div class="item-title">
                                <strong>03.</strong>
                                Система скидок
                            </div>
                            <div class="item-description">
                                Гибкая система скидок. Специальные тарифы на фиксированные маршруты
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img src="/img/images/advantage-4.png" alt="">
                            </div>
                            <div class="item-title">
                                <strong>04.</strong>
                                Осрочка платежа
                            </div>
                            <div class="item-description">
                                Для постоянных клиентов работа по пост-оплате.
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img src="/img/images/advantage-5.png" alt="">
                            </div>
                            <div class="item-title">
                                <strong>05.</strong>
                                Комплексные решения
                            </div>
                            <div class="item-description">
                                Готовность создавать для наших клиентов комплексные решения в сфере транспорта,
                                логистики и предоставления персонала
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img src="/img/images/advantage-6.png" alt="">
                            </div>
                            <div class="item-title">
                                <strong>06.</strong>
                                Безопасность груза
                            </div>
                            <div class="item-description">
                                Груз в полной безопасности. Для большей уверенности оформим страховку
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="movement">
            <div class="wrapper">
                <div class="inner">
                    <div class="content">
                        <div class="block-heading">Заказать переезд легко</div>
                        <div class="left">
                            <div class="block-desc">
                                Перевозчик уделяет огромное внимание техсостоянию погрузочного оборудования (кранов,
                                погрузчиков и прочего) и собственного транспорта, что гарантирует исключение поломки
                                машины во время перевозки. Оплата, сроки, процесс перевозки грузов обсуждаются с
                                менеджером в процессе обратной связи после заявки, оставленной на официальном сайте.
                                <br><br>
                                <strong>«ГРУЗОК» - это гарантированная оперативность и точность выполнения оговоренных в
                                    заказе сроков!</strong>

                            </div>
                            <a href="#callback" data-fancybox class="flat-btn yellow">Отправить заявку</a>
                        </div>
                        <div class="right">
                            <div class="banner-image">
                                <img src="/img/services/banner1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="autopark autopark-services">
            <div class="wrapper">
                <div class="inner">
                    <div class="content">
                        <div class="block-heading">Наш автопарк</div>
                        <div class="slider-nav">
                            <div class="prev">
                                <span class="ic prev"></span>
                            </div>
                            <div class="dots">

                            </div>
                            <div class="next">
                                <span class="ic next"></span>
                            </div>
                        </div>
                        <div class="autopark-slider">
                            <div class="item">
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
                                <div class="item-more" data-tippy>
                                    <span class="ic info-g"></span>
                                    Доп. информация
                                </div>
                                <div class="item-more--content">
                                    <div class="title">
                                        <span class="ic pallets"></span>
                                        Количество паллет: 4
                                    </div>
                                    <div class="desc">
                                        Просто незаменим при Крайне удобное решение для деловых грузоперевозок в черте
                                        города: машина небольшая, но очень грузоподъёмная, что позволяет сэкономить на
                                        количестве рейсов и не переживать о том, что автомобиль не сможет развернуться в
                                        небольшом дворе.
                                    </div>
                                    <span class="ic arrow-down"></span>
                                </div>
                            </div>
                            <div class="item">
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
                            <div class="item">
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
                            <div class="item">
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
                            <div class="item">
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
                            <div class="item">
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
        </section>

        <section class="sales">
            <div class="wrapper">
                <div class="inner">
                    <div class="block-heading">Акции</div>
                    <div class="sales-content">
                        <div class="item">
                            <div class="item-image">
                                <img src="/img/services/sale-1.png" alt="">
                            </div>
                            <div class="item-title">Скидка молодожёнам – 15%</div>
                            <div class="item-desc">Свадьба! Счастливое событие в жизни каждого человека. Предоставляем
                                всем новобрачным скидку 15% на услуги компании</div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img src="/img/services/sale-2.png" alt="">
                            </div>
                            <div class="item-title">Всё учтено</div>
                            <div class="item-desc">Когда тяжёлой мебели мало, а этажей много, выгоднее рассчитывать
                                стоимость попредметно!</div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img src="/img/services/sale-3.png" alt="">
                            </div>
                            <div class="item-title">Дневные часы!</div>
                            <div class="item-desc">Воспользуйтесь акцией и получите скидку 25%*. Предложение действует
                                каждый день с 16: 00 до 20:00.Ловите свои счастливые часы. </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="consult">
            <div class="wrapper">
                <div class="inner">
                    <div class="content">
                        <div class="content-right">
                            <div class="block-heading">Остались вопросы</div>
                            <div class="block-desc">
                                <b>
                                    Не знаете на какое время и какого объема нужен транспорт? Хотите уточнить информацию
                                    по ценоообразованию? С удовольствием проконсультирую по любым вопросам, а Вы примете
                                    решение.
                                </b>
                            </div>
                            <form action="" class="consult-form" id="consult-form">
                                <div class="fields">
                                    <div class="fields-item name">
                                        <label for="name" class="grey">Ваше имя</label>
                                        <input name="name" id="name" type="text">
                                    </div>
                                    <div class="fields-item phone">
                                        <label for="phone" class="grey">Телефон</label>
                                        <input name="phone" id="phone" type="tel">
                                    </div>
                                </div>
                                <div class="agreement">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                    <div class="agreement-text">
                                        Нажимая на кнопку, я принимаю соглашение<br>
                                        на <strong>обработку персональных данных</strong>
                                    </div>
                                </div>
                                <div class="submit">
                                    <button class="flat-btn yellow b">Отправить заявку</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php
    require_once "footer.php";
?>