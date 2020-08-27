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
            <div class="fields-item select green">
                <span class="ic person-green"></span>
                <select>
                    <option value="entity">Юридическое лицо</option>
                    <option value="individ">Физическое лицо</option>
                </select>
            </div>
            <div class="fields-item canHide individ green">
                <label for="">телефон</label>
                <input type="tel">
            </div>
            <div class="fields-item canHide entity green">
                <label for="">email</label>
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
            <button class="flat-btn yellow">Отправить</button>
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

<div id="send-contract" class="popup" style="display:none">
    <div class="popup-title">Отправить договор</div>
    <form action="">
        <div class="fields">
            <div class="fields-item fullwidth attachDocuments personal">
                <input type="file" name="companyFiles3" id="companyFiles3" multiple
                    accept=".xlsx,.xls,.doc,.docx,.txt,.pdf">
            </div>
        </div>
        <div class="submit">
            <button class="flat-btn yellow">Отправить</button>
        </div>
    </form>

</div>

<div id="add-driver" class="popup popup-adddriver" style="display:none">
    <div class="popup-title">Добавить водителя</div>
    <form action="">
        <div class="fields">
            <div class="fields-item">
                <label for="">ФИО</label>
                <input type="text" name="" id="">
            </div>
            <div class="fields-item">
                <label for="">телефон</label>
                <input type="tel" name="" id="">
            </div>
            <div class="fields-item fullwidth">
                <label for="">Паспорт (Серия номер, кем и дата выдачи)</label>
                <input type="text" name="" id="">
            </div>
            <div class="fields-item fullwidth attachDocuments driver">
                <input type="file" name="driverFiles2" id="driverFiles2" multiple
                    accept="image/png, image/jpeg, image/jpg">
            </div>
        </div>
        <div class="submit">
            <button class="flat-btn yellow">Добавить</button>
        </div>
    </form>
</div>

<div id="add-mover" class="popup popup-adddriver" style="display:none">
    <div class="popup-title">Добавить грузчика</div>
    <form action="">
        <div class="fields">
            <div class="fields-item">
                <label for="">ФИО</label>
                <input type="text" name="" id="">
            </div>
            <div class="fields-item">
                <label for="">телефон</label>
                <input type="tel" name="" id="">
            </div>
            <div class="fields-item fullwidth">
                <label for="">Паспорт (Серия номер, кем и дата выдачи)</label>
                <input type="text" name="" id="">
            </div>
        </div>
        <div class="submit">
            <button class="flat-btn yellow">Добавить</button>
        </div>
    </form>

</div>

<div id="add-car" class="popup popup-addautos" style="display:none">
    <div class="popup-title">Добавить автомобиль</div>
    <form action="">
        <div class="fields car">
            <div class="fields-item">
                <label for="">номер машины</label>
                <input type="text" name="" id="">
            </div>
            <div class="fields-item">
                <label for="">марка</label>
                <input type="text" name="" id="">
            </div>
            <div class="fields-item">
                <label for="">Модель</label>
                <input type="text" name="" id="">
            </div>
            <div class="fields-item">
                <label for="">год выпуска</label>
                <input type="text" name="" id="">
            </div>
            <div class="fields-item pallets">
                <label for="">паллеты</label>
                <input type="text">
            </div>
            <div class="fields-item dimensions">
                <label for="">габариты основного отсека (м)</label>
                <div class="fields-item__box">
                    <input type="text" placeholder="Д">
                    <span>x</span>
                    <input type="text" placeholder="Ш">
                    <span>x</span>
                    <input type="text" placeholder="В">
                </div>
                <div class="tooltip">
                    <span class="ic info"></span>
                    <p>Ширину и высоту необходимо указывать по проему грузового отсека</p>
                </div>
            </div>
            <div class="fields-item">
                <label for="">грузоподъемность (т)</label>
                <input type="text" name="" id="">
            </div>
        </div>
        <div class="add-option add-trailer">
            <span class="ic add-option"></span>
            <p class="add-text">Добавить прицеп</p>
            <p class="hidden-text">Удалить прицеп</p>
        </div>
        <div class="fields trailer">
            <div class="fields-item">
                <label class="grey">Номер прицепа</label>
                <input type="text">
            </div>
            <div class="fields-item">
                <label class="grey">Паллеты</label>
                <input type="number">
            </div>
            <div class="fields-item">
                <label class="grey">Габариты(М)</label>
                <div class="fields-item__box">
                    <input type="text" placeholder="Д">
                    <span>x</span>
                    <input type="text" placeholder="Ш">
                    <span>x</span>
                    <input type="text" placeholder="В">
                </div>
            </div>
            <div class="fields-item">
                <label class="grey">грузоподъемность (т)</label>
                <input type="text">
            </div>

        </div>
        <div class="fields files">
            <div class="fields-item attachDocuments photos">
                <input type="file" name="autoPhotos2" id="autoPhotos2" multiple
                    accept="image/png, image/jpeg, image/jpg">
            </div>
            <div class="fields-item attachDocuments docs">
                <input type="file" name="autoDocs2" id="autoDocs2" multiple accept=".xlsx,.xls,.doc,.docx,.txt,.pdf">
            </div>
        </div>
        <div class="submit">
            <button class="flat-btn yellow">Добавить</button>
        </div>
    </form>

