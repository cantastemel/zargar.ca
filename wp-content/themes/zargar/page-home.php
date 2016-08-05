<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

<section class="content_block_centered home-masthead">
  <div class="row">
    <div class="medium-10 medium-centered large-9 columns">
      <?php if(get_field( "home_top_section" )!= "") { ?>
            <?php the_field('home_top_section'); ?>
      <?php } ?>
    </div>
  </div>
</section>

<section class="content_block_centered">
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
        <?php if(get_field( "section_2_body" )!= "") { ?>
            <?php the_field('section_2_body'); ?>
        <?php } ?>
    </div>
  </div>
</section>

<section class="content_block_centered">
  <div class="row">
    <div class="medium-10 medium-centered large-9 columns">
      <span class="title-helper">
        <?php if(get_field( "section_3_small_title" )!= "") { ?>
            <?php the_field('section_3_small_title'); ?>
        <?php } ?>
      </span>
      <h1>
        <?php if(get_field( "section_3_title" )!= "") { ?>
            <?php the_field('section_3_title'); ?>
        <?php } ?>
      </h1>
      <div class="seperator"></div>
        <?php if(get_field( "section_3_body" )!= "") { ?>
            <?php the_field('section_3_body'); ?>
        <?php } ?>
    </div>
  </div>
  <div class="practice-areas row">


<?php
if( have_rows('practice_areas_list') ):
?>

<ul class="small-block-grid-2 medium-block-grid-2 large-block-grid-4">

  <?php
      while ( have_rows('practice_areas_list') ) : the_row();
  ?>

    <li class="practice-area">
      <a href="<?php the_sub_field('practice_url'); ?>">
        <div class="expertise-icon">
          <img src="<?php the_sub_field('practice_icon'); ?>">
        </div>
        <div class="seperator"></div>
        <?php the_sub_field('practice_title'); ?>
      </a>
    </li>

    <?php endwhile; ?>
  
</ul>

<?php
endif;
?>
    
  </div>
</section>

<?php get_footer(); ?>
