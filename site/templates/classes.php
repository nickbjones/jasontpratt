<?php snippet('header') ?>
  <main class="ns-classes" role="main">
    <div class="top">
      <div class="h1-wrapper"><h1 class="h1"><?= $page->title()->html() ?></h1></div>
    </div>
    <div class="intro text">
    <?php if ($page->intro()->kirbytext() != '') { ?>
      <?= $page->intro()->kirbytext() ?>
      <div class="divider"></div>
    <?php } ?>
    </div>
    <?php snippet('showcase') ?>
    <div class="divider"></div>
  </main>
<?php snippet('footer') ?>