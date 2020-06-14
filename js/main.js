$(document).ready(main);

var contador = 1;
var ancho = $(document).width();

function main (){
	$('.menu_bar').click(function(){
		// $('nav').toggle(); Forma Sencilla de aparecer y desaparecer
		
		if (contador == 1){
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		};
		
	});

	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});

};


//    /*---------------------------------------------*
//     * AQUI LO PUSE
//     ---------------------------------------------*/


jQuery(document).ready(function() {
	 
	$(window).load(function () {
		$(".loaded").fadeOut();
		$(".preloader").delay(1000).fadeOut("slow");
	}); 
	 

	jQuery(window).scroll(function () {
	  var top = jQuery(document).scrollTop();
		var height = 500;
	  //alert(batas);
	  
	  if (top > height) {
		jQuery('.navbar-fixed-top').addClass('menu-scroll');
	  } else {
	   jQuery('.navbar-fixed-top').removeClass('menu-scroll');
	  }
	}); 
	
//	 /*---------------------------------------------*
//     * STICKY scroll
//     ---------------------------------------------*/

    $.localScroll();
	
	
	
	
//    /*---------------------------------------------*
//     * WOW
//     ---------------------------------------------*/
 
        var wow = new WOW({
            mobile: false // trigger animations on mobile devices (default is true)
       });
 	
	 
	 
 });

