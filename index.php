<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 */

get_header(); ?>

<?php get_template_part('templates/nav', 'fullwidth'); ?>

<div class="bdt-section-muted">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="bdt-grid">
          <?php get_breadcrumb(); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="blog-single-section section-padding-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="blog-details-content">
            <?php
            if ( have_posts() ) {
              while ( have_posts() ) : the_post();
              get_template_part('templates/content', 'default');
              endwhile;

              // Previous/next page navigation.
            	gift_a_wave_posts_navigation();
            }
            else {
              get_template_part('templates/content', 'nodata');
            }
            ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('templates/footer', 'socialicons'); ?>

<?php get_footer(); ?>
