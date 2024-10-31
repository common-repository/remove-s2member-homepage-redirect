<?php
/** * Plugin Name: Remove s2member Homepage Redirect 
	* Version: 1.0.0 
	* Plugin URI: https://gplchimp.com/
	* Author: toddgassaway
 	* Author URI: https://gplchimp.com/
	* Description: Disable automatic redirect for s2member 
	* Requires at least: 3.7 
	* Tested up to: 4.9.4  */
	
add_filter("ws_plugin__s2member_login_redirect", "remove_s2_homepage_redirect", 10, 2);
function remove_s2_homepage_redirect($redirect, $vars = array()) { return $false;}
?>