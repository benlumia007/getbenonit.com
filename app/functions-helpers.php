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
        $manifest = app( 'mix' );
    
        // Make sure to trim any slashes from the front of the path.
        $path = '/' . ltrim( $path, '/' );
    
        if ( $manifest && isset( $manifest[ $path ] ) ) {
            $path = $manifest[ $path ];
        }
    
        return public_uri( $path );
    }
}

function primary_menu() { ?>
    <nav id="primary" class="menu-primary">
    <button class="menu-toggle"> <?= e( 'Menu' ); ?></button>
    <ul class="menu-items">
        <?php 
            $primaryMenu = config( 'custom.primary' );
            foreach ($primaryMenu as $primary ) : ?>
                <li class="menu-item"><a href="<?= $primary['link']; ?>"><?= $primary[ 'title' ]; ?></a></li>
            <?php endforeach; ?>
    </ul>
</nav>
<?php }

function body_class() {
    $path = Blush\App::resolve( 'router' )->path();

    if ( $path == '/' ) :
        return 'home';
    else :
        return 'single';
    endif;
}