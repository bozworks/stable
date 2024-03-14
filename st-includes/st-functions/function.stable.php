<?php

/**
 * Main Stable Function
 * 
 * @since   0.0.1
 * @package Stable
 */

// Exit if ST_PATH is Undefined
defined('ST_PATH') || exit;

if (!function_exists('ST')) {
  /**
   * Returns the main instance of Stable.
   *
   * @since 0.0.1
   * @param array|object|string $args Optional. Value to merge with `self::defaults`.
   *                                  Default: Empty array.
   * @return Stable Singleton Stable Instance
   */
  function ST($args = array())
  {
    return Stable::instance($args);
  }
}

if (!function_exists('st_console_log')) {
  /**
   * Simple helper to debug to the console.
   * 
   * It is used to log into the console with PHP 
   * by making use of JavaScript.
   * 
   * @category    PHP
   * 
   * @since 0.0.1
   * @param mixed|object|array|string $data Value to log to console. Required, Default: NULL
   * @param string $context Description. Optional, Default: ''
   * 
   * @return void
   * 
   * @version 1.0
   * @author Onur Boz <hi@onurboz.com>
   * @copyright (c) 2022 Boz
   * @license MIT License, https://onurboz.com/mit
   * @link https://bozdev.vom
   */
  function st_console_log($data = null, $context = '')
  {
    // Buffering to solve problems frameworks, like header() in this and not a solid return.
    ob_start();

    $output  = $context ? 'console.info(\'' . $context . ':\');' : '';
    $output .= 'console.log(' . json_encode($data) . ');';
    $output  = sprintf('<script>%s</script>', $output);

    echo $output;
  }
}
