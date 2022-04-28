<article class="single">
    <header class="entry-header">
        <span class="entry-date"><?= $entry->date(); ?></span>
        <h1 class="entry-title"><a href="<?= $entry->uri(); ?>"><?= $entry->title(); ?></a></h1>
    </header>
    <div class="entry-content">
        <?= $entry->excerpt(); ?>
    </div>
</article>

