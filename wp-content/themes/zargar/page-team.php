<?php
/*
Template Name: Team
*/
?>

<?php get_header(); ?>

<section class="page-content text-center ">
  <div class="row">
    <div class="medium-6 medium-centered columns">
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

<section class="page-content">
  <div class="row">
    <div class="small-12 columns">
    <?php
    if( have_rows('team_members_list') ):
    ?>

    <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4 team-grid">

      <?php
          while ( have_rows('team_members_list') ) : the_row();
      ?>

        <li>
          <a href="<?php the_sub_field('team_member_url'); ?>" class="team-member">
            <div class="headshot">
              <img src="<?php the_sub_field('team_member_photo'); ?>"/>
            </div>
            <div class="name">
              <?php the_sub_field('team_member_name'); ?>
            </div>
            <div class="seperator"></div>
            <div class="title">
              <?php the_sub_field('team_member_title'); ?>
            </div>
          </a>
        </li>

        <?php endwhile; ?>
      
    </ul>

    <?php
    endif;
    ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
