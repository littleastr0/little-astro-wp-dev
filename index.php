<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://www.littleastro.net
 *
 * @package Little_Astronaut
 */

get_header(); ?>
<?php
//Register background-images

$page_bg_image_url 										= get_background_image();
?>

<div class="blog-wrapper" style="background-image: url('<?php echo $page_bg_image_url; ?>');"> <!--blog WRAPPER-->
 <div class="container"><!---blog container --->
	 <div class="margin-fix">
			 <div class="row" id="primary">
		 <main id="content" class="col-md-8" role="main">
			 <?php
	 		if ( have_posts() ) :

	 			if ( is_home() && ! is_front_page() ) : ?>
	 				<header>
	 					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
	 				</header>

	 			<?php
	 			endif;

	 			/* Start the Loop */
	 			while ( have_posts() ) : the_post();

	 				/*
	 				 * Include the Post-Format-specific template for the content.
	 				 * If you want to override this in a child theme, then include a file
	 				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
	 				 */
	 				get_template_part( 'template-parts/content', get_post_format() );

	 			endwhile;

	 			the_posts_navigation();

	 		else :

	 			get_template_part( 'template-parts/content', 'none' );

	 		endif; ?>


		</main>

		<!-- SIDEBAR CONTENT -->
		    									<aside class ="col-md-4">
														<div class="sidebar-widget">
														<?php get_sidebar(); ?>
													</div>
													</aside>


			</div>

			</div>
		</div>


	</div>
	<?php get_footer(); ?>
