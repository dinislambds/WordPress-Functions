<?php 




//Add Custom Image Size 
// No '' when just number

add_image_size('$id custom-size', '$width 600', '$height 400', '$crop false');


// Hard crop left top
add_image_size( 'custom-size', 220, 220, array( 'left', 'top' ) ); 

// Normal
add_image_size( 'custom-size', 220, 220, false ); 


// More details- https://developer.wordpress.org/reference/functions/add_image_size/

// Use the ID like below
 the_post_thumbnail( 'custom-size');











 ?>