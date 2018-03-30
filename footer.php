<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://www.littleastro.net
 *
 * @package Little_Astronaut
 */

?>


<?php wp_footer(); ?>


<footer class="global-footer" style="margin-bottom: -50px;"> <!--FOOTER DIV -->
	 <div class ="container clearfix">
			<div class="row">
		<div class="col-md-8">
			<div class="global-address">

				<div id="secondary" class="widget-area" role="address">
				<?php dynamic_sidebar( 'footer-1' ); ?>
				</div><!-- #secondary -->
			</div>
		</div>
		<div class="col-md-4">
			<ul class ="social-icons">
				<li><a href="http://www.facebook.com/<?php echo get_option('facebook-username');?>" target="_blank"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/facebook.jpg"</a></li>
				<li><a href="http://www.twitter.com/<?php echo get_option('twitter-username');?>" target="_blank"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/img/twitter.jpg"</a></li>
				<li><a href="http://www.instagram.com/<?php echo get_option('instagram-username');?>" target="_blank"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/img/instagram.jpg"</a></li>
				<li><a href="https://www.linkedin.com/in/<?php echo get_option('linkedin-username');?>" target="_blank"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/img/linkedin.jpg"</a></li>
			</ul>
			<br/>
						</a>
						<div class="copyright-info">
								<p>Copyright &copy; <?php echo date('Y'); ?> <?php the_author_link(); ?></p>
						</div>
						</div>
	 </div>
	</div>
</footer> <!--FOOTER DIV -->
