document.addEventListener("DOMContentLoaded", function (event) {
  
  //Plus and Minus buttons
  $( document ).on("click",".input-number .button-plus", function(e){
    incrementValue(e);
  });
  $( document ).on("click",".input-number .button-minus", function(e){
    decrementValue(e);
  });

  cardSlides.init();
  searchBox.init();
  tabsFlex.init();
  hotel.init();
  datepicker.init();
  reserva.init();
  header.init();
  tooltip.init();


  $('.JS__select').select2({
    minimumResultsForSearch: 9
  });

  $('.JS__datatable').DataTable({
    "oLanguage": {
        "oPaginate": {
          "sPrevious": "«", // This is the link to the previous page
          "sNext": "»", // This is the link to the next page
        }
    }
  });

  $(".JS__select-country").select2({
    templateResult: formatState
  });

  new Swiper(".JS__banner", {
      // loop: true,
      effect: 'fade',
      fadeEffect: {
          crossFade: true
      },
  });

  new Swiper(".JS__destaque", {
    loop: true,
    effect: 'fade',
    
    fadeEffect: {
      crossFade: true
    },
    pagination: {
      el: ".JS__destaque .swiper-pagination",
      clickable: true
    },
    autoplay: {
      delay: 5000,
    },
  });
      
});


var header = {
  init: function(){

    $('.JS__header-toggle').each(function() {
      $(this).on('click', function(){
        $(this).toggleClass('active');
        $('.JS__header-navbar').toggleClass('show');
        $(document.body).toggleClass('overflow-hidden');
      });
    });

    
    $('.JS__header-language').each(function() {
      $(this).on('click', function(){
        $(this).toggleClass('active');
      });
    });


    $('.JS__header-login').each(function() {
      $(this).on('click', function(){
        $(this).toggleClass('active');
      });
    });

  }
}

var reserva = {
  init: function(){

    $('.JS__reservar-toggle').each(function() {
      $(this).on('click', function(){
        reserva.toggleModal();
      });
    });
    
    $('.JS__reserva-next').on('click', function(){
      
      $('.JS__reserva-step1').removeClass('show')
      $('.JS__reserva-step2').addClass('show')

    });

  },
  toggleModal: function(){
    document.querySelector('.JS__reserva').classList.toggle('open');
    document.querySelector('.JS__reserva-step1').classList.add('show');
    document.querySelector('.JS__reserva-step2').classList.remove('show');

    document.querySelector('body').classList.add('modal-open');
  }
};

var cardSlides = {
  init: function () {

    if (document.querySelector(".JS__cards-carousel")){
      
      var i=1;
      var str1='sliderBox_'
      var str2='.sliderBox_';
      $('.JS__cards-carousel').each(function (index,value) {

        var classAdd = str1 + i;
        var classCall = str2 + i;
        var next_slider = 'slider-next' + i;
        var prev_slider = 'slider-prev' + i;

        $(this).find('.swiper-container').addClass(classAdd);

        $(this).find('.swiper-button-prev').addClass(prev_slider);
        $(this).find(".swiper-button-next").addClass(next_slider);

        new Swiper(classCall,{
            slidesPerView: 'auto',
            spaceBetween: 16,
            // loop: true,
            navigation: {
                nextEl: ('.' + next_slider),
                prevEl: ('.' + prev_slider),
            },
            breakpoints: {
              // when window width is >= 320px
              1200: {
                slidesPerView: 'auto',
                spaceBetween: 16,
              },
              768: {
                slidesPerView: 1
              }
            }
        });

        i++;

      });
    }

  }
};

