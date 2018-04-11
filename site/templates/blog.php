<?php
  /*
    This page uses a separate controller to set variables, which can be used within this template file.
    This results in less logic in your templates, making them more readable.
    Learn more about controllers at:
      https://getkirby.com/docs/developer-guide/advanced/controllers
  */
?>
<?php if ($site->disabled() == 'false'): ?>
  <?php snippet('header') ?>
    <main class="ns-blog" role="main">
      <div class="top">
        <div class="pg-title-wrapper"><h2 class="pg-title"><?= $page->title()->html() ?></h2></div>
        <?php if($pagination->page() == 1): ?>
          <div class="page-intro">
            <?= $page->intro()->kirbytext() ?>
          </div>
          <div class="divider divider-lg"></div>
        <?php endif ?>
      </div>
      <div class="snippets">
        <?php if($blogposts->count()): ?>
          <?php foreach($blogposts as $post): ?>
            <article class="snippet">
              <div class="snippet-header">
                <a class="snippet-title" href="<?= $post->url() ?>"><?= $post->title()->html() ?></a>
                <p class="snippet-date"><?= $post->date('F jS, Y') ?></p>
              </div>
              <div class="text">
                <?php if ($post->text()->empty()): ?>
                  <p class="txt-center">
                    <a href="<?= $post->url() ?>" class="snippet-more">read...</a>
                  </p>
                <?php else: ?>
                  <p>
                    <?= $post->text()->kirbytext()->excerpt(50, 'words') ?>
                    <a href="<?= $post->url() ?>" class="snippet-more">read more</a>
                  </p>
                <?php endif ?>
              </div>
            </article>
            <div class="divider"></div>
          <?php endforeach ?>
        <?php else: ?>
          <p class="txt-center">Please check back later for new blogs!</p>
        <?php endif ?>
      </div>
      <?php snippet('pagination') ?>
    </main>
  <?php snippet('footer') ?>
<?php else: ?>
  <?php snippet('comingsoon') ?>
<?php endif ?>