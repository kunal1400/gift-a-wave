<?php get_header(); ?>
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

<section class="section-padding-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="blog-details-content">
            <?php
            if ( have_posts() ) {
              $i = 0;
              while ( have_posts() ) : the_post();
              echo '<div class="post post-loop-index-'.$i.'">';
              echo '<h3 class="bdt-margin-small-bottom">'.get_the_title().'</h3>';
                if (has_post_thumbnail( $post->ID ) ):
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                  <div class="entry-media">
                    <img src="<?php echo $image[0] ?>" alt>
                  </div>
                <?php endif; ?>
                <div class="entry-body">
                  <?php the_excerpt(); ?>
                </div>
              <?php
              echo '</div>';
              $i++;
              if($i > 0) {
                echo '<hr/>';
              }
              endwhile;
            }
            else { ?>
              <div class="entry-body text-center">
                <p>No Data Found</p>
                <img src="<?php echo get_template_directory_uri() ?>/img/no-data-found.gif)" />
              </div>
            <?php
            }
            ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('templates/footer', 'socialicons'); ?>

<?php get_footer(); ?>
