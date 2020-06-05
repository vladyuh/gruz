<footer>
    <div class="wrapper">
        <div class="inner">
            <div class="content">
                <a href="/" class="footer-logo">
                    <img src="/img/footer-logo.svg" alt="">
                    <div class="footer-logo--text">Транспортная<br> компания</div>
                </a>
                <div class="footer-nav">
                    <ul>
                        <li><a href="services.php">Услуги</a></li>
                        <li><a href="tariffs.php">Тарифы</a></li>
                        <li><a href="autopark.php">Автопарк</a></li>
                        <li><a href="about.php">О компании</a></li>
                        <li><a href="contacts.php">Контакты</a></li>
                    </ul>
                </div>
                <a href="#authorise" data-fancybox class="profile-btn">
                    <span class="ic lock"></span>
                    <span class="text">Личный кабинет</span>
                </a>
            </div>
        </div>
    </div>
</footer>

<div id="authorise" class="popup" style="display:none">
    <div class="popup-title">Авторизация</div>
    <form action="">
        <div class="fields">
            <div class="fields-item green">
                <label for="">Email (Логин)</label>
                <input type="email">
            </div>
            <div class="fields-item green">
                <label for="">Пароль</label>
                <input type="password">
            </div>
        </div>
        <div class="submit">
            <button class="flat-btn yellow">Войти</button>
        </div>
    </form>
    <div class="popup-options">
        <a href="register.php">Регистрация</a>
        <a href="password.php">Забыли пароль?</a>
    </div>
</div>

<div id="callback" class="popup" style="display:none">
    <div class="popup-title">Оставить заявку</div>
    <form action="">
        <div class="fields">
            <div class="fields-item green">
                <label for="">Ваше имя</label>
                <input type="text">
            </div>
            <div class="fields-item green">
                <label for="">Ваш номер телефона</label>
                <input type="tel">
            </div>
        </div>
        <div class="submit">
            <button class="flat-btn yellow">Войти</button>
        </div>
        <div class="agreement">
            Нажимая на кнопку, я принимаю соглашение на <strong>обработку персональных данных</strong>
        </div>
    </form>

</div>

<div id="rate" class="popup" style="display:none">
    <div class="popup-title">Оценка заказчика</div>
    <form action="">
        <div class="fields">
            <div class="rating">
                <span>
                    <input type="radio" name="rating" id="str5" value="5">
                    <label for="str5">
                        <span class="ic rating-star"></span>
                    </label>
                </span>
                <span>
                    <input type="radio" name="rating" id="str4" value="4">
                    <label for="str4">
                        <span class="ic rating-star"></span>
                    </label>
                </span>
                <span>
                    <input type="radio" name="rating" id="str3" value="3">
                    <label for="str3">
                        <span class="ic rating-star"></span>
                    </label>
                </span>
                <span>
                    <input type="radio" name="rating" id="str2" value="2">
                    <label for="str2">
                        <span class="ic rating-star"></span>
                    </label>
                </span>
                <span>
                    <input type="radio" name="rating" id="str1" value="1">
                    <label for="str1">
                        <span class="ic rating-star"></span>
                    </label>
                </span>
            </div>
            <div class="fields-item">
                <label for="#message">Текст отзыва</label>
                <textarea name="message" id="message"></textarea>
            </div>
        </div>
        <div class="submit">
            <button class="flat-btn yellow">Отправить</button>
        </div>
    </form>

</div>

<div id="add-photos" class="popup" style="display:none">
    <div class="popup-title">Добавить фото</div>
    <form action="">
        <div class="fields">
            <div class="attach-images">
                <input type="file" name="images" id="gallery-photo-add" multiple="" accept="image/png, image/jpeg">
                <span class="ic images"></span>
                <label for="files">Загрузить фото</label>
            </div>
            <div class="attach-images__preview"></div>
        </div>
        <div class="submit">
            <button class="flat-btn yellow">Отправить</button>
        </div>
    </form>

</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<script src="https://api-maps.yandex.ru/2.1/?apikey=b8529920-6ab5-43b4-bcd0-ea5bde21fccd&lang=ru_RU"
    type="text/javascript">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/inputmask/inputmask.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script src="../tooltipster/dist/js/tooltipster.bundle.min.js"></script>

<script src="/js/main.js"></script>

</body>

</html>