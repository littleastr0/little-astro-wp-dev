1. LIBRARIES
        CORE
        Font Awesome (for icon files) fontawesome.io/cheatsheet
        Bootstrap (HTML/CSS layout)
        Wordpress (obviously)

        ADD-ON
        Google fonts
        jQuery
        Google Analytics

2. TO DO
Chunk out all problems as individual issues as granular as you can
Figure out how to do global/editable footer?
Link to minified versions of bootstrap css and js rather than the hosted. (I'd like to have this all be self contained in one install rather than rely on media servers, or make minified fall back)
		new screenshot for theming (of built template)
		clean up code too


3. ONGOING BUG AND BROKEN SHIT LIST

Moz parallax -- need fix for this


fix contact form 
Style comments
Fix blog excerpt -- full posts not showing, just excerpt which sucks check the_content vs the_excerpt
Fix image on blog excerpt view

parallax not starting in the right place at first
(may have to try and steal styles with fallback for this https://www.udemy.com/bootstrap-to-wordpress/learn/v4/t/lecture/1659862?start=0)
Modal window pop up does not work

Dropdown choices on nav not styled
<?php
wp_nav_menu( array(
'menu' => 'top_menu',
'depth' => 2,
'container' => false,
'menu_class' => 'nav navbar-nav',
'fallback_cb' => 'wp_page_menu',
//Process nav menu using our custom nav walker
'walker' => new wp_bootstrap_navwalker(,))
);
?>
https://www.pattonwebz.com/wordpress-custom/bootstrap-wordpress-responsive-menu/

mobile hamburger menu not working
Styles different on logged_in than not logged in. Check WP codex for solutions?

For footer
https://www.udemy.com/bootstrap-to-wordpress/learn/v4/t/lecture/1656708?start=0
Maybe have a custom sidebar using that other field thing. Also may need to find a way to separate the instagram section thing. Could just have a dark grey BG on footer and keep it simple

Troubleshoot this one at the end.
Style contact form 7 http://www.wpbeginner.com/wp-tutorials/how-to-style-contact-form-7-in-wordpress/


4. FUTURE FUNCTIONALITY:
swap out social media icons (if social media icon, then show class, otherwise nothing)
have specific page type adds on sidebar using plugin
