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
                    <a href="/company-personal.php" class="active">
                        <span class="ic person"></span>
                        <p>Профиль</p>
                    </a>
                    <a href="/company-personal-orders.php" class="">
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

    <section class="profile-contractor profile-company">
        <div class="wrapper">
            <div class="inner">
                <div class="content">
                    <div class="left">
                        <div class="profile-customer--info profile-company--info">
                            <div class="personal-data">
                                <div class="profile-customer__block-head">
                                    <div class="title">
                                        Личная информация
                                    </div>
                                </div>
                                <div class="profile-customer__block-content">
                                <form action="">
                                    <div class="fields">
                                        <div class="fields-item">
                                            <label for="">Название организации</label>
                                            <input type="text">
                                        </div>
                                        <div class="fields-item">
                                            <label for="">Фамилия</label>
                                            <input type="text">
                                        </div>
                                        <div class="fields-item">
                                            <label for="">Имя</label>
                                            <input type="text">
                                        </div>
                                        <div class="fields-item">
                                            <label for="">Отчество</label>
                                            <input type="text">
                                        </div>
                                        <div class="fields-item">
                                            <label for="">Должность</label>
                                            <input type="text">
                                        </div>
                                        <div class="fields-item">
                                            <label for="">Действующего на основании</label>
                                            <input type="text">
                                        </div>
                                        <div class="fields-item">
                                            <label for="">Телефон</label>
                                            <input type="tel">
                                        </div>
                                        <div class="fields-item">
                                            <label for="">Email</label>
                                            <input type="email">
                                        </div>
                                        <div class="fields-item">
                                            <label for="">УНП</label>
                                            <input type="text">
                                        </div>
                                        <div class="fields-item">
                                            <label for="">Р/С</label>
                                            <input type="text">
                                        </div>
                                        <div class="fields-item">
                                            <label for="">Юридический адрес</label>
                                            <input type="text">
                                        </div>
                                        <div class="fields-item">
                                            <label for="">Почтовый адрес</label>
                                            <input type="text">
                                        </div>
                                        <div class="fields-item">
                                            <label for="">Обслуживающий банк</label>
                                            <input type="text">
                                        </div>
                                        <div class="fields-item">
                                            <label for="">Адрес обслуживающего банка</label>
                                            <input type="text">
                                        </div>
                                        <div class="fields-item">
                                            <label for="">БИК</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="submit">
                                        <button class="flat-btn yellow">Сохранить</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
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