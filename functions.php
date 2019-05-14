<?php
function awesome_script_enqueue() {
	wp_enqueue_style('customstyle', get_template_directory_uri().'/css/awesome.css', array(), '1.0.0', 'all');
	wp_enqueue_script("jquery");
	wp_enqueue_script('customjs', get_template_directory_uri().'/js/awesome.js', array(), '1.0.0', true);
};

add_theme_support( 'post-thumbnails' );

add_action('wp_enqueue_scripts', 'awesome_script_enqueue');


// Remove unwanted we-admin content
remove_action('welcome_panel', 'wp_welcome_panel');

function remove_menus() {
	remove_menu_page( 'edit-comments.php' );          //Comments
	remove_menu_page( 'themes.php' );                 //Appearance
	remove_menu_page( 'plugins.php' );                //Plugins
	remove_menu_page( 'users.php' );                  //Users
	remove_menu_page( 'tools.php' );                  //Tools
	remove_menu_page( 'options-general.php' );        //Settings
}
add_action( 'admin_menu', 'remove_menus' );



// Get just one paragraph for home page https://wordpress.stackexchange.com/questions/127159/grab-the-first-paragraph-of-each-post
function get_first_paragraph(){
	global $post;
	$str = wpautop( get_the_content() );
	$str = substr( $str, 0, strpos( $str, '</p>' ) + 4 );
	$str = strip_tags($str, '<a><strong><em>');
	return '<p>' . $str . '</p>';
}


?>