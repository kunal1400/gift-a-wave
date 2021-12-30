<?php
/**
* Template Name: Contact Us
**/
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

<div id="contact" class="saas gym finance section section-contact contact-area">
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
          <div class="gym-section-title">
            <span>info</span>
            <h2>Do you have any query, <br /> contact us</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div class="comment-respond clearfix">
            <?php
            if ( have_posts() ) {
              while ( have_posts() ) : the_post();
              the_content();
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
</div>

<?php get_template_part('templates/footer', 'socialicons'); ?>

<?php get_footer(); ?>
