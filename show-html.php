<?php
/*
* Plugin Name: Show HTML
* Plugin URI: http://joycetipping.com
* Description: A shortcode for displaying verbatim HTML.
* Version: 1.0
* Author: Joyce Tipping
* Author URI: http://joycetipping.com
* License: MIT
* */

function html ($atts, $content) {
  $content = preg_replace ('/</', '&lt;', $content);
  $content = preg_replace ('/>/', '&gt;', $content);
  return $content;
}

add_shortcode ('html', 'html');

?>
