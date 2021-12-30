<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( is_singular() ) : ?>
    <?php the_title( '<h1 class="entry-title default-max-width bdt-margin-small-bottom">', '</h1>' ); ?>
  <?php else : ?>
    <?php the_title( sprintf( '<h2 class="entry-title default-max-width bdt-margin-small-bottom"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
  <?php endif; ?>
  <?php
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    if ( !empty( $image ) ):
    ?>
    <div class="entry-media">
      <a href="<?php echo get_permalink() ?>"><img src="<?php echo $image[0] ?>"></a>
    </div>
  <?php endif; ?>
  <div class="entry-body">
    <?php the_content(); ?>
  </div>
</div>
