<?php get_header(); ?>
<?php get_template_part('templates/nav', 'fullwidth'); ?>

<section class="section section-padding-bg">
  <div class="container">
    <div id="main" class="row">
      <div id="content" class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
        <?php woocommerce_content(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('templates/footer', 'socialicons'); ?>

<?php get_footer(); ?>
