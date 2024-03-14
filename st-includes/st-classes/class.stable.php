<?php

/**
 * Main Stable Class
 * 
 * @since   0.0.1
 * @package Stable
 */

// Exit if ST_PATH is Undefined
defined('ST_PATH') || exit;

/**
 * Stable
 *
 * @class Stable
 */
final class Stable
{
  /**
   * Stable defaults
   *
   * @since 0.0.1
   * @static
   * @var array
   */
  protected static $defaults = array(
    'name' => 'Stable',
    /** Enter default options here in array */
  );

  /**
   * Stable options
   *
   * @since 0.0.1
   * @var array
   */
  protected $options = array();

  /**
   * The single instance of the class.
   *
   * @since 0.0.1
   * @static
   * @var Stable
   */
  protected static $instanced = null;

  /**
   * Main Stable Instance
   * Ensures only one instance of Stable is loaded or can be loaded.
   *
   * @since 0.0.1
   * @static
   * @see ST()
   * @param array|object|string $args Optional. Value to merge with `self::defaults`.
   *                                  Default: Empty array.
   * @return Stable Singleton Stable Instance
   */
  public static function instance($args = array())
  {
    if (is_null(self::$instanced)) {
      self::$instanced = new self($args);
    }
    return self::$instanced;
  }

  /**
   * Stable Constructor
   * 
   * @since 0.0.1
   * @param array|object|string $args Optional. Value to merge with `self::defaults`.
   *                                  Default: Empty array.
   * 
   * @return Stable Stable Instance
   */
  public function __construct(array $args = array())
  {
    $this->options = (array) wp_parse_args($args, self::$defaults);
  }

  /**
   * Returns the options of the instance
   * 
   * @since 0.0.1
   * 
   * @return array Full list of options
   */
  public function get_options()
  {
    return $this->options;
  }

  /**
   * Returns the value of a given option
   * 
   * @since 0.0.1
   * @param string $key Optional. Option name.
   *                    Default: `'name'`.
   * 
   * @return array Full list of options
   */
  public function get_option(string $key = 'name')
  {
    return (is_array($this->options) && array_key_exists($key, $this->options)) ? $this->options[$key] : null;
  }
}
