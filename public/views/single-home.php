<?php $engine->include( 'partials/header/default' ); ?>
<section id="about" class="site-content">
    <div class="left-sidebar">
        <main id="content" class="content-area">
            <article class="home">
                <header class="entry-header">
                    <h1 class="entry-title"><?= $single->title(); ?></h1>
                </header>
                <div class="entry-content">
                    <?= $single->content(); ?>
                </div>
            </article>
        </main>
        <aside id="aside" class="widget-area">
            <div class="widget widget-menu">
                <h2 class="widget-title">Platform</h2>
                
            </div>
        </aside>
    </div>
</section>
<?php $engine->include( 'partials/footer/default' ); ?>