<?php $engine->include( 'partials/header/page' ); ?>
<section id="content" class="site-content">
    <div id="layout" class="right-sidebar">
        <main id="primary" class="content-area">
            <?php $engine->includeWhen( $single, 'content/single' ) ?>
        </main>
        <aside id="secondary" class="widget-area">
            <div class="widget widget-categories">
                <h2 class="widget-title"><?= e( 'Categories' ); ?></h2>
            </div>
        </aside>
    </div>
</section>
<?php $engine->include( 'partials/footer/default' ); ?>