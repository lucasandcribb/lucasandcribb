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

	customImacSlideshow();
	customPhotoSlideshow();

});

function rotateImac() {
    $('#imac-slide-buttons #next').click();
} 
function customImacSlideshow() {
	var speed = 10000;
    var run = setInterval('rotateImac()', speed);

    $('#imac-slideshow #slides .current').mouseenter(function() {
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
        var currentIndex = parseInt($('#imac-slideshow #slides .current').attr('ref'));
        var last = $('#imac-slideshow #slides .current').hasClass('last');
        var nextIndex;
        $('#imac-slideshow #slides .current').fadeOut();
        if (last == false) {
        	$('#imac-slideshow #slides .current').removeClass('current');
        	nextIndex = currentIndex + 1;
        	$('#imac-slideshow .index-'+nextIndex).addClass('current');
        	$('#imac-slideshow .index-'+nextIndex).fadeIn(1500);
        	
        } else {
        	$('#imac-slideshow #slides .current').removeClass('current');
        	nextIndex = 0;
        	$('#imac-slideshow .index-'+nextIndex).addClass('current');
        	$('#imac-slideshow .index-'+nextIndex).fadeIn(1500);
        }
    }); 
}


function rotatePhoto() {
    $('#photo-slide-buttons #next').click();
} 
function customPhotoSlideshow() {
	var speed = 10000;
    var run = setInterval('rotatePhoto()', speed);

    $('#photo-slideshow #slides .current').mouseenter(function() {
    	clearInterval(run);
    }).mouseleave(function() {
    	run = setInterval('rotate()', speed);
    });

	$('#photo-slideshow #slides li').first().addClass('first');
	$('#photo-slideshow #slides li').first().addClass('current');
	$('#photo-slideshow #slides li').last().addClass('last');

	var i = 0;
	$('#photo-slideshow #slides li').each(function() {
		i++;
	});

	$('#next').click(function() {  
        var currentIndex = parseInt($('#photo-slideshow #slides .current').attr('ref'));
        var last = $('#photo-slideshow #slides .current').hasClass('last');
        var nextIndex;
        $('#photo-slideshow #slides .current').fadeOut();
        if (last == false) {
        	$('#photo-slideshow #slides .current').removeClass('current');
        	nextIndex = currentIndex + 1;
        	$('#photo-slideshow .index-'+nextIndex).addClass('current');
        	$('#photo-slideshow .index-'+nextIndex).fadeIn(1500);
        	
        } else {
        	$('#photo-slideshow #slides .current').removeClass('current');
        	nextIndex = 0;
        	$('#photo-slideshow .index-'+nextIndex).addClass('current');
        	$('#photo-slideshow .index-'+nextIndex).fadeIn(1500);
        }
    }); 
}





