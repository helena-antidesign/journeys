document.addEventListener("DOMContentLoaded", function (event) {


  new Swiper(".JS__experiencia-galeria", {
      slidesPerView: 'auto',
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
      },
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
  });

  new Swiper(".JS__classificacao", {
    slidesPerView: 'auto',
    spaceBetween: 16,
    // centeredSlides: true,
    loop: true,
    navigation: {
        nextEl: '.JS__classificacao__pagination .swiper-button-next',
        prevEl: '.JS__classificacao__pagination .swiper-button-prev',
    },
  });

  new Swiper(".JS__experiencias-swiper", {
    slidesPerView: 'auto',
    loop: true,
    spaceBetween: 16,
    navigation: {
        nextEl: '.JS__experiencias-swiper__pagination .swiper-button-next',
        prevEl: '.JS__experiencias-swiper__pagination .swiper-button-prev',
    },
  });

  new Swiper(".JS__praias", {
    slidesPerView: 'auto',
    loop: true,
    spaceBetween: 16,
    navigation: {
        nextEl: '.JS__praias__pagination .swiper-button-next',
        prevEl: '.JS__praias__pagination .swiper-button-prev',
    },
  });


});