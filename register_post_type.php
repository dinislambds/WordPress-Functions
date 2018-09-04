<?php 

/**
 * Use "CPT UI" plugin as alternative! It's the BEST!
 * DEtails: LWHH 21.3
 */


// details - https://developer.wordpress.org/reference/functions/register_post_type/
// Register a post type

function ieatwp_custom_post_types(){

	register_post_type('ieatwp-skills', array(
		'labels' => array(
			'name'         => __('Skills', 'ieatwp'),
			'menu_name'    => __('Skills', 'ieatwp'),
			'all_items'    => __('All Skills', 'ieatwp'),
			'add_new'      => __('Add New Skill', 'ieatwp'),
			'add_new_item' => __('Add New Skill item', 'ieatwp'),
			'new_item'     => __('New Skill','ieatwp'),
			'view_item'    => __('View Skill', 'ieatwp'),
			'not_found'    => __('No Skill Found', 'ieatwp'),

		),
		'public'    => true,
		'supports'  => array('title', 'editor', 'author', 'thumbnail', 'revisions', 'excerpt', 'comments', 'custom-fields', 'page-attributes', 'post-formats', 'trackbacks'),
		'menu_icon' => 'dashicons-chart-line',
		'menu_position' => null,


	));

}
add_action('init', 'ieatwp_custom_post_types');


// page-attributes = order
// Use of post type

////////////////////// Procedure 1
///////////////////////////////////////////////////


        $skills = new WP_Query(array(
            'post_type' => 'ieatwp-skills',
            'posts_per_page' => 5,
            'order' => 'ASC',
            )); 


    if($skills->have_posts()){
    	while($skills->have_posts()) {
    		$skills->the_post(); ?>

    		<h4> <?php the_title(); ?> </h4>
            <div class="progress">
                <div class="progress-bar progress-bar-striped active <?php echo get_post_meta(get_the_ID(), 'skill-percentage-class', true); ?>" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                <?php echo get_post_meta(get_the_ID(), 'skill_percentage', true); ?>
                </div>
            </div>

    	<?php }
    } else{
    	echo 'No post found';
    }

    wp_reset_query();  // or wp_reset_query();


// wp_reset_postdata(); whenever we use new WP_Query

////////////////////// Procedure 2  //////////////////
// 'category_name' pull out post from specifc category
// category1 + category_2 for both matching category posts
// References = https://youtu.be/naE55YGoBIo


		$skills = new WP_Query(array(
		            'post_type' => 'ieatwp-skills',
		            'posts_per_page' => 5,
		            'order' => 'ASC',
                    'category_name' => 'category1, category_2'
		            )); ?>



         <?php while($skills->have_posts()) : $skills->the_post(); ?>

            <h4> <?php the_title(); ?> </h4>
            <div class="progress">
                <div class="progress-bar progress-bar-striped active <?php echo get_post_meta(get_the_ID(), 'skill-percentage-class', true); ?>" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                <?php echo get_post_meta(get_the_ID(), 'skill_percentage', true); ?>
                </div>
            </div>

        <?php endwhile; 

        wp_reset_query();


 ?>