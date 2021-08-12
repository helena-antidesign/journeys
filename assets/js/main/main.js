document.addEventListener("DOMContentLoaded", function (event) {

  if (document.querySelector(".JS-cards")){
    cardSlides.init();
  }

  if (document.querySelector(".JS__search-box")){
    searchBox.init();
  }

  reserva.init();


  //Date Picker
  flatpickr(".input-date", {
    locale: 'pt',
    dateFormat: 'd/m/Y'
  });

  flatpickr(".daterange", {
      mode: "range",
      showMonths: 1,
      locale: 'pt',
      dateFormat: 'd/m/Y',
      conjunction: " - ",
  });


  //Plus and Minus buttons
  $('.input-number').on('click', '.button-plus', function(e) {
    incrementValue(e);
  });
  
  $('.input-number').on('click', '.button-minus', function(e) {
    decrementValue(e);
  });


  $('.c-hotel__price__passageiros input').each(function() {
    $(this).on('change click', function(){
      priceBox.passageiros();
    });
  });
  
 
      
});


var reserva = {
  init: function(){

    $('.JS__reservar-toggle').each(function() {
      $(this).on('click', function(){
        reserva.toggleModal();
      });
    });
    
    $('.JS__reserva-next').on('click', function(){
      
      $('.c-reserva-single__step1').removeClass('show')
      $('.c-reserva-single__step2').addClass('show')

    });

  },
  toggleModal: function(){
    document.querySelector('.JS__reserva').classList.toggle('open');
    document.querySelector('.c-reserva-single__step1').classList.add('show');
    document.querySelector('.c-reserva-single__step2').classList.remove('show');
  }
}


var cardSlides = {
    init: function () {
        new Swiper(".JS-cards", {
            // centeredSlides: true,
            loop: true,
            slidesPerView: 'auto',
            spaceBetween: 16,
            navigation: {
                nextEl: '.JS-cards__pagination .swiper-button-next',
                prevEl: '.JS-cards__pagination .swiper-button-prev',
            },
            breakpoints: {
              // when window width is >= 320px
              1200: {
                slidesPerView: 'auto',
                spaceBetween: 16,
              }
            }
        });
    }
};


var searchBox = {
  init: function() {

    this.changePassageiros();
    this.changeQuartos();

    //Radios
    const radio = document.querySelector('input[name=search-opt]:checked');
    if (radio){
      this.handleClick(radio)
    }
    
    // Search Box - Exibir Passageiros
    $('.JS__passageiros-input').on('click', function(e) {
      openPassageiros();
    });

    $('.JS__searchBox-data input').on('click', function(e) {
      searchboxDateOpen();
    });

    $('.JS__search-box__radio').on('click', function(e) {
      searchBox.handleClick();
    });

    //Date Picker
    flatpickr("#datepicker", {
      mode: "range",
      showMonths: 3,
      locale: 'pt',
      dateFormat: 'd/m/Y',
      conjunction: " - ",
      inline: true
    });

  },
  handleClick: function() {

    const radios = document.querySelectorAll('.JS__search-box__radio'),
    searchBox = document.querySelector('.JS__search-box');

    var value;


    for (var i=0, len=radios.length; i<len; i++) {
      if ( radios[i].checked ) { // radio checked?
          value = radios[i].value; // if so, hold its value in val
          break; // and break out of for loop
      }
    }

    if(value == 1){
      if (! searchBox.classList.contains('--hotel')){
        searchBox.classList.add('--hotel');
      }
    } else{
        searchBox.classList.remove('--hotel');
    }
    if(value == 2){
      if (! searchBox.classList.contains('--translado')){
        searchBox.classList.add('--translado');
      }
    } else{
        searchBox.classList.remove('--translado');
    }
    if(value == 3){
      if (! searchBox.classList.contains('--tour')){
        searchBox.classList.add('--tour');
      }
    } else{
        searchBox.classList.remove('--tour');
    }

  
    if( value == 4 ){
      if (! searchBox.classList.contains('--pacotes')){
        searchBox.classList.add('--pacotes');
      }
    } else{
        searchBox.classList.remove('--pacotes');
    }

    if( value == 5){
      if (! searchBox.classList.contains('--extra')){
        searchBox.classList.add('--extra');
      }
    }
    else{
      if (searchBox.classList.contains('--extra')){
        searchBox.classList.remove('--extra');
      }
    }
  
  },
  changePassageiros: function(){
      const inputsPassageiros = document.querySelectorAll('.JS__search-box__quantity'),
      passageiros = document.querySelector('.JS__total-passageiros');
      var totalPassageiros = 0;
    
      inputsPassageiros.forEach(function(input) {
        totalPassageiros = totalPassageiros + parseInt(input.value);
      });
      
      passageiros.textContent = (totalPassageiros).pad(); 
  },
  changeQuartos: function(){
    
    const inputQuartos = document.querySelector('.JS__search-box__rooms'),
    quartos = document.querySelector('.JS__total-quartos');
    quartos.textContent = (parseInt(inputQuartos.value)).pad();
    
  }

};

