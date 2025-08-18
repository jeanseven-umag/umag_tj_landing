// Masked Input
$(function($){
	// $('[name="phone"]').mask("+7 (999) 999 99 99");
});
//Button pin
$(document).ready(function(){
    $("#button-start-trial-sticky").pin({
	      minWidth: 1023
	});
});


$(document).ready(function() {
	var screen = $(window).width();
	if(screen >= 768) {
		$('.owl-carousel').owlCarousel({
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
	    loop:false,
	    margin:10,
	    nav:true,
     	navText: ["<img src='../landing-resources/img/automation-page/owl-prev.svg'>","<img src='../landing-resources/img/automation-page/owl-next.svg'>"],
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});
	}


	$(document).ready(function() {
	// Owl Carousel Mobile
		$('.owl-carousel').owlCarousel({
			animateOut:false,
			animateIn:false,
		    loop:false,
		    margin:10,
		    nav:true,
	     	navText: ["<img src='../landing-resources/img/automation-page/owl-prev.svg'>","<img src='../landing-resources/img/automation-page/owl-next.svg'>"],
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:1
		        }
		    }
		});
	});

	//Owl onChange
	var owl = $('.owl-carousel');

	owl.on('changed.owl.carousel', function(event) {
		if(event.relatedTarget.current() == 0) {
		$('.col-60').addClass('bg1');
		$('.col-60').removeClass('bg2 bg3 bg4 bg5');
		}
		if(event.relatedTarget.current() == 1) {
		$('.col-60').addClass('bg2');
		$('.col-60').removeClass('bg1 bg3 bg4 bg5');
		}
		if(event.relatedTarget.current() == 2) {
		$('.col-60').addClass('bg3');
		$('.col-60').removeClass('bg1 bg2 bg4 bg5');
		}
		if(event.relatedTarget.current() == 3) {
		$('.col-60').addClass('bg4');
		$('.col-60').removeClass('bg1 bg2 bg3 bg5');
		}
		if(event.relatedTarget.current() == 4) {
		$('.col-60').addClass('bg5');
		$('.col-60').removeClass('bg1 bg2 bg3 bg4');
		}
	});


	//Header sticky
	$(".nav-module").before($(".nav-module").clone().addClass("animateIt"));
    $(window).on("scroll", function () {
        $("body").toggleClass("down", ($(window).scrollTop() > 100));
    });
    $(window).on("load", function(){
    	if($(window).scrollTop() > 100) {
    		$("body").addClass("down");
    	}
    });


    //Smooth Anchor
    $(".nav-anchors").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 750);
    });

	//Play video
	$('.play-button').click(function(){
    	$('body').addClass('overflow-hidden');
    	$('.video-box').addClass('expand');
    	$('.video-overlay').fadeIn();
    });

	$(document).on('mouseup touchend', function (e){
		var div = $('.video-box');
		var overlay = $('.video-overlay');
		var player = document.getElementById('Youtube');
		if (!div.is(e.target)
		    && div.has(e.target).length === 0) {
			overlay.fadeOut();
			$('body').removeClass('overflow-hidden');
			$('.video-box').removeClass('expand');
			
			var video = $("#Youtube").attr("src");
			$("#Youtube").attr("src","");
			$("#Youtube").attr("src",video);
		}
	});

    //Menu Toggle
    if($(window).width() >= 769) {
    	$('.button-menu').click(function(){
	 	$('.menu-overlay').fadeIn();
	 	$('.menu').addClass('expand');
	 	$(document).mouseup(function (e){
	 		var div = $('.menu');
		 	if (!div.is(e.target)
			    && div.has(e.target).length === 0) {
					$('.menu').removeClass('expand');
					$('.menu-overlay').fadeOut();
				}
		});
		event.preventDefault();
	 });
	 $('.menu-close').click(function(){
	 	$('.menu').removeClass('expand');
	 	$('.menu-overlay').fadeOut();
	 });
    }


});

//Media 768
$(function(){
    if($(window).width() <= 768) {
		// Menu Mobile
	    $('.button-menu').click(function(){
		 	$('.menu-overlay').fadeIn();
		 	$('.menu-mob').addClass('expand');
		 	$('.nav-module.animateIt').addClass('expand');
		 	$('body').addClass('overflow-hidden');
		 });

	    // Menu Close Button
		 $('.menu-mob-close').click(function(){
		 	$('.menu-mob').removeClass('expand');
		 	$('.nav-module.animateIt').removeClass('expand');
		 	$('.menu-overlay').fadeOut();
		 	$('body').removeClass('overflow-hidden');
		 });

		 // Menu Anchors
		 $(".menu-mob").on("click","a.mobile-anchor", function (event) {
	        event.preventDefault();
	        var id  = $(this).attr('href'),
	            top = $(id).offset().top -50;
	        $('.menu-mob').removeClass('expand');
			$('.nav-module.animateIt').removeClass('expand');
			$('.menu-overlay').fadeOut();
			$('body').removeClass('overflow-hidden');
	        $('body,html').animate({scrollTop: top}, 100);
	     });

		 // Menu Accordion
		 $('.accordion-parent').click(function(){
		 	$('.accordion-icon',this).toggleClass('open');
		 	$('.accordion-child',this).slideToggle(300);
		 	$(document).mouseup(function (e){
		 		var div = $('.accordion-parent',this);
			 	if (!div.is(e.target)
				    && div.has(e.target).length === 0) {
			 			$('.accordion-icon').removeClass('open');
			 			$('.accordion-child').slideUp(300);
					}
				event.preventDefault();
			});
	 	 });
	}
});