<?php
/**
 * Plugin Name: Live Word Counter 
 * Plugin URI: https://github.com/tannerm/jetpack-awesome-icons
 * Description: Counts the number of words while typing on a textbox 
 * Version: 0.1.0
 * Author: Arc Angelo Ibalio
 * Author URI: http://arcibalio.com
 * License: GPL2
 */
define( 'LIVE_WORD_COUNTER_URL',     plugin_dir_url( __FILE__ )  );
define( 'LIVE_WORD_COUNTER_PATH',    plugin_dir_path( __FILE__ ) );
define( 'LIVE_WORD_COUNTER_VERSION', '0.1.0'                     );

function live_word_counter_init() {
   add_filter( 'live_word_counter_development_mode', '__return_true' );
   add_action( 'wp_enqueue_scripts', 'live_word_counter_enqueue_scripts' );
   add_action( 'comment_form', 'live_word_counter_view' );
}

function live_word_counter_enqueue_scripts() {
    wp_register_script( 'angular', LIVE_WORD_COUNTER_URL . 'angular.js', array(), LIVE_WORD_COUNTER_VERSION );
    wp_enqueue_script('angular');

    wp_register_script( 'app', LIVE_WORD_COUNTER_URL . 'app.js', array(), LIVE_WORD_COUNTER_VERSION );
    wp_enqueue_script('app');
}

function live_word_counter_view(){
   include_once( LIVE_WORD_COUNTER_PATH . 'views/view.php' );
}



add_action( 'plugins_loaded', 'live_word_counter_init' );
