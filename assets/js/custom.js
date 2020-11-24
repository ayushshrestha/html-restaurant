$(document).ready(function(){
    // var headerInfo = $('.masthead-info').outerHeight();
    // alert(headerInfo);

    // $('.hero-agrimove').css('margin-top', headerInfo);
    // $('.hero-agrimove').css('height', headerInfo);

    $('.slick-default').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 1,
        arrows: false,
        dots:true,
        slidesToScroll: 1
    });

    $('.slick-center').slick({
        dots: true,
        infinite: true,
        speed: 1200,
        arrows: false,
        slidesToShow: 1,
        variableWidth: true
    });

    new WOW().init();

    var scroll = new SmoothScroll('a[href*="#"]', {
        offset: 112
    });


    // $(".alert").alert('close');


});

window.onscroll = function() {myFunction()};

var header = document.getElementById("menu");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}