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

			</div>


<?php get_footer(); ?>