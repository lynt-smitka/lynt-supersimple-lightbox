<?php
/**
 * Plugin Name: Lynt SuperSimple Lightbox
 * Plugin URI: https://github.com/lynt-smitka/lynt-supersimple-lightbox
 * Description: Simple & light lightbox for Gutenberg block images and galleries
 * Version: 1.0.0
 * Author: Vladimir Smitka
 * Author URI: https://lynt.cz
 * License: GPL2
*/

// If this file is called directly, abort.
if (! defined("WPINC")) {
  die;
   } 

if (!class_exists("LyntSuperSimpleLightbox")) {

class LyntSuperSimpleLightbox {

    function __construct() {
    add_action('wp_enqueue_scripts',    array($this, 'load_assets'));
    }
    
    public function load_assets() {
        wp_enqueue_script('supersimplelightbox-js',  plugins_url('supersimple-lightbox.min.js',  __FILE__), array('jquery'), '1.17.3', true);
        wp_enqueue_style ('supersimplelightbox-css', plugins_url('supersimple-lightbox.min.css', __FILE__));
    }
}

new LyntSuperSimpleLightbox;
  
} 
 