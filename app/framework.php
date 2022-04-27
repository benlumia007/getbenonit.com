<?php
/**
 * Framework instance
 * 
 * This file is used to create a new framework instance and adds specific features to the theme.
 * 
 * @package   getbenonit.com
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2019-2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://getbenonit.com
 */

/**
 * Create a new application.
 * 
 * Creates or gets the instance of the Blush application. 
 * Access this instance via the `app()` function or `Blush\App` 
 * static class after the application has booted.
 */
$app = new Blush\Core\Application( dirname( __DIR__ ) );

/**
 * Bootstrap the application
 * 
 * Calls the application `boot()`, which launches the application.
 */
$app->boot();

/**
 * Run the application
 * 
 * Get the router, which handles the current request, and send the response
 * back to the browser.
 */
$app->make( 'routing.router' )->response()->send();