<?php 
/**
 * @package WordPress
 * @subpackage Creative South Yo
 */

// load styles
function cs_yo_init_styles() {
    if( !is_admin() ){        
	wp_enqueue_style('main-style', get_bloginfo('template_url') . '/assets/css/site.css', false, '1.0', 'screen');
	wp_enqueue_style('hover-style', get_bloginfo('template_url') . "/assets/css/hover.css", false, '1.0', 'screen');
	wp_enqueue_style('button-style', get_bloginfo('template_url') . '/assets/css/button.css', false, '1.0', 'screen');
	wp_enqueue_style('form-style', get_bloginfo('template_url') . '/assets/css/form.css', false, '1.0', 'screen');
        
        //Responsive CSS
        wp_enqueue_style('resonsive-style', get_bloginfo('template_url') . '/assets/css/responsive.css', false, '1.0', 'screen');
        
        //LayerSlider CSS
        wp_enqueue_style('layer-slider', get_bloginfo('template_url') . '/assets/layerslider/css/layerslider.css', false, '1.0', 'screen');
        
        //Google Fonts
        wp_enqueue_style('google-fonts', 'http://fonts.googleapis.com/css?family=Roboto:400,300,600,700,800|Open+Sans+Condensed:300,700', false, '1.0', 'screen');
    }
}
add_action('wp_print_styles', 'cs_yo_init_styles');


function cs_yo_init_scripts() {
    if( !is_admin() ){
        // Load jQuery
	wp_enqueue_script('jQuery', get_bloginfo('template_url')."/assets/js/jquery.js", array('jquery'), '1.0', true);
        wp_enqueue_script('menu', get_bloginfo('template_url')."/assets/js/menu.js", array('jquery'), '1.0', true);
        wp_enqueue_script('placeholder', get_bloginfo('template_url')."/assets/js/placeholder.js", array('jquery'), '1.0', true);
        wp_enqueue_script('jquery.prettyPhoto', get_bloginfo('template_url')."/assets/js/jquery.prettyPhoto.js", array('jquery'), '1.0', true);
        wp_enqueue_script('jquery.easing', get_bloginfo('template_url')."/assets/layerslider/jQuery/jquery-easing-1.3.js", array('jquery'), '1.0', true);
        wp_enqueue_script('jquery.transit', get_bloginfo('template_url')."/assets/layerslider/jQuery/jquery-transit-modified.js", array('jquery'), '1.0', true);
        wp_enqueue_script('layerslider1', get_bloginfo('template_url')."/assets/layerslider/js/layerslider.kreaturamedia.jquery.js", array('jquery'), '1.0', true);
        wp_enqueue_script('layerslider2', get_bloginfo('template_url')."/assets/layerslider/js/layerslider.transitions.js", array('jquery'), '1.0', true);
    }
}
add_action('wp_print_scripts', 'cs_yo_init_scripts');

remove_action('wp_head', 'wp_print_scripts');
remove_action('wp_head', 'wp_print_head_scripts', 9);
remove_action('wp_head', 'wp_enqueue_scripts', 1);
add_action('wp_footer', 'wp_print_scripts', 5);
add_action('wp_footer', 'wp_enqueue_scripts', 5);
add_action('wp_footer', 'wp_print_head_scripts', 5);

// Menu functions with support for WordPress 3.0 menus
if ( function_exists('wp_nav_menu') ) {
    add_theme_support( 'nav-menus' );
    register_nav_menus( array(
	'primary' => esc_html__( 'Primary Navigation', 'creative-south' ),
    ) );
}

function creative_south_nav() {
    wp_nav_menu( array( 'container_class' => 'navigation-menu',
                        'container_id' => 'navigation-menu',
                        'menu_id'    => 'main-top-menu',
                        'menu_class' => 'main-menu',
                        'link_before'=> '<li>',
                        'link_after' => '</li>',
                        'theme_location' => 'primary'
                        )
                    );
}

//Automatic Feed Links is a theme feature introduced with Version 3.0. This feature addes to HTML <head> RSS feed links. 
if ( function_exists('add_theme_support') ) {
    add_theme_support( 'automatic-feed-links' );
}
