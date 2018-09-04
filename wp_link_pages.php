<?php 

// Single page pagination
// singple.php te the_content(); er pore ai tag likhte hbe wp_link_pages();

// Content er moddhe <!--nextpage--> likhle page break kaj korbe and front end e pagination dekhabe

// More: https://developer.wordpress.org/reference/functions/wp_link_pages/

wp_link_pages(); 



// Another sample

$args = array (
    'before'            => '<div class="page-links-XXX"><span class="page-link-text">' . __( 'More pages: ', 'textdomain' ) . '</span>',
    'after'             => '</div>',
    'link_before'       => '<span class="page-link">',
    'link_after'        => '</span>',
    'next_or_number'    => 'next',
    'separator'         => ' | ',
    'nextpagelink'      => __( 'Next &raquo', 'textdomain' ),
    'previouspagelink'  => __( '&laquo Previous', 'textdomain' ),
);
 
wp_link_pages( $args );


// The above displays on the page as this:

More pages: « Previous | Next »