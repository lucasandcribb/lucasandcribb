$(document).ready(function() {

	centerLogo();
	sliderHeight();
	processNumbered();

	$('.header-nav a').mouseenter(function() {
		$(this).children('img').show();
		$(this).children('img.left-arrow').animate({'left':5},500);
		$(this).children('img.right-arrow').animate({'right':5},500);
	}).mouseleave(function() {
		$('.focus-arrow').hide();
		$(this).children('img.left-arrow').css({'left':0});
		$(this).children('img.right-arrow').css({'right':0});
	});

	$(window).scroll(function() {

		var scrollNum = parseInt($(window).scrollTop());
		$('#scrollnumber').html(scrollNum);

		if (scrollNum > 0 && scrollNum <= 1000) {
			var newScrollInfoTop = 10 - (scrollNum/25),
				newArrowTop = 0 - (scrollNum/20);
			$('#scroll-info').css({'top':newScrollInfoTop});
		}

		if (scrollNum > 0 && scrollNum <= 800) {
			$('#hp-header').fadeOut();
		} else if (scrollNum > 800) {
			$('#hp-header').fadeIn(500);
		}

		if (scrollNum <= 600) {
			$('#logo').fadeIn();
		}
		if (scrollNum > 600) {
			$('#logo').fadeOut(1000);
		}

		//SLIDER PAGE SCROLLING
		if (scrollNum > 0 && scrollNum <= 925) {
			var newScrollTop = 1000 - (scrollNum);
			$('#hp-slider-page').css({'top':newScrollTop});
		} else if (scrollNum > 925) {
			$('#hp-slider-page').css({'top':75});
			$('#hp-header').fadeIn('slow');
		}

		//INFO PAGE SCROLLING
		if (scrollNum > 1100 && scrollNum <= 3101) {
			$('#hp-info-page').fadeIn();
			var newInfoLeft = 2000 - (scrollNum - 1100);
			$('#hp-info-page').css({'left':newInfoLeft});
		} else if (scrollNum > 3101) {
			$('#hp-info-page').css({'left':-1});
		}
		//SERVICES SECTION IMAGES
		if (scrollNum > 1100 && scrollNum <= 3100) {
			var newImgMargin = 500 - ((scrollNum - 1100)/4);
			$('.service-info-img').css({'margin-left':newImgMargin});
		} else if (scrollNum > 3101) {
			$('.service-info-img').css({'margin-left':0});
		}
		//PLATFORM SECTION IMAGES
		if (scrollNum > 2100 && scrollNum <= 2350) {
			var newPlatTop = 250 - ((scrollNum - 2100));
			$('#plat-wp').css({'margin-top':newPlatTop});
		} else if (scrollNum > 2350) {
			$('#plat-wp').css({'margin-top':0});
		}
		if (scrollNum > 2350 && scrollNum <= 2600) {
			var newPlatTop = 250 - ((scrollNum - 2350));
			$('#plat-mag').css({'margin-top':newPlatTop});
		} else if (scrollNum > 2600) {
			$('#plat-mag').css({'margin-top':0});
		}
		if (scrollNum > 2600 && scrollNum <= 2850) {
			var newPlatTop = 250 - ((scrollNum - 2600));
			$('#plat-drup').css({'margin-top':newPlatTop});
		} else if (scrollNum > 2850) {
			$('#plat-drup').css({'margin-top':0});
		}
		if (scrollNum > 2850 && scrollNum <= 3100) {
			var newPlatTop = 250 - ((scrollNum - 2850));
			$('#plat-elgg').css({'margin-top':newPlatTop});
		} else if (scrollNum > 3100) {
			$('#plat-elgg').css({'margin-top':0});
		}

		//PROCEDURE PAGE SCROLLING
		if (scrollNum >= 3500) {
			$('#hp-process-page').fadeIn(1000);
		} else if (scrollNum < 3500) {
			$('#hp-process-page').fadeOut(500);
		}

		//CHECKS
		if (scrollNum < 4000) {
			$('.check').hide();
			$('.process-step').css({'opacity':1.0});
		}
		if (scrollNum >= 4000 && scrollNum <= 4500) {
			$('.step-0').children('.check').fadeIn();
			$('.process-step').each(function() {
				var rel = $(this).attr('rel');
				if (rel > 0) {
					$(this).css({'opacity':1.0});
					$(this).children('.check').hide();
				}
			});
		}
		if (scrollNum > 4500 && scrollNum <= 5000) {
			$('.step-1').children('.check').fadeIn();
			$('.step-0').css({'opacity':0.75});
			$('.process-step').each(function() {
				var rel = $(this).attr('rel');
				if (rel > 1) {
					$(this).css({'opacity':1.0});
					$(this).children('.check').hide();
				}
			});
		}
		if (scrollNum > 5000 && scrollNum <= 5500) {
			$('.step-2').children('.check').fadeIn();
			$('.step-1').css({'opacity':0.75});
			$('.process-step').each(function() {
				var rel = $(this).attr('rel');
				if (rel > 2) {
					$(this).css({'opacity':1.0});
					$(this).children('.check').hide();
				}
			});
		}
		if (scrollNum > 5500 && scrollNum <= 6000) {
			$('.step-3').children('.check').fadeIn();
			$('.step-2').css({'opacity':0.75});
			$('.process-step').each(function() {
				var rel = $(this).attr('rel');
				if (rel > 3) {
					$(this).css({'opacity':1.0});
					$(this).children('.check').hide();
				}
			});
		}
		if (scrollNum > 6000 && scrollNum <= 6500) {
			$('.step-4').children('.check').fadeIn();
			$('.step-3').css({'opacity':0.75});
			$('.process-step').each(function() {
				var rel = $(this).attr('rel');
				if (rel > 4) {
					$(this).css({'opacity':1.0});
					$(this).children('.check').hide();
				}
			});
		}
		if (scrollNum > 6500 && scrollNum <= 7000) {
			$('.step-5').children('.check').fadeIn();
			$('.step-4').css({'opacity':0.75});
			$('.process-step').each(function() {
				var rel = $(this).attr('rel');
				if (rel > 5) {
					$(this).css({'opacity':1.0});
					$(this).children('.check').hide();
				}
			});
		}

	});

});

$(window).resize(function() {

	centerLogo();
	sliderHeight();

});

function centerLogo() {
	var winHt = $(window).height(),
		newTop = ((winHt - 270)/2) - 50,
		winW = $(window).width(),
		newLeft = (winW - 240)/2,
		newScrollInfoLeft = (winW - 200)/2;
	$('#logo').css({'left':newLeft});
	$('#scroll-info').css({'left':newScrollInfoLeft});
}

function sliderHeight() {
	var winHt = $(window).height(),
		newSliderHt = winHt - 175;
	$('#hp-slider-page').css({'height':newSliderHt});
	$('#hp-info-page').css({'height':newSliderHt});
	$('#hp-process-page').css({'height':newSliderHt});
}

function processNumbered() {
	var count = 0;
	$('.process-step').each(function() {
		$(this).attr('rel', count);
		var stepNum = 'step-'+count;
		$(this).addClass(stepNum);
		count++;
	})
}








	

