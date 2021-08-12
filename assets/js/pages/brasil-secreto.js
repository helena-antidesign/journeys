//carousel
document.addEventListener("DOMContentLoaded", function (event) {

  const brasilTour = document.querySelector(".JS__brasil-tour");
  if(brasilTour){
    new Swiper (brasilTour, {
     
      slidesPerView: 1,
      
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true,
      },
      
      breakpoints: {
        // when window width is >= 320px
        992: {
          slidesPerView: 3,
          spaceBetween: 22,
        }

      }


    });
  }

});