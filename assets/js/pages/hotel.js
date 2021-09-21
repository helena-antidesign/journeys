document.addEventListener("DOMContentLoaded", function (event) {

  priceBox.init();
  slidesHotel.init();

  lightbox.option({
    'imageFadeDuration': 300,
    'fadeDuration': 300,
    'resizeDuration': 0,
    'albumLabel' : 'Imagem %1 de %2',
    'wrapAround': true,
    'alwaysShowNavOnTouchDevices': true
  })

});

var slidesHotel = {
  init: function(){

    const bannerHotel = document.querySelector(".JS__hotel-banner");
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


    const hoteis = document.querySelector(".JS__hoteis-swiper");
    if(hoteis){
      new Swiper (hoteis, {
        slidesPerView: 'auto',
        spaceBetween: 28,
        loop: true,
        navigation: {
            nextEl: ".JS__hoteis-swiper .swiper-button-next",
            prevEl: ".JS__hoteis-swiper .swiper-button-prev",
        },
        pagination: {
            el: ".JS__hoteis-swiper .swiper-pagination",
        },
      });
    }

  }
},
priceBox = {
  init: function(){

    flatpickr(".JS__hotel-daterange", {
      locale: 'pt',
      dateFormat: 'd/m/Y',
      inline: true, 
      monthSelectorType: 'static',
      "plugins": [new rangePlugin({ input: "#hotel-checkout"})]
    });


    $('.JS__hotel-quartos').on('change click', function(){
      passageiros.textContent = $(this).val();
    });
  },
  atualizaPassageiros : function(){
    var inputs= document.querySelectorAll('.JS__hotel-passageiros-value'),
    total = document.querySelector('.JS__hotel-total-passageiros');
    var totalPassageiros = 0;
  
    inputs.forEach(function(input) {
      totalPassageiros = totalPassageiros + parseInt(input.value);
    });
    
    total.textContent = (totalPassageiros).pad(); 
  },
  atualizaQuartos: function(){
      const inputQuartos = document.querySelector('.JS__hotel-quartos'),
      quartos = document.querySelector('.JS__hotel-total-quartos');
      
      quartos.textContent = (parseInt(inputQuartos.value)).pad();
  }
}


//Passageiros
var hotelPassageiros = function(){
  $('.JS__hotel-passageiros-content').toggleClass('open');
}

var closeHotelPassageiros = function(){
  $('.JS__hotel-passageiros-content').removeClass('open');
  priceBox.atualizaPassageiros();
  priceBox.atualizaQuartos();
}


$('.JS__hotel-passageiros').click( function(event) {
  event.stopPropagation();
  hotelPassageiros();
});

$(document).click( function(event){
    if ( !$(event.target).closest('.JS__hotel-passageiros-content').length ) {
      closeHotelPassageiros();   
    }
});



$('.JS__hotel-rangedate').click( function(event) {
  
    $(this).addClass('open');

});



//Checkout

// var openCheckout = function(){
//   $('.JS__hotel-checkout').toggleClass('open');
// }

// var closeCheckout = function(){
//   $('.JS__hotel-checkout').removeClass('open');
// }


// $('.JS__hotel-checkout').click( function(event) {
//   event.stopPropagation();
//   openCheckout();
// });

// $(document).click( function(event){
//     if ( !$(event.target).closest('.JS__hotel-checkout').length ) {
//       closeCheckout();   
//     }
// });

