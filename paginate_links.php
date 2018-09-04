<?php 

// LWHH 18.8
global $wp_query;
paginate_links( array(
        'current'  => max( 1, get_query_var( 'paged' ) ),
        'total'    => $wp_query->max_num_pages,
        'type'     => 'list',
        'mid_size' => 4 // 1 er por aro 4 ta sonkha dekhabe
    ) );



//Result will be like below
1 2 3 4 5 … 8 Next




 ?>