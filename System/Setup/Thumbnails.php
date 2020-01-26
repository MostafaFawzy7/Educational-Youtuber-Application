<?php
// retrieves the attachment ID from the file URL
function pippin_get_image_id($image_url) {
	global $wpdb;
	$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url )); 
        return $attachment[0]; 
}
if ( ! function_exists( 'yourcolor_setup' ) ) :

function yourcolor_setup() {

	// Add RSS feed links to <head> for posts and comments.

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-thumbnails' );

	add_image_size( 'fixed1', 384, 276, true );
	add_image_size( 'most1', 300, 169, true );
	add_image_size( 'center1', 540, 305, true );
	add_image_size( 'normal1', 372, 210, true );
	add_image_size( 'single1', 830, 468, true );
	add_image_size( 'sideSing1', 300, 169, true );
	add_image_size( 'related1', 263, 148, true );

}

endif;

add_action( 'after_setup_theme', 'yourcolor_setup' );

////