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


		<div id="map_div"></div>


<?php get_footer(); ?>