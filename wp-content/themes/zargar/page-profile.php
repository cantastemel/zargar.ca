<?php
/*
Template Name: Profile
*/
?>

<?php get_header(); ?>
<div class="profile-template">

<?php if(get_field( "small_profile_image" )!= "") { ?>
  <style type="text/css" media="screen">
    .profile-title--mobile{
      background-image: url(<?php the_field('small_profile_image'); ?>);
    }
  </style>
<?php } ?>

  <div class="profile-title--mobile">
      <div class="p-name">
        <?php if(get_field( "name" )!= "") { ?>
            <?php the_field('name'); ?>
        <?php } ?>
      </div>
      <div class="p-title">
        <?php if(get_field( "title" )!= "") { ?>
            <?php the_field('title'); ?>
        <?php } ?>
      </div>
  </div>
  <section class="page-content">
    <div class="row">
      <div class="small-12 medium-8 columns">
        <div class="profile-title">
          <div class="p-name">
            <?php if(get_field( "name" )!= "") { ?>
                <?php the_field('name'); ?>
            <?php } ?>
          </div>
          <div class="p-title">
            <?php if(get_field( "title" )!= "") { ?>
                <?php the_field('title'); ?>
            <?php } ?>
          </div>
        </div>
        <div class="line-short"></div>

        <div class="profile-contact">
        <?php if(get_field( "phone" )!= "") { ?>
          <span class="p-phone"><a href="tel:<?php the_field('phone'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/profile/phone_icon@2x.png"> <?php the_field('phone'); ?></span></a> 
        <?php } ?>
        <?php if(get_field( "email" )!= "") { ?>
          <span class="p-email"><a href="mailto:<?php the_field('email'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/profile/mail_icon@2x.png"> <?php the_field('email'); ?></span></a> 
        <?php } ?>
        <?php if(get_field( "vcard" )!= "") { ?>
          <span class="p-vcard"><a href="<?php the_field('vcard'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/profile/download_icon@2x.png"> download v-card</span></a> 
        <?php } ?>
        </div>
        <?php
        if( have_rows('social_media') ):
        ?>
        <div class="profile-social">
          <?php
              while ( have_rows('social_media') ) : the_row();
          ?>
            <span class="p-social"><a href="<?php the_sub_field('social_url'); ?>"><img src="<?php the_sub_field('social_icon'); ?>"></a></span> 
            <?php endwhile; ?>
        </div>
        <?php
        endif;
        ?>

        <div class="line-short"></div>
      </div>
    </div>
    <div class="row">
      <div class="small-12 medium-7 large-8 columns">
        <div class="row">
          <div class="small-12 medium-7 columns">
            <div class="profile-body">
            <?php if(get_field( "body_text" )!= "") { ?>
                <?php the_field('body_text'); ?>
            <?php } ?>
            </div>
          </div>
          <div class="small-12 medium-5 columns">
            <div class="profile-info">
            <?php if(get_field( "side_text" )!= "") { ?>
                <?php the_field('side_text'); ?>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php if(get_field( "full_background_image" )!= "") { ?>
  <div class="fs_bg" style="background-image: url(<?php the_field('full_background_image'); ?>);"></div>
<?php } ?>

  

<?php get_footer(); ?>
