<?php get_header(); ?>
<?php get_template_part('templates/nav', 'fullwidth'); ?>
<div class="section">
  <div class="container">
    <div class="row">
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) : the_post();
        ?>
          <?php the_content(); ?>
        <?php
        endwhile;
      }
      ?>
    </div>
  </div>
</div>

<?php get_template_part('templates/footer', 'socialicons'); ?>

<?php get_footer(); ?>
