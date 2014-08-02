<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<header role="banner" class="subHeader">
	  <div class="headerContain">
		<div class="headerLeft">
		<h1><?php the_title(); ?></h1>
		</div>
		<div class="headerRight">
			<i class="<?php echo get_post_meta(get_the_id(),'font_awesome_class',true) ?>"></i>
		</div>
	  </div>
	</header>
	
	<section id="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; else: ?>
	<p><?php echo('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
	</section>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
