<?php
    require_once "head.php";
?>

<link rel="stylesheet" href="/css/register.min.css">

<?php
    require_once "header.php";
?>

<main>

    <div class="page-title">
        <div class="wrapper">
            <div class="inner">
                <h1 class="block-heading">Регистрация юридического лица</h1>
            </div>
        </div>
    </div>

    <div class="breadcrumbs">
        <div class="wrapper">
            <div class="inner">
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="register.php">Регистрация</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="register-form register-entity">
        <div class="wrapper">
            <div class="inner">
                <div class="content">
                    <div class="typeof-select typeof-entity">
                        <div class="typeof-entity__icon">
                            <span class="ic entit-25"></span>
                        </div>
                        <div class="typeof-entity__select">
                            <div class="title">вид юридического лица</div>
                            <div class="value">
                                <span>Индивидуальный
                                    предприниматель</span>
                                <div class="typeof-entity__selected-items">
                                    <a href="/register-entrepreneur.php" class="value">Индивидуальный
                                        предприниматель</a>
                                    <a href="/register-entity.php" class="value">Юридическое лицо</a>
                                </div>
                            </div>
                        </div>
                        <div class="typeof-entity__toggle">
                            <span class="ic arrow-down"></span>
                        </div>
                    </div>
                    <form action="">

                        <fieldset id="entrepreneur">
                            <div class="fields">
                                <div class="row">
                                    <div class="fields-item green">
                                        <label class="grey">Фамилия</label>
                                        <input type="text">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey">Имя</label>
                                        <input type="text">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey">Отчество</label>
                                        <input type="text">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey">Телефон</label>
                                        <input type="tel">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey">E-mail</label>
                                        <input type="mail">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="fields-item green">
                                        <label class="grey">УНП</label>
                                        <input type="text">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey">Р/С</label>
                                        <input type="text">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey">Юридический адрес</label>
                                        <input type="text">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey">Почтовый адрес</label>
                                        <input type="text">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey">Обслуживающий банк</label>
                                        <input type="text">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey">Адрес обслуживающего банка</label>
                                        <input type="text">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey">БИК</label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        
                        <div class="agreement">
                            <label class="switch">
                                <input type="checkbox" checked="">
                                <span class="slider round"></span>
                            </label>
                            <div class="agreement-text">
                                Нажимая на кнопку, я принимаю соглашение<br>
                                на <strong>обработку персональных данных</strong>
                            </div>
                        </div>
                        <div class="submit">
                            <button type="submit" class="flat-btn yellow">Зарегистрироваться</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
    require_once "footer.php";
?>