<?php

function awesome_script_enqueue() {

	// Set up variables for various things so that we don't have to repeat them in the code.
	$name     = 'awesome';
	$css_file = 'css/' . $name . '.css';
	$js_file  = 'js/' . $name . '.js';

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

add_action('wp_enqueue_scripts', 'awesome_script_enqueue');


// Remove unwanted we-admin content
remove_action('welcome_panel', 'wp_welcome_panel');

function remove_menus() {

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
add_action( 'admin_menu', 'remove_menus' );


function di_wordpress_setup(){
	add_theme_support( 'post-thumbnails' ); // aka featured images
}

add_action( 'after_setup_theme', 'di_wordpress_setup' );


// Get just one paragraph for home page https://wordpress.stackexchange.com/questions/127159/grab-the-first-paragraph-of-each-post
function get_first_paragraph(){
	global $post;
	$str = wpautop( get_the_content() );
	$str = substr( $str, 0, strpos( $str, '</p>' ) + 4 );
	$str = strip_tags($str, '<a><strong><em>');
	return '<p>' . $str . '</p>';
}




?>