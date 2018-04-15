<?php
  function buildWidget($name,$content) {
    $str = '<a class="social-icon '.$name.'" href="'.$content.'">';
    $str .= file_get_contents('svgs/'.$name.'.html',FILE_USE_INCLUDE_PATH);
    $str .= '</a>';
    echo $str;
  }
?>
  <?php snippet('scrollToBtn') ?>
  <footer class="footer" role="contentinfo">
    <div class="divider divider-lg"></div>
    <?php if (!site()->email()->empty()) : ?><p class="email"><a href="<?= site()->email() ?>"><?= site()->email() ?></a></p><?php endif; ?>
    <?php if (!site()->phone()->empty()) : ?><p class="phone"><a href="tel:<?= site()->phone() ?>"><?= site()->phone() ?></a></p><?php endif; ?>
    <?php if (!site()->facebook()->empty()) { buildWidget('facebook','https://www.facebook.com/'.site()->facebook()); } ?>
    <?php if (!site()->instagram()->empty()) { buildWidget('instagram','https://www.instagram.com/'.site()->instagram()); } ?>
    <?php if (!site()->twitter()->empty()) { buildWidget('twitter','https://twitter.com/'.site()->twitter()); } ?>
    <?php if (!site()->linkedin()->empty()) { buildWidget('linkedin','https://www.linkedin.com/in/'.site()->linkedin()); } ?>
    <?php if (!site()->youtube()->empty()) { buildWidget('youtube','https://www.youtube.com/channel/'.site()->youtube()); } ?>
    <p class="copyright">© <?= date('Y') ?> | Website built by <a href="http://nickbjones.net">Nick Jones</a></p>
  </footer>
</body>
</html>