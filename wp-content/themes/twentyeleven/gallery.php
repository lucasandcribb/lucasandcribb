<?php
/*
Template Name: Gallery
*/
?>
<?php get_header(); ?>

		<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<!-- <//?php comments_template( '', true ); ?> -->

				<?php endwhile; // end of the loop. ?>

			<div id="website-gallery" class="gallery-cont">
				<div class="gallery-col-title">Website Gallery</div>
				<?php query_posts(array('post_type' => 'gallery', 'order' => 'ASC', 'posts_per_page' => 100, 'cat' => 4 )); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="gallery-entry">
						<div class="gallery-img">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="gallery-img-title">
							<?php the_title(); ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>

			<div id="photo-gallery" class="gallery-cont">
				<div class="gallery-col-title">Photo Gallery</div>
				<?php query_posts(array('post_type' => 'gallery', 'order' => 'ASC', 'posts_per_page' => 100, 'cat' => 5 )); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="gallery-entry">
						<div class="gallery-img">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="gallery-img-title">
							<?php the_title(); ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>

		</div><!-- #content -->


<?php get_footer(); ?>