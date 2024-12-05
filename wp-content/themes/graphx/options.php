<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$header_array = array(
		'standerd' => __( 'Standerd', 'options_framework_theme' ),
		'fixed' => __( 'Fixed', 'options_framework_theme' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'theme-textdomain' ),
		'two' => __( 'Pancake', 'theme-textdomain' ),
		'three' => __( 'Omelette', 'theme-textdomain' ),
		'four' => __( 'Crepe', 'theme-textdomain' ),
		'five' => __( 'Waffle', 'theme-textdomain' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}
	
	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress,wplink' )
	);
	 
	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __('Global Options', 'options_framework_theme'),
		'type' => 'heading');
	 
	$options[] = array(
		'name' => __('Logo', 'options_framework_theme'),
		'id' => 'website_logo',
		'type' => 'upload');
	
	$options[] = array(
		'name' => __('Email', 'options_framework_theme'),
		'id' => 'email',
		'placeholder' => 'Enter Email',
		'type' => 'text');  
	
	$options[] = array(
		'name' => __( 'Footer Address', 'options_framework_theme' ),
		'id' => 'footer_address',
		'type' => 'textarea'
	);	 
	 
	$options[] = array(
		'name' => __( 'Copyright Text', 'options_framework_theme' ),
		'id' => 'copyright_text',
		'type' => 'textarea'
	);
	
	$options[] = array(
		'name' => __( 'Google Analytics Code', 'options_framework_theme' ),
		'id' => 'ga_code',
		'type' => 'textarea'
	);
	 
	 
	// Social Setting
	$options[] = array(
		'name' => __('Social', 'options_framework_theme'),
		'type' => 'heading');

  
	$options[] = array(
		'name' => __('Facebook', 'options_framework_theme'),
		'id' => 'facebook_url',
		'placeholder' => 'Enter Facebook URL',
		'type' => 'text');
     
	 
	$options[] = array(
		'name' => __('404 Error Page', 'options_framework_theme'),
		'type' => 'heading');
	
	$options[] = array(
		'name' => __('Title', 'options_framework_theme'),
		'id' => 'tile_error',
		'placeholder' => 'Enter Page Title',
		'type' => 'text'); 
 
	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 10,
		'tinymce' => array( 'plugins' => 'wordpress,wplink' )
	);

	$options[] = array(
		'id' => 'errot_content',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);
  
	
	return $options;
}


/*
 * This is an example of how to add custom scripts to the options panel.
 * This example shows/hides an option when a checkbox is clicked.
 */

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');


function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function($) {

	$('#example_showhidden').click(function() {
  		$('#section-example_text_hidden').fadeToggle(400);
	});

	if ($('#example_showhidden:checked').val() !== undefined) {
		$('#section-example_text_hidden').show();
	}

});
</script>

<?php
}