<?php

// Creates a Google Fonts URL for the required families and weights.
function awesome_fonts_url() {

	// Set up an array of the families and weights we want to load.
	$font_families = [
		'Josefin+Sans:400,700',
		'Lemon:400'
	];

	// Convert the array into a string separated with the '|' (pipe) character.
	$families_query_arg = implode( '|', $font_families );

	// Set up an array of query args.
	// i.e. key=value&another_key=another_value
	$query_args = [
		'family'  => $families_query_arg,
		'display' => 'swap'
	];

	// Now generate the URL with the query args added.
	$fonts_url = add_query_arg(
		$query_args,
		'https://fonts.googleapis.com/css'
	);

	// And return it.
	return $fonts_url;

}

function awesome_load_styles_and_scripts() {

	// Set up variables for various things so that we don't have to repeat them in the code.
	$name     = 'awesome';
	$css_file = 'css/' . $name . '.css';
	$js_file  = 'js/' . $name . '.js';

	// Enqueue the fonts stylesheet first.
	wp_enqueue_style(
		$name . '-fonts',
		awesome_fonts_url()
	);

	// Enqueue the stylesheet.
	// It doesn't have any dependencies, and the version number is automatically generated from the timestamp that the file was last updated.
	wp_enqueue_style(
		$name,
		get_template_directory_uri() . '/' . $css_file,
		array(),
		filemtime( get_theme_file_path( $css_file ) )
	);

	// Enqueue the JavaScript.
	// It's dependent on jQuery (which we don't need to enqueue, the fast it's a dependency means that WP will automatically enqueue it for us), and the version number is automatically generated from the timestamp that the file was last updated.
	wp_enqueue_script(
		$name,
		get_template_directory_uri() . '/' . $js_file,
		[ 'jquery' ],
		filemtime( get_theme_file_path( $js_file ) ),
		true
	);

	// If there is no privacy policy page ID set, then exit this function.
	if ( ! $privacy_page_id = get_option( 'wp_page_for_privacy_policy' ) ) {
		return;
	}

	// Set up an array containing the variables we want to be able to access in our script, at the moment it's just the URL of the privacy page.
	$localize = [ 'privacyPageUri' => get_permalink( $privacy_page_id ) ];

	// Now localize the script we previously enqueued, by associating it with the array of variable names.
	wp_localize_script(
		$name,
		$name,
		$localize
	);

};

add_action('wp_enqueue_scripts', 'awesome_load_styles_and_scripts');


// Remove unwanted we-admin content
remove_action('welcome_panel', 'wp_welcome_panel');

function di_remove_menus() {

	if ( current_user_can( 'import' ) ) {
		return;
	}

	remove_menu_page( 'edit-comments.php' );          //Comments
	remove_menu_page( 'themes.php' );                 //Appearance
	remove_menu_page( 'plugins.php' );                //Plugins
	remove_menu_page( 'users.php' );                  //Users
	remove_menu_page( 'tools.php' );                  //Tools
	remove_menu_page( 'options-general.php' );        //Settings
}
add_action( 'admin_menu', 'di_remove_menus' );


function di_wordpress_setup(){
	add_theme_support( 'post-thumbnails' ); // aka featured images
}

add_action( 'after_setup_theme', 'di_wordpress_setup' );

function di_maybe_deregister_block_styles() {

	if ( 'classic' === get_option( 'classic-editor-replace' ) ) {
		wp_dequeue_style( 'wp-block-library' );
	}

}

add_action( 'wp_enqueue_scripts', 'di_maybe_deregister_block_styles', 100 );

// Get just one paragraph for home page https://wordpress.stackexchange.com/questions/127159/grab-the-first-paragraph-of-each-post
function get_first_paragraph(){
	global $post;
	$str = wpautop( get_the_content() );
	$str = substr( $str, 0, strpos( $str, '</p>' ) + 4 );
	$str = strip_tags($str, '<a><strong><em>');
	return '<p>' . $str . '</p>';
}
