<?php
/**
* Template Name: Home Page
**/
get_header();
?>

<?php get_template_part('templates/nav', 'fullwidth'); ?>

  <!-- START HOME PAGE BANNER -->
  <div id="home" class="section" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/bg0.png)">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_khggnjkd.json"  background="transparent"  speed="0.1"  style="width: 100%; height: auto;"  loop autoplay></lottie-player>                  
        </div>
        <div class="col-md-6 py-5">
          <h1><?php _e('Generate') ?>. <span class="text-warning"><?php _e('Customize')?>.</span> <?php _e('Download') ?>.</h1>
          <p><?php _e('We helps you create your unique Wave Art from your own audio, voice or pick a song from Spotify') ?>.</p>
          <div class="mt-4 text-end">
            <a class="pw-btn gradient-background" href="<?php echo site_url('wave-design') ?>"><?php _e('Start Designing') ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END HOME PAGE BANNER -->

  <!-- START HOME ICONS -->
  <div class="section mt-5 py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4 col-sm-6 mb-30">
          <div class="text-center">
            <div class="iconWrapper"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" font-size="52" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm-64 268c0 10.7-12.9 16-20.5 8.5L104 376H76c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h28l35.5-36.5c7.6-7.6 20.5-2.2 20.5 8.5v136zm33.2-47.6c9.1-9.3 9.1-24.1 0-33.4-22.1-22.8 12.2-56.2 34.4-33.5 27.2 27.9 27.2 72.4 0 100.4-21.8 22.3-56.9-10.4-34.4-33.5zm86-117.1c54.4 55.9 54.4 144.8 0 200.8-21.8 22.4-57-10.3-34.4-33.5 36.2-37.2 36.3-96.5 0-133.8-22.1-22.8 12.3-56.3 34.4-33.5zM384 121.9v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"></path></svg></div>
            <h3><?php _e('Audio file or Spotify') ?></h3>
            <div><?php _e('Upload an audio file or simply copy and paste a Spotify link to your favourite song to generate a sound wave') ?></div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-30">
          <div class="text-center">
            <div class="iconWrapper"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" font-size="46" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 14.5c-1.58 0-2.903 1.06-3.337 2.5H2v2h2.163c.434 1.44 1.757 2.5 3.337 2.5s2.903-1.06 3.337-2.5H22v-2H10.837c-.434-1.44-1.757-2.5-3.337-2.5zm0 5c-.827 0-1.5-.673-1.5-1.5s.673-1.5 1.5-1.5S9 17.173 9 18s-.673 1.5-1.5 1.5zm9-11c-1.58 0-2.903 1.06-3.337 2.5H2v2h11.163c.434 1.44 1.757 2.5 3.337 2.5s2.903-1.06 3.337-2.5H22v-2h-2.163c-.434-1.44-1.757-2.5-3.337-2.5zm0 5c-.827 0-1.5-.673-1.5-1.5s.673-1.5 1.5-1.5 1.5.673 1.5 1.5-.673 1.5-1.5 1.5z"></path><path d="M12.837 5C12.403 3.56 11.08 2.5 9.5 2.5S6.597 3.56 6.163 5H2v2h4.163C6.597 8.44 7.92 9.5 9.5 9.5s2.903-1.06 3.337-2.5h9.288V5h-9.288zM9.5 7.5C8.673 7.5 8 6.827 8 6s.673-1.5 1.5-1.5S11 5.173 11 6s-.673 1.5-1.5 1.5z"></path></svg></div>
            <h3><?php _e('Customize Your Design') ?></h3>
            <div><?php _e('Use our many tools to customize your sound wave art to make something special.') ?></div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-30">
          <div class="text-center">
            <div class="iconWrapper"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" font-size="46" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"></path><path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"></path></svg></div>
            <h3><?php _e('Download') ?></h3>
            <div><?php _e('Download your design in many formats and sizes') ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END HOME ICONS -->

  <!-- START ABOUT -->
  <div id="about" class="section mt-5 py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_mksle47o.json"  background="#ffffff"  speed="0.1"  style="width: 100%; height: auto;"  loop autoplay></lottie-player>
        </div>
        <div class="col-lg-6">
          <div class="about-text">
            <h3>We are available all our the world and if you have any questions you can contact us!</h3>
            <ul class="list-group list-group-flush">
              <li class="list-group-item border-0"><i class="fa fa-check"></i> Design your personal voice art</li>
              <li class="list-group-item border-0"><i class="fa fa-check"></i> Design your favourite song</li>
              <li class="list-group-item border-0"><i class="fa fa-check"></i> Design your favourite quotes</li>
            </ul>            
            <p>Your designs will not be public it will only be available for you.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END ABOUT -->

  <?php
    if ( have_posts() ) {
      while ( have_posts() ) : the_post();
        the_content();
      endwhile;
    }
  ?>

  <?php get_template_part('templates/footer', 'socialicons'); ?>

<?php get_footer(); ?>
