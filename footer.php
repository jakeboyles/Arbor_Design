<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>


	<footer id="footer">
	<section class="left">
		<h2><i class="icon-sitemap"></i> Sitemap</h2>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">References</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
	</section>

	<section class="middle">
		<h2><i class="icon-heart"></i>  Contact Information</h2>
		<ul>
			<li><i class="icon-phone"></i><span>(513) 851-3399</span></li>
			<li><i class="icon-inbox"></i><span>ContactUs@Arbor-Design.com</span></li>
			<li><i class="icon-building"></i><span>11820 Hamilton Ave<br>
				Cincinnati, OH 45056</span>
			</li>		
			<li><i class="icon-facebook-sign"></i><span>Facebook.com/ArborDesign</span></li>
		</ul>
	</section>

	<section clas="right">
		<h2><i class="icon-envelope-alt"></i>  Contact Us</h2>
	</section>

	<section class="citiesService">
		<H2><i class="icon-home"></i> Locations We Service</H2>
		<?php
		$parent = 61;
$args=array(
  'child_of' => $parent
);
$pages = get_pages($args); ?>

<?php foreach($pages as $page) { ?>
<a href="<?php echo $page->guid ?>"><?php echo $page->post_title; ?>,</a>
<?php 
}
?>


	</section>

	<div class="bottomFooter">
		<p>All images and content are copyright of Arbor Design</p>
		<a href="http://www.jibdesigns.com">Site by: JibDesigns</a>
	</div>

	</footer>
	
	
	
	
	<!-- Grab Google CDN's jQuery, without a fallback (if Google fails, the world will implode) -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<!-- scripts complied and minified for speed -->
	<script src="<?php bloginfo('template_url'); ?>/js/libs/waypoints/waypoints.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery.bxslider/jquery.bxslider.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>

	
	<!-- below prompts IE6 users to install Google Chrome Frame -->
	<!--[if lt IE 7 ]>
    	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
