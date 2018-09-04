<?php
/*
/*
/*  5 parameters
/////////////////////
/*  1. handler = style/script name
/*  2. Source link 
/*  3. Dependency = if any dependent link like style.css or jQuery as array
/*  4. Version = Version of the file/ 'null' = default
/*  5. Media = Wheich screen style will work. Like 650px/for desktop/Mobile. 
/*     Default "All"/ 
/*     true/flase = for script this means the script will go footer or not? (True - Scripts should always load before body/footer)
*/
function ieatwp_style_scripts(){

	//**Enqueue Styles**//
	wp_enqueue_style('ieatwp-custom-theme', get_template_directory_uri().'/css/custom-theme.css', array('stylesheet'), 'v1.0', 'all');
	/*Stylesheet*/
	wp_enqueue_style('stylesheet', get_stylesheet_uri() );


	//**Enqueue Scripts**//
	
	wp_enqueue_script('jQuery');
	/*Bootstrap JS*/
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jQuery'), 'v1.0', true);

}
add_action('wp_enqueue_scripts', 'ieatwp_style_scripts');