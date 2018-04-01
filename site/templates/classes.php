<?php if ($site->disabled() == 'false'): ?>

<?php snippet('header') ?>
  <main class="ns-classes" role="main">
    <div class="top">
      <div class="pg-title-wrapper"><h2 class="pg-title"><?= $page->title()->html() ?></h2></div>
    </div>
    <div class="intro text">
    <?php if ($page->intro()->kirbytext() != '') { ?>
      <?= $page->intro()->kirbytext() ?>
      <div class="divider"></div>
    <?php } ?>
    </div>
    <?php snippet('showcase') ?>
  </main>
<?php snippet('footer') ?>

<?php else: ?>
<?php snippet('comingsoon') ?>
<?php endif ?>