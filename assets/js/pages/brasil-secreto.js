//carousel
const brasilTour = document.querySelector(".JS__brasil-tour");
if(brasilTour){
  new Swiper (brasilTour, {
    slidesPerView: 3,
    spaceBetween: 22,
    pagination: {
      el: ".swiper-pagination",
    },
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
    },
  });
}