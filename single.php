<?php
/**
 * The template for displaying all single posts
 *
 * @link https://www.littleastro.net #single-post
 *
 * @package Little_Astronaut
 */

get_header(); ?>
<?php
//Register background-images

$page_bg_image_url 										= get_background_image();
?>
<div class="comments-blog">
<div class="blog-wrapper" style="background-image: url('<?php echo $page_bg_image_url; ?>');"> <!--blog WRAPPER-->
 <div class="container"><!---blog container --->
	 <div class="margin-fix">
			 <div class="row" id="primary">
		 	 		<main id="content" class="col-md-8" role="main">
						<div class="comments-blog">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-single', get_post_type() );

			the_post_navigation();
?>
<div class="comments-fix">

	<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</div>
	</div>
			</main><!-- #main -->
			<aside class ="col-md-4">
												<div class="sidebar-widget">
												<?php get_sidebar(); ?>
											</div>
			</aside>
		</div>

	</div>
</div>
</div>
</div>


<?php get_footer(); ?>
