<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>


	<footer id="colophon" role="contentinfo">

		<div id="footer-cont">
			<div class="footer-links">
				<a href="/">About</a>
				<a href="/our-services/">Services</a>
			</div>
			<div class="footer-links">
				<a href="/our-work/">Our Work</a>
				<a href="/contact/">Contact</a>
			</div>

			<div id="featured-site">
				<a href="/our-work"><img class="featured-img" src="/wp-content/images/footer/featured-img.jpg" /></a>
				<div class="featured-info">
					<span>Featured Site</span>
					<a href="/our-work">jesscribb.com</a>
				</div>
			</div>

			<div id="footer-contact-info">
				<span>Lucas &amp Cribb Digital Developers, LLC</span></br>
				<span id="footer-addr">
					<!-- 20 Addlestone Ave</br> -->
					Charleston, SC</br>
				</span>	
				(843) 425-1439</br>
				<a href="mailto:info@lucasandcribb.com">info@lucasandcribb.com</a>
			</div>

			<div id="footer-social-links">
				<span>Tell Your Friends</span>
				<div class="footer-links social-media">
					<a class="facebook" href="#">
						<img class="f-white" src="/wp-content/images/footer/black-f.png" />
						<img class="f-grey" src="/wp-content/images/footer/red-f.png" />
					</a>
				</div>
				<div class="footer-links social-media">
					<a class="twitter" href="#">
						<img class="t-white" src="/wp-content/images/footer/black-twitter.png" />
						<img class="t-grey" src="/wp-content/images/footer/red-twitter.png" />
					</a>
				</div>
			</div>



			<a class="copyright" href="mailto:sales@landcdigital.com">&#169; Copyright 2012, Lucas &#38; Cribb Digital Developers, LLC</a>
		</div>

<!-- 			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
			</div> -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>