var searchBox = {
  init: function() {
    if (document.querySelector(".JS__search-box")){

      this.passageiros();

      //Radios
      $('.JS__search-box__radio').on('click', function(e) {
        searchBox.handleClick();
      });

      // Search Box Reduced - Exibir Radios
      $('.JS__search-tipos').on('click', function(e) {
        openSearchboxReducedRadios();
      });

      //Date Rage
      $('.JS__searchBox-data input').on('click', function(e) {
        searchboxDateOpen();
      });

      flatpickr("#searchbox-datepicker", {
        mode: "range",
        showMonths: 3,
        locale: 'pt',
        dateFormat: 'd/m/Y',
        conjunction: " - ",
        inline: true,
        minDate: "today",
        monthSelectorType: 'static'
      });

    
      // Mobile Toggle
      $('.JS__search-toggle').each(function() {
        
        $(this).on('click', function(){

          $(this).toggleClass('active');

          $('.JS__search-container').toggleClass('show');

          if ($(this).hasClass("active")) {
            setTimeout(function() { 
              $('.JS__search-container').toggleClass('overflow-visible');
            }, 500)
          }
          else{
            $('.JS__search-container').toggleClass('overflow-visible');
          }

        });

      });
      
      
    }

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
    
    var currentVal = parseInt($('.JS__search-box__quartos').val()),
    quartos = document.querySelector('.JS__total-quartos');

    quartos.textContent = currentVal.pad();
  },
  passageiros: function(){
    $(".JS__search-box__quartos").value = "";
    $(".JS__search-box__quantity").value = "";

    // Search Box - Exibir Passageiros
    $('.JS__passageiros-input').on('click', function(e) {
      openPassageiros();
    });

    //Quartos Buttons
    $('.JS__removeRoom').on('click', searchBox.removeLastRoom);
    $('.JS__addRoom').on('click', searchBox.addRoom);
    
    $(document).on('click', '.JS__room-remove', searchBox.removeRoom);

    
    $(document).on('click', '.JS__search-box__quantity-plus', searchBox.changePassageiros);
    $(document).on('click', '.JS__search-box__quantity-minus', searchBox.changePassageiros);

    $(document).on('click', '.JS__child-plus', searchBox.addChild);
    $(document).on('click', '.JS__child-minus', searchBox.removeChild);


  },
  removeRoom: function(e){

    $(e.target).parent().parent().remove();

    var ini = 2;

    $.each($('.JS__hotel-room__quantity'), function(){
     
      $(this).text(ini);
      ini++;

    });

    var currentVal = parseInt($('.JS__search-box__quartos').val());

    $('.JS__search-box__quartos').val(currentVal - 1);
    
    
  },
  removeLastRoom: function() {

    var total = $('.JS__hotel-room').length;
    if (total > 1 ){

      $('.JS__passageiros-box__content').children('.JS__hotel-room').last().remove();

      var total = parseInt(document.querySelector('.JS__search-box__quartos').value) - 1,
      quartos = document.querySelector('.JS__total-quartos');
      quartos.textContent = total.pad();  

      searchBox.changePassageiros();
      searchBox.changeQuartos();

    }

  },
  addRoom: function(){   

    var new_chq_no = document.querySelectorAll('.JS__hotel-room').length + 1;
   
    var new_row = 
      "<div class='JS__hotel-room o-search-box__form__passageiros__content__room pb-3'>"+
        "<div class='d-flex justify-content-between mb-2'>"+
          "<span class='fw-500 fs-12 mb-3 d-block'>Quarto <span class='JS__hotel-room__quantity'>" +new_chq_no+ "</span></span>"+
          "<span class='text-danger JS__room-remove cursor-pointer'>Remover</span>"+
        "</div>"+
        "<div class='d-flex align-items-center justify-content-between o-search-box__form__passageiros__content__input'>"+
              "<div class='me-3'>"+
                  "<span class='fs-5 fw-500 d-block mb-0'>Adultos</span>"+
              "</div>"+
              "<div class='input-number'>"+
                  "<input type='button' value='-' class='button-minus JS__search-box__quantity-minus' data-field='quantity'>"+ 
                  "<input type='number' step='1' value='1' name='quantity' class='JS__search-box__quantity'/>"+
                  "<input type='button' value='+' class='button-plus JS__search-box__quantity-plus' data-field='quantity'>"+
              "</div>"+
          "</div>"+
          "<div class='d-flex align-items-center justify-content-between flex-wrap o-search-box__form__passageiros__content__input'>"+
              "<div class='me-3'>"+
                "<span class='fs-5 fw-500 d-block mb-0'>Crianças</span>"+
              "</div>"+
              "<div class='input-number'>"+
                  "<input type='button' class='button-minus JS__search-box__quantity-minus JS__child-minus' data-field='quantity' value='-' >"+
                  "<input type='number' min='0' name='quantity' value='0' data-crianca='1' class='JS__search-box__quantity'/>"+
                  "<input type='button' class='button-plus JS__search-box__quantity-plus JS__child-plus' data-field='quantity' value='+' >"+
              "</div>"+
          "</div>"+
      "</div>";
    
    $('.JS__passageiros-box__content').append(new_row);

    var total = parseInt(document.querySelector('.JS__search-box__quartos').value) + 1,
    quartos = document.querySelector('.JS__total-quartos');
    quartos.textContent = total.pad();  

    
    searchBox.changePassageiros();

  },
  addChild: function(e){

    var new_child = `<div class="mt-3 o-search-box__form__passageiros__content__room__child-age JS__child-age">`+
        `<label for="passageirosInput" class="form-label">Idade</label>`+
        `<input class="form-control" type="number" id="itemInput" placeholder="Idade" aria-label="Idade">`+
    `</div>`;


    $(e.target).parent().parent().append(new_child);
    

  },
  removeChild: function(e){


    $(e.target).parent().parent().children('.JS__child-age').last().remove();


    searchBox.changePassageiros();
    
  }
};

