<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://www.littleastro.net
 *
 * @package Little_Astronaut
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!--EXTERNAL LINKS TO FONTS/BOOTSTRAP CSS/JQUERY, ETC.-->
	<!--- Google Fonts -->
	<!--Valera for nav/headers -->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<!--Barlow for copy -->
	<link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">
	<!--JS/CUSTOMJS/JQUERY-->
	<script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script async src="https://use.fontawesome.com/b8bd89a558.js"></script>

	<!-- Bootstrap core CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/assets/css/bootstrap.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/assets/css/bootstrap-theme.min.css' ?>">



	<!-- Latest compiled and minified JavaScript -->
	<script async src="<?php echo get_stylesheet_directory_uri(). '/assets/js/bootstrap.bundle.min.js' ?>"></script>
<script async src="<?php bloginfo ('stylesheet_directory'); ?>/assets/js/main.min.js"></script> <!-- SCRIPT TO MAKE PARALLAX IMG WORK  -->

	<!--- Bootstrap core CSS-->

	<!--END EXTERNAL LINKS SECTION -->

	<?php wp_head(); ?>
	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
<!--
               ,'``.._   ,'``.
              :,--._:)\,:,._,.:       All Glory to
              :`--,''   :`...';\      the HYPNO TOAD!
               `,'       `---'  `.
               /                 :
              /                   \
            ,'                     :\.___,-.
           `...,---'``````-..._    |:       \
             (                 )   ;:    )   \  _,-.
              `.              (   //          `'    \
               :               `.//  )      )     , ;
             ,-|`.            _,'/       )    ) ,' ,'
            (  :`.`-..____..=:.-':     .     _,' ,'
             `,'\ ``--....-)='    `._,  \  ,') _ '``._
          _.-/ _ `.       (_)      /     )' ; / \ \`-.'
         `--(   `-:`.     `' ___..'  _,-'   |/   `.)
             `-. `.`.``-----``--,  .'
               |/`.\`'        ,','); SSt
                   `         (/  (/
-->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'littleastro' ); ?></a>

	<header class="site-header" role="banner"><!-- HEADER AND NAVIGATION DIV -->
        <div class="example3">
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        	<div style="height: 20px;"><a class="navbar-brand" href="/wp/"><?php if ( function_exists( 'the_custom_logo' ) ) {
													    the_custom_logo();
													} ?></a></div>
                    </div>
                <div id="navbar3" class="navbar-collapse collapse">
									<?php
											wp_nav_menu( array(

													'theme_location' 		=> 'primary',
													'container' 		 		=> 'nav navbar-nav navbar-right',
													'container_class' 	=> 'navbar-collapse collapse',
													'menu_class'				=> 'nav navbar-nav navbar-right',
													'depth' 						=> 2,
													'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
													'walker'            => new wp_bootstrap_navwalker())
												);
									 ?>
               </div>
               <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
        </div>
    </header> <!-- HEADER AND NAVIGATION DIV -->
