<?php

/**
 * Plugin Name: Stable
 * Plugin URI: https://bozdev.com/
 * Description: Ready-made WordPress plugin infrastructure that can be used over and over again.
 * Version: 0.0.1
 * Author: Onur BOZ
 * Author URI: https://onurboz.com/
 * Text Domain: stable
 * 
 * Requires PHP: 5.0
 * 
 * @package Stable
 */

// Exit if ABSPATH is Undefined
defined('ABSPATH') || exit;

/** Define ST_FILE as this file */
if (!defined('ST_FILE')) {
  define('ST_FILE', __FILE__);
}

/** Define ST_PATH as this file's directory */
if (!defined('ST_PATH')) {
  if (file_exists(__DIR__ . '/stable.php')) {
    define('ST_PATH', __DIR__ . '/');
  } else {
    define('ST_PATH', dirname(__FILE__) . '/');
  }
}

// Exit if file not exists
file_exists(ST_PATH . 'stable.php') || exit;

/** Define ST_INC as `st-includes`'s directory */
if (!defined('ST_INC')) {
  define('ST_INC', ST_PATH . 'st-includes/');
}

// Exit if add_action is Undefined Function
function_exists('add_action') || exit;

// Exit if file not exists
file_exists(ST_INC . 'st-load.php') || exit;

/**
 * Load the Stable Environment
 *
 * @package Stable
 */
include_once(ST_INC . 'st-load.php');

// Global for backwards compatibility.
$GLOBALS['ST'] = ST();
