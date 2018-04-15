<div id="scroll-to-top"><span class="icon">&uarr;</span></div>
<script type="text/javascript">
  // scroll-to button
  $(document).ready(function() {

    // check scroll location
    function checkScrollLocation() {
      if (window.pageYOffset > 1000) {
        $('#scroll-to-top').show();
      } else {
        $('#scroll-to-top').hide();
      }
    }

    // scroll to top of page
    function scrollToTop() {
      $('html, body').animate({
        scrollTop: 0
      }, 500);
    }

    function initpage() {
      checkScrollLocation();
    }

    function initEventListeners() {
      $(window).on('scroll', checkScrollLocation);
      $('body').on('click', '#scroll-to-top', scrollToTop);
    }

    (function() {
      initpage();
      initEventListeners();
    })();
  });
</script>