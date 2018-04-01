<?php if ($site->disabled() == 'false'): ?>
  <?php snippet('header') ?>
    <main class="ns-home" role="main">
      <div class="welcome-image"><img src="<?= page()->url().'/content/home/'.$page->coverImage() ?>"></div>
      <?= $page->intro()->kirbytext() ?>
      <div class="quicklinks">
        <a class="quicklink" href="#cv">CV</a>
        <a class="quicklink" href="#publications">Publications</a>
        <a class="quicklink" href="#office-hours">Office Hours</a>
      </div>
      <div class="divider"></div>
      <h2 id="cv">CV</h2>
      <?= $page->cv()->kirbytext() ?>
      <div class="divider"></div>
      <h2 id="publications">Publications</h2>
      <?= $page->publications()->kirbytext() ?>
      <div class="divider"></div>
      <h2 id="office-hours">Office Hours</h2>
      <?= $page->officeHours()->kirbytext() ?>
    </main>
  <?php snippet('footer') ?>
<?php else: ?>
  <?php snippet('comingsoon') ?>
<?php endif ?>