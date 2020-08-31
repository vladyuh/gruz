<?php
    require_once "head.php";
?>

<link rel="stylesheet" href="/css/index.min.css">

<?php
    require_once "header.php";
?>


    <main>

        <style>

            section.popups a{
                display:inline-block;
                margin-bottom: 5px;
            }

        </style>

        <section class="popups" style="padding: 40px 0;">
            <div class="wrapper">
                <div class="inner">                    
                    <a href="#order-accept" data-fancybox class="flat-btn yellow">Попап заказа</a>
                    <a href="#order-success" data-fancybox class="flat-btn yellow">Попап успешного заказа (неавторизован)</a>
                    <a href="#order-success-1" data-fancybox class="flat-btn yellow">Попап успешного заказа (авторизован)</a>
                    <a href="#order-success-2" data-fancybox class="flat-btn yellow">Попап успешного заказа (как можно быстрее)</a>
                    <a href="#reg-success" data-fancybox class="flat-btn yellow">Попап успешной регистрации</a>
                </div>
            </div>
        </section>

    </main>

    <?php
    require_once "footer.php";
?>