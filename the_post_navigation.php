<?php 

//https://youtu.be/v931fG_ivOw

	the_post_navigation( array(
            'prev_text'                  => __( 'prev chapter: %title', 'textdomain' ),
            'next_text'                  => __( 'next chapter: %title' 'textdomain' ),
            'in_same_term'               => true,
            'taxonomy'                   => __( 'post_tag' 'textdomain' 'textdomain' ),
            'screen_reader_text'         => __( 'Continue Reading' 'textdomain' ),
            'mid_size'                   => 3  // ... uthanor jonne... mod no 
        ) );


	// call like below

	the_post_navigation();

	// Ned any change? Follow top array keys.

/*

mid_size (int) - How many page numbers to display to either side of the current page. Defaults to 1.
prev_text (string) - Text of the link to the next set of posts. Defaults to “Previous”.
next_text (string) - Text of the link to the next set of posts. Defaults to “Next”.
screen_reader_text (string) - Text meant for screen readers. Defaults to “Posts navigation”.


*/

// Single post next post prev post

 		// Next post
		next_post_link();
		previous_post_link();



 ?>