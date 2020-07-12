<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->metaDescription()->html() ?>">
  <meta name="keywords" content="<?= $site->metaKeywords()->html() ?>">
  <link rel="shortcut icon" sizes="196x196" href="<?= site()->url() ?>/assets/images/afghanistan-flag.png">
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= site()->url() ?>/assets/images/afghanistan-flag.png">
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Calligraffitti|Caveat|Courgette|Damion|Kalam|Kaushan+Script|Nothing+You+Could+Do|Satisfy" rel="stylesheet">
  <?= css('assets/css/all_styles.css') ?>
  <script type="text/javascript" src="<?= site()->url() ?>/assets/js/jquery-2.1.1.min.js"></script>
  <?php snippet('ga') ?>
</head>
<body class="theme-<?= $site->theme() ?>">
  <header class="header" role="banner">
    <h1><a class="site-title" href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a></h1>
    <?php snippet('menu') ?>
  </header>