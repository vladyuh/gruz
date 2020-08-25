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
                    <li><a href="/company-personal.php">Личный кабинет</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="personal-nav">
        <div class="wrapper">
            <div class="inner">
                <div class="content">
                    <a href="/company-personal.php" class="">
                        <span class="ic person"></span>
                        <p>Профиль</p>
                    </a>
                    <a href="/company-personal-orders.php" class="active">
                        <span class="ic inwork"></span>
                        <p>В работе</p>
                    </a>
                    <a href="/index.php" class="exit">
                        <p>Выйти</p>
                        <span class="ic exit"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="profile-orders company-orders">
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
                    <div class="profile-orders__table orders-table company-orders__table">
                        <div class="table">
                            <div class="table__row table__head">
                                <div class="table__cell">
                                    <div class="table__cell-content">
                                        <span>Номер заказа</span>
                                    </div>
                                </div>
                                <div class="table__cell from">
                                    <div class="table__cell-content">
                                        <span>Откуда</span>
                                    </div>
                                </div>
                                <div class="table__cell to">
                                    <div class="table__cell-content">
                                        <span>Куда</span>
                                    </div>
                                </div>
                                <div class="table__cell sortable">
                                    <div class="table__cell-content">
                                        <span>Дата загрузки</span>
                                    </div>
                                </div>
                                <div class="table__cell auto">
                                    <div class="table__cell-content">
                                        <span>Автомобиль</span>
                                    </div>
                                </div>
                                <div class="table__cell driver">
                                    <div class="table__cell-content">
                                        <span>Водитель</span>
                                    </div>
                                </div>
                                <div class="table__cell">
                                    <div class="table__cell-content">
                                        <span>Статус</span>
                                    </div>
                                </div>
                                <div class="table__cell">
                                    <div class="table__cell-content">
                                        способ оплаты
                                    </div>
                                </div>
                                <div class="table__cell sortable">
                                    <div class="table__cell-content">
                                        <span>сумма заказа</span>
                                        <span class="ic sort"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="table__row">
                                <div class="table__cell number" data-title="#"><a href="/company-personal-order.php">645 767 346</a></div>
                                <div class="table__cell from" data-title="Откуда"> г.Минск, ул. Ленина, д. 43</div>
                                <div class="table__cell to" data-title="Куда">д. Зайцево, пер. Майский, д. 32</div>
                                <div class="table__cell creation-date" data-title="Дата загрузки">11.03.20</div>
                                <div class="table__cell auto" data-title="Автомобиль">Mercedes-Benz <br>4658 АХ-3</div>
                                <div class="table__cell driver" data-title="Водитель">Иванов Петр <br>+375 (29) 482-25-25</div>
                                <div class="table__cell status" data-title=""><span class="in-progress">В пути <br>к заказчику</span></div>
                                <div class="table__cell payment" data-title="Cпособ оплаты">Наличными</div>
                                <div class="table__cell cost" data-title="Сумма заказа">3846</div>
                            </div>
                            <div class="table__row">
                                <div class="table__cell number" data-title="#"><a href="/company-personal-order.php">645 767 346</a></div>
                                <div class="table__cell from" data-title="Откуда"> г.Минск, ул. Ленина, д. 43</div>
                                <div class="table__cell to" data-title="Куда">д. Зайцево, пер. Майский, д. 32</div>
                                <div class="table__cell creation-date" data-title="Дата загрузки">11.03.20</div>
                                <div class="table__cell auto" data-title="Автомобиль">Hyundai 3267 АХ-6 <br><strong class="trailer">Прицеп:</strong> 24647</div>
                                <div class="table__cell driver" data-title="Водитель">Семенов Виктор <br>+375 (29) 482-25-25</div>
                                <div class="table__cell status" data-title=""><span class="in-progress">Заказ <br>выполнен</span></div>
                                <div class="table__cell payment" data-title="Cпособ оплаты">ЕРИП</div>
                                <div class="table__cell cost" data-title="Сумма заказа">3846</div>
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