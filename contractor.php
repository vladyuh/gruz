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
                    <a href="/contractor.php" class="active">
                        <span class="ic person"></span>
                        <p>Профиль</p>
                    </a>
                    <a href="/contractor-orders.php" class="">
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

    <section class="profile-contractor">
        <div class="wrapper">
            <div class="inner">
                <div class="content">
                    <div class="left">
                        <div class="profile-contractor--status">
                            <div class="profile-customer__block-head">
                                <div class="title">
                                    <span class="ic ready"></span>
                                    <p>Статус - <strong>Готов к работе</strong></p>
                                </div>
                                <div class="edit-btn">
                                    <span class="ic edit"></span>
                                    <p>Изменить статус</p>
                                </div>
                            </div>
                        </div>
                        <div class="profile-customer--info profile-contractor--info">
                            <div class="personal-data">
                                <div class="profile-customer__block-head">
                                    <div class="title">
                                        Личные данные
                                    </div>
                                    <div class="edit-btn">
                                        <span class="ic edit"></span>
                                        <p>Редактирование данных</p>
                                    </div>
                                </div>
                                <div class="profile-customer__block-content profile-contractor__block-content">
                                    <div class="item">
                                        <div class="item-title">ФИО</div>
                                        <div class="item-value">Демидов Николай Федорович</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Телефон</div>
                                        <div class="item-value">+375 (23) 532 - 53 - 34</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">ИНН</div>
                                        <div class="item-value">654 654 654 847</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Свидетельство</div>
                                        <div class="item-value">4684 798 789 798</div>
                                    </div>
                                </div>
                            </div>
                            <div class="car-info">
                                <div class="profile-customer__block-head">
                                    <div class="title">
                                        Информация об автомобиле
                                    </div>
                                </div>
                                <div class="profile-customer__block-content car-info--items">
                                    <div class="item">
                                        <div class="item-title">Номер автомобиля</div>
                                        <div class="item-value">4658 АХ-3</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Марка</div>
                                        <div class="item-value">Mercedes-Benz</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Модель</div>
                                        <div class="item-value">Atego</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Год выпуска</div>
                                        <div class="item-value">2012</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Паллеты</div>
                                        <div class="item-value">6</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Габариты(м)</div>
                                        <div class="item-value">
                                            2.4
                                            <span>X</span>
                                            1,7
                                            <span>X</span>
                                            1,7
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Грузоподъемность (т)</div>
                                        <div class="item-value">26</div>
                                    </div>
                                </div>
                            </div>
                            <div class="trailer-info">
                                <div class="profile-customer__block-head">
                                    <div class="title">
                                        Информация о прицепе
                                    </div>
                                </div>
                                <div class="profile-customer__block-content trailer-info--items">
                                    <div class="item">
                                        <div class="item-title">Номер прицепа</div>
                                        <div class="item-value">65487 78</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Паллеты</div>
                                        <div class="item-value">6</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Габариты(м)</div>
                                        <div class="item-value">
                                            2.4
                                            <span>X</span>
                                            1,7
                                            <span>X</span>
                                            1,7
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Грузоподъемность (т)</div>
                                        <div class="item-value">12</div>
                                    </div>
                                </div>
                            </div>
                            <div class="car-photos">
                                <div class="profile-customer__block-head">
                                    <div class="title">
                                        Фото автомобиля
                                    </div>
                                </div>
                                <div class="profile-customer__block-content car-photos__content">
                                    <div class="car-photos--items">
                                        <a href="../img/car-image-1b.png" data-fancybox="gallery" class="item">
                                            <div class="item-image">
                                                <img src="../img/car-image-1.png" alt="">
                                            </div>
                                        </a>
                                        <a href="../img/car-image-2b.png" data-fancybox="gallery" class="item">
                                            <div class="item-image">
                                                <img src="../img/car-image-2.png" alt="">
                                            </div>
                                        </a>
                                        <a href="../img/car-image-3b.png" data-fancybox="gallery" class="item">
                                            <div class="item-image">
                                                <img src="../img/car-image-3.png" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <form class="attach-images drop-area">
                                        <input type="file" name="images" id="" multiple=""
                                            accept="image/png, image/jpeg">
                                        <span class="ic images"></span>
                                        <label for="files">Загрузить фото</label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="profile-contractor--status">
                            <div class="profile-customer__block-head">
                                <div class="title">
                                    <span class="ic ready"></span>
                                    <p>Статус - <strong>Готов к работе</strong></p>
                                </div>
                                <div class="edit-btn">
                                    <span class="ic edit"></span>
                                    <p>Изменить статус</p>
                                </div>
                            </div>
                        </div>
                        <div class="profile-customer--password profile-contractor--password">
                            <div class="profile-customer__block-head">
                                <div class="title">
                                    Пароль
                                </div>
                            </div>
                            <div class="profile-customer__block-content">
                                <form action="">
                                    <div class="fields">
                                        <div class="fields-item">
                                            <label for="">Старый пароль</label>
                                            <input type="password" name="" id="">
                                        </div>
                                        <div class="fields-item">
                                            <label for="">Новый пароль</label>
                                            <input type="password" name="" id="">
                                        </div>
                                    </div>
                                    <div class="submit">
                                        <button class="flat-btn yellow">Сохранить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="profile-customer--docs profile-contractor--docs">
                            <div class="profile-customer__block-head">
                                <div class="title">
                                    Документы
                                </div>
                            </div>
                            <div class="profile-customer__block-content">
                                <form class="attach-files drop-area">
                                    <input type="file" name="files" id="" multiple>
                                    <span class="ic files"></span>
                                    <label for="files">Загрузить документ</label>
                                </form>
                                <div class="document-items">
                                    <div class="item">
                                        <strong class="item-extension">PDF</strong>
                                        <p class="item-filename">
                                            Договор автомобильной перевозки груза.pdf
                                            <span>(236 Кб)</span>
                                        </p>
                                    </div>
                                    <div class="item">
                                        <strong class="item-extension">TXT</strong>
                                        <p class="item-filename">
                                            Договор фрахтования для перевозки.pdf
                                            <span>(236 Кб)</span>
                                        </p>
                                    </div>
                                    <div class="item">
                                        <strong class="item-extension">PDF</strong>
                                        <p class="item-filename">
                                            Договор об организации автомобильных перевозок грузов — при систематических
                                            перевозках грузов.pdf
                                            <span>(236 Кб)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
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