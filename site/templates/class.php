<?php if ($site->disabled() == 'false'): ?>

<?php snippet('header') ?>
  <main class="ns-class" role="main">
    <div class="top">
      <div class="pg-title-wrapper"><h2 class="pg-title"><?= $page->title()->html() ?></h2></div>
      <p class="class-term"><?= $page->term() ?>, <?= $page->year() ?></p>
    </div>
    <div class="body">
      <?php if ($page->intro()->isNotEmpty()): ?>
        <div class="divider"></div>
        <p><?= $page->intro()->kirbytext() ?></p>
      <?php endif ?>
      <?php if ($page->syllabus()->isNotEmpty()): ?>
        <div class="divider"></div>
        <h2>Syllabus</h2>
        <p><?= $page->syllabus()->kirbytext() ?></p>
      <?php endif ?>
      <?php if ($page->schedule()->isNotEmpty()): ?>
        <div class="divider"></div>
        <h2>Schedule</h2>
        <?php foreach($page->schedule()->toStructure() as $event): ?>
          <h4 class="class-date-title"><?= $event->date('F jS, Y') ?></h4>
          <div class="indent"><?= $event->text()->kirbytext() ?></div>
        <?php endforeach ?>
      <?php endif ?>
      <?php if ($page->notes()->isNotEmpty()): ?>
        <div class="divider"></div>
        <h2>Notes</h2>
        <?php foreach($page->notes()->toStructure() as $note): ?>
          <h4 class="class-date-title"><?= $note->date('F jS, Y') ?></h4>
          <div class="indent"><?= $note->text()->kirbytext() ?></div>
        <?php endforeach ?>
      <?php endif ?>
    </div>
    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>
  </main>
<?php snippet('footer') ?>

<?php else: ?>
<?php snippet('comingsoon') ?>
<?php endif ?>