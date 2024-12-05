<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
	require_once dirname( __FILE__ ) . '/inc/options-framework.php';
}

/* 
 * This is an example of how to override a default filter
 * for 'textarea' sanitization and $allowedposttags + embed and script.
 */
add_action('admin_init','optionscheck_change_santiziation', 100);
 
function optionscheck_change_santiziation() {
    remove_filter( 'of_sanitize_textarea', 'of_sanitize_textarea' );
    add_filter( 'of_sanitize_textarea', 'custom_sanitize_textarea' );
}
 
function custom_sanitize_textarea($input) {
    global $allowedposttags;
    $custom_allowedtags["embed"] = array(
      "src" => array(),
      "type" => array(),
      "allowfullscreen" => array(),
      "allowscriptaccess" => array(),
      "height" => array(),
          "width" => array()
      );
      $custom_allowedtags["script"] = array(
	  	"src" => array(),
        "type" => array(),
		"async" => array(),
		
	  );
 
      $custom_allowedtags = array_merge($custom_allowedtags, $allowedposttags);
      $output = wp_kses( $input, $custom_allowedtags);
    return $output;
}
 
	function my_favicon() {   ?>   
     <link rel="shortcut icon" href="<?php echo of_get_option('fav_icon'); ?>" />
   <?php  }
//add_action('wp_head', 'my_favicon');
//add_action( 'admin_head', 'my_favicon' );
?>
<?php 
 
if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}
$content_width = 450;
add_theme_support('post-thumbnails');

automatic_feed_links(); 

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
	    'id' => 'button-area',
		'name' => 'Footer Button Area',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));
	register_sidebar(array(
	    'id' => 'number',
		'name' => 'Header Phone',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));
}

function register_my_menus() {
	register_nav_menus(
		array(
	'primary' => __('Primary Navigation', 'twentyten'),
	)
	);
}
add_action( 'init', 'register_my_menus' );

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

/* 
 * Add CSS and javascipt 
 */
 
add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts() {
	wp_enqueue_style( 'owl-slider-css', get_template_directory_uri() . '/css/owl.carousel.css',false,'1.1','all');
	wp_enqueue_script( 'owl-slider', get_template_directory_uri() .'/javascipt/owl.carousel.min.js', array('jquery'), '1.0', TRUE);
	wp_enqueue_script( 'custom', get_template_directory_uri() .'/javascipt/custom.js', array('jquery'), '1.0', TRUE);
}

/* Change Admin Logo */
function custom_loginlogo() {
echo '<style type="text/css">
body.login { background: #fff !important; }
h1 a {background-image: url('.get_bloginfo('template_directory').'/images/logo.png) !important; width: 195px!important; height: 80px!important; background-size: 195px!important; }
</style>';
}
add_action('login_head', 'custom_loginlogo');

remove_action('wp_head','rest_output_link_wp_head');

add_filter( 'login_headerurl', 'custom_loginlogo_url' );
function custom_loginlogo_url($url) {
    return 'https://graphxproductions.com/';
}