<?php $engine->include( 'partials/header/default' ); ?>
<section id="content" class="site-content">
<?php
                    $categories = $single->terms( 'tag' );

                    foreach ( $categories as $category ) :
                        echo $category->title();
                        endforeach
                ?>
</section>
<?php $engine->include( 'partials/footer/default' ); ?>