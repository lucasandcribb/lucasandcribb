<?php
/*
Template Name: Parallax Homepage
*/
?>
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;
	
		wp_title( '|', true, 'right' );
	
		// Add the blog name.
		bloginfo( 'name' );
	
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
	
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
	
		?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
	
		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
	?>
	
	<script>
	  var $ = jQuery.noConflict();    
	</script>
	
	<link rel="stylesheet" type="text/css" media="all" href="/wp-content/css/landc.css" />
	<link rel="stylesheet" type="text/css" media="all" href="/wp-content/css/iphone.css" />
	<link rel="stylesheet" type="text/css" media="all" href="/wp-content/css/parallax.css" />
	<script src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/js/landc.js"></script>
	<script src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/js/hp-parallax.js"></script>
</head>

<body id="parallax-hp" <?php body_class(); ?>>
	<div id="scrollnumber"></div>

	<img id="black-bg-img" class="bg-img" src="/wp-content/images/backgrounds/black-linen.jpg" />
	<img id="white-bg-img" class="bg-img" src="/wp-content/images/backgrounds/white-linen.jpg" />

	
		<div id="scroll-info">
			<img class="left-arrow" src="/wp-content/images/header/arrow.png" />
			<div>Scroll Down to View More</div>
			<img class="right-arrow" src="/wp-content/images/header/arrow.png" />
		</div>
	
		<div id="hp-header">
			<img class="small-logo" src="/wp-content/images/header/logo-black.png" />
			<div class="header-title">Lucas &amp Cribb Digital Developers</div>
			<div class="header-nav">
				<a href="/contact"><img class="left-arrow focus-arrow" src="/wp-content/images/header/rightarrow.png" />Contact<img class="right-arrow focus-arrow" src="/wp-content/images/header/leftarrow.png" /></a>
				<a href="/our-work"><img class="left-arrow focus-arrow" src="/wp-content/images/header/rightarrow.png" />Our Work<img class="right-arrow focus-arrow" src="/wp-content/images/header/leftarrow.png" /></a>
				<a href="/services"><img class="left-arrow focus-arrow" src="/wp-content/images/header/rightarrow.png" />Services<img class="right-arrow focus-arrow" src="/wp-content/images/header/leftarrow.png" /></a>
				<a href="/about"><img class="left-arrow focus-arrow" src="/wp-content/images/header/rightarrow.png" />About<img class="right-arrow focus-arrow" src="/wp-content/images/header/leftarrow.png" /></a>
			</div>
		</div>
		<div id="logo">
			<a href="/">
				<img id="logo-img" src="/wp-content/images/header/logo-black.png" />
			</a>
		</div>
	
	<div id="scroll-container">
		<div id="hp-slider-page">
			<div id="hp-slider">
				<?php echo do_shortcode('[portfolio_slideshow id=4]');?>
			</div>
		</div>
	
		<div id="hp-info-page">
			<img id="info-bg-img" src="/wp-content/images/backgrounds/white-linen.jpg" />
			<div id="news-feed">
				<?php echo do_shortcode('[widgets_on_pages id="News Feed"]'); ?>
			</div>
			<div id="services-info" class="info-page-section">
				<div class="hp-info-title">Services</div>
				<div class="service-section-body">
					<img id="service-img-design" class="service-info-img" src="/wp-content/images/parallax/info/services-design.png" />
					<img id="service-img-dev" class="service-info-img" src="/wp-content/images/parallax/info/services-dev.png" />
					<img id="service-img-mob" class="service-info-img" src="/wp-content/images/parallax/info/services-mobile.png" />
					<img id="service-img-mgmt" class="service-info-img" src="/wp-content/images/parallax/info/services-mgmt.png" />
					<img id="service-img-host" class="service-info-img" src="/wp-content/images/parallax/info/services-host.png" />
					<img id="service-img-photo" class="service-info-img" src="/wp-content/images/parallax/info/services-photo.png" />
				<!-- <img class="service-info-img" src="/wp-content/images/parallax/info/services-img.png" /> -->
				</div>
			</div>
			<div id="who-info" class="info-page-section">
				<div class="hp-info-title">Who We Are</div>
				<div class="who-section-body">
					Lucas & Cribb  offer affordable website development and photography to individuals and companies to meet various needs, whether it be an 
					e-commerce site or an informational site for your buiness, band, hobby, or passsion. We strive for customer satisfaction through communcation 
					and a drive for excellence.
				</div>
			</div>
			<div id="platform-info" class="info-page-section">
				<div class="hp-info-title">Platform Experience</div>
				<div class="platform-section-body">
					<img id="plat-wp" class="platform-info-img" src="/wp-content/images/parallax/info/wp.png" />
					<img id="plat-mag" class="platform-info-img" src="/wp-content/images/parallax/info/magento.png" />
					<img id="plat-drup" class="platform-info-img" src="/wp-content/images/parallax/info/drupal.png" />
					<img id="plat-elgg" class="platform-info-img" src="/wp-content/images/parallax/info/elgg.png" />
				</div>
			</div>
		</div>
	
		<div id="hp-process-page">
			<img id="process-bg-img" src="/wp-content/images/backgrounds/black-linen.jpg" />
			<div id="process-title">What you can expect about the process of building a new website.</div>
			<div id="process-body">
				
				<div class="process-step">
					<img class="check" src="/wp-content/images/parallax/info/check.png" />
					<span>1. Concept, Design, &amp Calendar</span></br>
					Consultation with the Project Manager and Designer to gather all infoarmation about the vision of your new site. From this concept 
					the complete design of the site will commense. A schedule is determined for ongoing communication with updates and site progress.
				</div>
				<div class="process-step">
					<img class="check" src="/wp-content/images/parallax/info/check.png" />
					<span>2. Design Approval</span></br>
					Once the design has been completed, you will have an opportunity to review and decide on any revisions to the look and 
					functionality of the site.
				</div>
				<div class="process-step">
					<img class="check" src="/wp-content/images/parallax/info/check.png" />
					<span>3. Asset Checklist &amp Delivery</span></br>
					Meet with the Project Manager and discuss fully all information such as text, images, products, etc that would be needed by 
					you and set delivery dates for these assets to be sent. This will help both parties in tracking progres and staying on schedule.
				</div>
				<div class="process-step">
					<img class="check" src="/wp-content/images/parallax/info/check.png" />
					<span>4. Development</span></br>
					During the development phase of your website, the developer will begin building your site from the approved designes. A beta 
					site will be set up so you can track the progress. Continued communication will be key during this time for all information, 		assets, and other materials needed for development to reach the developer in a timely manner.
				</div>
				<div class="process-step">
					<img class="check" src="/wp-content/images/parallax/info/check.png" />
					<span>5. Quality Assurance</span></br>
					Once the build of the site has reached a point to which sections can be tested, the Q/A process will begin. This will include
					both internal staff and yourself looking over both the aesthetics of the site and functionality.
				</div>
				<div class="process-step">
					<img class="check" src="/wp-content/images/parallax/info/check.png" />
					<span>6. Final Updates, Training, &amp Launch</span></br>
					Once the Q/A begins, any updates will be sent back to our develoment department and corrections wil then be made. After all
					updates have been completed, we will train your staff on any areas needed for managing the content of your new site. Finally,
					your new website will be launched!
				</div>
			</div>
		</div>
	</div>

	<?php get_footer(); ?>

</body>