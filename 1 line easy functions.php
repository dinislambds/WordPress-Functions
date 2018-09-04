<?php

// Post author name with clickable link
the_author_posts_link();

// Post today's date
get_the_date();  //get er function thakle echo korte hbe // the_date();

// Author image
get_avatar( get_the_author_meta( "ID" ) );

// Tag er name as per clicking a post tag
single_tag_title();

// Comments template
comments_template();

// Comment form only
comment_form();

// Category Title
single_cat_title();

// specifc post er category list
the_category( ' ' ); // akta space wise list gulo dekhabe
 
 // another way
get_the_category_list(); // automatic akta spac wise categoy gulo dekhabe

// specifc post er tags list
the_tags();

//anotehr way
get_the_tag_list();