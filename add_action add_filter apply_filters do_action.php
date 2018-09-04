<?php 
// On category.php there is a action written like below-
do_action('philosphy_after_category_description') // No extra parameter needed on action hook

// then we can add extra content using that action hook like below-

function category_after_desc() {
    echo "<p>After Description</p>";
}

add_action( "philosphy_after_category_description", "category_after_desc" );

// Below example for a class
// class added on heder.php like below-
apply_filters( 'philosophy_home_banner_class', 'home_class_name' );

// The above class rule changed using below filter // only for home
function philosophy_home_banner_class( $class_name ) {
    if ( is_home() ) {
        return $class_name;
    } else {
        return "";
    }
}
add_filter( "philosophy_home_banner_class", "philosophy_home_banner_class" );


// Filter hook example
function pagination_mid_size( $size ) {
    return 2;
}

add_filter( "philosophy_pagination_mid_size", "pagination_mid_size" );

// Filter hook example for 3 parameters
apply_filters( 'philosophy_home_banner_class', 'home_class_name1','home_class_name2','home_class_name3' );

// below code added on functions.php
function uppercase_text( $param1, $param2, $param3 ) {
    return ucwords( $param1 ) . " " . strtoupper( $param2 ) . " " . ucwords( $param3 );
}

add_filter( "philosophy_text", "uppercase_text", 10, 3 );

 ?>