<?php
/*
Template Name: Contact us
*/
?>

<?php get_header(); ?>

<section class="page-content text-center ">
  <div class="row">
    <div class="medium-6 medium-centered columns">
      
        <?php if(get_field( "section_1_small_title" )!= "") { ?>
          <span class="title-helper">
            <?php the_field('section_1_small_title'); ?>
          </span>
        <?php } ?>
      
      <h1>
        <?php if(get_field( "section_1_title" )!= "") { ?>
            <?php the_field('section_1_title'); ?>
        <?php } ?>
      </h1>
      <div class="seperator"></div>
        <?php if(get_field( "section_1_body" )!= "") { ?>
            <?php the_field('section_1_body'); ?>
        <?php } ?>
    </div>
  </div>
</section>
<section class="page-content text-center ">
  <div class="row">
    <div class="small-12 medium-8 medium-centered  columns">
        <?php if(get_field( "section_2" )!= "") { ?>
            <?php the_field('section_2'); ?>
        <?php } ?>
    </div>
  </div>
</section>
<section class="map">
  <div id="map"></div>
</section>
<?php get_footer(); ?>
