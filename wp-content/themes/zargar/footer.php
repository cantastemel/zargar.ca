<footer>
  <div class="row">
    <div class="medium-12 large-12 columns">
      <div class="footer-logo">
        <img alt="Zargar" src="<?php bloginfo('template_url'); ?>/assets/img/zargar_lawyers_sm@2x.png"/>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="medium-4 large-4 columns copyright">
      &copy; Copyright <?php echo date('Y'); ?> Zargar Lawyers<br>
      All Rights Reserved.<br>
      Website created by
      <a href="http://www.visuallime.com"><strong>Visual Lime</strong></a>
    </div>
    <div class="medium-4 large-4 columns address">
      <div class="phone_number">
        <a href="tel:1-604-558-6800"><img alt="phone-icon" src="<?php bloginfo('template_url'); ?>/assets/img/phone_icon_sm@2x.png"/>1-604-558-6800</a>
      </div>
      1012-1030 West Georgia Street, Vancouver<br> British Columbia, Canada V6E 2Y3
    </div>
    <div class="medium-4 large-4 columns social">
      <a href="https://www.linkedin.com/company/zargar-lawyers-business-strategists" target="_blank"><img alt="" src="<?php bloginfo('template_url'); ?>/assets/img/linkedin_icon@2x.png"/></a>
      <!-- <a href="#"><img alt="" src="<?php bloginfo('template_url'); ?>/assets/img/facebook_icon@2x.png"/></a> -->
     <!--  <a href="/contact-us/"><img alt="" src="<?php bloginfo('template_url'); ?>/assets/img/email_icon@2x.png"/></a> -->
    </div>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
<?php
if ( is_page_template( 'page-contact.php' ) ) {
?>
<script defer async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwNLRBedv1EECEQysDMlrHq6KmWpbppyM&callback=initMap"></script>
<?php
}
?>
</body>
</html>
