<?php 

// comment box under single post or anywhere
//https://developer.wordpress.org/reference/functions/comments_template/

if ( comments_open() ): ?>
    <?php  comments_template();
endif; ?>





 ?>