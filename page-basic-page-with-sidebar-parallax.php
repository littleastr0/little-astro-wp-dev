<?php
/*
	Template Name: Basic Page with sidebar and parallax
 *
 * @link https://www.littleastro.net 
 *
 * @package Little_Astronaut
 */

get_header(); ?>

<script src="<?php bloginfo ('stylesheet_directory'); ?>/assets/js/main.js"></script> <!-- SCRIPT TO MAKE PARALLAX IMG WORK  -->
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>

<section class="parallax-img" style ="background-image: url(<?php echo $url ?>)" data-type="background" data-speed="4"> <!---parallax img (WORKS WITH main.js)-->
</section>
<section class="project-page-plx"> <!--MAIN ABOUT WITH PHOTO SECTION -->
	<div class="container clearfix">
	 <div class="row">
		<div class="col-md-7"> <!--- project description -->
	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

	endwhile; // End of the loop.
	?>
</div>
<div class="col-md-5">
<?php get_sidebar(); ?>
</div>
</div>
</div>

<?php get_footer(); ?>
