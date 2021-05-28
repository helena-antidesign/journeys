document.addEventListener("DOMContentLoaded", function (event) {

  if (document.querySelector(".JS-cards")){
    cardSlides.init();
  }

  if (document.querySelector(".JS__search-box")){
    searchBox.init();
  }

  //Date Picker
  flatpickr(".input-date", {
    locale: 'pt',
    dateFormat: 'd/m/Y'
  });


  //Plus and Minus buttons
  $('.input-number').on('click', '.button-plus', function(e) {
    incrementValue(e);
  });
  
  $('.input-number').on('click', '.button-minus', function(e) {
    decrementValue(e);
  });
  
  
  
});




var cardSlides = {
    init: function () {
        new Swiper(".JS-cards", {
            slidesPerView: 'auto',
            spaceBetween: 16,
            breakpointsInverse: true,
            navigation: {
                nextEl: '.JS-cards__pagination .swiper-button-next',
                prevEl: '.JS-cards__pagination .swiper-button-prev',
            },
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

    //Date Picker
    flatpickr("#datepicker", {
      mode: "range",
      showMonths: 3,
      locale: 'pt',
      dateFormat: 'd/m/Y',
      conjunction: " - "
    });


  },

  handleClick: function(myRadio) {

    const value = myRadio.value,
    regimeInput = document.querySelector('.JS__regime-input'),
    itemInput = document.querySelector('.JS__item-input');
  
    if( value == 2 || value == 3 || value == 4 ){
      if (! regimeInput.classList.contains('show')){
        regimeInput.classList.add('show');
      }
    }
    else{
      if (regimeInput.classList.contains('show')){
        regimeInput.classList.remove('show');
      }
    }

    if( value == 5){
      if (! itemInput.classList.contains('show')){
        itemInput.classList.add('show');
      }
    }
    else{
      if (itemInput.classList.contains('show')){
        itemInput.classList.remove('show');
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
        
  if(! passageirosBox.classList.contains('show')){
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


 


// var swiper2 = new Swiper(".JS__content-carousel", {
//   slidesPerView: 'auto',
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   }
// });
