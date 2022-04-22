<?php
/**
 * Enqueue stylesheets
 *
* @author Aaron Mangaram
* @version 1.0
* @since 7 Jul 2014
 */
function xtheme_admin_styles(){
	wp_enqueue_style('xtheme-admin-css', plugins_url('/css/admin.css', XX_FILE));
}
//add_action('admin_enqueue_scripts','xtheme_admin_styles');

/**
 * Enqueue scripts
 *
 * @author Aaron Mangaram
 * @version 1.0
 * @since 7 Jul 2014
 */
function xtheme_admin_scripts(){
	wp_enqueue_script('jquery');
	wp_enqueue_script('xtheme-admin-js', plugins_url('/js/admin.js', XX_FILE));
}
//add_action('admin_enqueue_scripts','xtheme_admin_scripts');
