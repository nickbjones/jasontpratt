<?php snippet('header') ?>
  <main class="main" role="main">
    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->year() ?>
      </div>
      <hr />
    </header>
    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>
    <?php // snippet('prevnext') ?>
  </main>
<?php snippet('footer') ?>