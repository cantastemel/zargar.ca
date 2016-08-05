<?php
/*
Template Name: Careers
*/
?>

<?php get_header(); ?>

<section class="inner hero">
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
        <?php if(get_field( "section_1_body" )!= "") { ?>
            <?php the_field('section_1_body'); ?>
        <?php } ?>
    </div>
  </div>
</section>

<section class="content_block_centered page-content">
  <div class="row">
    <div class="medium-10 medium-centered large-9 columns">
      <span class="title-helper">
        <?php if(get_field( "section_2_small_title" )!= "") { ?>
            <?php the_field('section_2_small_title'); ?>
        <?php } ?>
      </span>
      <h1>
        <?php if(get_field( "section_2_title" )!= "") { ?>
            <?php the_field('section_2_title'); ?>
        <?php } ?>
      </h1>
      <div class="seperator"></div>
      <div class="text-left">
        <?php if(get_field( "section_2_body" )!= "") { ?>
            <?php the_field('section_2_body'); ?>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
