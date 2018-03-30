<?php
//Background image

$page_bg_image_url 										= get_background_image();
//Advanced Custom Fields
$homepage_about_me_headline						= get_field('homepage_about_me_headline');
$homepage_about_me_copy								= get_field('homepage_about_me_copy');
$homepage_about_me_profile_img				= get_field('homepage_about_me_profile_img');
$instagram_gallery_headline						= get_field('instagram_gallery_headline');
?>

<section class="about-me"> <!--MAIN ABOUT WITH PHOTO SECTION -->
<div class="container clearfix">
	<div class="row">

		<div class="col-md-7"> <!---About me / bio description -->
			<div id="about-me-copy">
				<h1><?php echo $homepage_about_me_headline; ?></h1>
				<p><?php echo $homepage_about_me_copy; ?></p>
			</div>
		</div>
		<div class="bottom-fix-profile">
				<div class="col-md-5"><!---profile picture img-->
			<img class="profile-img" src="<?php echo $homepage_about_me_profile_img['url'];?>" alt="<?php echo $homepage_about_me_profile_img['alt'];?>">
		</div>
	</div>
	</div>
</div>
</section><!--MAIN ABOUT WITH PHOTO SECTION -->
