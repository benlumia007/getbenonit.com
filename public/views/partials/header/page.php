<!doctype html>
<html>
<head>
    <?= $doctitle ? $doctitle->toHtml() : '' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?= mix( 'assets/css/screen.css' ); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;700&family=Merriweather:wght@400;700&family=Tangerine&display=swap" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body class="page">
<section id="container" class="site-container">
    <header id="masthead" class="site-header">
        <div class="branding-navigation">
            <div class="site-branding">
                <h1 class="site-title"><a href="<?= uri() ?>"><?= e( config( 'app.title' ) ) ?></a></h1>
                <span class="site-description"><?= e( config( 'app.tagline' ) ) ?></span>
            </div>
            <?= primary_menu(); ?>
        </div>
    </header>
    <div class="cover block-group">
        <header class="entry-header">
            <span class="entry-date"><?= $single->date(); ?></span>
            <h1 class="entry-title"><?= $single->title() ?></h1>
        </header>
    </div>
    