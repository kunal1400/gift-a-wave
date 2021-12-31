<?php
/**
* Template Name: Home Page
**/
get_header();
?>

<?php get_template_part('templates/nav', 'fullwidth'); ?>

  <!-- START HOME PAGE BANNER -->
  <div id="home" class="shop-banner constru-banner saas banner-area">
    <div class="banner-active">
      <div class="slider-area">
        <div class="slider-active-saas">
          <div class="slider-wrapper-saas vh d-flex" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/bg0.png)">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_khggnjkd.json"  background="transparent"  speed="0.1"  style="width: 100%; height: auto;"  loop autoplay></lottie-player>                  
                </div>
                <div class="col-md-6 text-right mt-5">
                  <div class="slider-text-new">
                    <h1>Generate. <span>Customize.</span> Download.</h1>
                    <p>We helps you create your unique Wave Art from your own audio, voice or pick a song from Spotify.</p>
                    <div class="saas-button new-btn mt-4 text-right">
                      <a href="<?php echo site_url('wave-design') ?>">Start Designing</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END HOME PAGE BANNER -->

  <!-- START HOME ICONS -->
  <div class="shop-about-icons section-all-2 mt-30">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3 col-sm-6 mb-30">
          <div class="single-icons">
            <i class="fa fa-home"></i>
            <span>Audio file Upload or simply copy and paste a Spotify link to your favourite song</span>            
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-30">
          <div class="single-icons">
            <i class="fa fa-home"></i>
            <span>Customize your design as you need.</span>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-30">
          <div class="single-icons">
            <i class="fa fa-home"></i>
            <span>Download your design as an image in any size</span>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-30">
          <div class="single-icons">
            <i class="fa fa-home"></i>
            <span>Use your design anywhere</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END HOME ICONS -->

  <!-- START ABOUT -->
  <div id="about" class="saas finance gym section about-us-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_mksle47o.json"  background="#ffffff"  speed="0.1"  style="width: 100%; height: auto;"  loop autoplay></lottie-player>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="about-text">
            <span>about us</span>
            <h3>We are available all our the world and if you can any questions you can contact us!</h3>            
            <div class="about-features">
              <div class="about-features-item">
                <div class="about-feature-icon">
                  <i class="fa fa-check"></i>
                </div>
                <div class="about-feature-text">
                  <h4>You can design your personal voice art for your dear one.</h4>
                </div>
              </div>
              <div class="about-features-item">
                <div class="about-feature-icon">
                  <i class="fa fa-check"></i>
                </div>
                <div class="about-feature-text">
                  <h4>You can design your favourite song</h4>
                </div>
              </div>
              <div class="about-features-item">
                <div class="about-feature-icon">
                  <i class="fa fa-check"></i>
                </div>
                <div class="about-feature-text">
                  <h4>You can design your favourite quotes</h4>
                </div>
              </div>
            </div>
            <p>Your designs will not be public it will only be available for you.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END ABOUT -->

  <!-- START DEFAULT CONTENT -->
  <div id="service" class="saas finance gym section section-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">         
          <?php
          if ( have_posts() ) {
            while ( have_posts() ) : the_post();
            ?>
            <div class="blog-post">
              <h2 class="blog-post-title"></h2>
              <?php the_content(); ?>
            </div>
            <?php
            endwhile;
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <!-- END DEFAULT CONTENT -->
  
  <!-- START FEATURE PRODUCTS CONTENT -->
  <?php echo get_products_html_section_by_slug( 'featured-products' ); ?>
  <!-- END FEATURE PRODUCTS CONTENT -->
  
  <!-- START FEATURE GAMES CONTENT -->
  <?php echo get_products_html_section_by_slug( 'featured-games' ); ?>
  <!-- END FEATURE PRODUCTS CONTENT -->

  <!-- START CLIENT -->
  <?php /*
  <div id="client" class="saas gym testimonials-area section section-testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="gym-section-title">
            <span>review</span>
            <h2>Our worldwide happy user <br />says about megapack</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col col-md-12">
          <div class="testimonials-grids gym-testimonials owl-carousel owl-theme owl-loaded owl-text-select-on">
            <?php
              $feedbackPosts = get_posts( array(
                  'post_type' => 'post',
                  'post_status' => 'publish',
                  'category_name' => 'client-feedback',
              ));
              if( empty( $feedbackPosts ) ) return '';
              foreach( $feedbackPosts as $feedbackPost ) {
                $thumbnainUrl = get_the_post_thumbnail_url($feedbackPost, 'post-thumbnail');
                if ( !$thumbnainUrl ) {
                  $thumbnainUrl = get_template_directory_uri().'/img/defaultManPlaceholder.png';
                }
                echo '<div class="new-testimonials-7 text-left">
                  <div class="queit-box">
                    <i class="fa fa-quote-right"></i>
                  </div>
                  <div class="client-pic">
                    <img width="90px" height="90px" alt="'.$feedbackPost->post_title.'" src="'.$thumbnainUrl.'">
                  </div>
                  <div class="details-about">
                    <h4>'.$feedbackPost->post_title.'</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <p>'.$feedbackPost->post_content.'</p>
                  </div>
                </div>';
              }
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  */ ?>
  <!-- END CLIENT -->

  <!-- START BLOG -->
  <div id="blog" class="saas finance gym section section-blog">
    <div class="container">
      <div class="blog-area">
        <div class="row">
          <div class="col-lg-12">
            <div class="gym-section-title">
              <span>How To</span>
              <h2>These articles will <br /> help you in your customizations</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <?php
            $posts = get_posts( array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'category_name' => 'how-to',
              'numberposts' => 6
            ));
            if( empty( $posts ) ) return '';
            foreach( $posts as $post ) {
              $youtubeVideoUrl = get_field('_youtube_video_link', $post->ID);

              $youtubewrapper = "";
              if ( !empty($youtubeVideoUrl) ) {
                $youtubewrapper = '<div class="youtubewrapper">'.$youtubeVideoUrl.'</div>';
              }

              echo '<div class="col-md-6 mb-4">
                <h5 class=""><a href="'.get_permalink( $post ).'">'.$post->post_title.'</a></h5>
                '.$youtubewrapper.'
              </div>';
            }
          ?>
        </div>
      </div>
    </div>
  </div>
  <!-- END BLOG -->

  <?php get_template_part('templates/footer', 'socialicons'); ?>

<?php get_footer(); ?>
