<?php snippet('header') ?>
  <main class="ns-home" role="main">
    <div class="h1-wrapper"><h1 class="h1"><?= $page->welcome() ?></h1></div>
    <div class="">
      <?= $page->intro()->kirbytext() ?>
    </div>
    <div class="divider"></div>
    <div class="">
      <h2>Office Hours</h2>
      <?= $page->officeHours()->kirbytext() ?>
    </div>
    <div class="divider"></div>
    <div class="">
      <h2>Publications</h2>
      <?= $page->publications()->kirbytext() ?>
    </div>
    <div class="divider"></div>
    <div id="cv">
      <h2>CV</h2>
      <?= $page->cv()->kirbytext() ?>
    </div>
    <div class="divider"></div>
  </main>
<?php snippet('footer') ?>