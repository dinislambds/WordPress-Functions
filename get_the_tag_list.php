<?php 
//https://developer.wordpress.org/reference/functions/get_the_tag_list/
 

 
// We can get all tag list simply like below codes:
echo get_the_tag_list( '<ul class="list-unstyled"><li>', '</li><li>', '</li></ul>' ); 

//Alternative
/* the_tags(); */


//This checks if the post has any tags, and if there are, outputs them to an unordered list.
/** @var string|false|WP_Error $tag_list */
$tag_list = get_the_tag_list( '<ul class="list-unstyled"><li>', '</li><li>', '</li></ul>' );
 
if ( $tag_list && ! is_wp_error( $tag_list ) ) {
    echo $tag_list;
}

//This will return something in the form:
<ul>
    <li><a href="tag1">Tag 1</a></li>
    <li><a href="tag2">Tag 2</a></li>
    ...
</ul>

