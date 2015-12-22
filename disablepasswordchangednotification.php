<?php
/*
Plugin Name: Disable Password Changed Notification
Plugin URI: http://focus.ch
Description: Disable the Passwort changed Notification introduced in Wordpress 4.3
Version: 0.1
Author: Focus Web Development GmbH
Author URI: http://focus.ch
License: GPLv3
*/
defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );

add_filter( 'send_password_change_email', '__return_false');