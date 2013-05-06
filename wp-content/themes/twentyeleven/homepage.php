<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

	<div id="hp-slider-page">
		<div id="hp-slider">
			<?php echo do_shortcode('[portfolio_slideshow id=4]');?>
		</div>
	</div>

	<div id="hp-info-page">
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
				<p style="text-align: left;">    <em><strong>Lucas &amp; Cribb</strong></em> offer affordable website services including design, development, hosting, and more to individuals and companies to meet various needs, whether it be an e-commerce site or an informational site for your business, band, hobby, or passion. We strive for customer satisfaction through communication and a drive for excellence.</p>
				<p style="text-align: left;">Our expert staff will guide you along the way to creating or updating your online presence with a new and stylish website. We want this to be fun and enjoyable for you while you still experience a professional and rewarding journey.</p>
				<p style="text-align: left;">Contact Lucas &amp; Cribb:
				info@lucasandcribb.com
				or (843) 425-1439</p>
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

<?php get_footer(); ?>