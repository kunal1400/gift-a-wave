<?php get_header(); ?>
<?php get_template_part('templates/nav', 'fullwidth'); ?>

<section class="blog-single-section mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="blog-details-content">
          <?php
          get_search_form(
            array(
              'label' => __( '404 not found', 'twentytwenty' ),
            )
          );
          ?>
          <div class="post text-center">
            <img src="<?php echo get_template_directory_uri() ?>/img/no-data-found.gif" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('templates/footer', 'socialicons'); ?>

<?php get_footer(); ?>
