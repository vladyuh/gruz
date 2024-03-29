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
                    <li><a href="/entity-personal.php">Личный кабинет</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="personal-nav">
        <div class="wrapper">
            <div class="inner">
                <div class="content">
                    <a href="#" class="active">
                        <span class="ic person"></span>
                        <p>Профиль</p>
                    </a>
                    <a href="#" class="">
                        <span class="ic order"></span>
                        <p>Заказы</p>
                    </a>
                    <a href="#send-contract" data-fancybox class="send-contract">
                        <span class="ic contract"></span>
                        <p class="send-contract__main-text">Отправить договор</p>
                        <p class="send-contract__smallscreen-text">Договор</p>
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
                            <div class="personal-data">
                                <div class="profile-customer__block-head">
                                    <div class="title">
                                        Личная информация
                                    </div>
                                    <a href="/company-personal-edit.php" class="edit-btn">
                                        <span class="ic edit"></span>
                                        <p>Редактирование данных</p>
                                    </a>
                                </div>
                                <div class="profile-customer__block-content">
                                    <div class="item fullwidth">
                                        <div class="item-title">Название организации</div>
                                        <div class="item-value">Company Name</div>
                                    </div>
                                    <div class="title">
                                        В лице
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Фамилия</div>
                                        <div class="item-value">Демидов</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Имя</div>
                                        <div class="item-value">Николай</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Отчество</div>
                                        <div class="item-value">Федорович</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Должность</div>
                                        <div class="item-value">Директор</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Действующего на основании</div>
                                        <div class="item-value">Федорович</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Телефон</div>
                                        <div class="item-value">+375 (23) 532 - 53 - 34</div>
                                    </div>
                                    <div class="item fullwidth">
                                        <div class="item-title">Email</div>
                                        <div class="item-value">demidov@mail.ru</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">УПП</div>
                                        <div class="item-value">654 654 654 847</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Р/С</div>
                                        <div class="item-value">4684 798 789 798</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Юридический адрес</div>
                                        <div class="item-value">г. Минск, ул. Победителей, д. 35</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Почтовый адрес</div>
                                        <div class="item-value">г. Минск, ул. Победителей, д. 35</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Обслуживающий банк</div>
                                        <div class="item-value">Aльфабанк</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Адрес обслуживающего банка</div>
                                        <div class="item-value"> г. Минск, ул. Ленина, д. 45, корп. 4</div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">бик</div>
                                        <div class="item-value">654 654 654 847</div>
                                    </div>
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
                    <div class="right">
                        <div class="profile-customer--docs">
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