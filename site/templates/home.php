<?php if ($site->disabled() == 'false'): ?>
  <?php snippet('header') ?>
    <main class="ns-home" role="main">
      <?php if ($page->coverImage()->isNotEmpty()): ?>
        <div class="welcome-image"><img src="<?= page()->url().'/content/home/'.$page->coverImage() ?>"></div>
      <?php endif ?>
      <?= $page->intro()->kirbytext() ?>
      <div class="quicklinks">
        <a class="quicklink" href="#cv">CV</a>
        <a class="quicklink" href="#publications">Publications</a>
        <a class="quicklink" href="#office-hours">Office Hours</a>
      </div>
      <div class="divider"></div>
      <div class="anchor" id="cv"></div>
      <h2>CV</h2>
      <?= $page->cv()->kirbytext() ?>
      <div class="divider"></div>
      <div class="anchor" id="publications"></div>
      <h2>Publications</h2>
      <?= $page->publications()->kirbytext() ?>
      <div class="divider"></div>
      <div class="anchor" id="office-hours"></div>
      <h2>Office Hours</h2>
      <?= $page->officeHours()->kirbytext() ?>
    </main>
  <?php snippet('scripts/quicklink') ?>
  <?php snippet('footer') ?>
<?php else: ?>
  <?php snippet('comingsoon') ?>
<?php endif ?>