(function ($) {
  'use strict';

     
    // Sticky Active Code
    $(window).on('scroll', function () {
      if ($(window).scrollTop() >= 40) {
        $('header').addClass('fixed-header');
      }
      else {
        $('header').removeClass('fixed-header');
      }
    }); 

    // // Footer Animation
    // $(window).on('scroll', function() {
  
    //   //ADD .TIGHT
    //   if ($(window).scrollTop() + $(window).height() > $('.content-wrapper').outerHeight()) {
    //     $('body').addClass('tight'); 
    //   } else {
    //     $('body').removeClass('tight'); 
    //   }
    // }); 

    
  
    // //BACK TO PRESENTATION MODE
    // $("html").on("click", "body.tight .content-wrapper", function() {
    //   $('html, body').animate({
    //     scrollTop: $('.content-wrapper').outerHeight() - $(window).height()
    //   }, 500);
    // });
     
    // WOW Animation
    var wow = new WOW(
      {
          boxClass: 'wow',      // animated element css class (default is wow)
          animateClass: 'animated', // animation css class (default is animated)
          offset: 0,          // distance to the element when triggering the animation (default is 0)
          mobile: false,       // trigger animations on mobile devices (default is true)
          live: true,       // act on asynchronously loaded content (default is true)
          callback: function (box) {
              // the callback is fired every time an animation is started
              // the argument that is passed in is the DOM node being animated
          },
          scrollContainer: null // optional scroll container selector, otherwise use window
      }
  );
  wow.init();

  // Back to Top
  $('.back-to-top').on('click', function () {
    $('html, body').animate({
        scrollTop: 0
    }, 1000);
    return false;
  });

  $('.loader').fadeOut();
 

})(jQuery);

$(window).load(function () {
  //ADD .TIGHT
  // if ($(window).scrollTop() + $(window).height() > $('.content-wrapper').outerHeight()) {
  //   $('body').addClass('tight'); 
  // } else {
  //   $('body').removeClass('tight'); 
  // }

  if ($(window).scrollTop() >= 40) {
    $('header').addClass('fixed-header');
  }
  else {
    $('header').removeClass('fixed-header');
  }

});

