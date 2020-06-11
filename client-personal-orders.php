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
                    <a href="/client-personal.php" class="">
                        <span class="ic person"></span>
                        <p>Профиль</p>
                    </a>
                    <a href="/client-personal-orders.php" class="active">
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

    <section class="profile-orders customer-orders">
        <div class="wrapper">
            <div class="inner">
                <div class="content">
                    <div class="profile-orders__search">
                        <form action="">
                            <div class="fields-item">
                                <label for="">Быстрый поиск</label>
                                <input type="text" name="" id="" class="search"
                                    placeholder="Введите номер заказа или населенный пункт">
                            </div>
                        </form>
                    </div>
                    <div class="profile-orders__status">
                        <form action="" id="profile-orders__status">
                            <div class="fields-item">
                                <label for="#status">Статус</label>
                                <select name="status" id="status" form="profile-orders__status">
                                    <option value="Выберите" disabled selected></option>
                                    <option value="checking">На проверке</option>
                                    <option value="done">Выполнен</option>
                                    <option value="canceled">Отменен</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="profile-orders__table orders-table">
                        <div class="table">
                            <div class="table__row table__head">
                                <div class="table__cell">
                                    <div class="table__cell-content">
                                        <span>Номер заказа</span>
                                    </div>
                                </div>
                                <div class="table__cell">
                                    <div class="table__cell-content">
                                        <span>Откуда</span>
                                    </div>
                                </div>
                                <div class="table__cell">
                                    <div class="table__cell-content">
                                        <span>Куда</span>
                                    </div>
                                </div>
                                <div class="table__cell sortable">
                                    <div class="table__cell-content">
                                        <span>Дата создания</span>
                                        <span class="ic sort"></span>
                                    </div>
                                </div>
                                <div class="table__cell">
                                    <div class="table__cell-content">
                                        <span>Дата забора<br> груза</span>
                                    </div>
                                </div>
                                <div class="table__cell">
                                    <div class="table__cell-content">
                                        <span>Статус</span>
                                    </div>
                                </div>
                                <div class="table__cell sortable">
                                    <div class="table__cell-content">
                                        <span>сумма заказа</span>
                                        <span class="ic sort"></span>
                                    </div>
                                </div>
                                <div class="table__cell sortable">
                                    <div class="table__cell-content">
                                    </div>
                                </div>
                            </div>
                            <div class="table__row active">
                                <div class="table__cell number" data-title="#">645 767 346</div>
                                <div class="table__cell from" data-title="Откуда"> г.Минск, ул. Ленина, д. 43</div>
                                <div class="table__cell to" data-title="Куда">д. Зайцево, пер. Майский, д. 32</div>
                                <div class="table__cell creation-date" data-title="Дата создания">11.03.20</div>
                                <div class="table__cell pickup-date" data-title="Дата забора груза">21.03.20</div>
                                <div class="table__cell status" data-title="">На проверке</div>
                                <div class="table__cell cost" data-title="Сумма заказа">3846</div>
                                <div class="table__cell buttons">
                                    <div class="table__cell-content">
                                        <a class="about-order" href="/client-personal-order.php"><p>Подробнее</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="table__row">
                                <div class="table__cell number" data-title="#">645 767 346</div>
                                <div class="table__cell from" data-title="Откуда"> г.Минск, ул. Ленина, д. 43</div>
                                <div class="table__cell to" data-title="Куда">д. Зайцево, пер. Майский, д. 32</div>
                                <div class="table__cell creation-date" data-title="Дата создания">11.03.20</div>
                                <div class="table__cell pickup-date" data-title="Дата забора груза">21.03.20</div>
                                <div class="table__cell status" data-title="">Выполнен</div>
                                <div class="table__cell cost" data-title="Сумма заказа">3846</div>
                                <div class="table__cell buttons">
                                    <div class="table__cell-content">
                                        <a href="#rate" data-fancybox="" class="rate">
                                            <span class="ic star"></span>
                                            <p>Оценить</p>
                                        </a>
                                        <a class="about-order" href="/client-personal-order.php"><p>Подробнее</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="table__row">
                                <div class="table__cell number" data-title="#">645 767 346</div>
                                <div class="table__cell from" data-title="Откуда"> г.Минск, ул. Ленина, д. 43</div>
                                <div class="table__cell to" data-title="Куда">д. Зайцево, пер. Майский, д. 32</div>
                                <div class="table__cell creation-date" data-title="Дата создания">11.03.20</div>
                                <div class="table__cell pickup-date" data-title="Дата забора груза">21.03.20</div>
                                <div class="table__cell status" data-title="">Выполнен</div>
                                <div class="table__cell cost" data-title="Сумма заказа">3846</div>
                                <div class="table__cell buttons">
                                    <div class="table__cell-content">
                                        <a href="#rate" data-fancybox="" class="rate">
                                            <span class="ic star"></span>
                                            <p>Оценить</p>
                                        </a>
                                        <a class="about-order" href="/client-personal-order.php"><p>Подробнее</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="table__row">
                                <div class="table__cell number" data-title="#">645 767 346</div>
                                <div class="table__cell from" data-title="Откуда"> г.Минск, ул. Ленина, д. 43</div>
                                <div class="table__cell to" data-title="Куда">д. Зайцево, пер. Майский, д. 32</div>
                                <div class="table__cell creation-date" data-title="Дата создания">11.03.20</div>
                                <div class="table__cell pickup-date" data-title="Дата забора груза">21.03.20</div>
                                <div class="table__cell status" data-title="">Отменен</div>
                                <div class="table__cell cost" data-title="Сумма заказа">3846</div>
                                <div class="table__cell buttons">
                                    <div class="table__cell-content">
                                        <a class="about-order" href="/client-personal-order.php"><p>Подробнее</p></a>
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