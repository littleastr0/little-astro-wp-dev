<?php
$page_bg_image_url 										= get_background_image();
$instagram_gallery_headline						= get_field('instagram_gallery_headline');
 ?>
<section class ="insta-feed" style="background-image: url('<?php echo $page_bg_image_url; ?>');"> <!--INSTAGRAM FEED AND FOOTER-->
<div class ="container clearfix">
	<div class ="row">
					<div class ="col-md-12">
					<h1><?php echo $instagram_gallery_headline; ?></h1>
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

					endwhile; // End of the loop.
					?> <!--instagram feed embeded here using shortcode [instagram-feed] -->
		</div>
			</div>
</div>
</section> <!--INSTAGRAM FEED AND FOOTER-->
