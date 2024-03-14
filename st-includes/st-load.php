<?php

/**
 * It will set up the Stable environment
 *
 * @since   0.0.1
 * @package Stable
 */

// Exit if ST_PATH is Undefined
defined('ST_PATH') || exit;

/**
 * Load the Stable class library
 *
 * @package Stable
 */
if (!class_exists('Stable', false)) {
  include_once(ST_INC . 'st-classes/class.stable.php');
}

/**
 * Load the Stable function library
 *
 * @package Stable
 */
if (!function_exists('ST')) {
  include_once(ST_INC . 'st-functions/function.stable.php');
}
