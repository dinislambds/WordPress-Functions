<?php 

// https://developer.wordpress.org/reference/functions/get_the_author_meta/
// singple post e author section dekhano
// LWHH ?>

	<div class="authorsection">
        <div class="row">
            <div class="col-md-2 authorimage">
                <?php
                echo get_avatar( get_the_author_meta( "ID" ) );
                ?>
            </div>
            <div class="col-md-10">
                <h4>
                    <?php echo get_the_author_meta( "display_name" ); ?>
                </h4>
                <p>
                    <?php echo get_the_author_meta( "description" ); ?>
                </p>
            </div>
        </div>
    </div>


<?php 
// Another Author Description box example
?>
<div class="s-content__author">
    <?php echo get_avatar( get_the_author_meta( "ID" ) ); ?>

    <div class="s-content__author-about">
        <h4 class="s-content__author-name">
            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ); ?>">
                <?php the_author(); ?>
            </a>
        </h4>

        <p>
            <?php the_author_meta( "description" ); ?>
        </p>

        <ul class="s-content__author-social">
            <?php //get field from ACF
            $philosophy_author_facebook  = get_field( "facebook", "user_" . get_the_author_meta( "ID" ) ); 
            $philosophy_author_twitter   = get_field( "twitter", "user_" . get_the_author_meta( "ID" ) );
            $philosophy_author_instagram = get_field( "instagram", "user_" . get_the_author_meta( "ID" ) );
            ?>
            <?php if ( $philosophy_author_facebook ): ?>
                <li><a href="<?php echo esc_url( $philosophy_author_facebook ); ?>">Facebook</a></li>
            <?php endif; ?>
            <?php if ( $philosophy_author_twitter ): ?>
                <li><a href="<?php echo esc_url( $philosophy_author_twitter ); ?>">Twitter</a></li>
            <?php endif; ?>
            <?php if ( $philosophy_author_instagram ): ?>
                <li><a href="<?php echo esc_url( $philosophy_author_instagram ); ?>">Instagram</a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>



<!-- the result is: http://prntscr.com/kc3544  -->