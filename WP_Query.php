<?php 

// method by LWHH
?>
<div class="posts text-center"> 
    <?php
    $paged          = get_query_var( "paged" ) ? get_query_var( "paged" ) : 1;
    $posts_per_page = 3;
    $post_ids       = array( 58, 68, 81, 43, 56, 70, 38 );
    $_p             = new WP_Query( array(
        'posts_per_page' => $posts_per_page,
        'paged'          => $paged,
        'meta_query'     => array(
            'relation' => 'AND',
            array(
                'key'     => 'featured',
                'value'   => '1',
                'compare' => '='
            ),
            array(
                'key'     => 'homepage',
                'value'   => '1',
                'compare' => '='
            )
        )
    ) );
    while ( $_p->have_posts() ) {
        $_p->the_post();
        ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2></a>
        <?php
    }

    wp_reset_query();
    
		
	// Pagination for posts ?>
    <div class="container post-pagination">
        <div class="row">
            <div class="col-md-12">
                <?php
                echo paginate_links( array(
                    'total'     => $_p->max_num_pages,
                    'current'   => $paged,
                    'prev_next' => false,
                ) );
                ?>
            </div>
        </div>
    </div>

</div>








<?php
// easy method

$skills = new WP_Query( array(
    'post_type' => 'ieatwp-skills',
    'posts_per_page' => 5,
    'order' => 'ASC',
    'category_name' => 'category1, category_2'
 ) );?>

<?php while($skills->have_posts()) : $skills->the_post(); ?>

<h4> <?php the_title(); ?> </h4>
<div class="progress">
    <div class="progress-bar progress-bar-striped active <?php echo get_post_meta(get_the_ID(), 'skill-percentage-class', true); ?>" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
    <?php echo get_post_meta(get_the_ID(), 'skill_percentage', true); ?>
    </div>
</div>

<?php endwhile; 

wp_reset_postdata();  // we can use wp_reset_query(); too 
