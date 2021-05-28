const bannerHotel = document.querySelector(".JS__hotel-swiper");

if(bannerHotel){
  new Swiper (bannerHotel, {
    slidesPerView: 'auto',
    spaceBetween: 16,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },
  });
}