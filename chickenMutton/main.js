$('.slider-one').not('.slick-initialized').slick({
  autoplay : true,
  autoplaySpeed : 900,
  dots : true,
  infinite : true,
  prevArrow : false,
  nextArrow : false
});

//Product Qty Section 
let $qty_up = $('.qty .qty-up');
let $qty_down = $('.qty .qty-down');
let $input = $('.qty .qty_input');

$qty_up.click(function(e) {
  if ($input.val() >= 1 && $input.val() <= 9) {
    $input.val(function(i, oldval) {
      return ++oldval;
    });
  };
});

$qty_down.click(function(e) {
  if ($input.val() < 11 && $input.val() >= 2) {
    $input.val(function(i, oldval) {
      return --oldval;
    });
  }
});


// Add Chicken To Cart 

$(document).ready(function() {
  $('#add_chicken').click(function(e) {
    e.preventDefault();
    var value = $('#chicken_input').val();
    $.ajax({
      url: "process.php",
      type: "POST",
      async: false,
      data: {
        "chicken": 1,
        "chicken_qty": value
      },
      success: function(data) {
        $('#chicken_input').val(1)
      }
    });
  }); 
});
$(document).ready(function() {

  $('#add_mutton').click(function(e) {
    e.preventDefault();
    var mutton_value = $('#mutton_input').val();
    $.ajax({
      url: "process.php",
      type: "POST",
      async: false,
      data: {
        "mutton": 1,
        "mutton_qty": mutton_value
      },
      success: function(data) {
        $('#mutton_input').val(1)
      }
    });
  });
});




