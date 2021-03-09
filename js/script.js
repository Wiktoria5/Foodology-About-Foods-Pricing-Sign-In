
$('.product__body__slider__slider').slick({
    slidesToShow: 1,
    infinite:  false,
    autoplay: false,
  });

  $(function () {
    var link = $('.m-menu-link');
    var close = $('.close_menu');
    var menu = $('.m-header__nav--items');

    link.on('click', function (event) {
        event.preventDefault();
        menu.toggleClass('m-header__nav--items_active');
    });
    close.on('click', function (event) {
        event.preventDefault();
        menu.toggleClass('m-header__nav--items_active');
    });
});
var num = 0; 

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.header').addClass('fixed');
    } else {
        $('.header').removeClass('fixed');
    }
});
