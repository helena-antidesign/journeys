document.addEventListener("DOMContentLoaded", function (event) {
	recuperarSenhaModal.init();
});

var recuperarSenhaModal = {
    init: function(){
  
      $('.JS__modal-toggle').each(function() {
        $(this).on('click', function(){
            document.querySelector('.JS__modal').classList.toggle('open');
        });
      });
      
    }
}