</div>

<div id="order-accept" class="popup popup-order" style="display:none">
    <div class="popup-title">Заказ на перевозку успешно создан!</div>
    <div class="popup-desc">
        <p>За час до подачи автомобиля вам придет sms-сообщение с информацией о водителе.</p>
    </div>
    <form action="">
        <div class="fields">
            <div class="enterCode">
                <span class="ic code"></span>
                <div class="enterCode-input">
                    <label for="">Введите смс код</label>
                    <input type="text" name="СМС-код" value="320975">
                </div>
            </div>
        </div>
        <div class="submit">
            <button type="submit" class="flat-btn yellow">Подтвердить</button>
        </div>
    </form>
</div>

<div id="order-success" class="popup popup-order" style="display:none">
    <div class="popup-title">Спасибо, ваш заказ успешно создан!</div>
    <div class="popup-desc">
        <p>За час до подачи автомобиля вам придет sms-сообщение с информацией об автомобиле и о водителе.</p>
        <br>
        <p>Для отслеживания статуса заказа вы можете авторизоваться в Личном кабинете по номеру телефона и коду из
            sms-сообщения присланного ранее при подтверждении заказа или по почте для юридических лиц.</p>
    </div>
    <div class="submit">
        <a href="javascript:$.fancybox.close();" class="flat-btn yellow">Закрыть</a>
    </div>
</div>

<div id="order-success-1" class="popup popup-order" style="display:none">
    <div class="popup-title">Спасибо, ваш заказ успешно создан!</div>
    <div class="popup-desc">
        <p>За час до подачи автомобиля вам придет sms-сообщение с информацией об автомобиле и о водителе.</p>
        <br>
        <p>Возможность отслеживания заказа доступна в Личном кабинете.</p>
    </div>
    <div class="submit">
        <a href="javascript:$.fancybox.close();" class="flat-btn yellow">Закрыть</a>
    </div>
</div>

<div id="reg-success" class="popup popup-register" style="display:none">
    <div class="popup-title">Вы успешно зарегистрировались на сайте!</div>
    <div class="popup-desc">Для входа в личный кабинет пройдите авторизацию</div>
    <div class="submit">
        <a href="#" class="flat-btn yellow">Авторизироваться</a>
    </div>
</div>

<div id="edit-driver" class="popup wide popup-edit" style="display:none">
    <div class="popup-title">Редактирование данных</div>
    <form action="">
        <div class="fields">
            <div class="fields-item">
                <label for="">ФИО</label>
                <input type="text" name="" id="" value="Иванов Семен">
            </div>
            <div class="fields-item">
                <label for="">телефон</label>
                <input type="tel" name="" id="" value="+375 (29) 495-34-34">
            </div>
            <div class="fields-item fullwidth">
                <label for="">Паспорт (Серия номер, кем и дата выдачи)</label>
                <input type="text" name="" id="" value="КВ 3581437 Октябрьским РОВД 03.08.2014">
            </div>
            <div class="fields-item fullwidth attachDocuments driver">
                <input type="file" name="driverFiles3" id="driverFiles3" multiple
                    accept="image/png, image/jpeg, image/jpg">
            </div>
        </div>
        <div class="uploadedImages">
            <div class="uploadedImages-image">
                <img src="/img/uploadedPhotos/driver-1.jpg" alt="">
                <a href="#">
                    <span class="ic basket"></span>
                </a>
            </div>
            <div class="uploadedImages-image">
                <img src="/img/uploadedPhotos/driver-2.jpg" alt="">
                <a href="#">
                    <span class="ic basket"></span>
                </a>
            </div>
        </div>
        <div class="submit">
            <button class="flat-btn yellow">Сохранить</button>
        </div>
    </form>
