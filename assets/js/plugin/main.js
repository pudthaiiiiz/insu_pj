/* ========================================================================= */
/*	Preloader
/* ========================================================================= */

jQuery(window).load(function(){

	$("#preloader").fadeOut("slow");

});



$(document).ready(function(){



	/* ========================================================================= */
	/*	Menu item highlighting
	/* ========================================================================= */
  
//  $('#slides').css( 'display', 'none');
  setTimeout(function(){
      $('#slides').slidesjs({
        width: 940,
        height: 328,
        navigation: false,
        pagination: {
          active: false,
            // [boolean] Create pagination items.
            // You cannot use your own pagination. Sorry.
          effect: "slide"
            // [string] Can be either "slide" or "fade".
        },
        play: {
          active: false,
            // [boolean] Generate the play and stop buttons.
            // You cannot use your own buttons. Sorry.
          effect: "slide",
            // [string] Can be either "slide" or "fade".
          interval: 5000,
            // [number] Time spent on each slide in milliseconds.
          auto: true,
            // [boolean] Start playing the slideshow on load.
          swap: false,
            // [boolean] show/hide stop and play buttons
          pauseOnHover: false,
            // [boolean] pause a playing slideshow on hover
          restartDelay: 2500
            // [number] restart delay on inactive slideshow
        }
      });
//  $('#slides').css( 'display', 'block');
  },1000);
//  
//	jQuery('.nav').singlePageNav({
//		offset: jQuery('.nav').outerHeight(),
//		filter: ':not(.external)',
//		speed: 2000,
//		currentClass: 'current',
//		easing: 'easeInOutExpo',
//		updateHash: true
//	});

	
	
	$("#works, #testimonial").owlCarousel({	 
		navigation : true,
		pagination : false,
		slideSpeed : 700,
		paginationSpeed : 400,
		singleItem:true,
		navigationText: ["<i class='fa fa-angle-left fa-lg'></i>","<i class='fa fa-angle-right fa-lg'></i>"]
	});
	
	
	/* ========================================================================= */
	/*	Featured Project Lightbox
	/* ========================================================================= */

	$(".fancybox").fancybox({
		padding: 0,

		openEffect : 'elastic',
		openSpeed  : 650,

		closeEffect : 'elastic',
		closeSpeed  : 550,

		closeClick : true,
			
		beforeShow: function () {
			this.title = $(this.element).attr('title');
			this.title = '<h3>' + this.title + '</h3>' + '<p>' + $(this.element).parents('.portfolio-item').find('img').attr('alt') + '</p>';
		},
		
		helpers : {
			title : { 
				type: 'inside' 
			},
			overlay : {
				css : {
					'background' : 'rgba(0,0,0,0.8)'
				}
			}
		}
	});
	
});


var wow = new WOW ({
	offset:       75,          // distance to the element when triggering the animation (default is 0)
	mobile:       false,       // trigger animations on mobile devices (default is true)
});
wow.init();

