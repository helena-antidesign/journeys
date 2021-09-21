document.addEventListener("DOMContentLoaded", function (event) {

    $('.JS__pickup-tipo').change(function(){
        if($(this).val() == '1'){ // or this.value == 'volvo'

            $('.JS__pickup-tipo-opt2').addClass('d-none');
            $('.JS__pickup-tipo-opt1').removeClass('d-none');

        }
        else if($(this).val() == '2'){ // or this.value == 'volvo'

            $('.JS__pickup-tipo-opt1').addClass('d-none');
            $('.JS__pickup-tipo-opt2').removeClass('d-none');
            
        }
    });


});