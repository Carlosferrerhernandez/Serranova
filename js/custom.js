$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    loop:true,
    responsive:{
      0: {
        items: 1,
        autoWidth:false,
      },
      992: {
        items: 4,
        autoWidth:true,
      },
    }
  });
});