<?php
    require_once "head.php";
?>

<link rel="stylesheet" href="/css/tariffs.min.css">

<?php
    require_once "header.php";
?>

    <main>

        <div class="page-title">
            <div class="wrapper">
                <div class="inner">
                    <h1 class="block-heading">Тарифы</h1>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <div class="wrapper">
                <div class="inner">
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="tariffs.php">Тарифы</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tariffs">
            <div class="wrapper">
                <div class="inner">
                    <div class="tariffs-content">
                        <table class="tariffs-table">
                            <tbody>
                                <tr class="head">
                                    <th rowspan="2">Характеристики транспорта</th>
                                    <th rowspan="2">Мин. время работы<br> час</th>
                                    <th rowspan="2">Цена за час работы<br> BYN <span class="ic info tooltip"
                                            title="Краткая информация"></span></th>
                                    <th rowspan="2">Цена за 1 км<br> BYN <span class="ic info tooltip"
                                            title="Краткая информация"></span></th>
                                    <th colspan="3">Цена за 1 км по платной дороге EUR/км</th>
                                </tr>
                                <tr class="head">
                                    <th>&gt; 3.5т - 2 оси</th>
                                    <th>&gt; 3.5т - 3 оси</th>
                                    <th>&gt; 3.5т - ≥ 4 оси</th>
                                </tr>
                                <tr>
                                    <th class="first-column">
                                        <span class="ic car-1"></span>
                                        <p>
                                            Легковой транспорт<br>
                                            <small>до 1 т</small>
                                        </p>
                                    </th>
                                    <td>1</td>
                                    <td>20</td>
                                    <td>0.6</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-
                                    </td>
                                </tr>
                                <tr>
                                    <th class="first-column">
                                        <span class="ic car-2"></span>
                                        <p>
                                            Каблук<br>
                                            <small>до 1.5 т</small>
                                        </p>
                                    </th>
                                    <td>1</td>
                                    <td>20</td>
                                    <td>0.6</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th class="first-column">
                                        <span class="ic car-3"></span>
                                        <p>
                                            Грузовой транспорт<br>
                                            <small>до 5 т</small>
                                        </p>
                                    </th>
                                    <td>1</td>
                                    <td>20</td>
                                    <td>0.7</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th class="first-column">
                                        <span class="ic car-4"></span>
                                        <p>
                                            Грузовой транспорт<br>
                                            <small>от 5 т до 10 т</small>
                                        </p>
                                    </th>
                                    <td>1</td>
                                    <td>20</td>
                                    <td>0.8</td>
                                    <td>0.08</td>
                                    <td>0.10</td>
                                    <td>0.12</td>
                                </tr>
                                <tr>
                                    <th class="first-column">
                                        <span class="ic car-5"></span>
                                        <p>
                                            Грузовой транспорт<br>
                                            <small>более 10 т</small>
                                        </p>
                                    </th>
                                    <td>1</td>
                                    <td>20</td>
                                    <td>0.8</td>
                                    <td>0.08</td>
                                    <td>0.10</td>
                                    <td>0.12</td>
                                </tr>
                                <tr>
                                    <th class="first-column">
                                        <span class="ic car-6"></span>
                                        <p>
                                            Автовышка
                                        </p>
                                    </th>
                                    <td>2</td>
                                    <td>30</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th class="first-column">
                                        <span class="ic car-7"></span>
                                        <p>
                                            Эксковатор
                                        </p>
                                    </th>
                                    <td>2</td>
                                    <td>30</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th class="first-column">
                                        <span class="ic car-8"></span>
                                        <p>
                                            Самосвал
                                        </p>
                                    </th>
                                    <td>4</td>
                                    <td>60</td>
                                    <td>0.16 <span class="ic info tooltip" title="Краткая информация"></span></td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th class="first-column">
                                        <p>
                                            Грузчики
                                        </p>
                                    </th>
                                    <td>1</td>
                                    <td>
                                        10
                                        <span class="ic info tooltip" title="Краткая информация"></span>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="m-table">
                            <div class="column">
                                <div class="transport column-item">
                                    <span class="ic car-1"></span>
                                    <p>
                                        Легковой транспорт<br>
                                        <small>до 1 т</small>
                                    </p>
                                </div>
                                <div class="min-time column-item">
                                    <div class="title">Мин. время работы (час)</div>
                                    <div class="value">1</div>
                                </div>
                                <div class="price-work column-item">
                                    <div class="title">Цена за час работы (BYN) <span class="ic info tooltip"
                                            title="Краткая информация"></div>
                                    <div class="value">20</div>
                                </div>
                                <div class="price-road column-item">
                                    <div class="title">Цена за 1 км (BYN) <span class="ic info tooltip"
                                            title="Краткая информация"></div>
                                    <div class="value">0.6</div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="transport column-item">
                                    <span class="ic car-2"></span>
                                    <p>
                                        Каблук<br>
                                        <small>до 1.5 т</small>
                                    </p>
                                </div>
                                <div class="min-time column-item">
                                    <div class="title">Мин. время работы (час)</div>
                                    <div class="value">1</div>
                                </div>
                                <div class="price-work column-item">
                                    <div class="title">Цена за час работы (BYN) <span class="ic info tooltip"
                                            title="Краткая информация"></div>
                                    <div class="value">20</div>
                                </div>
                                <div class="price-road column-item">
                                    <div class="title">Цена за 1 км (BYN) <span class="ic info tooltip"
                                            title="Краткая информация"></div>
                                    <div class="value">0.6</div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="transport column-item">
                                    <span class="ic car-4"></span>
                                    <p>
                                        Грузовой транспорт<br>
                                        <small>до 5 т</small>
                                    </p>
                                </div>
                                <div class="min-time column-item">
                                    <div class="title">Мин. время работы (час)</div>
                                    <div class="value">1</div>
                                </div>
                                <div class="price-work column-item">
                                    <div class="title">Цена за час работы (BYN) <span class="ic info tooltip"
                                            title="Краткая информация"></div>
                                    <div class="value">20</div>
                                </div>
                                <div class="price-road column-item">
                                    <div class="title">Цена за 1 км (BYN) <span class="ic info tooltip"
                                            title="Краткая информация"></div>
                                    <div class="value">0.7</div>
                                </div>
                                <div class="price-paid">
                                </div>
                            </div>
                            <div class="column">
                                <div class="transport column-item">
                                    <span class="ic car-4"></span>
                                    <p>
                                        Грузовой транспорт<br>
                                        <small>от 5 т до 10 т</small>
                                    </p>
                                </div>
                                <div class="min-time column-item">
                                    <div class="title">Мин. время работы (час)</div>
                                    <div class="value">1</div>
                                </div>
                                <div class="price-work column-item">
                                    <div class="title">Цена за час работы (BYN) <span class="ic info tooltip"
                                            title="Краткая информация"></div>
                                    <div class="value">20</div>
                                </div>
                                <div class="price-road column-item">
                                    <div class="title">Цена за 1 км (BYN) <span class="ic info tooltip"
                                            title="Краткая информация"></div>
                                    <div class="value">0.8</div>
                                </div>
                                <div class="price-paid">
                                    <table>
                                        <th colspan="3">Цена за 1 км по платной дороге</th>
                                        <tr class="options">
                                            <td>> 3.5т - 2 оси</td>
                                            <td>> 3.5т - 2 оси</td>
                                            <td>> 3.5т - 2 оси</td>
                                        </tr>
                                        <tr>
                                            <td>0.08</td>
                                            <td>0.10</td>
                                            <td>0.12</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="column">
                                <div class="transport column-item">
                                    <span class="ic car-4"></span>
                                    <p>
                                        Грузовой транспорт<br>
                                        <small>более 10 т</small>
                                    </p>
                                </div>
                                <div class="min-time column-item">
                                    <div class="title">Мин. время работы (час)</div>
                                    <div class="value">1</div>
                                </div>
                                <div class="price-work column-item">
                                    <div class="title">Цена за час работы (BYN) <span class="ic info tooltip"
                                            title="Краткая информация"></div>
                                    <div class="value">20</div>
                                </div>
                                <div class="price-road column-item">
                                    <div class="title">Цена за 1 км (BYN) <span class="ic info tooltip"
                                            title="Краткая информация"></div>
                                    <div class="value">0.8</div>
                                </div>
                                <div class="price-paid">
                                    <table>
                                        <th colspan="3">Цена за 1 км по платной дороге</th>
                                        <tr class="options">
                                            <td>> 3.5т - 2 оси</td>
                                            <td>> 3.5т - 2 оси</td>
                                            <td>> 3.5т - 2 оси</td>
                                        </tr>
                                        <tr>
                                            <td>0.08</td>
                                            <td>0.10</td>
                                            <td>0.12</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="column">
                                <div class="transport column-item">
                                    <span class="ic car-5"></span>
                                    <p>
                                        Автовышка
                                    </p>
                                </div>
                                <div class="min-time column-item">
                                    <div class="title">Мин. время работы (час)</div>
                                    <div class="value">2</div>
                                </div>
                                <div class="price-work column-item">
                                    <div class="title">Цена за час работы (BYN) <span class="ic info tooltip"
                                            title="Краткая информация"></div>
                                    <div class="value">30</div>
                                </div>
                                <div class="price-road column-item">
                                    <div class="title">Цена за 1 км (BYN) <span class="ic info tooltip"
                                            title="Краткая информация"></div>
                                    <div class="value">-</div>
                                </div>
                                <div class="price-paid">
                                </div>
                            </div>
                            <div class="column">
                                <div class="transport column-item">
                                    <span class="ic car-5"></span>
                                    <p>
                                        Эксковатор
                                    </p>
                                </div>
                                <div class="min-time column-item">
                                    <div class="title">Мин. время работы (час)</div>
                                    <div class="value">2</div>
                                </div>
                                <div class="price-work column-item">
                                    <div class="title">Цена за час работы (BYN) <span class="ic info tooltip"
                                            title="Краткая информация"></div>
                                    <div class="value">30</div>
                                </div>
                                <div class="price-road column-item">
                                    <div class="title">Цена за 1 км (BYN) <span class="ic info tooltip"
                                            title="Краткая информация"></div>
                                    <div class="value">-</div>
                                </div>
                                <div class="price-paid">
                                </div>
                            </div>
                            <div class="column">
                                <div class="transport column-item">
                                    <span class="ic car-5"></span>
                                    <p>
                                        Самосвал
                                    </p>
                                </div>
                                <div class="min-time column-item">
                                    <div class="title">Мин. время работы (час)</div>
                                    <div class="value">4</div>
                                </div>
                                <div class="price-work column-item">
                                    <div class="title">Цена за час работы (BYN) <span class="ic info tooltip"
                                            title="Краткая информация"></div>
                                    <div class="value">60</div>
                                </div>
                                <div class="price-road column-item">
                                    <div class="title">Цена за 1 км (BYN) <span class="ic info tooltip"
                                            title="Краткая информация"></div>
                                    <div class="value">0.16</div>
                                </div>
                                <div class="price-paid">
                                </div>
                            </div>
                            <div class="column">
                                <div class="transport column-item">
                                    <p>
                                        Грузчики
                                    </p>
                                </div>
                                <div class="min-time column-item">
                                    <div class="title">Мин. время работы (час)</div>
                                    <div class="value">1</div>
                                </div>
                                <div class="price-work column-item">
                                    <div class="title">Цена за час работы (BYN) <span class="ic info tooltip"
                                            title="Краткая информация"></div>
                                    <div class="value">10</div>
                                </div>
                                <div class="price-road column-item">
                                    <div class="title">Цена за 1 км (BYN) <span class="ic info tooltip"
                                            title="Краткая информация"></div>
                                    <div class="value">-</div>
                                </div>
                                <div class="price-paid">
                                </div>
                            </div>
                        </div>


                        <p class="description">
                            Перевозчик уделяет огромное внимание техсостоянию погрузочного оборудования (кранов,
                            погрузчиков и прочего) и собственного транспорта, что гарантирует исключение поломки машины
                            во время перевозки. Оплата, сроки, процесс перевозки грузов обсуждаются с менеджером в
                            процессе обратной связи после заявки, оставленной на официальном сайте.
                            <br><br>
                            <strong>
                                «ГРУЗОК» - это гарантированная оперативность и точность выполнения оговоренных в
                                заказе сроков!
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <?php
    require_once "footer.php";
?>