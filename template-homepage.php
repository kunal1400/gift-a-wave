<?php
/**
* Template Name: Home Page
**/
get_header();
?>

<?php get_template_part('templates/nav', 'fullwidth'); ?>

  <!-- START HOME PAGE BANNER -->
  <div id="home" class="section home_page_banner">
    <div class="banner-active">
      <div class="slider-area">
        <div class="slider-active-saas">
          <div class="slider-wrapper-saas vh d-flex" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/bg0.png)">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_khggnjkd.json"  background="transparent"  speed="0.1"  style="width: 100%; height: auto;"  loop autoplay></lottie-player>                  
                </div>
                <div class="col-md-6 mt-5">
                  <div class="slider-text-new">
                    <h1 class="text-end"><?php _e('Generate') ?>. <span><?php _e('Customize')?>.</span> <?php _e('Download') ?>.</h1>
                    <p><?php _e('We helps you create your unique Wave Art from your own audio, voice or pick a song from Spotify') ?>.</p>
                    <div class="mt-4 text-end">
                      <a class="btn btn-primary btn_start_design" href="<?php echo site_url('wave-design') ?>"><?php _e('Start Designing') ?></a>
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

  <?php /*<!-- START HOME ICONS -->
  <div class="section mt-5 icons_section">
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
  <!-- END HOME ICONS --> */ ?>

  <!-- START ABOUT -->
  <div id="about" class="section mt-5 section_about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_mksle47o.json"  background="#ffffff"  speed="0.1"  style="width: 100%; height: auto;"  loop autoplay></lottie-player>
        </div>
        <div class="col-lg-6">
          <div class="about-text">
            <h3>We are available all our the world and if you can any questions you can contact us!</h3>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><i class="fa fa-check"></i> Design your personal voice art</li>
              <li class="list-group-item"><i class="fa fa-check"></i> Design your favourite song</li>
              <li class="list-group-item"><i class="fa fa-check"></i> Design your favourite quotes</li>
            </ul>            
            <p>Your designs will not be public it will only be available for you.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END ABOUT -->

  <?php
    // if ( have_posts() ) {
    //   while ( have_posts() ) : the_post();
    //     the_content();
    //   endwhile;
    // }
  ?>

  <?php get_template_part('templates/footer', 'socialicons'); ?>

<?php get_footer(); ?>
