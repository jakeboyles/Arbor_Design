<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<header role="banner" class="header">
	  <div class="headerContain">
		<div class="headerLeft">
		<h2>The Best Thing for The Tree <br>
		<span>Since The Leaf</span></h2>
		<p>Our team of tree care professionals are proud to offer the level of service that is unique to all of the Cincinnati Tree Service's - our depth of experience and commitment to a job well done are unmatched.</p>
		<a href="#" class="btn"><i class="icon-fixed-width icon-book"></i> Learn More</a>
		<a href="#" class="btn"><i class="icon-fixed-width icon-phone"></i> Contact Us</a>
		</div>
		<div class="headerRight">
		</div>
	  </div>
	</header>
	
	<section id="content">
	<h1>Cincinnati Tree Service</h1>
	<p>Cincinnati Homeowners, businesses and contractors alike rely on our extensive experience to handle their unique tree problems and appreciate the way we get the job done right, the first time. We are known through out Cincinnati for our quick, safe, clean and affordable tree care.</p>

<p>From Cincinnati storm cleanup, to lot beautification and all jobs in between, Arbor Design: Cincinnati Tree Service, has the skills, experience and equipment to manage even the most difficult tree projects. You can browse our site to learn more about what makes us the sensible choice for all of your tree problems, and then we invite you to <a href="contact-us">contact us</a> for a free estimate.</p>

	</section>
	
	<section id="banners">
	<div id="bannerLeft">
	<h2>Cincinnati Emerald Ash Borer Treatments</h2>
	<img src="<?php bloginfo('template_url'); ?>/images/eabDamage.jpg" alt="eabDamage">
	<p>Emerald Ash Borer continues to attack the tri-state area, costing Cincinnati homeowners and businesses millions of dollars. Click below to learn more about how you can fight Emerald Ash Borer in Cincinnati, and save your ash!</p>	
	<a href="#" class="btn"><i class="icon-fixed-width icon-book"></i> Learn More</a>
	</div>
	
	</section>
	
	<section id="angies">
	<div class="alLogo"><h3>Customer Reviews</h3></div>
	
	<ul id="quotes">
	<?php 
	query_posts( 'post_type=references' );
	if (have_posts()) : while (have_posts()) : the_post(); 
	?>
                
	<?php 
	$quote = get_post_meta(get_the_id(),'quote',true);
	$personsName = get_post_meta(get_the_id(),'refname',true);
	?>

    <li>
    <?php echo $quote; ?>
	<span><?php echo $personsName; ?></span>
	</li>
            
          <?php endwhile ?>
        <?php endif ?>
	
	</ul>
	
	</section>
	
	<section id="video">
	<h2>Our Video</h2>
	<div class="video-container">
		<iframe width="560" height="315" src="http://www.youtube.com/embed/HwaMoAUSBSM" frameborder="0" allowfullscreen></iframe>
	</div> 
	</section>



<?php get_footer(); ?>
