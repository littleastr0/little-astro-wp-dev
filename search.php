<?php
/**
 * The template for displaying search results pages
 *
 * @link https://www.littleastro.net #search-result
 *
 * @package Little_Astronaut
 */

get_header(); ?>

<section class="project-page"> <!--MAIN ABOUT WITH PHOTO SECTION -->
	<div class="container clearfix">
	 <div class="row">
		<div class="col-md-7"> <!--- project description -->

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'littleastro' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
<h2>Archives</h2>
<ul>
<?php wp_get_archives( $args ); ?>
</ul>
<h2>Recent Posts</h2>
<ul>
<?php
	$recent_posts = wp_get_recent_posts();
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
	}
	wp_reset_query();
?>
</ul>
	</div><!-- .page-content -->





</div><!-- row -->
</section><!-- .search -->

<?php get_footer(); ?>
