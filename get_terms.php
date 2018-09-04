<?php 

// Get categories from specific post type taxonomy
// filtering_category = Taxonomy name
// hide_empty = empty category will show or not

    $all_terms = get_terms('filtering_category', array(
        'hide_empty' => false
    ));
    foreach($all_terms as $single_term){
        echo '<li class="filter" data-filter=".' . $single_term->slug . '">' . $single_term->name . '</li>';
    }



    // get_terms returns as below objects
    array(1) {
  [0]=&gt;
  object(WP_Term) (11) {
    ["term_id"]=&gt;  //int
    ["name"]=&gt;   //string 
    ["slug"]=&gt;  //string 
    ["term_group"]=&gt;  //int
    ["term_taxonomy_id"]=&gt; //int
    ["taxonomy"]=&gt;   //string
    ["description"]=&gt;    //string
    ["parent"]=&gt; //int
    ["count"]=&gt;  // int
    ["filter"]=&gt; //string
    ["meta"]=&gt; array(0) { // presumably this would be some returned meta-data?
    }
  }
}


// Get all post categories ordered by count.
$categories = get_terms( 'category', array(
    'orderby'    => 'count',
    'hide_empty' => 0
) );

?>