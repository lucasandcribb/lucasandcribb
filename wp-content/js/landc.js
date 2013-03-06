$(document).ready(function() {

	$('body').fadeIn(1000);


	$('.service-content .wpuf-attachments').each(function() {
		$(this).remove();
	});

	$('.twitter').mouseenter(function() {
		$('.t-white').hide();
		$('.t-grey').show();
	}).mouseleave(function() {
		$('.t-grey').hide();
		$('.t-white').show();
	});

	$('.facebook').mouseenter(function() {
		$('.f-white').hide();
		$('.f-grey').show();
	}).mouseleave(function() {
		$('.f-grey').hide();
		$('.f-white').show();
	});

	customSlideshow();

});

function rotate() {
    $('#imac-slide-buttons #next').click();
} 
function customSlideshow() {

	var speed = 10000;
    var run = setInterval('rotate()', speed);

    $('#slides .current').mouseenter(function() {
    	clearInterval(run);
    }).mouseleave(function() {
    	run = setInterval('rotate()', speed);
    });

	$('#imac-slideshow #slides li').first().addClass('first');
	$('#imac-slideshow #slides li').first().addClass('current');
	$('#imac-slideshow #slides li').last().addClass('last');

	var i = 0;
	$('#imac-slideshow #slides li').each(function() {
		i++;
	});

	$('#next').click(function() {  
        var currentIndex = parseInt($('#slides .current').attr('ref'));
        var last = $('#slides .current').hasClass('last');
        var nextIndex;
        $('#slides .current').fadeOut();
        if (last == false) {
        	$('#slides .current').removeClass('current');
        	nextIndex = currentIndex + 1;
        	$('.index-'+nextIndex).addClass('current');
        	$('.index-'+nextIndex).fadeIn(1500);
        	
        } else {
        	$('#slides .current').removeClass('current');
        	nextIndex = 0;
        	$('.index-'+nextIndex).addClass('current');
        	$('.index-'+nextIndex).fadeIn(1500);
        }
    }); 

    // $('#prev').click(function() {  
    //     var currentIndex = parseInt($('#slides .current').attr('ref'));
    //     var first = $('#slides .current').hasClass('first');
    //     var nextIndex;
    //     $('#slides .current').fadeOut();
    //     if (first == false) {
    //     	$('#slides .current').removeClass('current');
    //     	nextIndex = currentIndex - 1;
    //     	$('.index-'+nextIndex).addClass('current');
    //     	$('.index-'+nextIndex).fadeIn(1500);
        	
    //     } else {
    //     	$('#slides .current').removeClass('current');
    //     	nextIndex = i;
    //     	$('.index-'+nextIndex).addClass('current');
    //     	$('.index-'+nextIndex).fadeIn(1500);
    //     }
    // }); 
 
}


