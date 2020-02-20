<?php
/**
 * Plugin Name: Disable RankMath Search
 * Plugin URI: https://bidwellwebsites.com/
 * Description: Removes sitelinks searchbox structured data inserted by RankMath
 * Version: 1.0
 * Author: Mason Wiley
 * Author URI: https://bidwellwebsites.com/
 */

function mw_disable_rankmath_search( $val ) {
  return true;
}

add_filter( 'rank_math/json_ld/disable_search', 'mw_disable_rankmath_search', 10, 1 );