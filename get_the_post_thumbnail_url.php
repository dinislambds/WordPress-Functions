<?php 

//Proper usage of `get_the_post_thumbnail_url()` inside the loop:

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
  
        /* grab the url for the full size featured image */
        $featured_img_url = get_the_post_thumbnail_url(null, 'full'); 
 
        /* link thumbnail to full size image for use with lightbox*/
        echo '<a href="'.$featured_img_url.'" rel="lightbox">'; 
            the_post_thumbnail('thumbnail');
        echo '</a>';
    endwhile; 
endif; 



//Proper usage of `get_the_post_thumbnail_url()` outside the loop:
/* grab the url for the full size featured image */
$featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); 
 
/* link thumbnail to full size image for use with lightbox*/
echo '<a href="'.$featured_img_url.'" rel="lightbox">'; 
    the_post_thumbnail('thumbnail');
echo '</a>';



// the_post_thumbnaul() also behave same
//https://codex.wordpress.org/Function_Reference/the_post_thumbnail_url