const openPassageiros = () => {
  const passageirosBox = document.querySelector('.JS__passageiros-box');
        
  if(!passageirosBox.classList.contains('show')){
    passageirosBox.classList.add("show");
  }

  setTimeout(() => { document.addEventListener('click', closePassageiros, false) }, 200);
}

const closePassageiros = (event) => {
  const passageirosBox = document.querySelector('.JS__passageiros-box');

  if (!passageirosBox.contains(event.target)) {
    
    searchBox.changePassageiros();
    searchBox.changeQuartos();

    passageirosBox.classList.remove("show");
    document.removeEventListener('click', closePassageiros, false);

  }
}

const searchboxDateOpen = () => {
  const dateBox = document.querySelector('.JS__searchBox-data .flatpickr-calendar');

  if(!dateBox.classList.contains('show')){
    dateBox.classList.add("show");
  }

  setTimeout(() => { document.addEventListener('click', searchboxDateClose, false) }, 200);
}

const searchboxDateClose = (event) => {
  const dateBox = document.querySelector('.JS__searchBox-data .flatpickr-calendar');

  if (!dateBox.contains(event.target)) {

    dateBox.classList.remove("show");
    document.removeEventListener('click', searchboxDateClose, false);

  }
}

const openSearchboxReducedRadios = () => {
  const searchRadiosBox = document.querySelector('.JS__search-box__radios');
        
  if(! searchRadiosBox.classList.contains('show')){
    searchRadiosBox.classList.add("show");
  }

  setTimeout(() => { document.addEventListener('click', closeSearchboxReducedRadios, false) }, 200);
}

const closeSearchboxReducedRadios = (event) => {
  const searchRadiosBox = document.querySelector('.JS__search-box__radios');

  if (!searchRadiosBox.contains(event.target)) {
    
    searchRadiosBox.classList.remove("show");
    document.removeEventListener('click', closeSearchboxReducedRadios, false);

  }
}

Number.prototype.pad = function(size) {
  var s = String(this);
  while (s.length < (size || 2)) {s = "0" + s;}
  return s;
}

function incrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal)) {
    parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
  } else {
    parent.find('input[name=' + fieldName + ']').val(0);
  }
}

function decrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal) && currentVal > 0) {
    parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
  } else {
    parent.find('input[name=' + fieldName + ']').val(0);
  }
}

 
var mainSwiper = new Swiper(".JS__banner", {
  // loop: true,
  effect: 'fade',
  fadeEffect: {
      crossFade: true
  },
});



var swiperDestaque = new Swiper(".JS__destaque", {
  loop: true,
  pagination: {
    el: ".JS__destaque .swiper-pagination",
    clickable: true
  },
  effect: 'fade',
  autoplay: {
    delay: 5000,
  },
  fadeEffect: {
      crossFade: true
  },
});
  

jQuery(document).ready(function($) {
  $('*[data-href]').on('click', function() {
      window.location = $(this).data("href");
  });
});