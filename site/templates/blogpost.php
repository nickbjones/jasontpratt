<?php if ($site->disabled() == 'false'): ?>
  <?php snippet('header') ?>
    <main class="ns-blogpost" role="main">
      <article class="article single wrap">
        <div class="article-header">
          <div class="pg-title-wrapper"><h2 class="pg-title"><?= $page->title()->html() ?></h2></div>
          <div class="date txt-center">
            <?= $page->date('F jS, Y') ?>
          </div>
        </div>
        <div class="text">
          <?= $page->text()->kirbytext() ?>
        </div>
      </article>
      <?php snippet('disqus') ?>
    </main>
  <?php snippet('footer') ?>
<?php else: ?>
  <?php snippet('comingsoon') ?>
<?php endif ?>