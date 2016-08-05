<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.png"> -->
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-73444668-1', 'auto');
          ga('send', 'pageview');
        </script>
    </head>
    <body <?php body_class(); ?>>
      <nav class="mobile-nav pushy pushy-left" role="mobile-navigation">
        <?php wp_nav_menu( array('menu' => 'Mobile Menu' ));?>
      </nav>
      <div class="site-overlay"></div>
    <div id="contentarea">
      <header>
        <div class="row">
          <div class="large-12 columns">
            <div class="branding left">
              <a href="/"><img alt="Zargar" class="logo" height="70" src="<?php bloginfo('template_url'); ?>/assets/img/zargar_logo_lg@2x.png" width="275"></a>
            </div>
            <div class="menu-btn right">&#9776; Menu</div>
            <nav class="nav main-nav right">
              <?php wp_nav_menu( array('menu' => 'Main nav' ));?>
            </nav>
            <div class="phone_number">
              <a href="tel:1-604-558-6800"><img alt="phone-icon" src="<?php bloginfo('template_url'); ?>/assets/img/phone_icon_sm@2x.png"/>1-604-558-6800</a>
            </div>
          </div>
        </div>
      </header>
