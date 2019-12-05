<?php
/*
Plugin Name: Basic class str plugin2
Description: This is the machine test plugin 2
Author: Gaurav Sharma
*/

define( 'BasicClassStrPlugin2_VERSION', '1.0.0' );
define( 'BasicClassStrPlugin2_URL', plugin_dir_path( __FILE__ ) );

require_once 'vendor/autoload.php';

if ( ! class_exists( 'BasicClassStrPlugin2' ) ) {

    /**
     * Class BasicClassStrPlugin2
     */
    final class BasicClassStrPlugin2 {

        public function activate() {
            Activate::activate();
        }

        public function deactivate() {
            Deactivate::deactivate();
        }

    }

}

if ( class_exists( 'BasicClassStrPlugin2' ) ) {

    $auction = new BasicClassStrPlugin2();
    register_activation_hook( __FILE__, [ $auction, 'activate' ] );
    register_deactivation_hook( __FILE__, [ $auction, 'deactivate' ] );

}

?>