var hotel = {
  init: function(){
    
    $('.JS__hotel-open').each(function() {

      $(this).on('click', function(){

        $(this).closest(".o-hotel").toggleClass('active');

      });

    });

  }
}

var tabsFlex = {
  init: function(){
      if (document.querySelector(".JS__tabsFlex")){
        
        $('.JS__tabsFlex').each(function (index,value) {

          if ($(this).find('.nav-item').length == 2)
            $(this).removeClass('justify-content-between');
          });
      }
  }
}

var datepicker ={
  init : function(){

    flatpickr(".input-date", {
      locale: 'pt',
      dateFormat: 'd/m/Y',
      monthSelectorType: 'static'
    });
  
    flatpickr(".daterange", {
      mode: "range",
      showMonths: 1,
      locale: 'pt',
      dateFormat: 'd/m/Y',
      conjunction: " - ",
      monthSelectorType: 'static'
    });
  
    flatpickr(".JS__input-hour", {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        time_24hr: true
    });
  
  }
}

var tooltip = {
  init : function(){
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      });
  }
}

const openPassageiros = () => {
  const passageirosBox = document.querySelector('.JS__passageiros-box');
        
  if(!passageirosBox.classList.contains('show')){
    passageirosBox.classList.add("show");
  }

  setTimeout(() => { document.addEventListener('click', closePassageiros, false) }, 1);
}

const closePassageiros = (event) => {
  const passageirosBox = document.querySelector('.JS__passageiros-box');

  if (!passageirosBox.contains(event.target) && ! event.target.classList.contains( "JS__room-remove" )) {
    
    searchBox.changePassageiros();

    passageirosBox.classList.remove("show");
    document.removeEventListener('click', closePassageiros, false);

  }
}

const searchboxDateOpen = () => {
  const dateBox = document.querySelector('.JS__searchBox-data .flatpickr-calendar');

  if(!dateBox.classList.contains('show')){
    dateBox.classList.add("show");
  }

  setTimeout(() => { document.addEventListener('click', searchboxDateClose, false) }, 1);
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

  setTimeout(() => { document.addEventListener('click', closeSearchboxReducedRadios, false) }, 1);
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
  
jQuery(document).ready(function($) {
  $('*[data-href]').on('click', function() {
      window.location = $(this).data("href");
  });
});

function formatState (state) {
  if (!state.id) {
    return state.text;
  }
  var baseUrl = "assets/img/flags";
  var $state = $(
    '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
  );
  return $state;
};


