<?php

/**
 * Plugin Name: Beaver Builder Testimonials Widget
 * Plugin URI: http://sorinmarta.com/beaver-testimonials-widget
 * Description: An extension pack that allows you to add a nice looking testimonials widget to your site
 * Version: 1.0
 * Author: Sorin Marta
 * Author URI: http://sorinmarta.com
 */

define('SMARTA_SLUG', 'beaver-testimonials-widget');
define('SMARTA_PATH', WP_PLUGIN_DIR . '/' . SMARTA_SLUG);

define('SMARTA_APP', SMARTA_PATH . '/app');
define('SMARTA_MODULES', SMARTA_APP . '/modules');

define('SMARTA_LINK', plugin_dir_url(__FILE__));
define('SMARTA_LINK_APP', SMARTA_LINK . 'app');
define('SMARTA_LINK_MODULES', SMARTA_LINK_APP . '/modules');

class Beaver_Testimonials_Widget{
    public function __construct(){
        add_action('init', array($this, 'load_modules'));
        add_action('activate_'. SMARTA_SLUG .'/'. SMARTA_SLUG .'.php', array($this, 'activate'));
    }

    public function activate(): void
    {
        if(!class_exists('FLBuilderLoader')){
            wp_die('Beaver Builder is not active. Please install and activate Beaver Builder');
        }
    }

    public function load_modules(): void
    {
        require SMARTA_MODULES . '/testimonials/testimonials.php';
    }
}

new Beaver_Testimonials_Widget();