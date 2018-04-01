<?php
  function widget($name,$content) {
    $str = '<a class="social-icon '.$name.'" href="'.$content.'">';
    $str .= file_get_contents('svgs/'.$name.'.html',FILE_USE_INCLUDE_PATH);
    $str .= '</a>';
    echo $str;
  }
?>
  <footer class="footer" role="contentinfo">
    <div class="divider divider-lg"></div>
    <?php if (!site()->email()->empty()) : ?><p class="email"><a href="<?= site()->email() ?>"><?= site()->email() ?></a></p><?php endif; ?>
    <?php if (!site()->phone()->empty()) : ?><p class="phone"><a href="tel:<?= site()->phone() ?>"><?= site()->phone() ?></a></p><?php endif; ?>
    <?php if (!site()->facebook()->empty()) { widget('facebook','https://www.facebook.com/'.site()->facebook()); } ?>
    <?php if (!site()->instagram()->empty()) { widget('instagram','https://www.instagram.com/'.site()->instagram()); } ?>
    <?php if (!site()->twitter()->empty()) { widget('twitter','https://twitter.com/'.site()->twitter()); } ?>
    <?php if (!site()->linkedin()->empty()) { widget('linkedin','https://www.linkedin.com/in/'.site()->linkedin()); } ?>
    <?php if (!site()->youtube()->empty()) { widget('youtube','https://www.youtube.com/user/'.site()->youtube()); } ?>
    <div class="divider divider-lg"></div>
    <p class="copyright">© <?= date('Y') ?> | Website built by <a href="http://nickbjones.net">Nick Jones</a></p>
  </footer>
</body>
</html>