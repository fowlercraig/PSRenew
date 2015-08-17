<?php

require_once locate_template('/lib/blankslate.php');
require_once locate_template('/lib/slug.php' );
require_once locate_template('/lib/activation.php');         
require_once locate_template('/lib/themewrangler.class.php');
include_once locate_template('/lib/soil-master/soil.php' );
include_once locate_template('/lib/roots-rewrites-master/roots-rewrites.php' );
include_once locate_template('/lib/opengraph/opengraph.php' );
require_once locate_template('/lib/cleanassnav.php' );
require_once locate_template('/lib/publish-business.php' );

add_theme_support('soil-relative-urls');
add_theme_support('soil-nice-search');
add_theme_support('soil-clean-up');

// ACF Includes Nonsense

add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/lib/advanced-custom-fields-pro/';
    return $path;
}
 
add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
     $dir = get_stylesheet_directory_uri() . '/lib/advanced-custom-fields-pro/';
    return $dir;
}

include_once locate_template('/lib/advanced-custom-fields-pro/acf.php' );
include_once locate_template('/lib/acf-field-date-time-picker/acf-date_time_picker.php' );

//define( 'ACF_LITE', true );

$settings = array(

'available_scripts' => array(
'jquery-g'          => array('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js','1.11.1'),
'scripts'           => array('/assets/javascripts/scripts.min.js'),
),

'default_scripts'   => array(
'jquery-g',
'scripts'),

'available_stylesheets' => array(
'default'           => array('/assets/css/main.css'),
),

'default_stylesheets' => array(
'default'
),

'deregister_scripts' => array('jquery','l10n')

);

Themewrangler::set_defaults( $settings );


if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  )); 
  
}