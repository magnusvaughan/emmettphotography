<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

function add_parent_class( $css_class, $page, $depth, $args )
{
    if ( ! empty( $args['has_children'] ) )
        $css_class[] = 'parent';
    return $css_class;
}
add_filter( 'page_css_class', 'add_parent_class', 10, 4 );

?>