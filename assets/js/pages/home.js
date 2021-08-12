document.addEventListener("DOMContentLoaded", function (event) {

  
    new Swiper(".JS__destinos-destacados", {
        slidesPerView: 'auto',
        spaceBetween: 16,
        // centeredSlides: true,
        loop: true,
        navigation: {
            nextEl: '.JS__destinos-destacados__pagination .swiper-button-next',
            prevEl: '.JS__destinos-destacados__pagination .swiper-button-prev',
        },
    });


    new Swiper(".JS__praias-carousel", {
        slidesPerView: 'auto',
        spaceBetween: 16,
        // centeredSlides: true,
        loop: true,
        navigation: {
            nextEl: '.JS__praias-carousel__pagination .swiper-button-next',
            prevEl: '.JS__praias-carousel__pagination .swiper-button-prev',
        },
    });


    new Swiper(".JS-classificacao-carousel", {
        slidesPerView: 'auto',
        spaceBetween: 16,
        // centeredSlides: true,
        loop: true,
        navigation: {
            nextEl: '.JS__classificacao-pagination .swiper-button-next',
            prevEl: '.JS__classificacao-pagination .swiper-button-prev',
        },
    });


});