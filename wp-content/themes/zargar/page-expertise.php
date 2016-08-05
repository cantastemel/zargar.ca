<?php
/*
Template Name: Expertise
*/
?>

<?php get_header(); ?>
<section class="text-center">
  <div class="row">
    <div class="medium-10 medium-centered columns">
      <div class="expertise-menu-wrapper">
        <div class="expertise-menu">
          <?php wp_nav_menu( array('menu' => 'Expertise Menu' ));?>
        </div>
        <a href="#" class="prev expertise-menu-nav"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        <a href="#" class="next expertise-menu-nav"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</section>

<section class="page-content text-center expertise-page-title" style="background-color: <?php the_field('title_bg_color'); ?> ;">
  <div class="row">
    <div class="medium-6 medium-centered columns">
      <h1 style="color: <?php the_field('title_text_color'); ?> ;">
        <?php if(get_field( "title" )!= "") { ?>
            <?php the_field('title'); ?>
        <?php } ?>
      </h1>
    </div>
  </div>
</section>

<section class="content_block_centered page-content">
  <div class="row">
    <div class="medium-10 medium-centered large-9 columns">
      <div class="text-left">
        <?php if(get_field( "body_text" )!= "") { ?>
            <?php the_field('body_text'); ?>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="row clients-list">
    <div class="medium-10 medium-centered large-9 columns text-left">
    <p><strong><?php the_field('clients_title'); ?></strong></p>
    <?php
    if( have_rows('clients_list') ):
    ?>

    <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3 clients-grid">

      <?php
          while ( have_rows('clients_list') ) : the_row();
      ?>

        <li>
          <a href="<?php the_sub_field('client_link'); ?>" target="_blank">
              <img src="<?php the_sub_field('client_logo'); ?>"/>
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
