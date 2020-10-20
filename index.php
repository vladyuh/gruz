<?php
    require_once "head.php";
?>

<link rel="stylesheet" href="/css/index.min.css">

<?php
    require_once "header.php";
?>


    <main>

        <div class="main-banner">
            <div class="wrapper">
                <div class="inner">
                    <div class="content">
                        <div class="content-left">
                            <h1 class="banner-title">Грузоперевозки и переезды<br> по всей Беларуси</h1>
                            <div class="banner-desc"> Перевозка любых грузов от двери до двери</div>
                            <div class="banner-btns">
                                <a href="#callback" data-fancybox class="flat-btn yellow">Оставить заявку</a>
                                <a href="#calc" class="flat-btn yellow-outline">Рассчитать груз</a>
                            </div>
                        </div>
                        <div class="content-right">
                            <div class="banner-image">
                                <img src="/img/header-image.png" alt="">
                            </div>
                        </div>
                        <div class="rent">
                            <div class="rent-image">
                                <img src="/img/rent-image.png" alt="">
                            </div>
                            <div class="rent-text">
                                <div class="title">Аренда спецтехники</div>
                                <div class="desc">Широкий выбор: бульдозеры, экскаваторы, погрузчики.</div>
                                <a href="#" class="more-details">Подробнее <span class="ic more"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="calculate" id="calc">
            <div class="wrapper">
                <div class="inner">
                    <a class="calculate-toggle calculate-form__toggle">
                        <span class="ic calc"></span>
                        <p>Онлайн калькулятор</p>
                        <span class="ic close-bl"></span>
                    </a>
                    <div class="block-heading">Калькулятор</div>
                    <form action="" class="calculate-form" id="calculate">
                        <div class="column addsress">
                            <div class="column-fields">
                                <div class="fields-item from">
                                    <label>Откуда</label>
                                    <input type="text" name="from" value="г. Минск, ул. Ленина, д 57">
                                </div>
                                <div class="fields-item to">
                                    <label>Куда</label>
                                    <input type="text" name="to">
                                </div>
                                <div class="fields-item to optional">
                                    <label>Доп. адрес</label>
                                    <input type="text" name="optional-address">
                                </div>
                            </div>
                            <div class="add-option">
                                <span class="ic add-option"></span>
                                <p class="add-text">Добавить адрес</p>
                                <p class="hidden-text">Убрать доп. адрес</p>
                            </div>
                        </div>
                        <div class="column cargo">
                            <div class="column-fields">
                                <div class="fields-item cargo">
                                    <label>Описание груза</label>
                                    <input type="text" name="cargo">
                                </div>
                                <div class="fields-item dimensions">
                                    <label>Габариты (м)</label>
                                    <input type="text" name="dimensions" placeholder="">
                                </div>
                                <div class="fields-item weight">
                                    <label>Вес (кг)</label>
                                    <div class="input-box">
                                        <span class="ic minus"></span>
                                        <input type="number" name="weight" min="0" value="1">
                                        <span class="ic plus"></span>
                                    </div>
                                </div>
                                <div class="fields-item select type optional">
                                    <label>Тип грузовика</label>
                                    <select name="car-type" id="">
                                        <option value="" selected disabled></option>
                                        <option value="Газель тент">Газель тент</option>
                                    </select>
                                </div>
                                <div class="fields-item select carrying optional">
                                    <label>Грузоподъемность</label>
                                    <select name="carrying" id="">
                                        <option value="" selected disabled></option>
                                        <option value="1 тонна">1 тонна</option>
                                    </select>
                                </div>
                                <div class="fields-item seats optional">
                                    <label class="switch">
                                        <input type="checkbox" name="seats" value="Да" checked>
                                        <span class="slider round"></span>
                                    </label>
                                    <div class="seats-text">
                                        Место для<br> пассажира
                                    </div>
                                </div>
                                <div class="fields-item p-count optional">
                                    <label>Количество</label>
                                    <div class="input-box">
                                        <span class="ic minus"></span>
                                        <input type="number" name="passengers-count" min="1" value="1">
                                        <span class="ic plus"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="add-option">
                                <span class="ic add-option"></span>
                                <p class="add-text">Расширенный поиск</p>
                                <p class="hidden-text">Скрыть</p>
                            </div>
                        </div>
                        <div class="column auto">
                            <div class="column-fields">
                                <div class="fields-item datetime">
                                    <label>Дата и время</label>
                                    <input type="datetime" name="datetime" value="24.03,17:00">
                                </div>
                                <div class="fields-item duration">
                                    <label class="tooltip" title="Длительность указывается для транспортировки груза только по городу. Стоимость перевозки груза рассчитывается вне города по километражу">Длительность(ч)</label>
                                    <div class="input-box">
                                        <span class="ic minus"></span>
                                        <input type="number" name="duration" min="1" value="1">
                                        <span class="ic plus"></span>
                                    </div>
                                </div>
                                <div class="fields-item fastAsCan">
                                    <label class="switch">
                                        <input type="checkbox" name="fastAsCan" value="Да">
                                        <span class="slider round"></span>
                                    </label>
                                    <div class="movers-text">
                                        Как можно быстрее
                                    </div>
                                </div>
                                <div class="fields-item movers">
                                    <label class="switch">
                                        <input type="checkbox" name="movers" value="Да" checked>
                                        <span class="slider round"></span>
                                    </label>
                                    <div class="movers-text">
                                        Грузчики
                                    </div>
                                </div>
                                <div class="fields-item count">
                                    <label>Количество</label>
                                    <div class="input-box">
                                        <span class="ic minus"></span>
                                        <input type="number" name="movers-count" min="1" value="1">
                                        <span class="ic plus"></span>
                                    </div>
                                </div>
                                <div class="fields-item select">
                                    <label>Выбрать авто</label>
                                    <select name="car-model" id=""> 
                                        <option value="" selected disabled>Выберите авто</option>
                                        <option value="Газель тент">Газель тент</option>
                                        <option value="Газель евротент">Газель евротент</option>
                                    </select>
                                </div>
                            </div>
                            <div class="total-cost">
                                Итоговая стоимость: <strong>325 руб.</strong>
                            </div>
                        </div>
                        <div class="column name">
                            <div class="column-fields">
                                <div class="fields-item name">
                                    <label>Имя</label>
                                    <input type="text" name="name">
                                </div>
                                <div class="fields-item phone">
                                    <label>Телефон</label>
                                    <input type="tel" name="phone">
                                </div>
                                <div class="fields-item payment">
                                    <label>Cпособ оплаты</label>
                                    <select name="payment" id=""> 
                                        <option value="cash">Наличными</option>
                                        <option value="bill">Оплата по счету</option>
                                        <option value="erip">ЕРИП</option>
                                    </select>
                                </div>
                                <div class="fields-item prim optional">
                                    <label>Примечание</label>
                                    <input type="text" name="remark">
                                </div>
                            </div>
                            <div class="add-option">
                                <span class="ic add-option"></span>
                                <p class="add-text">Добавить примечание</p>
                                <p class="hidden-text">Убрать примечание</p>
                            </div>
                            <div class="submit">
                                <div class="flat-btn yellow" id="calculator-submit-button">Заказать</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <section class="advantages">
            <div class="wrapper">
                <div class="inner">
                    <div class="content">
                        <div class="block-heading">
                            Преимущества
                        </div>
                        <div class="advantages-items">
                            <div class="item">
                                <span class="ic route"></span>
                                <p class="name">Заказ онлайн</p>
                                <p>
                                    Возможность онлайн заказа
                                    необходимого транспорта и
                                    прозрачность хода его
                                    выполнения
                                </p>
                            </div>
                            <div class="item">
                                <span class="ic delivery"></span>
                                <p class="name">Большой автопарк</p>
                                <p>
                                    Большой перечень
                                    транспортных средств в одном
                                    месте
                                </p>
                            </div>
                            <div class="item">
                                <span class="ic truck"></span>
                                <p class="name">Оперативность</p>
                                <p>
                                    Минимальное время затраченное
                                    на подбор требуемого ТС и
                                    кратчайшие сроки его подачи
                                </p>
                            </div>
                            <div class="item">
                                <span class="ic location"></span>
                                <p class="name">Личный кабинет</p>
                                <p>
                                    Доступ к личному кабинету
                                    с возможность видеть и
                                    контролировать предыдущие,
                                    текущие и будущие заказы
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services">
            <div class="wrapper">
                <div class="inner">
                    <div class="content">
                        <div class="content-left">
                            <div class="block-heading">
                                Наши услуги
                            </div>
                            <div class="section-tabs">
                                <div class="flat-btn green active">
                                    Переезды
                                </div>
                                <div class="flat-btn green">
                                    Перевозки
                                </div>
                                <div class="flat-btn green">
                                    Тяжелые грузы
                                </div>
                                <div class="flat-btn green">
                                    Грузовое такси
                                </div>
                                <div class="flat-btn green">
                                    В другой город
                                </div>
                            </div>
                            <p class="block-desc">
                                Мы ценим Ваш комфорт. Работая с нами, Вы получаете
                                любые услуги, связанные в грузоперевозками в одном
                                месте по действительно разумным ценам.
                            </p>
                        </div>
                        <div class="content-right">
                            <div class="section-tabs__content">
                                <div class="tab">
                                    <div class="services-items">
                                        <div class="item">
                                            <div class="item-name">Квартирный переезд</div>
                                            <div class="item-price">за 2 040 руб.</div>
                                            <a href="#callback" data-fancybox class="flat-btn yellow">Заказать</a>
                                            <div class="item-text">
                                                Подадим газель с грузчиками и без. Бесплатно спустим и поднимем на этаж.
                                                Надежно упакуем вашу мебель и ваши вещи.
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-name">Офисный переезд</div>
                                            <div class="item-price">за 2 040 руб.</div>
                                            <a href="#callback" data-fancybox class="flat-btn yellow">Заказать</a>
                                            <div class="item-text"></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-name">Дачный переезд</div>
                                            <div class="item-price">за 2 040 руб.</div>
                                            <a href="#callback" data-fancybox class="flat-btn yellow">Заказать</a>
                                            <div class="item-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="wrapper">
                <div class="inner">
                    <div class="content">
                        <div class="block-heading">
                            О компании
                        </div>
                        <div class="content-left">
                            <p class="block-desc">
                                Перевозчик уделяет огромное внимание техсостоянию погрузочного оборудования (кранов,
                                погрузчиков и прочего) и собственного транспорта, что гарантирует исключение поломки
                                машины во время перевозки. Оплата, сроки, процесс перевозки грузов обсуждаются с
                                менеджером в процессе обратной связи после заявки, оставленной на официальном
                                сайте.<br><br>
                                <strong>«ГРУЗОК» - это гарантированная оперативность и точность выполнения оговоренных в
                                    заказе сроков!</strong>
                            </p>
                            <div class="adv-items">
                                <div class="item">
                                    <span class="ic flag"></span>
                                    <p class="item-text">
                                        <strong>11 лет</strong>
                                        <br>на рынке
                                    </p>
                                </div>
                                <div class="item">
                                    <span class="ic cliens"></span>
                                    <p class="item-text">
                                        <strong>20 000</strong>
                                        <br>клиентов
                                    </p>
                                </div>
                                <div class="item">
                                    <span class="ic orders"></span>
                                    <p class="item-text">
                                        <strong>2 млн</strong>
                                        <br>заказов
                                    </p>
                                </div>
                                <div class="item">
                                    <span class="ic cars"></span>
                                    <p class="item-text">
                                        <strong>1500</strong>
                                        <br>автомобилей
                                    </p>
                                </div>
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

        <section class="autopark">
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