<?php 

/**
 * Main Guide: https://codex.wordpress.org/L10n
 */

// String Translatable
$greeting = __('Hello', 'text-domain'); 
echo $greeting;

// Translatable holo+echo o korbe
_e('Hello', 'text-domain')


// Escape HTML
$greeting = esc_html__( '<a href="http://example.com/">Website</a>', 'text-domain' );
echo $greeting;

// Escape HTML + Echo at once
esc_html_e( '<a href="http://example.com/">Website</a>', 'text-domain' );


// Placeholder
// https://www.w3schools.com/php/func_string_printf.asp
%s use for replacing "string";
%b use for replacing "binary" value;
%d - Signed decimal number (negative, zero or positive)// integer
%x - Hexadecimal number (lowercase letters)
%X - Hexadecimal number (uppercase letters)

// printf = Output a formatted string
// sprint = Return a formatted string

$user = "Din";
$queue_number = 10;
$greeting = sprintf(
	__("Hello %s, You are in queue number %b","text-domain"), $user, $queue_number
); // So, plaveholder like name or number won't translate

# Output: Hello Din, You are in queue number 10

// Argument swapping
$arg1 = "like";
$arg2 = "love"

sprintf(
	__('I %2$s you and I %1$s you', 'text-domain'),$arg1, $arg2
);

# Output: I like you and I love you


// Plurals

$comment_number = 1;

$string = sprintf( _n( 'There is %d comment', 'There are %d comments', $comment_number, 'my-text-domain' ), $comment_number );


# Translate JavaScript
#================================

wp_enqueue_script( 'my-script', 'my-script.js' );

// wp_localize_script( $handle, $name, $data );

wp_localize_script( 'my-script', 'my_vars',
	array(
		'message1' => __( 'Hello world!', 'my-text-domain' ),
		'message2' => __( 'Hello Mars!', 'my-text-domain' ),
	)
);

// Below code goes to my-script.js
alert( 'Hello world! ');

alert( my_vars.message1 );

alert( my_vars.message2 );