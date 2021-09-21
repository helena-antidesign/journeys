//carousel
document.addEventListener("DOMContentLoaded", function (event) {

  const brasilTour = document.querySelector(".JS__brasil-tour");
  if(brasilTour){
    new Swiper (brasilTour, {
     
      slidesPerView: 1,
      
      pagination: {
        el: ".JS__brasil-tour .swiper-pagination",
        clickable: true
      },
      scrollbar: {
        el: ".JS__brasil-tour .swiper-scrollbar",
        draggable: true,
      },
      
      breakpoints: {
        // when window width is >= 992px
        992: {
          slidesPerView: 3,
          spaceBetween: 22,
        }

      }

    });
  }

});