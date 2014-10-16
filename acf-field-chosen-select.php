<?php
/*
Plugin Name: Advanced Custom Fields: Chosen_Select
Plugin URI: http://www.aardvarklondon.com/
Description: 'Chosen' enabled select
Version: 1.0.0
Author: Mike Hughes
Author URI: http://www.aardvarklondon.com/
*/

load_plugin_textdomain( 'acf-chosen_select', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );


function include_field_types_chosen_select( $version ) {

    include_once('acf-chosen_select-v5.php');

}

add_action('acf/include_field_types', 'include_field_types_chosen_select');