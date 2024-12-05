<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!--Meta Viewport code for Responsive !-->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="google-site-verification" content="v4frFqUvJpEekFvKy_VFUouXP4DTUU-nHxKodMTNO74" />
<!-- Site Title !-->
<title><?php wp_title('&laquo;', true, 'right'); ?></title>

<!-- Include Css !-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
	
<?php if ( of_get_option('ga_code') ) { 
		$gacode = of_get_option('ga_code');
?>       
        <?php echo $gacode; ?>
	   <!-- Google Analyics -->
<?php } ?>
</head>

<body <?php body_class(); ?>>

<!-- wrapper start!-->
<div id="wrapper" class="<?php if ( of_get_option('header_type') ) { echo of_get_option('header_type');  } ?>">
	
	<!-- layout start!-->
	<div id="layout">

		<!--Header Section-->
        <header class="header">
            <div class="layout">
                
                <a class="logo" href="<?php echo get_option('home'); ?>/">
                <?php if ( of_get_option('website_logo') ) { ?>
                    <img src="<?php echo of_get_option('website_logo'); ?>" alt="<?php bloginfo('name'); ?>" />
                 <?php } else { ?>
                    <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" />
                <?php } ?></a>
                        
                <div class="header_right">
                    <?php dynamic_sidebar('number'); ?>
                    <div class="menu_outer">
                        <a href="#" class="menu_icon"></a>
                         <?php   wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>	
                    </div>
                </div>
            </div>
        </header>
        <!--Banner Section-->
        
		<!--  / content \ -->
		<div id="content">
        	<div class="wrapper">
