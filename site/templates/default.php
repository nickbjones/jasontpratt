<?php if ($site->disabled() == 'false'): ?>
  <?php snippet('header') ?>
    <main class="ns-default" role="main">
      <div class="pg-title-wrapper"><h2 class="pg-title"><?= $page->title()->html() ?></h2></div>
      <?= $page->intro()->kirbytext() ?>
      <?= $page->text()->kirbytext() ?>
    </main>
  <?php snippet('footer') ?>
<?php else: ?>
  <?php snippet('comingsoon') ?>
<?php endif ?>