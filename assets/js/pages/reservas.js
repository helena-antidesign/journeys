document.addEventListener("DOMContentLoaded", function (event) {
    
    menu.init();

});

var menu = {
    init: function(){
  
      $('.JS__open-editar-reserva').each(function() {
        $(this).on('click', function(){
            document.querySelector('.JS__reserva-modal').classList.toggle('open');
        });
      });
      
  
    }
    
}