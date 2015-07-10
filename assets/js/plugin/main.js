/* ========================================================================= */
/*	Preloader
 /* ========================================================================= */

jQuery(window).load(function () {

  $("#preloader").fadeOut("slow");

});



$(document).ready(function () {
  var $hasDomCenter = $('.center');
  if ($hasDomCenter) {
    var setCompany = function () {
      $('.center').slick({
        centerMode: true,
        centerPadding: '44px',
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        pauseOnHover: false,
        autoplaySpeed: 2000,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 4
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });
    };
    //
    setTimeout(function () {
      setCompany();
    }, 1000);
  }
  /* ========================================================================= */
  /*	Menu item highlighting
   /* ========================================================================= */

//  $('#slides').css( 'display', 'none');
  setTimeout(function () {
    $('#slides').slidesjs({
      width: 940,
      height: 328,
      navigation: false,
      pagination: {
        active: false,
        effect: "slide"
      },
      play: {
        active: false,
        effect: "slide",
        interval: 5000,
        auto: true,
        swap: false,
        pauseOnHover: false,
        restartDelay: 2500
      }
    });
  }, 1000);



  $("#works, #testimonial").owlCarousel({
    navigation: true,
    pagination: false,
    slideSpeed: 700,
    paginationSpeed: 400,
    singleItem: true,
    navigationText: ["<i class='fa fa-angle-left fa-lg'></i>", "<i class='fa fa-angle-right fa-lg'></i>"]
  });


  /* ========================================================================= */
  /*	Featured Project Lightbox
   /* ========================================================================= */

  $(".fancybox").fancybox({
    padding: 0,
    openEffect: 'elastic',
    openSpeed: 650,
    closeEffect: 'elastic',
    closeSpeed: 550,
    closeClick: true,
    beforeShow: function () {
      this.title = $(this.element).attr('title');
      this.title = '<h3>' + this.title + '</h3>' + '<p>' + $(this.element).parents('.portfolio-item').find('img').attr('alt') + '</p>';
    },
    helpers: {
      title: {
        type: 'inside'
      },
      overlay: {
        css: {
          'background': 'rgba(0,0,0,0.8)'
        }
      }
    }
  });

});


var wow = new WOW({
  offset: 75, // distance to the element when triggering the animation (default is 0)
  mobile: false, // trigger animations on mobile devices (default is true)
});
wow.init();

