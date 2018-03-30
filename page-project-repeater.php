<?php
/*
	Template Name: Project Page Repeater
 *
 * @link https://www.littleastro.net
 *
 * @package Little_Astronaut
 */
?>

<?php get_header(); ?>
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

<?php if( have_rows('project_listing_bg_rpt') ): ?>
<?php while ( have_rows('project_listing_bg_rpt') ) : the_row();
// ADVANCED CUSTOM FIELDS vars
$project_bg_title = get_sub_field('project_bg_title');
$project_bg_description = get_sub_field('project_bg_description');
$project_bg_image = get_sub_field('project_bg_image');

?>

<div class = "project-left-bg">
	<div class="container clearfix">
	<div class="row">
			<div class="col-md-5"><!---project img-->
			<img class="project-img" src="<?php echo $project_bg_image['url'];?>">
		</div>
		<div class="col-md-7"> <!--- project description -->
			<h2><?php echo $project_bg_title; ?></h2>
			<p><?php echo $project_bg_description; ?></p>
			</div>
	</div>
	</div>
</div>
<?php endwhile; ?>
<?php else : endif; ?>


</section><!--Project SECTION -->


<?php get_footer(); ?>
