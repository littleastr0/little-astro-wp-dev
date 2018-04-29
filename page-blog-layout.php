<?php
/*
	Template Name: Blog Layout
 *
 * @link https://www.littleastro.net
 *
 * @package Little_Astronaut
 */

get_header(); ?>

<script src="<?php bloginfo ('stylesheet_directory'); ?>/assets/js/main.js"></script> <!-- SCRIPT TO MAKE PARALLAX IMG WORK  -->
<?php
//Register background-images

$page_bg_image_url 										= get_background_image();
?>

<div class="blog-wrapper" style="background-image: url('<?php echo $page_bg_image_url; ?>');"> <!--blog WRAPPER-->
 <div class="container"><!---blog container --->
	 <div class="margin-fix">
			 <div class="row" id="primary">
		 	 		<main id="content-blog" class="col-md-12" role="main">
			<div class ="blog-page">
	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

	endwhile; // End of the loop.
	?>
</div>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>
