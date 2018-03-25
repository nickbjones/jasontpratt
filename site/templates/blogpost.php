<?php snippet('header') ?>
  <main class="ns-blogpost" role="main">
    <article class="article single wrap">
      <div class="article-header">
        <div class="h1-wrapper"><h1 class="h1"><?= $page->title()->html() ?></h1></div>
        <div class="date txt-center">
          <?= $page->date('F jS, Y') ?>
        </div>
      </div>
      <?php snippet('coverimage', $page) ?>
      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>
    </article>
    <div class="divider"></div>
  </main>
<?php snippet('footer') ?>