<?php 

/**
 * Register a sidebar in functions.php
 */
function ieatwp_my_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Custom Sidebar', 'textdomain' ),
        'id'            => 'custom_sidebar',
        'description'   => __( 'Widget in this area will be shown', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'ieatwp_my_sidebar' );



// Call the sidebar wherever you need
// There are several way to call the sidebar

// BEST way
if ( !dynamic_sidebar('custom_sidebar') ){
	echo 'Please set widget from appearnace > Widget'
	}


//Other ways
	if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
    <ul id="sidebar">
        <?php dynamic_sidebar( 'left-sidebar' ); ?>
    </ul>
<?php endif; ?>


<?php
// Another one
<?php
    if( is_active_sidebar( 'estore_sidebar_front' ) ) {
        if ( !dynamic_sidebar( 'estore_sidebar_front' ) ):
            endif;
    }
    ?>

<?php 

//Also check ?>

<ul id="sidebar">
    <?php dynamic_sidebar( 'right-sidebar' ); ?>
</ul>










 ?>
