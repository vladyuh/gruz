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
                                    Личная информация
                                </div>
                                <a href="/client-personal-edit.php" class="edit-btn">
                                    <span class="ic edit"></span>
                                    <p>Редактирование данных</p>
                                </a>
                            </div>
                            <div class="profile-customer__block-content">
                                <div class="item">
                                    <div class="item-title">ФИО</div>
                                    <div class="item-value">Демидов Николай Федорович</div>
                                </div>
                                <div class="item">
                                    <div class="item-title">Email</div>
                                    <div class="item-value">demidov@gmail.com</div>
                                </div>
                                <div class="item">
                                    <div class="item-title">Телефон</div>
                                    <div class="item-value">+375 (23) 532 - 53 - 34</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
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
                                            <input type="password" name="password" id="password">
                                        </div>
                                        <div class="fields-item">
                                            <label for="">Новый пароль</label>
                                            <input type="password" name="repeat-password" id="repeat-password">
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