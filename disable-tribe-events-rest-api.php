<?php

declare(strict_types=1);

/**
 * Plugin Name: Yard | Disable Tribe Events REST API
 * Plugin URI: https://github.com/yardinternet/disable-tribe-events-rest-api
 * Description: Disables the Tribe Events REST API in WordPress
 * Author: Yard | Digital Agency
 * Author URI: https://www.yard.nl
 * Version: 1.0.0
 * License: EUPL-1.2
 */
if (! defined('WPINC')) {
	exit;
}

add_filter('tribe_events_rest_api_enabled', '__return_false');

