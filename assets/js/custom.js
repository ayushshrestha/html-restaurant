// window.onscroll = function() {myFunction()};

// var header = document.getElementById("menu");
// var sticky = header.offsetTop;

// function myFunction() {
//   if (window.pageYOffset > sticky) {
//     header.classList.add("sticky");
//   } else {
//     header.classList.remove("sticky");
//   }
// }

/* swiper stars from here */
var mySwiper = new Swiper('.swiper-container-default', {
  // Optional parameters
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
}) 
/* swiper ends here */

/* swiper 1 1/2 starts from here */
var mySwiper = new Swiper('.swiper-container-1-1by2', {
  // Optional parameters
  slidesPerView: 1.5,
  spaceBetween: 20,
}) 
/* swiper 1 1/2 ends here */

// $('.modal').modal('show'); 

$('.modal').on('shown.bs.modal', function (e) {
  $('.slick-default').slick('setPosition');
  $('.slick-default').addClass('open');
})

//   main slider
var galleryThumbs = new Swiper('.category-tab-nav', {
  spaceBetween: 10,
  slidesPerView: 3,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});
var galleryTop = new Swiper('.category-tab-content', {
  effect: 'coverflow',
  spaceBetween: 10,
  autoHeight: true,
  thumbs: {
    swiper: galleryThumbs
  }
});


 //hero slider
 var swiper = new Swiper('.hero-slider', {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
}); 

$(".modal").on('show.bs.modal', function() {
  setTimeout(function() {
      var swiper = new Swiper('.details-slider', {
     slidesPerView: 1,
     spaceBetween: 20,
     autoplay: true,
     pagination: {
       el: '.swiper-pagination',
       clickable: true,
     },
   }); 

  }, 300);
});
