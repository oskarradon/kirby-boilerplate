    <footer>
      <p class="copyright"><?= $site->copyright() ?></p>
    </footer>

    <!-- Vendor JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Author JS -->
    <?= js('assets/js/vendor/basicLightbox.min.js') ?>
    <?= js('assets/js/site.js', ['type' => 'module']) ?>
    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
      window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
      ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>

  </body>
</html>

