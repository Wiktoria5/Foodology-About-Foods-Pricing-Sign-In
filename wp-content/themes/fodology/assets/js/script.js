jQuery(function($){
    $(window).scroll(function(){
        $('.header').addClass('fixed')
    });

$('.product__body__slider__slider').slick({
    slidesToShow: 1, 
    autoplay: false,
  });

  $(function () {
    var link = $('.m-menu-link');
    var close = $('.m-header__nav--items li a');
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
})