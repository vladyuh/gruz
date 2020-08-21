$(document).ready(function () {
  /* $('.calculate-form__toggle').click(function () {
    $(this).parents('.calculate').toggleClass('active');
    $('body').toggleClass('fixed');
  }); */

  //тогл открытия форм
  function formToggle(element, parent) {
    $(element).click(function () {
      $(element).parents(parent).toggleClass("active");
      $("body").toggleClass("fixed");
    });
  }

  formToggle(".calculate-form__toggle", ".calculate");
  formToggle(".services-form__toggle", ".services-form");
  formToggle(".clients-form__toggle", ".clients-form");

  //закрытие форм после 480px при ресайзе
  $(window).on("resize", function () {
    if ($(window).width() > 480) {
      $(".calculate,.services-form,.clients-form").removeClass("active");
      if (
        !$(".calculate").hasClass("active") ||
        !$(".services-form").hasClass("active") ||
        !$(".clients-form").hasClass("active")
      ) {
        $("body").removeClass("fixed");
      }
    }
  });

  //Инициализация слайдера "Автопарк"
  if ($(".autopark-slider .item").length < 4) {
    $(".autopark").find(".slider-nav .prev").hide();
    $(".autopark").find(".slider-nav .next").hide();
  }

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

  $(".switch .form-group,.switch .checkbox").on("click", function () {
    $(this).toggleClass("active");
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

  $(".register-form .form-tabs__tab").hide();
  $(".register-form .form-tabs__tab:first").show();

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

  //маска телефона

  function initPhonemask() {
    if ($('input[type="tel"]').length != 0) {
      var im = new Inputmask("+375 (99) 999-99-99");
      im.mask('input[type="tel"]');
    }
  }

  initPhonemask();

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

  $("body").on("dragenter click", '.drop-area input[type="file"]', function () {
    var parent = $(this).parents(".drop-area");
    parent.addClass("is-active");
  });

  $("body").on(
    "dragleave blur drop",
    '.drop-area input[type="file"]',
    function () {
      var parent = $(this).parents(".drop-area");
      parent.removeClass("is-active");
    }
  );

  $("body").on("change", '.drop-area input[type="file"]', function () {
    var parent = $(this).parents(".drop-area");

    var filesCount = $(this).prop("files").length;
    var textContainer = parent.find("label");

    if (filesCount === 1) {
      var fileName = $(this).val().split("\\").pop();
      textContainer.text(fileName);
    } else {
      textContainer.text(filesCount + " файла(ов) выбрано");
    }
  });

  $("#status").change(function () {
    $(this).parents("form").submit();
  });

  //rating
  $(".rating input:radio").attr("checked", false);

  $(".rating input").click(function () {
    $(".rating span").removeClass("checked");
    $(this).parent().addClass("checked");
  });

  $("input:radio").change(function () {
    var userRating = this.value;
  });

  //photos preview
  var imagesPreview = function (input, placeToInsertImagePreview) {
    if (input.files) {
      $(placeToInsertImagePreview)
        .find("img")
        .each(function () {
          $(this).remove();
        });

      console.log(input.files);

      var filesAmount = input.files.length;
      for (i = 0; i < filesAmount; i++) {
        var reader = new FileReader();

        reader.onload = function (event) {
          $($.parseHTML("<img>"))
            .attr("src", event.target.result)
            .appendTo(placeToInsertImagePreview);
        };

        reader.readAsDataURL(input.files[i]);
      }
    }
  };

  $("#gallery-photo-add").on("change", function () {
    if (this.files.length < 5) {
      imagesPreview(this, ".attach-images__preview");
    } else {
      alert("Можно прикрепить только 4 файла");
    }
  });

  $(document).on("click", ".attach-images__preview img", function () {
    var input = $(this)
      .parents("form")
      .find('.attach-images input[type="file"]');
    console.log(input.prop("files")[$(this).index()]);

    console.log(input.prop("files").length);

    delete input.files[0];

    console.log(input.prop("files").length);
  });

  $("#services-toggle").mouseenter(function () {
    $(".header-services__list").slideDown();
  });

  $(".header-services__list").mouseleave(function () {
    $(this).slideUp();
  });

  $(".header-mobile--nav ul > li").each(function () {
    if ($(this).children("ul").length > 0) {
      $(this).prepend('<span class="ic more"></span>');
    }
  });

  $(".header-mobile--nav ul.nav > li > span.ic").click(function () {
    $(this).parents("ul.nav > li").find("ul.categories").slideToggle();
    $(this).toggleClass("active");
  });

  $(".header-mobile--nav ul.categories > li > span.ic").click(function () {
    $(this)
      .parents("ul.categories > li")
      .find("ul.subcategories")
      .slideToggle();
    $(this).toggleClass("active");
  });

  $(".autopark-detail .filter input").on("click", function () {
    $(".autopark-detail .item").hide();
    $(".autopark-detail .filter :checkbox:checked").each(function () {
      $("." + $(this).val()).show();
    });

    if ($(".autopark-detail :checkbox:checked").length == 0) {
      $(".autopark-detail .item").show();
    }
  });

  $(".typeof-select").click(function () {
    $(this).find(".typeof-entity__selected-items").slideToggle();
  });

  $(".typeof-entity__selected-items .value").click(function () {
    var parent = $(this).parents(".typeof-select");
    parent.find(".typeof-entity__selected-items").slideUp();
  });

  $(".typeof-entity__selected-items .tab-toggle").click(function () {
    $(this).parents(".register-form").find(".form-tabs__tab").hide();
    $(this)
      .parents(".register-form")
      .find(".form-tabs__tab")
      .eq($(this).index())
      .show();
    $(this)
      .parents(".typeof-entity__select")
      .find(".value span")
      .text($(this).text());
  });

  //штат компании

  $(".typeof-entity__select select").on("change", function () {
    $(this).parents(".register-form").find(".form-tabs__tab").hide();
    var index = $(this).prop("selectedIndex");
    $(this).parents(".register-form").find(".form-tabs__tab").eq(index).show();
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

  //добавления водителей

  $(".register-form").on(
    "click",
    ".add-drivers span.ic.add-option",
    function () {
      var parent = $(".register-form fieldset#drivers .fields");
      var driverFields = parent.find(".row.drivers").eq(0).clone();
      driverFields.find("input,textarea").val("");
      driverFields.prepend(
        '<div class="remove"><span class="ic delete"></span></div>'
      );
      parent.append(driverFields);

      initPhonemask();
    }
  );

  $(".register-form").on("click", ".row.drivers span.ic.delete", function () {
    $(this).parents(".row.drivers").remove();
  });

  //добавления грузчиков

  $(".register-form").on(
    "click",
    ".add-porters span.ic.add-option",
    function () {
      var parent = $(".register-form fieldset#porters .fields");
      var porterFields = parent
        .parents("fieldset#porters")
        .find(".row.porters")
        .eq(0)
        .clone();
      porterFields.find("input,textarea").val("");
      porterFields.prepend(
        '<div class="remove"><span class="ic delete"></span></div>'
      );
      parent.append(porterFields);

      initPhonemask();
    }
  );

  $(".register-form").on("click", ".row.porters span.ic.delete", function () {
    $(this).parents(".row.porters").remove();
  });

  //добавление прицепа

  $(".popup-addautos").on("click", ".add-trailer span.ic.add-option", function () {
    $(this).toggleClass("active remove-option");
    $(this).parents("form").find(".fields.trailer").toggleClass("active");
    var inputs = $(this)
      .parents("form")
      .find(".fields-item.pallets,.fields-item.dimensions");
    if ($(this).hasClass("active")) {
      $(this).parents(".add-trailer").find(".add-text").hide();
      $(this).parents(".add-trailer").find(".hidden-text").show();
      inputs.find("input").attr("disabled", true);
    } else {
      $(this).parents(".add-trailer").find(".add-text").show();
      $(this).parents(".add-trailer").find(".hidden-text").hide();
      inputs.find("input").attr("disabled", false);
    }
  });

  $(".register-form").on(
    "click",
    ".add-trailer span.ic.add-option",
    function () {
      $(this).toggleClass("active remove-option");
      $(this)
        .parents("#autos .fields")
        .find(".row.trailer")
        .toggleClass("active");
      var inputs = $(this)
        .parents(".fields")
        .find(".fields-item.pallets,.fields-item.dimensions");
      if ($(this).hasClass("active")) {
        $(this).parents(".add-trailer").find(".add-text").hide();
        $(this).parents(".add-trailer").find(".hidden-text").show();
        inputs.find("input").attr("disabled", true);
      } else {
        $(this).parents(".add-trailer").find(".add-text").show();
        $(this).parents(".add-trailer").find(".hidden-text").hide();
        inputs.find("input").attr("disabled", false);
      }
    }
  );

  //добавление автомобилей
  $(".register-form").on("click", ".add-car span.ic.add-option", function () {
    var parent = $(".register-form fieldset#autos .add-option.add-car");
    var autoFields = parent
      .parents("fieldset#autos")
      .find(".fields")
      .eq(0)
      .clone();
    autoFields.find(".fields-title").remove();
    autoFields.find(".row.trailer").removeClass("active");
    autoFields.find(".add-trailer .ic").removeClass("active remove-option");
    autoFields.find(".add-trailer p").attr("style", "");
    autoFields.find("input,textarea").val("");
    autoFields
      .find(".row.car")
      .prepend('<div class="remove"><span class="ic delete"></span></div>');
    parent.before(autoFields);
  });

  $(".register-form").on("click", ".row.car span.ic.delete", function () {
    $(this).parents(".fields").remove();
  });

  $("#authorise .canHide.individ").hide();

  $("#authorise").on("change", "select", function () {
    $("#authorise .canHide").hide();
    $("#authorise .canHide." + $(this).val()).show();
  });
});