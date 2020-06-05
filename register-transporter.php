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
                    <h1 class="block-heading">Регистрация исполнителя</h1>
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

        <section class="register-transporter register-form">
            <div class="wrapper">
                <div class="inner">
                    <div class="content">
                        <form action="">
                            <div class="fields">
                                <div class="row">
                                    <div class="fields-item green">
                                        <label class="grey" for="name">Ваше имя</label>
                                        <input type="text" name="name" id="name">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey" for="inn">ИНН</label>
                                        <input type="text" name="inn" id="inn">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey" for="certificate">Свидетельство</label>
                                        <input type="text" name="certificate" id="certificate">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="fields-item green">
                                        <label class="grey" for="autonumber">Номер машины</label>
                                        <input type="text" name="autonumber" id="autonumber">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey" for="automark">Марка</label>
                                        <input type="text" name="automark" id="automark">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey" for="automodel">Модель</label>
                                        <input type="text" name="automodel" id="automodel">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey" for="year">Год выпуска</label>
                                        <input type="number" min="0" name="year" id="year">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey" for="pallets">Паллеты</label>
                                        <input type="number" min="0" name="pallets" id="pallets">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey" for="dimensions">Габариты(М)</label>
                                        <input type="text" name="dimensions" id="dimensions">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey" for="capacity">грузоподъемность (т)</label>
                                        <input type="number" min="0" name="capacity" id="capacity">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="add-option">
                                        <span class="ic add-option"></span>
                                        <p class="add-text">Добавить прицеп</p>
                                        <p class="hidden-text">Убрать прицеп</p>
                                    </div>
                                    <div class="fields-item green optional">
                                        <label class="grey" for="trailer">Номер прицепа</label>
                                        <input type="text" name="trailer" id="trailer">
                                    </div>
                                    <div class="fields-item green optional">
                                        <label class="grey" for="trailer-pallets">Паллеты</label>
                                        <input type="number" min="0" name="trailer-pallets" id="trailer-pallets">
                                    </div>
                                    <div class="fields-item green optional">
                                        <label class="grey" for="trailer-dimensions">Габариты(М)</label>
                                        <input type="text" name="trailer-dimensions" id="trailer-dimensions">
                                    </div>
                                    <div class="fields-item green optional">
                                        <label class="grey" for="trailer-capacity">грузоподъемность (т)</label>
                                        <input type="text" name="trailer-capacity" id="trailer-capacity">
                                    </div>
                                </div>
                            </div>
                            <div class="attach-images drop-area">
                                <input type="file" name="images" id="images" multiple accept="image/png, image/jpeg">
                                <span class="ic images"></span>
                                <label for="files">Загрузить фото авто</label>
                            </div>
                            <div class="attach-files drop-area">
                                <input type="file" name="files" id="files" multiple>
                                <span class="ic files"></span>
                                <label for="files">Загрузить документ</label>
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
                                <button type="submit" class="flat-btn yellow">Отправить</button>
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