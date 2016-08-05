<?php
/*
Template Name: Work
*/
?>

<?php get_header(); ?>

<section class="page-content text-center">
  <div class="row">
    <div class="medium-10 medium-centered large-9 columns">
      <span class="title-helper">
        <?php if(get_field( "section_1_small_title" )!= "") { ?>
            <?php the_field('section_1_small_title'); ?>
        <?php } ?>
      </span>
      <h1>
        <?php if(get_field( "section_1_title" )!= "") { ?>
            <?php the_field('section_1_title'); ?>
        <?php } ?>
      </h1>
      <div class="seperator"></div>
      <div class="text-left">
        <?php if(get_field( "section_1_body" )!= "") { ?>
            <?php the_field('section_1_body'); ?>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
