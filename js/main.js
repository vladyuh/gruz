$(document).ready(function () {
  //Инициализация слайдера "Автопарк"

  var autopark = $(".autopark-slider");

  autopark.slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    appendDots: $(".autopark .slider-nav .dots"),
    responsive: [{
        breakpoint: 1111,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 831,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  //Навигация слайдера "Автопарк"

  $(".autopark .slider-nav .prev").on("click", function () {
    autopark.slick("slickPrev");
  });

  $(".autopark .slider-nav .next").on("click", function () {
    autopark.slick("slickNext");
  });

  //+ 1 к значению в форме

  $(".ic.plus").on("click", function () {
    var old = $(this).parents(".input-box").find('input[type="number"]').val();
    $(this)
      .parents(".input-box")
      .find('input[type="number"]')
      .val(parseFloat(old) + 1);
  });

  // - 1 к значению в форме

  $(".ic.minus").on("click", function () {
    var old = $(this).parents(".input-box").find('input[type="number"]').val();
    if (old == 0) {} else {
      $(this)
        .parents(".input-box")
        .find('input[type="number"]')
        .val(parseFloat(old) - 1);
    }
  });

  //Показать дополнительные поля в форме

  $(".column .add-option").on("click", function () {
    if ($(this).hasClass("active")) {
      $(this).find(".add-text").show();
      $(this).find(".hidden-text").hide();
      $(this)
        .find("span.ic")
        .removeClass("remove-option")
        .addClass("add-option");
      $(this)
        .parents(".column")
        .find(".fields-item.optional")
        .removeClass("show");
      $(this).removeClass("active");
    } else {
      $(this).find(".add-text").hide();
      $(this).find(".hidden-text").show();
      $(this)
        .find("span.ic")
        .addClass("remove-option")
        .removeClass("add-option");
      $(this).parents(".column").find(".fields-item.optional").addClass("show");
      $(this).addClass("active");
    }
  });

  $(".register-form div.add-option").on("click", function () {
    if ($(this).hasClass("active")) {
      $(this).find(".add-text").show();
      $(this).find(".hidden-text").hide();
      $(this)
        .find("span.ic")
        .removeClass("remove-option")
        .addClass("add-option");
      $(this).parents(".row").find(".fields-item.optional").removeClass("show");
      $(this).removeClass("active");
    } else {
      $(this).find(".add-text").hide();
      $(this).find(".hidden-text").show();
      $(this)
        .find("span.ic")
        .addClass("remove-option")
        .removeClass("add-option");
      $(this).parents(".row").find(".fields-item.optional").addClass("show");
      $(this).addClass("active");
    }
  });

  //Активация полей "Грузчики" на главной

  $('.fields-item.movers input[type="checkbox"]').change(function () {
    $(".fields-item.count").toggleClass("disabled");
    $(".fields-item.movers-count").toggleClass("disabled");
  });

  //Активация полей "Место для пассажира" на главной

  $('.fields-item.seats input[type="checkbox"]').change(function () {
    $(".fields-item.p-count").toggleClass("disabled");
  });

  //Активация полей "Пассажиры" на "Услуги"

  $('.fields-item.passengers input[type="checkbox"]').change(function () {
    $(".fields-item.passengers-count").toggleClass("disabled");
  });

  //Табы

  $(".section-tabs div.flat-btn").on("click", function () {
    $(this)
      .parents("section")
      .find(".section-tabs div.flat-btn")
      .removeClass("active");
    $(this).parents("section").find(".section-tabs__content .tab").hide();
    $(this).addClass("active");
    $(this)
      .parents("section")
      .find(".section-tabs__content .tab")
      .eq($(this).index())
      .show();
  });

  //Скрытие табов "Услуги"

  $(".services .section-tabs__content .tab").hide();
  $(".services .section-tabs__content .tab:first").show();

  //Открытие мобильного меню

  $(".header-mobile--toggle").on("click", function () {
    $(".header-mobile--nav").toggleClass("open");
    $(".header-mobile--overlay").toggleClass("open");
    $("body").toggleClass("fixed");
  });

  //Закрытие мобильного меню при нажатии на оверлэй

  $(".header-mobile--overlay").click(function () {
    $(this).removeClass("open");
    $(".header-mobile--nav").removeClass("open");
    $("body").removeClass("fixed");
  });

  //Больше информации в карточке Автопарк

  $(".autopark .item-more").mouseenter(function () {
    $(this).parents(".item").find(".item-more--content").addClass("is-open");
  });

  $(".autopark .item-more").click(function () {
    $(this).parents(".item").find(".item-more--content").addClass("is-open");
  });

  $(".autopark .item").mouseleave(function () {
    $(this).find(".item-more--content").removeClass("is-open");
  });

  $(".autopark span.arrow-down").click(function () {
    $(this).parents(".item-more--content").removeClass("is-open");
  });

  //Скрытие табов "Автопарк"

  $(".autopark-detail .tab").hide();
  $(".autopark-detail .tab:first").show();

  //Скрытие табов "Аренда"

  $(".rent .tab").hide();
  $(".rent .tab").eq(1).show();

  //Подсказки в тарифах

  $(".tooltip").tooltipster({
    theme: "tooltipster-shadow",
    side: "top",
  });

  //Слайдер преимуществ на 480px

  function advantagesSlider(selector, width) {
    if ($(window).width() < width) {
      advantagesInit();
    }

    function advantagesInit() {
      $(selector)
        .slick({
          infinite: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          dots: true,
          rows: 0,
        })
        .on("setPosition", function (event, slick) {
          slick.$slides.css("height", slick.$slideTrack.height() + "px");
        });
    }

    $(window).resize(function () {
      if ($(window).width() < width) {
        advantagesSlider();
      } else {
        if ($(selector).hasClass("slick-initialized")) {
          $(selector).slick("unslick");
        }
      }
    });
  }

  advantagesSlider(".advantages-items", 481);

  //Карта в Контактах

  if ($("div#map").length != 0) {
    ymaps.ready(function () {
      var myMap = new ymaps.Map("map", {
          center: [53.900702, 29.814526],
          zoom: 9,
          controls: [],
        }),
        myPlacemark = new ymaps.Placemark(
          [53.912107, 30.319875], {
            hintContent: "",
            balloonContent: "",
          }, {
            iconLayout: "default#image",
            iconImageHref: "../img/map-marker.png",
            iconImageSize: [30, 40],
            iconImageOffset: [-5, -38],
          }
        );

      myMap.geoObjects.add(myPlacemark);
    });
  }

  //маска телефона

  if ($('input[type="tel"]').length != 0) {
    var im = new Inputmask("+375 (99) 999-99-99");
    im.mask('input[type="tel"]');
  }

  //скрытие хедера при прокрутке

  function show_hide() {
    var didScroll;
    var lastScrollTop = 0;
    var delta = 50;
    var navbarHeight = $("header").outerHeight();

    $(window).scroll(function (event) {
      didScroll = true;
    });

    setInterval(function () {
      if (didScroll) {
        hasScrolled();
        didScroll = false;
      }
    }, 0);

    function hasScrolled() {
      var st = $(this).scrollTop();

      if (Math.abs(lastScrollTop - st) <= delta) return;

      if ($(".header-content__m--menu").hasClass("open")) {} else {
        if (st > lastScrollTop && st > navbarHeight) {
          $("header").removeClass("nav-down").addClass("nav-up");
        } else {
          if (st + $(window).height() < $(document).height()) {
            $("header").removeClass("nav-up").addClass("nav-down");
          }
        }

        lastScrollTop = st;
      }
    }
  }

  show_hide();

  //Загрузка файлов
  var $fileInput = $('input[type="file"]');
  var $droparea = $(".drop-area");

  $fileInput.each(function () {
    $(this).on("dragenter focus click", function () {
      $(this).parents(".drop-area").addClass("is-active");
    });

    $(this).on("dragleave blur drop", function () {
      $(this).parents(".drop-area").removeClass("is-active");
    });

    $(this).on("change", function () {
      var filesCount = $(this)[0].files.length;
      var $textContainer = $(this).parents(".drop-area").find("label");

      if (filesCount === 1) {
        // if single file is selected, show file name
        var fileName = $(this).val().split("\\").pop();
        $textContainer.text(fileName);
      } else {
        // otherwise show number of files
        $textContainer.text(filesCount + " файла(ов) выбрано");
      }

      if (
        (filesCount > 0 &&
          filesCount != null &&
          !$(this).parents("form").has('input[type="submit"]')) ||
        !$(this).parents("form").has('button[type="submit"]')
      ) {
        alert("Submit");
        $(this).closest("form").submit();
      }
    });
  });

  $("#status").change(function () {
    $(this).parents("form").submit();
  });

  //rating
  $(".rating input:radio").attr("checked", false);

  $('.rating input').click(function () {
    $(".rating span").removeClass('checked');
    $(this).parent().addClass('checked');
  });

  $('input:radio').change(
    function () {
      var userRating = this.value;
      /* alert(userRating); */
    });

  /* $fileInput.on("change", function () {
    var filesCount = $(this)[0].files.length;
    var $textContainer = $(this).parents(".drop-area").find("label");

    if (filesCount === 1) {
      // if single file is selected, show file name
      var fileName = $(this).val().split("\\").pop();
      $textContainer.text(fileName);
    } else {
      // otherwise show number of files
      $textContainer.text(filesCount + " файла(ов) выбрано");
    }

    if (filesCount > 0 && filesCount != null) {
      $(this).closest("form").submit();
    }
  }); */

  //photos preview
  var imagesPreview = function (input, placeToInsertImagePreview) {
    if (input.files) {

      $(placeToInsertImagePreview).find('img').each(function () {
        $(this).remove();
      });

      console.log(input.files);

      var filesAmount = input.files.length;
      for (i = 0; i < filesAmount; i++) {
        var reader = new FileReader();

        reader.onload = function (event) {
          $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
        }

        reader.readAsDataURL(input.files[i]);
      }

    }
  };

  $('#gallery-photo-add').on('change', function () {
    if (this.files.length < 5) {
      imagesPreview(this, '.attach-images__preview');

    } else {
      alert('Можно прикрепить только 4 файла')
    }

  });

  $(document).on('click', '.attach-images__preview img', function () {
    var input = $(this).parents('form').find('.attach-images input[type="file"]');
    console.log(input.prop('files')[$(this).index()]);

    console.log(input.prop('files').length);

    delete input.files[0];

    console.log(input.prop('files').length);

  });

  if ($("#order-map").length != 0) {
    var multiRoute;

    var route = $("#order-map").attr("data-route");

    var routes = route.split(";");

    var current = $("#order-map").attr("data-current");

    routes.splice(1, 0, current);

    var referencePoints = routes,
      viaIndexes = [1];

    ymaps.ready(function () {
      var myMap = new ymaps.Map("order-map", {
        center: [53.894548, 30.330654],
        zoom: 13,
        controls: [],
      });

      // Создание экземпляра маршрута.
      multiRoute = new ymaps.multiRouter.MultiRoute({
          // Точки маршрута.
          // Обязательное поле.
          referencePoints: referencePoints,
          params: {},
        },

        {
          // Автоматически устанавливать границы карты так,
          // чтобы маршрут был виден целиком.
          boundsAutoApply: true,
          routeStrokeWidth: 3,
          routeStrokeColor: "#81D39B",
          routeActiveStrokeWidth: 6,
          routeActiveStrokeColor: "#00982F",
          //начальная точка
          wayPointStartIconLayout: "default#image",
          wayPointStartIconImageHref: "../img/marker-start.svg",
          wayPointStartIconImageSize: [15, 15],
          wayPointStartIconImageOffset: [-7.5, -7.5],
          //конечная точка
          wayPointFinishIconLayout: "default#image",
          wayPointFinishIconImageHref: "../img/marker-end.svg",
          wayPointFinishIconImageSize: [25, 52],
          wayPointFinishIconImageOffset: [-12.5, -42],
        }
      );

      customizeSecondPoint();

      // Добавление маршрута на карту.
      myMap.geoObjects.add(multiRoute);
    });

    function customizeSecondPoint() {
      /**
       * Ждем, пока будут загружены данные мультимаршрута и созданы отображения путевых точек.
       * @see https://tech.yandex.ru/maps/doc/jsapi/2.1/ref/reference/multiRouter.MultiRouteModel-docpage/#event-requestsuccess
       */
      multiRoute.model.events.once("requestsuccess", function () {
        var yandexWayPoint = multiRoute.getWayPoints().get(1);
        // Создаем балун у метки второй точки.
        ymaps.geoObject.addon.balloon.get(yandexWayPoint);
        yandexWayPoint.options.set({
          iconLayout: "default#image",
          // Custom image for the placemark icon.
          iconImageHref: "../img/car.svg",
          // The size of the placemark.
          iconImageSize: [29, 41],
          /**
           * The offset of the upper left corner of the icon relative
           * to its "tail" (the anchor point).
           */
          iconImageOffset: [-14.5, -20.5],
        });
      });
    }
  }
});