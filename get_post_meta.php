<?php

/*
/*
/*  3 parameters
/*  Post ID = $post->ID or get_the_ID()
/*  Identifier = An Unique ID of the custom field
/*  single value or multiple value will return? single value= true
/*  double value = flase and we have to put array
/*
*/

echo get_post_meta(get_the_ID(), 'skill_percentage', true); 


// we should have a custom field named 'skill_percentage' in the post/page edit area

// LWHH
$placeholder_text = get_post_meta(get_the_ID(),"placeholder",true);
$button_label = get_post_meta(get_the_ID(),"button label",true);
$hint = get_post_meta(get_the_ID(),"hint",true);

?>
	<div class="form-group">
        <input type="text" class="form-control" placeholder="<?php echo esc_attr($placeholder_text); ?>">
        <input type="submit" value="<?php echo esc_attr($button_label); ?>" class="btn btn-primary">
        <p class="tip">
            <?php echo esc_html($hint); ?>
        </p>
    </div>

