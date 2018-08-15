<?php

add_filter('show_admin_bar', '__return_false');


add_action( 'after_setup_theme', 'my_theme_setup' );
function my_theme_setup(){
	load_theme_textdomain( 'taxfree', get_template_directory() . '/languages' );
}


add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'preico' ),
    'footer' => __( 'Footer Menu', 'preico' ),
    'side-menu' => __( 'Side Menu', 'preico' )

) );

function debug($value)
{
	echo '<pre>';
	print_r($value);
	echo '</pre>';
}

if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Footer',
		'id'   => 'footer',
		'description'   => 'This is the widgetized footer.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

}

function register_custom_fields() {
    add_settings_section(
        'custom_fields',
        'Custom info',
        'callback',
        'general'
    );

    add_settings_field(
        'facebook_input',
        'Facebook page',
        'input_callback',
        'general',
        'custom_fields',
        array(
            'facebook_input'
        )
    );

    add_settings_field(
        'twitter_input',
        'Twitter page',
        'input_callback',
        'general',
        'custom_fields',
        array(
            'twitter_input'
        )
    );

    add_settings_field(
        'instagram_input',
        'Instagram page',
        'input_callback',
        'general',
        'custom_fields',
        array(
            'instagram_input'
        )
    );

    add_settings_field(
        'google_input',
        'Google+ page',
        'input_callback',
        'general',
        'custom_fields',
        array(
            'google_input'
        )
    );

	add_settings_field(
		'linkedin_input',
		'LinkedIn page',
		'input_callback',
		'general',
		'custom_fields',
		array(
			'linkedin_input'
		)
	);

    register_setting( 'general', 'facebook_input', 'esc_attr' );
    register_setting( 'general', 'twitter_input', 'esc_attr' );
    register_setting( 'general', 'instagram_input', 'esc_attr' );
    register_setting( 'general', 'google_input', 'esc_attr' );
	register_setting( 'general', 'linkedin_input', 'esc_attr' );
}
add_action( 'admin_init', 'register_custom_fields' );

function callback() {
	echo '<span> </span>';
}

function show_hide_counter( $args ) {
	echo '<input name="' . $args[0] . '" type="checkbox" value="1"' . checked( '1', get_option( $args[0] ), false ) . '/>';
}

function check_countdown() {
	echo get_option( 'date_setup' );
	die();
}
add_action( 'wp_ajax_check_countdown', 'check_countdown' );
add_action( 'wp_ajax_nopriv_check_countdown', 'check_countdown' );

function input_callback( $args ) {
	$option = get_option( $args[0] );
	echo '<input style="width: 600px;" type="text" id="' . $args[0] . '" name="' . $args[0] . '" value="' . $option . '" />';
}

function wpdocs_excerpt_more( $more ) {
	return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



function custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function randomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}