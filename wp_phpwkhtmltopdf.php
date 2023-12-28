<?php
/**
 * PHP wkhtmltopdf wrapper plugin for WordPress
 *
 * Plugin Name:  WP PHP wkhtmltopdf
 * Description:  PHP wkhtmltopdf wrapper plugin for WordPress
 * Version:      1.0
 * Plugin URI:   https://github.com/andyplak/wp-phpwkhtmltopdf
 * Author:       Andy Place
 * Author URI:   http://andyplace.co.uk
 * Requires PHP: 7.4
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once 'vendor/autoload.php';