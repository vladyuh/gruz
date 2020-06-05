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
                    <h1 class="block-heading">Регистрация физического лица</h1>
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

        <section class="register-individual register-form">
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
                                        <label class="grey" for="name">Телефон</label>
                                        <input type="tel" name="phone" id="phone">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey" for="name">Ваш email (Логин)</label>
                                        <input type="email" name="email" id="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="fields-item green">
                                        <label class="grey" for="name">Пароль</label>
                                        <input type="password" name="password" id="password">
                                    </div>
                                    <div class="fields-item green">
                                        <label class="grey" for="name">Подтверждение пароля</label>
                                        <input type="password" name="repeat-password" id="repeat-password">
                                    </div>
                                </div>
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