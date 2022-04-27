<?php
/**
 * Helpers
 *
 * This file is used as helpers.
 *
 * @package   benjlu.com
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2017-2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! function_exists( 'mix' ) ) {
    function mix( $path ) {

        // Get the Laravel Mix manifest.
        $manifest = \Blush\App::resolve( 'mix' );
    
        // Make sure to trim any slashes from the front of the path.
        $path = '/' . ltrim( $path, '/' );
    
        if ( $manifest && isset( $manifest[ $path ] ) ) {
            $path = $manifest[ $path ];
        }
    
        return public_uri( $path );
    }
}