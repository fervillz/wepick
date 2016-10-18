jQuery( document ).ready( function ( $ ) {
	'use strict';
	/*
	|--------------------------------------------------------------------------
	| Developer mode
	|--------------------------------------------------------------------------
	|
	| Set to true - it will allow printing in the console. Alsways check for this
	| variables when running tests so you dont forget about certain console.logs.
	| Id needed for development testing this variable should be used.
	|
	*/
	var devMode = function() {
		return true;
	};

	// Disable console.log for production site.
	if ( ! devMode() ) {
		console.log = function() {};
	}

	//main-slider
	$('.owl-carousel-screenshot').owlCarousel({
		loop:true,
		margin:0,
		responsiveClass:true,
		dots: false,
		navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		autoplay: false,
		items: 4,
		stagePadding: 0,
		responsive:{
	        0:{
	            items:2,
	            nav:true
	        },
	        767:{
	            items:3,
	            nav:false
	        },
	        1000:{
	            items:4,
	            nav:true,
	            loop:false
	        }
	    }
	});

	$('a[href*=#]').on('click', function(event){     
	    event.preventDefault();
	    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 300);
	});
	
	var href;
	$('.how-nav').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('.how-nav').removeClass('active');
		$(this).addClass('active');
		href = $(this).attr('href');

		$('.hows').removeClass('active');
		$(href).addClass('active');
		$('screen-'+href).addClass('active');
		console.log($('screen-'+href));
	});
});
