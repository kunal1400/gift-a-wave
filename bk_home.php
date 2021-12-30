<?php get_header(); ?>

<?php get_template_part('templates/nav', 'side'); ?>

<div class="main-content photograph-main">
  <div class="container-fluid photos">
    <div class="row align-items-stretch">
      <div id="blog" class="photograph startup seo-tm finance gym section section-blog">
        <div class="container">
          <div class="blog-area">
            <div class="row">
              <?php
              if ( have_posts() ) {
                while ( have_posts() ) : the_post();
                ?>
                <div class="col-md-6 mb-5">
                  <div class="new-blog-builder res-bottom">
                    <div class="blog-wrapper-saas">
                      <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                          <img src="<?php echo $image[0] ?>">
                      <?php endif; ?>
                    </div>
                    <div class="date">
                      <span class="day"><?php echo get_the_date('d', $post->ID); ?></span>
                      <span class="month"><?php echo get_the_date('M, y', $post->ID); ?></span>
                    </div>
                    <div class="news-boxx">
                      <div class="grid-content">
                        <div class="meta-wrap">
                          <span class="bp-padd">
                            <?php
                            $categories = get_the_category();
                            if ( is_array($categories) && count($categories) > 0 ) {
                              echo '<i class="fa fa-folder"></i>';
                              $str = '';
                              foreach ($categories as $i => $cat) {
                                $str .= '<a href="'.get_category_link($cat->term_id).'">'.$cat->name.'</a>';
                                if ( $i > 0 ) {
                                  $str .= ' , ';
                                }
                              }
                              echo $str;
                            }
                            ?>
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            <a href="#" title="Posts by photography" rel="author"><?php the_author(); ?></a>
                          </span>
                          <h2 class="post-title-builder">
                            <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
                          </h2>
                          <?php the_excerpt(); ?>
                          <div class="btn-wraper"> <a href="<?php echo get_the_permalink(); ?>"> Know More <i class="fa fa-arrow-right" aria-hidden="true"></i> </a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                endwhile;
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
