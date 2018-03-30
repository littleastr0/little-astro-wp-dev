<?php
/*
	Template Name: Basic Page with sidebar
 *
 * @link https://www.littleastro.net 
 *
 * @package Little_Astronaut
 */

get_header(); ?>

<section class="project-page"> <!--MAIN ABOUT WITH PHOTO SECTION -->
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
