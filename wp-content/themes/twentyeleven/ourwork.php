<?php
/*
Template Name: Our Work
*/
?>
<?php get_header(); ?>


	<div id="work-cont">
				
				<div class="entry-content website-slideshow">
					<img id="imac" src="/wp-content/images/ourwork/imac.png" />

					<div id="imac-slideshow">
						<div id="carousel">
							<div id="imac-slide-buttons">
    						    <a href="#" id="prev">prev</a>
    						    <a href="#" id="next">next</a>
    						    <div class="clear"></div>
    						</div>

 							<div id="slides"> 
 								<ul>
									<?php $loop = new WP_Query( array( 'post_type' => 'imac_slides', 'posts_per_page' => 15, 'order' => 'ASC' ) ); ?>
									<?php $i = 0; ?>
									<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
									    <li class="index-<?php echo $i; ?>" ref="<?php echo $i; ?>">
									    	<div class="imac-img"><?php the_post_thumbnail(); ?></div>
									    	<div class="imac-slide-caption">
									       		<div class="imac-title"><?php the_title(); ?></div>
									       		<div class="imac-descr"><?php the_field('description'); ?></div>
									       		<div class="imac-link"><a href="http://<?php the_field('link'); ?>" target="_blank"><?php the_field('link'); ?></a></div>
									       	</div>
									    </li>
									    <?php $i++; ?>
									<?php endwhile; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="entry-content mobile-slideshow">
					<img id="ipad" src="/wp-content/images/ourwork/ipad.png" />
					<img id="iphone" src="/wp-content/images/ourwork/iphone.png" />
					<div id="mobile-slides">
						<?php $loop = new WP_Query( array( 'post_type' => 'ipad_slides', 'posts_per_page' => 1, 'order' => 'ASC' ) ); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						    	<div class="ipad-img"><?php the_post_thumbnail('full'); ?></div>
						    	<div class="mobile-slide-caption">
						       		<div class="mobile-title"><?php the_title(); ?></div>
						       		<div class="mobile-descr"><?php the_field('description'); ?></div>
						       		<div class="mobile-link"><a href="http://<?php the_field('link'); ?>" target="_blank"><?php the_field('link'); ?></a></div>
						       	</div>
						    <?php $i++; ?>
						<?php endwhile; ?>

						<?php $loop = new WP_Query( array( 'post_type' => 'iphone_slides', 'posts_per_page' => 1, 'order' => 'ASC' ) ); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						    	<div class="iphone-img"><?php the_post_thumbnail('full'); ?></div>
						    <?php $i++; ?>
						<?php endwhile; ?>
					</div>
				</div>

				<div class="entry-content photo-slideshow">
					<img id="frame" src="/wp-content/images/ourwork/frame.png" />

					<div id="photo-slideshow">
						<div id="carousel">
							<div id="photo-slide-buttons">
    						    <a href="#" id="prev">prev</a>
    						    <a href="#" id="next">next</a>
    						    <div class="clear"></div>
    						</div>

 							<div id="slides"> 
 								<ul>
									<?php $loop = new WP_Query( array( 'post_type' => 'photo_slides', 'posts_per_page' => 15, 'order' => 'ASC' ) ); ?>
									<?php $i = 0; ?>
									<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
									    <li class="index-<?php echo $i; ?>" ref="<?php echo $i; ?>">
									    	<div class="photo-img"><?php the_post_thumbnail(); ?></div>
									    	<div class="photo-slide-caption">
									       		<div class="photo-title"><?php the_title(); ?></div>
									       		<div class="photo-descr"><?php the_field('description'); ?></div>
									       		<div class="photo-link photo-img-title"><?php the_field('title_of_photograph'); ?></div>
									       	</div>
									    </li>
									    <?php $i++; ?>
									<?php endwhile; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>

	</div>


<?php get_footer(); ?>