<?php

/*
Plugin Name: Sudo Juice Admin Theme
Plugin URI: http://www.sudo-juice.com/wordpress-admin-dashboard-theme-plugin
Description: Sudo Juice WordPress Admin Theme - Upload and Activate!
Author: Gareth Parmar
Version: 1.0
Author URI: http://www.sudo-juice.com
*/

function juicy_style() {
  echo '<link rel="stylesheet" type="text/css" href="' .plugins_url('juicy.css', __FILE__). '">';
}

add_action('admin_head', 'juicy_style');

?>