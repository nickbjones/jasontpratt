<?php snippet('header') ?>
  <main class="ns-default" role="main">
    <div class="h1-wrapper"><h1 class="h1"><?= $page->title()->html() ?></h1></div>
      <?= $page->intro()->kirbytext() ?>
    <div class="divider"></div>
    <?= $page->text()->kirbytext() ?>
  </main>
<?php snippet('footer') ?>