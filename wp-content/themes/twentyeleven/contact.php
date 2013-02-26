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

		</div><!-- #content -->

		<div id="map-cont">
			<iframe width="450" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=charleston+sc&amp;sll=33.624497,-80.926614&amp;sspn=6.867654,9.63501&amp;ie=UTF8&amp;hq=&amp;hnear=Charleston,+South+Carolina&amp;ll=32.776566,-79.930922&amp;spn=0.054191,0.075274&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=charleston+sc&amp;sll=33.624497,-80.926614&amp;sspn=6.867654,9.63501&amp;ie=UTF8&amp;hq=&amp;hnear=Charleston,+South+Carolina&amp;ll=32.776566,-79.930922&amp;spn=0.054191,0.075274&amp;t=m&amp;z=14" style="color:#ffffff;text-align:left">View Larger Map</a></small>
		</div>


<?php get_footer(); ?>