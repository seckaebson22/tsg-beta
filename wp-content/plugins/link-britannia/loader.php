<?php
/**
 * Plugin Name: Link Britannia
 * Plugin URI: http://www.xanda.net
 * Description: Site Plugin for additional functionality
 * Version: 1.0
 * Author: Xanda
 * Author URI: http://www.xanda.net
 */

if (!defined('ABSPATH'))
	die();

/**
 * Abort plugin loading if WordPress is upgrading
 */
if (defined('WP_INSTALLING') && WP_INSTALLING)
	return;

define('PREFIX', 'LB_');
define('LB_FILE', __FILE__);
define('LB_DIR', dirname(__FILE__));
define('LB_INC_DIR', dirname(__FILE__) . '/inc');

require_once (LB_INC_DIR . '/posttypes.php');
require_once (LB_INC_DIR . '/functions.php');
