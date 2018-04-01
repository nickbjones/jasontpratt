<?php if ($page->disqus() == '1'): ?>
  <?php
    if(!isset($disqus_title))      $disqus_title = $page->title();
    if(!isset($disqus_identifier)) $disqus_identifier = $page->uri();
    if(!isset($disqus_url))        $disqus_url = thisURL();
    $disqus_title     = addcslashes($disqus_title, "'");
  ?>
  <div id="disqus_thread"></div>
  <script type="text/javascript">
    var disqus_shortname  = 'jason-10';
    var disqus_title      = '<?= html($disqus_title) ?>';
    var disqus_identifier = '<?= $disqus_identifier ?>';
    var disqus_url        = '<?= $disqus_url ?>';
    var disqus_developer  = 'false';
    (function() {
      var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
      dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
  </script>
  <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments.</a></noscript>
<?php endif ?>