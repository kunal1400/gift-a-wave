<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div class="entry-media">
      <img src="<?php echo $image[0] ?>" alt>
    </div>
  <?php endif; ?>

  <!-- <div class="entry-title-meta">
    <ul class="entry-meta">
      <li><i class="fa fa-tag"></i>
        <?php
        // $categories = get_the_category();
        // if ( is_array($categories) && count($categories) > 0 ) {
        //   $str = '';
        //   foreach ($categories as $i => $cat) {
        //     $str .= '<a href="'.get_category_link($cat->term_id).'">'.$cat->name.'</a>';
        //     if ( $i > 0 ) {
        //       $str .= ' , ';
        //     }
        //   }
        //   echo $str;
        // }
        ?>
      </li>
      <li><a href="#"><i class="fa fa-user"></i> <?php //the_author(); ?></a></li>
      <li><a href="#"><i class="fa fa-calendar"></i> <?php //echo get_the_date('d M, y', $post->ID); ?></a></li>
    </ul>
  </div> -->

  <?php
  if ( have_posts() ) {
    while ( have_posts() ) : the_post();
    ?>
      <?php the_content(); ?>
      <?php
        $youtubeVideoUrl = get_field('_youtube_video_link', $post->ID);
        if ( !empty($youtubeVideoUrl) ) {
          echo '<div class="youtubewrapper">'.$youtubeVideoUrl.'</div>';
        }
      ?>
    <?php
      wp_link_pages(
  			array(
  				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
  				'after'    => '</nav>',
  				/* translators: %: Page number. */
  				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
  			)
  		);
    endwhile;
  }
  ?>
</div>
