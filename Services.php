<?php
/*
Template Name: Services Page
*/
?>
<?php get_header(); ?>
		<header role="banner" class="subHeader">
	  <div class="headerContain">
		<div class="headerLeft">
		<h1><?php the_title(); ?></h1>
		</div>
		<div class="headerRight">
			<i class="<?php get_post_meta(get_the_id(),'font_awesome_class',true); ?>"></i>
		</div>
	  </div>
	</header>
	
	<section id="fullContent">
		<div class="serviceBox">
			<h2>Tree Care &amp; Health Services</h2>
			<img src="<?php bloginfo('template_url'); ?>/images/treeCare.png">
			<P>We offer a wide range of tree care services, including: Pruning, Limb Removal, Storm damage restoration and lots more!</P>
			<a class="learnMore" href="#"><i class="icon-fixed-width icon-book"></i>  Learn More</a>
		</div>

		<div class="serviceBox">
			<h2>Tree Fertilizations</h2>
			<img src="<?php bloginfo('template_url'); ?>/images/treeFertilization.png">
			<P>Tree Fertilizations can help save your tree and save you the cost of having it removed. We can also provide Emerald Ash Borer treatments and treatments for many other dieseses.</P>
			<a class="learnMore" href="#"><i class="icon-fixed-width icon-book"></i>  Learn More</a>
		</div>

		<div class="serviceBox">
			<h2>Tree Protection Programs</h2>
			<img src="<?php bloginfo('template_url'); ?>/images/treeProtection.png">
			<P>Cabling, Bracing and Lightning Protection can be done to protect valuable trees and protect against future home or property damage.</P>
			<a class="learnMore" href="#"><i class="icon-fixed-width icon-book"></i>  Learn More</a>
		</div>

		<div class="serviceBox">
			<h2>Storm Damage &amp; Tree Removal</h2>
			<img src="<?php bloginfo('template_url'); ?>/images/treeRemoval.png">
			<P>We can provide crane services, emergency removals, stump and ground repair and we will take on large and difficult projects that others can or will not.</P>
			<a class="learnMore" href="#"><i class="icon-fixed-width icon-book"></i>  Learn More</a>
		</div>

		<div class="serviceBox">
			<h2>Commercial Clients</h2>
			<img src="<?php bloginfo('template_url'); ?>/images/treeCommercial.png">
			<P>We have a large list of highly visible clients around the tri-state. From Fortune 500 companies, to municipalities, to small shops we can do it all.</P>
			<a class="learnMore" href="#"><i class="icon-fixed-width icon-book"></i>  Learn More</a>
		</div>

		<div class="serviceBox">
			<h2>Snow Removal</h2>
			<img src="<?php bloginfo('template_url'); ?>/images/snowRemoval.png">
			<P>We provide snow removal and snow protection for companies of all sizes. We monitor the weather scenarios and protect your company before, during and after the event.</P>
			<a class="learnMore" href="#"><i class="icon-fixed-width icon-book"></i>  Learn More</a>
		</div>

		<div class="serviceBox">
			<h2>Consulting Services</h2>
			<img src="<?php bloginfo('template_url'); ?>/images/consulting.png">
			<P>Weather it be insect or diesease control, construction planning, loss evaluations, risk managment or anything in between, we can help you solve your problem: fast, cheap and easy.</P>
			<a class="learnMore" href="#"><i class="icon-fixed-width icon-book"></i>  Learn More</a>
		</div>		
	</section>

<?php get_footer(); ?>
