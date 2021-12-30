<!-- START NAVBAR -->
<div class="mobile-site-nav">
  <a href="#" class="js-photograph-nav-toggle photograph-nav-toggle"><i></i></a>
  <div class="header-bar mobile-menu-new">
    <div class="logo">
      <div class="logo">
        <a href="<?php echo site_url() ?>">
          <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

          if ( has_custom_logo() ) {
              echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
          } else {
              echo '<h1>' . get_bloginfo('name') . '</h1>';
          }
          ?>
        </a>
      </div>
    </div>
    <div class="main-menu-warp">
      <?php
      wp_nav_menu(array(
        'container_class' => "js-clone-nav",
        'container' => "ul",
        'theme_location' => 'primary'
      ));
      ?>
      <ul class="social js-clone-nav">
        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
      </ul>
      <div class="photography porri copyright-1 text-left">
        Copyright @2020 <a href="https://themeforest.net/user/themexhunter">ThemexHunter.</a> All Rights Reserved.
      </div>
    </div>
  </div>
</div>
<!-- END NAVBAR -->
