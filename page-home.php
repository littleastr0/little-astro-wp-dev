<?php
/*
	Template Name: Home Page
 *
 * @link https://www.littleastro.net
 *
 * @package Little_Astronaut
 */

 ?>

<?php get_header(); ?>

<?php
//Background image


$page_bg_image_url 										= get_background_image();
//Advanced Custom Fields
$homepage_about_me_headline						= get_field('homepage_about_me_headline');
$homepage_about_me_copy								= get_field('homepage_about_me_copy');
$homepage_about_me_profile_img				= get_field('homepage_about_me_profile_img');
$instagram_gallery_headline						= get_field('instagram_gallery_headline');
?>
<script src="<?php bloginfo ('stylesheet_directory'); ?>/assets/js/main.js"></script> <!-- SCRIPT TO MAKE PARALLAX IMG WORK  -->
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
<section class="parallax-img" style ="background-image: url(<?php echo $url ?>)" data-type="background" data-speed="4"> <!---parallax img (WORKS WITH main.js)-->
</section>

<?php get_template_part( 'template-parts/content', 'aboutme' );?>

<?php get_template_part( 'template-parts/content', 'instagram' );?>

<?php get_footer(); ?>
