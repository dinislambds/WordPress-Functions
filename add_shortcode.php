<?php


//LWHH
function philosophy_button( $attributes ) {
    $default = array(
        'type'=>'primary',
        'title'=>__("Button",'philosophy'),
        'url'=>'',
    );

    $button_attributes = shortcode_atts($default,$attributes);

    return sprintf( '<a target="_blank" class="btn btn--%s full-width" href="%s">%s</a>',
        $button_attributes['type'],
        $button_attributes['url'],
        $button_attributes['title']
    );
}
add_shortcode( 'button', 'philosophy_button' );

//Sample
function philosophy_uppercase($attributes, $content=''){
    return strtoupper(do_shortcode($content));
}
add_shortcode('uc','philosophy_uppercase');

// $content ke obosshoy do_shortcode($content)); diye return korte hobe


// Google map sortcode

function philosophy_google_map($attributes){
    $default = array(
        'place'=>'Dhaka Museum',
        'width'=>'800',
        'height'=>'500',
        'zoom'=>'14'
    );
    $params = shortcode_atts($default,$attributes);
    $map = <<<EOD
<div>
    <div>
        <iframe width="{$params['width']}" height="{$params['height']}"
                src="https://maps.google.com/maps?q={$params['place']}&t=&z={$params['zoom']}&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
    </div>
</div>
EOD;
    return $map;
}
add_shortcode('gmap','philosophy_google_map');



// Shortcode impliment sample

echo do_shortcode('[contact-form-7 id='5']');



//Shortcode Starting Demo

function custom_active_slide($para, $content){
        $para = shortcode_atts(array(
                ''  => ''
                ), $para );
        ob_start(); ?>

		<!-- shortcode e ja dekhabe aikhane add kora jete pare like HTML codes -->

		<?php return ob_get_clean();
    }
add_shortcode( 'active_slider', 'custom_active_slide' );

/*implement*/
echo do_shortcode( '[active_slider]' );
//OR 
[active_slider]



//Shortcode Starting Demo

function my_slider(){
}
add_shortcode('shortcode_name','my_slider');

/*Use shortcode like below: [shortcode_name]*/


// Shortcode example ebit
 function my_slide($para, $content){
 	$para = shortcode_atts(array(
 		'color' => 'red',
 		'font-size' => '30px'
 	), $para); ob_start(); ?>

 	echo '<h2 style="color:'.$para['color']'">'. $content .'</h2>'
   <?php return ob_get_clean(); } 
 add_shortcode('myslider_shortcode','my_slide');


// Shortcode sample
add_shortcode( 'feature_box', 'feature_box_callback' );

function feature_box_callback( $attr, $content = null ) {
	$params = wp_parse_args( $attr, array(
		'title' => 'Your Feature',
		'icon'  => 'flaticon-vector-design',
        'shadow' => 'true'
	) );
	ob_start();
	?>
    <div class="services">
        <div class="service-part <?php echo $params['shadow'] !== 'true'?'no-shadow': '';?>"><i class="<?php echo $params['icon']; ?> animate fadeInLeft" data-wow-delay="0.4s"></i>
			<?php
			if ( ! empty( $params['title'] ) ) {
				echo '<h4>' . $params['title'] . '</h4>';
			}

			echo $content;
			?>

        </div>
    </div>
	<?php
	$output = ob_get_contents();
	ob_get_clean();

	return $output;
}


function counter_callback( $attr ){
    $default = array( 
        'icon' => 'icon-target',
        'number' => '1500+',
        'text' => 'Creative Template'
    );
    $params = wp_parse_args ( $attr, $default );

    $html = '<span class="milestone counters">';
    $html .= '<i class="'.$params['icon'].' animate fadeInDown animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s;"></i>';
    $html .= '<span class="counter">'.$params['number'].'</span>';
    $html .= '<p>'.$params['text'].'</p>';
    $html .= '</span>';

    return $html;
}
add_shortcode('counter', 'counter_callback');



// Slider shortcode by eBit

    function custom_active_slide($atts){
        $para = shortcode_atts(
            array(
                'id'  => '1'
                ), $atts );
        ob_start(); ?>



    <!-- Begin #carousel-section -->    
    <section id="carousel-section" class="section-global-wrapper"> 
        <div class="container-fluid-kamn">
            <div class="row">
                <div id="carousel-<?php echo $para['id']; ?>" class="carousel slide">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        

                    <?php

                    $slider_query = null;
                    $slider_query = new WP_Query( array(
                        'post_type'         => 'slider',
                        'posts_per_page'    => -1,
                        ) );

                        $pre = '_office_master_';
                        $x = 0;
                        while ( $slider_query->have_posts() ) {
                            $slider_query->the_post(); 
                            $x++;
                            
                            $slider_caption = get_post_meta( get_the_ID(), $pre.'slider_caption', true );
                            ?> 

                        <!-- Begin Slide 1 -->
                        <div class="item <?php if ( $x == 1 ) {
                            echo 'active';
                        } ?>">
                            <?php the_post_thumbnail('slider-pic'); ?>
                            <div class="carousel-caption">
                                <h3 class="carousel-title hidden-xs"> <?php the_title(); ?> </h3>
                                <p class="carousel-body"> <?php echo $slider_caption; ?>  </p>
                            </div>
                        </div>
                        <!-- End Slide 1 -->

                        <?php }  ?>


                      


                    </div>
        


                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-lg">

                        <?php for ($i=0; $i < $x ; $i++) { ?>
                            
                        <li data-target="#carousel-<?php echo $para['id']; ?>" data-slide-to="<?php echo $i; ?>" class="<?php if ($i==0) { echo 'active'; } ?>"> </li>
                       
                        <?php } ?>
                    </ol>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-<?php echo $para['id']; ?>" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-<?php echo $para['id']; ?>" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End #carousel-section -->





        <?php 
        return ob_get_clean();
    }
    add_shortcode( 'active_slider', 'custom_active_slide' );