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
                                    <a href="/register-entrepreneur-2.php" class="value">Индивидуальный
                                        предприниматель</a>
                                    <a href="/register-entity-2.php" class="value">Юридическое лицо</a>
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
                            <div class="fields-item fullwidth attachDocuments docs">
                                <input type="file" name="companyFiles" id="companyFiles" multiple
                                    accept=".xlsx,.xls,.doc,.docx,.txt,.pdf">
                            </div>
                        </fieldset>

                        <div class="typeof-select typeof-staff">
                            <div class="typeof-entity__icon">
                                <span class="ic gruz"></span>
                            </div>
                            <div class="typeof-entity__select">
                                <div class="title">Штат компании</div>
                                <select name="" id="">
                                    <option value="Водители и автопарк">Водители и автопарк</option>
                                    <option value="Грузчики">Грузчики</option>
                                </select>
                            </div>
                            <div class="typeof-entity__toggle">
                                <span class="ic arrow-down"></span>
                            </div>
                        </div>

                        <div class="form-tabs">
                            <div class="form-tabs__tab">
                                <fieldset id="drivers" class="autopark-show">
                                    <div class="fields">
                                        <div class="fields-title">Водители</div>
                                        <div class="row drivers">
                                            <div class="fields-item green">
                                                <label class="grey">ФИО</label>
                                                <input type="text">
                                            </div>
                                            <div class="fields-item green">
                                                <label class="grey">Телефон</label>
                                                <input type="tel">
                                            </div>
                                            <div class="fields-item green fullwidth">
                                                <label class="grey">Паспорт (Серия номер, кем и дата выдачи)</label>
                                                <input type="text">
                                            </div>
                                            <div class="fields-item fullwidth attachDocuments driver">
                                                <input type="file" name="driverFiles" id="driverFiles" multiple
                                                    accept="image/png, image/jpeg, image/jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-option add-drivers">
                                        <span class="ic add-option"></span>
                                        <p class="add-text">Добавить водителя</p>
                                        <p class="hidden-text">Удалить водителя</p>
                                    </div>
                                    <div class="divider"></div>
                                </fieldset>
                                <fieldset id="autos" class="autopark-show">
                                    <div class="fields">
                                        <div class="fields-title">Автопарк</div>
                                        <div class="row car">
                                            <div class="fields-item green fullwidth">
                                                <label class="grey">Тип транспорта</label>
                                                <select name="" id="">
                                                    <option value>Выберите</option>
                                                    <option value="tent">Тентованный</option>
                                                    <option value="refr">Рефрижератор</option>
                                                    <option value="bort">Бортовой</option>
                                                    <option value="furg">Фургон</option>
                                                    <option value="tkmu">Техника КМУ</option>
                                                </select>
                                            </div>
                                            <div class="fields-item green">
                                                <label class="grey">Номер машины</label>
                                                <input type="text">
                                            </div>
                                            <div class="fields-item green">
                                                <label class="grey">Марка</label>
                                                <input type="text">
                                            </div>
                                            <div class="fields-item green">
                                                <label class="grey">Модель</label>
                                                <input type="text">
                                            </div>
                                            <div class="fields-item green">
                                                <label class="grey">Год выпуска</label>
                                                <input type="number">
                                            </div>
                                            <div class="fields-item green pallets">
                                                <label class="grey">Паллеты</label>
                                                <input type="text">
                                            </div>
                                            <div class="fields-item green dimensions">
                                                <label class="grey">Габариты основного отсека (м)</label>
                                                <div class="fields-item__box">
                                                    <input type="text" placeholder="Д">
                                                    <span>x</span>
                                                    <input type="text" placeholder="Ш">
                                                    <span>x</span>
                                                    <input type="text" placeholder="В">
                                                </div>
                                                <div class="tooltip">
                                                    <span class="ic info"></span>
                                                    <p>Ширину и высоту необходимо указывать по <br>проему грузового
                                                        отсека</p>
                                                </div>
                                            </div>
                                            <div class="fields-item green">
                                                <label class="grey">грузоподъемность (т)</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="add-option add-trailer">
                                            <span class="ic add-option"></span>
                                            <p class="add-text">Добавить прицеп</p>
                                            <p class="hidden-text">Удалить прицеп</p>
                                        </div>
                                        <div class="row trailer">
                                            <div class="fields-item green">
                                                <label class="grey">Номер прицепа</label>
                                                <input type="text">
                                            </div>
                                            <div class="fields-item green">
                                                <label class="grey">Паллеты</label>
                                                <input type="number">
                                            </div>
                                            <div class="fields-item green">
                                                <label class="grey">Габариты(М)</label>
                                                <div class="fields-item__box">
                                                    <input type="text" placeholder="Д">
                                                    <span>x</span>
                                                    <input type="text" placeholder="Ш">
                                                    <span>x</span>
                                                    <input type="text" placeholder="В">
                                                </div>
                                            </div>
                                            <div class="fields-item green">
                                                <label class="grey">грузоподъемность (т)</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="row docs">
                                            <div class="fields-item attachDocuments photos">
                                                <input type="file" name="autoPhotos" id="autoPhotos" multiple
                                                    accept="image/png, image/jpeg, image/jpg">
                                            </div>
                                            <div class="fields-item attachDocuments docs">
                                                <input type="file" name="autoDocs" id="autoDocs" multiple
                                                    accept=".xlsx,.xls,.doc,.docx,.txt,.pdf">
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                    </div>
                                    <div class="add-option add-car">
                                        <span class="ic add-option"></span>
                                        <p class="add-text">Добавить машину</p>
                                        <p class="hidden-text">Удалить машину</p>
                                    </div>
                                    <div class="divider"></div>
                                </fieldset>
                            </div>
                            <div class="form-tabs__tab">
                                <fieldset id="porters" class="porters-show">
                                    <div class="fields">
                                        <div class="fields-title">Грузчики</div>
                                        <div class="row porters">
                                            <div class="fields-item green">
                                                <label class="grey">ФИО</label>
                                                <input type="text">
                                            </div>
                                            <div class="fields-item green">
                                                <label class="grey">Телефон</label>
                                                <input type="tel">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-option add-porters">
                                        <span class="ic add-option"></span>
                                        <p class="add-text">Добавить грузчика</p>
                                        <p class="hidden-text">Удалить грузчика</p>
                                    </div>
                                    <div class="divider"></div>
                                </fieldset>
                            </div>
                        </div>

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