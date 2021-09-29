$("#slider-range").slider({
  range: true, 
  min: 0,
  max: 3000,
  step: 50,
  slide: function( event, ui ) {
    $( "#min-price").html(ui.values[ 0 ]);
    
    suffix = '';
    if (ui.values[ 1 ] == $( "#max-price").data('max') ){
       suffix = ' +';
    }
    $( "#max-price").html(ui.values[ 1 ] + suffix);         
  }
})


    

$(document).ready(function(){

 $('.slider-main').slick({
  slidesToShow: 1,
  arrows: false,
  asNavFor: '.slider-nav',
  vertical: false,
  autoplay: true,
  verticalSwiping: true,
  centerMode: true
});

$('.slider-nav').slick({
  slidesToShow: 3,
  asNavFor: '.slider-main',
  vertical: true,
  focusOnSelect: true,
  autoplay: true,
  centerMode: true,
  arrows:false
});
});





      $(document).ready(function(){
    $('#qty_input').prop('disabled', true);
    $('#plus-btn').click(function(){
      $('#qty_input').val(parseInt($('#qty_input').val()) + 1 );
          });
        $('#minus-btn').click(function(){
      $('#qty_input').val(parseInt($('#qty_input').val()) - 1 );
      if ($('#qty_input').val() == 0) {
      $('#qty_input').val(1);
    }

          });
 });
  




  
      $(document).ready(function(){
    $('#qty_input2').prop('disabled', true);
    $('#plus-btn2').click(function(){
      $('#qty_input2').val(parseInt($('#qty_input2').val()) + 1 );
          });
        $('#minus-btn2').click(function(){
      $('#qty_input2').val(parseInt($('#qty_input2').val()) - 1 );
      if ($('#qty_input2').val() == 0) {
      $('#qty_input2').val(1);
    }

          });
 });



      
$(function () {
    $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });
    
    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });
    
    
    //Do not include! This prevents the form from submitting for DEMO purposes only!
    $('form').submit(function(event) {
        event.preventDefault();
        return false;
    })
});

  