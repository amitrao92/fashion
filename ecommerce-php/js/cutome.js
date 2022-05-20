$('.banner_sliders').slick({
    arrows: false,
     infinite: true,
     autoplay: true,
      autoplaySpeed: 2000,
     slidesToShow: 1,
     slidesToScroll: 1
   });


   $('.client-monial-wrap').slick({
    centerMode: true,
    dots:true,
    centerPadding: '390px',
    slidesToShow: 1,
    responsive: [
      {
        breakpoint: 1366,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '300px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 1200,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '200px',
          slidesToShow: 1
        }
      },
      
      {
        breakpoint: 992,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '70px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '20px',
          slidesToShow: 1
        }
      }
    ]
  });



$('body').on('click', '#women', function(){
    $(this).parents('.header').find('.for_men').addClass('d-none');
    $(this).parents('.header').find('.for_women').removeClass('d-none');
});


$('body').on('click', '#men', function(){
    $(this).parents('.header').find('.for_men').removeClass('d-none');
    $(this).parents('.header').find('.for_women').addClass('d-none');
});

$('body').on('keyup', '.js-input-mobile', function () {
  var $input = $(this),
      value = $input.val(),
      length = value.length,
      inputCharacter = parseInt(value.slice(-1));

  if (!((length > 1 && inputCharacter >= 0 && inputCharacter <= 9) || (length === 1 && inputCharacter >= 7 && inputCharacter <= 9))) {
      $input.val(value.substring(1, length - 1));
   }
});

   