</div>

<div id="edit-mover" class="popup wide popup-edit" style="display:none">
    <div class="popup-title">Редактирование данных</div>
    <form action="">
        <div class="fields">
            <div class="fields-item">
                <label for="">ФИО</label>
                <input type="text" name="" id="" value="Иванов Семен">
            </div>
            <div class="fields-item">
                <label for="">телефон</label>
                <input type="tel" name="" id="" value="+375 (29) 495-34-34">
            </div>
            <div class="fields-item fullwidth">
                <label for="">Паспорт (Серия номер, кем и дата выдачи)</label>
                <input type="text" name="" id="" value="КВ 3581437 Октябрьским РОВД 03.08.2014">
            </div>
        </div>
        <div class="submit">
            <button class="flat-btn yellow">Сохранить</button>
        </div>
    </form>

</div>

<div id="edit-car" class="popup wide popup-addautos" style="display:none">
    <div class="popup-title">Редактирование данных</div>
    <form action="">
        <div class="fields car">
            <div class="fields-item">
                <label for="">номер машины</label>
                <input type="text" name="" id="" value="4658 AX-3">
            </div>
            <div class="fields-item">
                <label for="">марка</label>
                <input type="text" name="" id="" value="Mercedes">
            </div>
            <div class="fields-item">
                <label for="">Модель</label>
                <input type="text" name="" id="" value="Benz">
            </div>
            <div class="fields-item">
                <label for="">год выпуска</label>
                <input type="text" name="" id="" value="2010">
            </div>
            <div class="fields-item pallets">
                <label for="">паллеты</label>
                <input type="text" value="2">
            </div>
            <div class="fields-item dimensions">
                <label for="">габариты основного отсека (м)</label>
                <div class="fields-item__box">
                    <input type="text" placeholder="Д" value="6">
                    <span>x</span>
                    <input type="text" placeholder="Ш" value="2">
                    <span>x</span>
                    <input type="text" placeholder="В" value="2.5">
                </div>
                <div class="tooltip">
                    <span class="ic info"></span>
                    <p>Ширину и высоту необходимо указывать по проему грузового отсека</p>
                </div>
            </div>
            <div class="fields-item">
                <label for="">грузоподъемность (т)</label>
                <input type="text" name="" id="" value="3">
            </div>
        </div>
        <div class="add-option add-trailer">
            <span class="ic add-option"></span>
            <p class="add-text">Добавить прицеп</p>
            <p class="hidden-text">Удалить прицеп</p>
        </div>
        <div class="fields trailer">
            <div class="fields-item">
                <label class="grey">Номер прицепа</label>
                <input type="text" value="">
            </div>
            <div class="fields-item">
                <label class="grey">Паллеты</label>
                <input type="number" value="">
            </div>
            <div class="fields-item">
                <label class="grey">Габариты(М)</label>
                <div class="fields-item__box">
                    <input type="text" placeholder="Д" value="">
                    <span>x</span>
                    <input type="text" placeholder="Ш" value="">
                    <span>x</span>
                    <input type="text" placeholder="В" value="">
                </div>
            </div>
            <div class="fields-item">
                <label class="grey">грузоподъемность (т)</label>
                <input type="text" value="">
            </div>

        </div>
        <div class="fields files">
            <div class="fields-item attachDocuments photos">
                <input type="file" name="autoPhotos3" id="autoPhotos3" multiple
                    accept="image/png, image/jpeg, image/jpg">
            </div>
            <div class="fields-item attachDocuments docs">
                <input type="file" name="autoDocs3" id="autoDocs3" multiple accept=".xlsx,.xls,.doc,.docx,.txt,.pdf">
            </div>
        </div>
        <div class="uploadedImages">
            <div class="uploadedImages-image">
                <img src="/img/uploadedPhotos/car-1.png" alt="">
                <a href="#">
                    <span class="ic basket"></span>
                </a>
            </div>
            <div class="uploadedImages-image">
                <img src="/img/uploadedPhotos/car-2.png" alt="">
                <a href="#">
                    <span class="ic basket"></span>
                </a>
            </div>
            <div class="uploadedImages-image">
                <img src="/img/uploadedPhotos/car-3.png" alt="">
                <a href="#">
                    <span class="ic basket"></span>
                </a>
            </div>
        </div>
        <div class="document-items">
            <div class="item">
                <strong class="item-extension">PDF</strong>
                <a href="#" download="" class="item-filename">
                    Договор автомобильной перевозки груза.pdf
                    <span>(236 Кб)</span>
                </a>
                <a href="#" class="item-delete">
                    <span class="ic delete"></span>
                </a>
            </div>
            <div  class="item">
                <strong class="item-extension">PDF</strong>
                <a href="#" download="" class="item-filename">
                    Договор автомобильной перевозки груза.pdf
                    <span>(236 Кб)</span>
                </a>
                <a href="#" class="item-delete">
                    <span class="ic delete"></span>
                </a>
            </div>
        </div>
        <div class="submit">
            <button class="flat-btn yellow">Сохранить</button>
        </div>
    </form>
