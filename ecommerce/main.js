$('document').ready(function() {
  $('.menu-toggle').click(function() {
    $('.custom_navbar').toggleClass('active');
  })
});

$('document').ready(function() {
  $('.menu-toggle').click(function() {
    $('.menu-toggle').toggleClass('open')
  });
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
  if ($input.val() <11 && $input.val()>=2 ) {
    $input.val(function(i, oldval) {
      return --oldval;
    });
  }
});




/* New Arrivals */
$('.slider-one').not('.slick-initialized').slick({
  autoplay: true,
  autoplaySpeed: 1000,
  slidesToShow: 2,
  slidesToScroll: 1,
  prevArrow: false,
  nextArrow: false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2,
        infinite: true,

      }
      },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
      },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
})