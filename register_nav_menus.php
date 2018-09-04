<?php

// First register a menu in functions.php
// Like this- 

// Menu register
	register_nav_menus(array(
		'primary' => __('Primary Menu', 'ieatwp'),
		'secondary' => __('Secondary Menu', 'ieatwp')
	));



/*  
/*  Then call the registered menu where you need
/*  Like in header.php instead of <ul> </ul>
*/
	wp_nav_menu(array(
        'theme_location'  => 'primary',
        'menu_class'      => 'navbar navbar-right',
	    'menu'            => ,
	    'container'       => 'div', // if blank then <ul> will the container
	    'container_class' => 'menu-{menu slug}-container',
	    'container_id'    => ,
	    'menu_class'      => 'menu',
	    'menu_id'         => ,
	    'before'          => ,
	    'after'           => ,
	    'link_before'     => ,
	    'link_after'      => ,
	    'items_wrap'      => '<ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>',
	    'depth'           => 0,
        'fallback_cb'     => 'ieatwp_default_menu'
    ));


/*  
/*  We can put a default menu like below
/*  default callback are wp pages and no need any fallback_cb
/*  We can use nav Walker too  
*/ 
function ieatwp_default_menu(){ ?>
		<ul class="navbar navbar-right">
            <li><a href="#section_intro" class="easing">Home</a></li>
            <li><a href="#section_about" class="easing">About</a></li>
            <li><a href="#section_work" class="easing">Strategy</a></li>
            <li><a href="#section_resume" class="easing">Resume</a></li>
            <li><a href="#section_portfolio" class="easing">Portfolio</a></li>
            <li><a href="#section_services" class="easing">Services</a></li>
            <li><a href="#section_contact" class="easing">Contact</a></li>
        </ul>
<?php }



// Add class to anchor link navigation > ul > li > a
// https://stackoverflow.com/questions/42994156/wordpress-menu-add-class-to-anchors

add_filter( 'nav_menu_link_attributes', function($atts) {
        $atts['class'] = "nav-link";
        return $atts;
}, 100, 1 );

