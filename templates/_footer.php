<footer>
<hr id="footer-hr">
<div id="footer-content-wrapper">
  <div class="footer-content" style="text-align:left">
    Borthwick Institute for Archives<br>
    University of York, Heslington, York, YO10 5DD, UK <br>
    Tel: 01904 321166 | <a href="mailto:borthwick-institute@york.ac.uk">borthwick-institute@york.ac.uk</a>
  </div>
  <div class="footer-content" style="text-align:center; vertical-align: middle">
    <img src="/plugins/arBorthwickB5Plugin/images/Borthwick_Crest-RGB.png" alt="Borthwick logo" title="Borthwick logo">
  </div>
  <div class="footer-content" style="text-align:right">
    <a href="/accessibility">Accessibility</a> | <a href="/harmful-language-statement">Harmful Language Statement</a><br>
    <a href="//www.york.ac.uk/about/legal-statements/">Legal statements</a> | <a href="//www.york.ac.uk/borthwick/contact/">Catalogue feedback</a><br>
    University of York
  </div>
</div>

  <?php if (QubitAcl::check('userInterface', 'translate')) { ?>
    <?php echo get_component('sfTranslatePlugin', 'translate'); ?>
  <?php } ?>

  <?php echo get_component_slot('footer'); ?>

  <div id="print-date">
    <?php echo __('Printed: %d%', ['%d%' => date('Y-m-d')]); ?>
  </div>

  <div id="js-i18n">
    <div id="read-more-less-links"
      data-read-more-text="<?php echo __('Read more'); ?>"
      data-read-less-text="<?php echo __('Read less'); ?>">
    </div>
  </div>

</footer>

<?php $gaKey = sfConfig::get('app_google_analytics_api_key', ''); ?>
<?php if (!empty($gaKey)) { ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $gaKey; ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    <?php include_slot('google_analytics'); ?>
    gtag('config', '<?php echo $gaKey; ?>');
  </script>
<?php } ?>
