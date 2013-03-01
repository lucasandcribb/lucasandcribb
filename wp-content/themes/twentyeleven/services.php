<?php
/*
Template Name: Services
*/
?>
<?php get_header(); ?>

		<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<!-- <//?php comments_template( '', true ); ?> -->

				<?php endwhile; // end of the loop. ?>
				   

			<div id="services-cont">
				<?php $loop = new WP_Query( array( 'post_type' => 'services', 'posts_per_page' => 15, 'order' => 'ASC' ) ); ?>

				<?php while ( $loop->have_posts() ) : $loop->the_post(); 
						$url = get_permalink();
				?>

				    	<div class="entry-content">
				    		<div class="service-img"><?php the_post_thumbnail('full') ?></div>
				        	<div class="service-title"><?php the_title(); ?></div>
				        	<div class="service-content"><?php the_content(); ?></div>
				    	</div>

				<?php endwhile; ?>
			</div>

		</div><!-- #content -->


<?php get_footer(); ?>