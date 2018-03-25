<?php snippet('header') ?>
  <main class="ns-class" role="main">
    <div class="top">
      <div class="h1-wrapper"><h1 class="h1"><?= $page->title()->html() ?></h1></div>
      <p class="class-term"><?= $page->term() ?>, <?= $page->year() ?></p>
    </div>
    <div class="body">
      <div class="divider"></div>
      <h2>Syllabus</h2>
      <p><?= $page->syllabus()->kirbytext() ?></p>
      <div class="divider"></div>
      <h2>Schedule</h2>
      <?php foreach($page->schedule()->toStructure() as $event): ?>
        <h4 class="class-date-title"><?= $event->date('F jS, Y') ?></h4>
        <div class="indent"><?= $event->text()->kirbytext() ?></div>
      <?php endforeach ?>
      <div class="divider"></div>
      <!-- <?php foreach($page->documents()->filterBy('extension', 'pdf') as $pdf): ?> -->
        <!-- <p><a href="<?= $pdf->url() ?>">seating chart</a></p> -->
      <!-- <?php endforeach ?> -->
      <!-- <div class="divider"></div> -->
      <h2>Notes</h2>
      <?php foreach($page->notes()->toStructure() as $note): ?>
        <h4 class="class-date-title"><?= $note->date('F jS, Y') ?></h4>
        <div class="indent"><?= $note->text()->kirbytext() ?></div>
      <?php endforeach ?>
      <div class="divider"></div>
    </div>
    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>
  </main>
<?php snippet('footer') ?>