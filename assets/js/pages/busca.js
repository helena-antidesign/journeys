var hotelButtons = document.querySelectorAll('.JS__hotel-button-more');

hotelButtons.forEach(function(item) {
  
  item.addEventListener('click', function(){

    item.parentElement.parentElement.classList.add('open');
    item.style.display = "none";

  });

});




//-----JS for Price Range slider-----

$(function() {
  $( "#slider-range" ).slider({
    range: true,
    min: 0,
    max: 3000,
    values: [ 0, 3000 ],
    slide: function( event, ui ) {
    $( "#min" ).val( "R$ " + ui.values[ 0 ] );
    $( "#max" ).val( "R$ " + ui.values[ 1 ] );
    }
  });

    
  $( "#min" ).val( "R$ " + $( "#slider-range" ).slider( "values", 0 ));
  
  $( "#max" ).val( "R$ " + $( "#slider-range" ).slider( "values", 1 ));
    
});



// Sliding radio

$('.radio-macro span').click(function(){
  $('.radio-macro span').toggleClass( 'active' );
  $('.radio-macro .sliding-bubble').toggleClass( 'switch' );
});