<?php
/*
	Template Name: Basic Page
 *
 * @link https://www.littleastro.net 
 *
 * @package Little_Astronaut
 */

get_header(); ?>

<script src="<?php bloginfo ('stylesheet_directory'); ?>/assets/js/main.js"></script> <!-- SCRIPT TO MAKE PARALLAX IMG WORK  -->

<section class="project-page"> <!--MAIN ABOUT WITH PHOTO SECTION -->
	<div class="container clearfix">
	 <div class="row">
		<div class="col-md-12"> <!--- project description -->
	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

	endwhile; // End of the loop.
	?>
</div>
</div>
</div>

<?php get_footer(); ?>
