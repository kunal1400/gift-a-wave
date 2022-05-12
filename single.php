<?php get_header(); ?>
<?php get_template_part('templates/nav', 'fullwidth'); ?>

<div class="bdt-section-muted">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="bdt-grid">
          <h1 class="bdt-margin-small-bottom"><?php the_title(); ?></h1>
          <?php get_breadcrumb(); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="blog-single-section mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="blog-details-content">
          <?php get_template_part('templates/content', 'singlepost'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('templates/footer', 'socialicons'); ?>

<?php get_footer(); ?>
