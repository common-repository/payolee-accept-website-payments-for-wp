<?php
/*
Plugin Name: Payolee Website Payments for WP
Plugin URI: http://www.payolee.com/wordpress
Description: Accept One-time or recurring payments on your wordpress website.
Version: 1.0
Tags: recurring payments, credit, credit card, payments, recurring, recurring billing, stripe, subscription, subscription box, widget, subscription club, payment button, donate, donate button, services, billing, embeds, embed, payolee, payment, shortcode, subscription billing, plugin, payment plugin, accept payments, online, online payments, website payments, donation, pay now
Author URI: https://profiles.wordpress.org/payolee/
Author:Payolee

/--------------------------------------------------------------------\
|                                                                    |
| License: GPL                                                       |
|                                                                    |
| WordPress Payolee Embeds - embeds via Shortcodes.                |
| Copyright (C) 2016, Payolee,                                     |
| http://Payolee.com                                               |
| All rights reserved.                                               |
|                                                                    |
| This program is free software; you can redistribute it and/or      |
| modify it under the terms of the GNU General Public License        |
| as published by the Free Software Foundation; either version 2     |
| of the License, or (at your option) any later version.             |
|                                                                    |
| This program is distributed in the hope that it will be useful,    |
| but WITHOUT ANY WARRANTY; without even the implied warranty of     |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the      |
| GNU General Public License for more details.                       |
|                                                                    |
| You should have received a copy of the GNU General Public License  |
| along with this program; if not, write to the                      |
| Free Software Foundation, Inc.                                     |
| 51 Franklin Street, Fifth Floor                                    |
| Boston, MA  02110-1301, USA                                        |   
|                                                                    |
\--------------------------------------------------------------------/
*/


// protect yourself
if ( !function_exists( 'add_action') ) {
  echo "Hi there! Nice try. Come again.";
  exit;
}

class payolee_wp {
  // when object is created
  function __construct() {
    add_action('admin_menu', array($this, 'payolee_admin_menu')); // add item to menu
  }

  // make menu
  function payolee_admin_menu() {
    add_submenu_page('tools.php', 'Payolee Embeds', 'Payolee', 'switch_themes', __FILE__,array($this, 'payolee_settings_page'), '', '');
  }

  // create page for output and input
  function payolee_settings_page() {
    include('page.php');
  }




}

new payolee_wp();
include('shortcodes.php');