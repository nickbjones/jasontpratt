<?php
  /*
    This page uses a separate controller to set variables, which can be used
    within this template file. This results in less logic in your templates,
    making them more readable. Learn more about controllers at:
    https://getkirby.com/docs/developer-guide/advanced/controllers
  */
?>
<?php snippet('header') ?>
  <main class="ns-blog" role="main">
    <div class="top">
      <div class="h1-wrapper"><h1 class="h1"><?= $page->title()->html() ?></h1></div>
      <?php if($pagination->page() == 1): ?>
        <div class="page-intro">
          <?= $page->intro()->kirbytext() ?>
        </div>
        <div class="divider"></div>
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
            <?php snippet('coverimage', $post) ?>
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
        <p>This blog does not contain any blogposts yet.</p>
      <?php endif ?>
    </div>
    <?php snippet('pagination') ?>
  </main>
<?php snippet('footer') ?>