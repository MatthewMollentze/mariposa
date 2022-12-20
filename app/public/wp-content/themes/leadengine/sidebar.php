<?php
/**
 * Default Sidebar for Blog
 * @package leadengine
 * by KeyDesign
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

if ( is_active_sidebar( 'blog-sidebar' ) ) {
  dynamic_sidebar( 'blog-sidebar' );
}
