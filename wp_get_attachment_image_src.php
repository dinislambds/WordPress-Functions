<?php 


/*
// to get all array data for a variable
do print_r

<?php print_r( $page_thumb ); ?>



*/

if(have_posts()){
    the_post();

    $page_thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), $size = 'full' );?>
    
    <div class="row container-kamn">  
        <img src="<?php echo $page_thumb[0]; ?>" width="100%" class="blog-post" alt="Feature-img" align="right" width="100%">
    </div>
    
<?php }
?>



 ?>