</div>

<div id="add-documents" class="popup popup-docs" style="display:none">
    <div class="title">Документы</div>
    <form class="attach-files drop-area">
        <input type="file" name="files" multiple="">
        <span class="ic files"></span>
        <label for="files">Загрузить документ</label>
    </form>
    <div class="document-items">
        <a href="#" download="" class="item">
            <strong class="item-extension">PDF</strong>
            <p class="item-filename">
                Договор автомобильной перевозки груза.pdf
                <span>(236 Кб)</span>
            </p>
        </a>
        <a href="#" download="" class="item">
            <strong class="item-extension">PDF</strong>
            <p class="item-filename">
                Договор автомобильной перевозки груза.pdf
                <span>(236 Кб)</span>
            </p>
        </a>
        <a href="#" download="" class="item">
            <strong class="item-extension">TXT</strong>
            <p class="item-filename">
                Договор фрахтования для перевозки.pdf
                <span>(236 Кб)</span>
            </p>
        </a>
    </div>
</div>

<div id="driverInfo" class="popup wide info" style="display:none">
    <div class="popup-title">Водитель</div>
    <div class="popup-body">
        <div class="info-item">
            <div class="info-item__title">ФИО</div>
            <div class="info-item__value">Иванов Семен</div>
        </div>
        <div class="info-item">
            <div class="info-item__title">телефон</div>
            <div class="info-item__value">+375 (29) 495-34-34</div>
        </div>
        <div class="info-item fullwidth">
            <div class="info-item__title">Паспорт (Серия номер, кем и дата выдачи)</div>
            <div class="info-item__value">КВ 3581437 Октябрьским РОВД 03.08.2014</div>
        </div>
        <div class="uploadedImages">
            <a href="/img/uploadedPhotos/driver-1.jpg" data-fancybox="gallery1" class="uploadedImages-image">
                <img src="/img/uploadedPhotos/driver-1.jpg" alt="">
            </a>
            <a href="/img/uploadedPhotos/driver-2.jpg" data-fancybox="gallery1" class="uploadedImages-image">
                <img src="/img/uploadedPhotos/driver-2.jpg" alt="">
            </a>
        </div>
    </div>
    <div class="popup-close">
        <a href="javascript:$.fancybox.close()" class="flat-btn yellow">Закрыть</a>
    </div>
</div>

