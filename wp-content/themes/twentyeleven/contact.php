<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

		<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<!-- <//?php comments_template( '', true ); ?> -->

				<?php endwhile; // end of the loop. ?>

			<div id="contact-form">
				<div id="contact-form-title">Contact Lucas &amp Cribb</div>
				<?php echo do_shortcode('[contact-form-7 id="136" title="Contact Page Form"]'); ?>
			</div>

		</div>

		<script src="//maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
		<div id="map_div"></div>
		<script>
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
		</script>
		


<?php get_footer(); ?>