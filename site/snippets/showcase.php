<?php

$classes = page('classes')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of classes:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $classes = $classes->limit($limit);

?>

<ul class="showcase grid gutter-1">

  <?php foreach($classes as $class): ?>

    <li class="showcase-item column">
        <a href="<?= $class->url() ?>" class="showcase-link">
          <?php if($image = $class->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $class->title()->html() ?>" class="showcase-image" />
          <?php endif ?>
          <div class="showcase-caption">
            <h3 class="showcase-title"><?= $class->title()->html() ?></h3>
          </div>
        </a>
    </li>

  <?php endforeach ?>

</ul>