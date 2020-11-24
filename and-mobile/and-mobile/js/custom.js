$=jQuery
jQuery(document).ready(function () {

    "use strict";
    
          
    
    /* ===============
    back-to-top button
    ================== */

      $('.back-to-top').hide();
      $('.back-to-top').on("click",function(e) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: 0 }, 'slow');
      });

    
    $(window).scroll(function(){
      var scrollheight =400;
      if( $(window).scrollTop() > scrollheight ) {
           $('.back-to-top').fadeIn();
        }
        else {
              $('.back-to-top').fadeOut();
             }
     });

     
     //tab
     $(".card").swipe( {
        swipeLeft:function(event, direction, distance, duration, fingerCount) {
             $(".nav-tabs li.active").next('li').find('a').tab('show');
           },
        swipeRight:function(event, direction, distance, duration, fingerCount) {
             $(".nav-tabs li.active").prev('li').find('a').tab('show');
           },
     });
   
// large news
var swiper = new Swiper('.large-news-swiper', {
    slidesPerView: 1.1,
    spaceBetween: 10,
    //centeredSlides: true,
    cssMode:false,
    freeMode: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
     breakpoints: {
        // when window width small than 667px
        767: {
          slidesPerView: 1,
          freeMode: false,
        },
      },
  });

  // large news 2
var swiper = new Swiper('.large-news-swiper-2', {
  slidesPerView: 1.1,
  spaceBetween: 10,
  //centeredSlides: true,
  cssMode:false,
  freeMode: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
   breakpoints: {
      // when window width small than 667px
      767: {
        slidesPerView: 2,
        freeMode: false,
        
      },
    },
});
//   main slider
var galleryThumbs = new Swiper('.main-tab-nav', {
    spaceBetween: 10,
    slidesPerView: 3,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });
  var galleryTop = new Swiper('.main-tab-content', {
    effect: 'coverflow',
    spaceBetween: 10,
    autoHeight: true,
    navigation: {
    },
    thumbs: {
      swiper: galleryThumbs
    }
  });


// header shadow  
$(window).scroll(function() {     
    var scroll = $(window).scrollTop();
    if (scroll > 0) {
        $(".main-tab-nav").addClass("s-shadow");
        $(".logo-section").addClass("s-shadow");
        $(".result-heading").addClass("s-shadow");
        $(".inner-title").addClass("s-shadow");
    }
    else {
        $(".main-tab-nav").removeClass("s-shadow");
        $(".logo-section").removeClass("s-shadow");
        $(".result-heading").removeClass("s-shadow");
        $(".inner-title").removeClass("s-shadow");
    }
});

// click effect
var links = document.querySelectorAll('.ripplelink');

for (var i = 0, len = links.length; i < len; i++) {
  links[i].addEventListener('click', function(e) {
    var targetEl = e.target;
    var inkEl = targetEl.querySelector('.ink');

    if (inkEl) {
      inkEl.classList.remove('animate');
    }
    else {
      inkEl = document.createElement('span');
      inkEl.classList.add('ink');
      inkEl.style.width = inkEl.style.height = Math.max(targetEl.offsetWidth, targetEl.offsetHeight) + 'px';
      targetEl.appendChild(inkEl);
    }

    inkEl.style.left = (e.offsetX - inkEl.offsetWidth / 2) + 'px';
    inkEl.style.top = (e.offsetY - inkEl.offsetHeight / 2) + 'px';
    inkEl.classList.add('animate');
  }, false);
}
 
// show and hide password
const parent = document.querySelector("#show_hide_password .input-group-addon a");
parent.addEventListener('click', function(event) {
  event.preventDefault();
  if($('#show_hide_password input').attr("type") == "password"){
      $('#show_hide_password input').attr('type', 'text');
      $('#show_hide_password .icon--eye').addClass( "d-none" );
      $('#show_hide_password .icon--eye-slash').removeClass( "d-none" );
  }else if($('#show_hide_password input').attr("type") == "text"){
      $('#show_hide_password input').attr('type', 'password');
      $('#show_hide_password .icon--eye').removeClass( "d-none" );
      $('#show_hide_password .icon--eye-slash').addClass( "d-none" );
  }
});   

const parenta = document.querySelector("#show_hide_password_confirm .input-group-addon a");
parenta.addEventListener('click', function(event) {
  event.preventDefault();
  if($('#show_hide_password_confirm input').attr("type") == "password"){
      $('#show_hide_password_confirm input').attr('type', 'text');
      $('#show_hide_password_confirm .icon--eye').addClass( "d-none" );
      $('#show_hide_password_confirm .icon--eye-slash').removeClass( "d-none" );
  }else if($('#show_hide_password_confirm input').attr("type") == "text"){
      $('#show_hide_password_confirm input').attr('type', 'password');
      $('#show_hide_password_confirm .icon--eye').removeClass( "d-none" );
      $('#show_hide_password_confirm .icon--eye-slash').addClass( "d-none" );
  }
});   



});

