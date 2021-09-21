document.addEventListener("DOMContentLoaded", function (event) {


  new Swiper(".JS__experiencia-galeria", {
      slidesPerView: 'auto',
      navigation: {
        nextEl: ".JS__experiencia-galeria .swiper-button-next",
        prevEl: ".JS__experiencia-galeria .swiper-button-prev",
      },
      pagination: {
        el: ".JS__experiencia-galeria .swiper-pagination",
      },
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
  });


  $(".filter-button").click(function(){
      var value = $(this).attr('data-filter');

      $('.filter-button.active').removeClass('active');
      $(this).addClass('active');
      
      if(value == "all")
      {
          //$('.filter').removeClass('hidden');
          $('.filter').removeClass('hidden');
      }
      else
      {
  //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
  //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
          $(".filter").not('.'+value).addClass('hidden');
          $('.filter').filter('.'+value).removeClass('hidden');
          
      }
    });

});
