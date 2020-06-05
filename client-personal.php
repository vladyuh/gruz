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
                    <a href="/client-personal.php" class="active">
                        <span class="ic person"></span>
                        <p>Профиль</p>
                    </a>
                    <a href="/client-personal-orders.php" class="">
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

    <section class="profile-customer">
        <div class="wrapper">
            <div class="inner">
                <div class="content">
                    <div class="left">
                        <div class="profile-customer--info">
                            <div class="profile-customer__block-head">
                                <div class="title">
                                    Личные данные
                                </div>
                                <div class="edit-btn">
                                    <span class="ic edit"></span>
                                    <p>Редактирование данных</p>
                                </div>
                            </div>
                            <div class="profile-customer__block-content">
                                <div class="item">
                                    <div class="item-title">ФИО</div>
                                    <div class="item-value">Демидов Николай Федорович</div>
                                </div>
                                <div class="item">
                                    <div class="item-title">Телефон</div>
                                    <div class="item-value">+375 (23) 532 - 53 - 34</div>
                                </div>
                                <div class="item">
                                    <div class="item-title">Email</div>
                                    <div class="item-value">nikolai@gmail.com</div>
                                </div>
                                <div class="item">
                                    <div class="item-title">ИНН</div>
                                    <div class="item-value">654 654 654 847</div>
                                </div>
                                <div class="item">
                                    <div class="item-title">Р/C</div>
                                    <div class="item-value">4684 798 789 798</div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-customer--password">
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
                    </div>
                    <div class="right">
                        <div class="profile-customer--docs">
                            <div class="profile-customer__block-head">
                                <div class="title">
                                    Документы
                                </div>
                            </div>
                            <div class="profile-customer__block-content">
                                <form class="attach-files drop-area">
                                    <input type="file" name="files" id="files" multiple>
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