<div id="carInfo" class="popup wide info" style="display:none">
    <div class="popup-title">Автомобиль</div>
    <div class="popup-body">
        <div class="info-item">
            <div class="info-item__title">НОМЕР МАШИНЫ</div>
            <div class="info-item__value">4658 AX-3</div>
        </div>
        <div class="info-item">
            <div class="info-item__title">МАРКА</div>
            <div class="info-item__value">Mercedes</div>
        </div>
        <div class="info-item">
            <div class="info-item__title">МОДЕЛЬ</div>
            <div class="info-item__value">Benz</div>
        </div>
        <div class="info-item">
            <div class="info-item__title">ГОД ВЫПУСКА</div>
            <div class="info-item__value">2010</div>
        </div>
        <div class="info-item">
            <div class="info-item__title">ПАЛЛЕТЫ</div>
            <div class="info-item__value">2</div>
        </div>
        <div class="info-item">
            <div class="info-item__title">ГАБАРИТЫ ОСНОВНОГО ОТСЕКА (М)</div>
            <div class="info-item__value">2 x 2 x 2</div>
        </div>
        <div class="info-item">
            <div class="info-item__title">ГРУЗОПОДЪЕМНОСТЬ (Т)</div>
            <div class="info-item__value">3</div>
        </div>
        <div class="info-item">
            <div class="info-item__title">НОМЕР ПРИЦЕПА</div>
            <div class="info-item__value"></div>
        </div>
        <div class="info-item">
            <div class="info-item__title">ПАЛЛЕТЫ</div>
            <div class="info-item__value">2</div>
        </div>
        <div class="info-item">
            <div class="info-item__title">ГАБАРИТЫ ОСНОВНОГО ОТСЕКА (М)</div>
            <div class="info-item__value">2 x 2 x 2</div>
        </div>
        <div class="info-item">
            <div class="info-item__title">ГРУЗОПОДЪЕМНОСТЬ (Т)</div>
            <div class="info-item__value">3</div>
        </div>
        <div class="uploadedImages">
            <a data-fancybox="gallery" href="/img/car-image-1b.png" class="uploadedImages-image">
                <img src="/img/uploadedPhotos/car-1.png" alt="">
            </a>
            <a data-fancybox="gallery" href="/img/car-image-2b.png" class="uploadedImages-image">
                <img src="/img/uploadedPhotos/car-2.png" alt="">
            </a>
        </div>
        <div class="document-items">
            <a href="#" download="" class="item">
                <strong class="item-extension">PDF</strong>
                <p class="item-filename">
                    Договор автомобильной перевозки груза.pdf
                    <span>(236 Кб)</span>
                </p>
            </a>
            <a href="#" download="" class="item">
                <strong class="item-extension">PDF</strong>
                <p class="item-filename">
                    Договор автомобильной перевозки груза.pdf
                    <span>(236 Кб)</span>
                </p>
            </a>
        </div>
    </div>
    <div class="popup-close">
        <a href="javascript:$.fancybox.close()" class="flat-btn yellow">Закрыть</a>
    </div>
</div>

<div id="moverInfo" class="popup wide info" style="display:none">
    <div class="popup-title">Грузчик</div>
    <div class="popup-body">
        <div class="info-item">
            <div class="info-item__title">ФИО</div>
            <div class="info-item__value">Иванов Семен</div>
        </div>
        <div class="info-item">
            <div class="info-item__title">телефон</div>
            <div class="info-item__value">+375 (29) 495-34-34</div>
        </div>
        <div class="info-item fullwidth">
            <div class="info-item__title">Паспорт (Серия номер, кем и дата выдачи)</div>
            <div class="info-item__value">КВ 3581437 Октябрьским РОВД 03.08.2014</div>
        </div>
    </div>
    <div class="popup-close">
        <a href="javascript:$.fancybox.close()" class="flat-btn yellow">Закрыть</a>
    </div>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<script src="https://api-maps.yandex.ru/2.1/?apikey=b8529920-6ab5-43b4-bcd0-ea5bde21fccd&lang=ru_RU"
    type="text/javascript">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/inputmask/inputmask.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script src="../tooltipster/dist/js/tooltipster.bundle.min.js"></script>

<script src="/jfiler/js/jquery.filer.min.js" type="text/javascript"></script>

<script src="/js/main.js"></script>

<script src="/js/register.js"></script>

<script type="module" src="https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate"></script>

<script type="module" src="https://cdn.jsdelivr.net/npm/@pwabuilder/pwainstall"></script>

<script>
    if ("serviceWorker" in navigator) {
        window.addEventListener("load", function () {
            navigator.serviceWorker
                .register("/sw.js")
                .then(function (registration) {
                    console.log(
                        "Service worker successfully registered on scope",
                        registration.scope
                    );
                })
                .catch(function (error) {
                    console.log("Service worker failed to register");
                });
        });
    }
</script>

</body>

</html>