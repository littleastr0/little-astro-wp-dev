<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://www.littleastro.net 
 *
 * @package Little_Astronaut
 */

?>

<div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="single-post">
	<header class="entry-header">

		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>

		<div class="post-details">
			<i class="fa fa-user"></i> <?php the_author(); ?>
			<i class="fa fa-clock-o"></i> <time><?php the_date();?></time>
			<i class="fa fa-folder"></i> <?php the_category (', '); ?>
			<i class="fa fa-tags"></i> <?php the_tags ();?>

		</div><!---post details -->

		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<article class="post">
		<div class ="post-image">
			<?php if ( has_post_thumbnail()   ) { //check for feature image ?>
				<div class ="post-image">
				<?php the_post_thumbnail(); ?>
		</div> <!--post image -->
			<?php } ?>
			<?php the_content(); ?>
	 </article>

</div>
</article><!-- #post-<?php the_ID(); ?> -->
</div>
