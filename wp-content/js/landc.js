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
	setContactInputVal();


	//GOOGLE MAPS//
	var latlng = new google.maps.LatLng(32.800891,-79.959234);
	var options = {
    	zoom: 15, // This number can be set to define the initial zoom level of the map
    	center: latlng,
    	mapTypeId: google.maps.MapTypeId.ROADMAP // This value can be set to define the map type ROADMAP/SATELLITE/HYBRID/TERRAIN
    };
    var map = new google.maps.Map(document.getElementById('map_div'), options);
	var image = new google.maps.MarkerImage('/wp-content/images/landc_droppin.png',
     	// This marker is 129 pixels wide by 42 pixels tall.
     	new google.maps.Size(150, 150),
     	// The origin for this image is 0,0.
     	new google.maps.Point(0,0),
     	// The anchor for this image is the base of the flagpole at 18,42.
     	new google.maps.Point(23, 132)
 	);
 	// Add Marker
 	var marker1 = new google.maps.Marker({
     	position: new google.maps.LatLng(32.800891,-79.959234),
     	map: map,
     	icon: image // This path is the custom pin to be shown. Remove this line and the proceeding comma to use default pin
 	});
 	google.maps.event.addListener(marker1, 'click', function() {
   		infowindow1.open(map, marker1);
    });

    var infowindow1 = new google.maps.InfoWindow({
        content:  createInfo('<div id="bublble-title">Lucas & Cribb Digital Developers</div>', '<div id="bubble-addr-1">20 Addlestone Ave</div><div id="bubble-addr-2">Charleston, SC 29403</div><div id="bubble-phone">(843) 425-1439</div>')
    });
	function createInfo(title, content) {
        return '<div class="infowindow"><strong>'+ title +'</strong>'+content+'</div>';
    }
    //END GOOGLE MAPS//



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


function setContactInputVal() {
	var name,
		value;
	$('#contact-form .wpcf7-form input').each(function() {
		name = $(this).attr('name');
		value = $(this).val();
		if (value == '') {
			$(this).attr('default', name);
			$(this).val(name);
		}
	});
	$('#contact-form .wpcf7-form textarea').each(function() {
		name = $(this).attr('name');
		value = $(this).val();
		if (value == '') {
			$(this).attr('default', name);
			$(this).val(name);
		}
	});

	$('#contact-form .wpcf7-form input').focus(function() {
		name = $(this).attr('name');
		value = $(this).val();
		if (value == name) {
			$(this).val('');
		}
	}).blur(function() {
		name = $(this).attr('name');
		value = $(this).val();
		if (value == '') {
			$(this).val(name);
		}
	});
	$('#contact-form .wpcf7-form textarea').focus(function() {
		name = $(this).attr('name');
		value = $(this).val();
		if (value == name) {
			$(this).val('');
		}
	}).blur(function() {
		name = $(this).attr('name');
		value = $(this).val();
		if (value == '') {
			$(this).val(name);
		}
	});

}






