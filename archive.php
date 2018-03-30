<?php
/**
 * The template for displaying archive pages
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
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
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

		</main><!-- #main -->
		<aside class ="col-md-4">
											<div class="sidebar-widget">
											<?php get_sidebar (); ?>
										</div>
		</aside>
	</div><!-- row -->
</div>
</div>
</div>

<?php get_footer(); ?>
