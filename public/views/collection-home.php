<?php $engine->include( 'partials/header/home' ); ?>
<section id="content" class="site-content">
    <div id="layout" class="right-sidebar">
        <main id="primary" class="content-area">
            <?php $engine->each( 'content/default', $collection, 'entry' ); ?>
        </main>
        <aside id="secondary" class="widget-area">
            <div class="widget widget-categories">
                <h2 class="widget-title"><?= e( 'Categories' ); ?></h2>
                <ul>
                    <?php 
                        foreach ( $collection as $shit ) :
                            $tags = $shit->terms( 'tag' ) ?? '';
                        endforeach;

                        foreach ( $tags as $tag ) :
                            echo '<li><a href="' . $tag->uri() . '">' . $tag->title() . '</a></li>';
                            endforeach

                    ?>
                </ul>
            </div>
        </aside>
    </div>
</section>
<?php $engine->include( 'partials/footer/default' ); ?>