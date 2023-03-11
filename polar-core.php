<?php 
/*
 * Plugin Name:       Polar Core
 * Plugin URI:        https://Polar.com/
 * Description:       Polar blog site core functionalities
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Sajad Hussain
 * Author URI:        https://sajjadcodes.com/
 * Text Domain:       polar-core
 * Domain Path:       /languages
 */

 // if file direct access abort


 if ( ! defined('WPINC' )) {
    die;
 }


function pbc_activate () {
    require_once plugin_dir_path(__FILE__) . 'includes/class-polar-core-activator.php'; 
    Polar_Core_Activator::activate();
}

function pbc_deactivate () {
    require_once plugin_dir_path(__FILE__) . 'includes/class-polar-core-deactivator.php';
    Polar_Core_Deactivator::deactivate();

}


register_activation_hook( __FILE__, 'pbc_deactivate' );
register_deactivation_hook( __FILE__, 'pbc_deactivate' );


function pbc_run() {

}

