<?php
    require_once "head.php";
?>

<link rel="stylesheet" href="/css/contacts.min.css">

<?php
    require_once "header.php";
?>


    <main>

        <div class="page-title">
            <div class="wrapper">
                <div class="inner">
                    <h1 class="block-heading">Контакты</h1>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <div class="wrapper">
                <div class="inner">
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="contacts.php">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="contacts-map">
            <div class="wrapper">
                <div class="inner">
                    <div class="content">
                        <div class="map-contaner">
                            <div class="map-container__block">
                                <div class="map-container__block--item">
                                    <div class="name">Юридический адрес</div>
                                    <div class="desc">г. Могилев, пр-т Мира, д. 3</div>
                                </div>
                                <div class="map-container__block--item">
                                    <div class="name">Почтовый адрес</div>
                                    <div class="desc">г. Могилев, ул. Первомайская, д. 7</div>
                                </div>
                                <div class="map-container__block--item">
                                    <div class="name">График работы</div>
                                    <div class="desc">Пн - Пт 9:00 - 18:00</div>
                                </div>
                            </div>
                            <div id="map">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="feedback">
            <div class="wrapper">
                <div class="inner">
                    <div class="content">
                        <div class="left">
                            <div class="questions">
                                <p>Остались вопросы?</p>
                                <p>Заполните форму и мы обязательно свяжемся с вами или<br> звоните нам по телефону</p>
                            </div>
                            <a class="phone-number block-heading" href="tel:+375 29 550 30 11">+375 29 550 30 11</a>
                            <a class="mail" href="mailto:gruzok@info.com">gruzok@info.com</a>
                        </div>
                        <div class="right">
                            <form action="" class="consult-form" id="consult-form">
                                <div class="fields">
                                    <div class="fields-item name">
                                        <label class="grey" for="name">Ваше имя</label>
                                        <input name="name" id="name" type="text">
                                    </div>
                                    <div class="fields-item phone">
                                        <label class="grey" for="phone">Телефон</label>
                                        <input name="phone" id="phone" type="tel">
                                    </div>
                                    <div class="fields-item message">
                                        <label class="grey" for="message">Сообщение</label>
                                        <textarea name="message" id="message"></textarea>
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
        </div>







    </main>

    <?php
    require_once "footer.php";
?>