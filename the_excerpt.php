<?php 




the_excerpt(); //to show except content

// create custom excerpt

//First create function how you want make and put in functions.php

function cExcerpt($number=50, $readmore='Read More'){
    $newnumber = $number + 1;
    $var = explode(' ', strip_tags( get_the_content() ), $newnumber );
    
    if( count($var) >= $newnumber ){
        array_pop($var);  
    }

    array_push($var, '<a href="'.get_the_permalink().'">'.$readmore.'</a>');
    $var = implode(' ', $var);
    
    return $var;
}

// now use where you need like below ?>


<?php echo cExcerpt(10, 'test...'); ?>