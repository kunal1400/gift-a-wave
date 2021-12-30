<!-- START FOOTER/COPYRIGHT -->
<div class="porri demo-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="demo-footer-wrapper">
          <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          if ( has_custom_logo() ) {
              echo '<img class="footer-logo-demo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
          } else {
              echo '<h1>' . get_bloginfo('name') . '</h1>';
          }
          ?>
          <div class="social-icon">
            <a class="bg-blue" href="#"><i class="fa fa-facebook"></i></a>
            <a class="bg-red" href="#"><i class="fa fa-google"></i></a>
            <a class="bg-orange" href="#"><i class="fa fa-instagram"></i></a>
            <!-- <a class="bg-gray" href="#"><i class="fa fa-twitter"></i></a> -->
            <!-- <a class="bg-red2" href="#"><i class="fa fa-pinterest"></i></a> -->
            <!-- <a class="bg-green" href="#"><i class="fa fa-dribbble"></i></a> -->
          </div>
          <div class="porri copyright-1">
            Copyright @2021 <a href="<?php echo site_url() ?>"><?php echo get_bloginfo('name') ?>.</a> All Rights Reserved.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END FOOTER/COPYRIGHT -->
