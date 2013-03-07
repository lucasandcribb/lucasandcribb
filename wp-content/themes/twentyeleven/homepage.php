<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

		<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->

		<div id="hp-slider">
			<?php echo do_shortcode('[portfolio_slideshow id=4]');?>
		</div>


<?php get_footer(); ?>