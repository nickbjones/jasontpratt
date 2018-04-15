<script type="text/javascript">
  // quicklink script
  $(document).ready(function() {

    // animate scroll to anchor
    function scrollToAnchor() {
      event.preventDefault();
      var anchor = $(this).attr('href');
      $('html, body').animate({
        scrollTop: $(anchor).offset().top
      }, 500);
      history.pushState(null, null, anchor);
    }

    function initpage() {
      // scroll to anchor on page load
      if (window.location.hash.length > 0) {
        var anchor = window.location.hash;
        $('html, body').animate({
          scrollTop: $(anchor).offset().top
        }, 100);
      }
    }

    function initEventListeners() {
      $('body').on('click', '.quicklink', scrollToAnchor);
    }

    (function() {
      initpage();
      initEventListeners();
    })();
  });
</script>