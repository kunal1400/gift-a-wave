<footer class="mt-5 bg-light">  
  <div class="container">
    <div class="py-5 row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
        <div class="widget about-widget">
          <div class="footer-logo">
            <?php
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              if ( has_custom_logo() ) {
                echo '<img class="footer-logo-demo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
              } else {
                echo '<h3>' . get_bloginfo('name') . '</h3>';
              }
            ?>
          </div>           
          <ul class="contact-info list-unstyled">
            <li class="mb-2"><i class="fa fa-phone"></i> +91-9584833502</li>
            <li class="mb-2"><i class="fa fa-clock-o"></i> Working Hours: <br>Mon-Fri (9 am - 8 pm)</li>
          </ul>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
        <div class="widget recent-post-widget">
          <h3>Recent Posts</h3>            
          <ul class="list-unstyled">              
            <?php 
              $recent_posts = wp_get_recent_posts( array(
                'numberposts' => 2, // Number of recent posts thumbnails to display
                'post_status' => 'publish' // Show only the published posts
              ));
              foreach( $recent_posts as $post_item ) : ?>
              <li>
                <div class="entry-details">
                  <h4>
                    <a href="<?php echo get_permalink($post_item['ID']) ?>">
                      <?php echo $post_item['post_title'] ?>
                    </a>
                  </h4>
                  <span class="date"><?php echo date('n-j-Y', strtotime($post_item['post_date'])) ?></span>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
        <div class="widget quick-links-widget">
          <h3>Useful Links</h3>
          <?php
            wp_nav_menu(array(
              'menu_id' => "",
              'container' => "ul",
              'theme_location' => 'footer-menu',
              'menu_class' => "list-unstyled"
            ));
          ?>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
        <div class="widget newsletter-widget">
          <h3>Subscribe</h3>
          <p>Get latest updates and offers. Subscribe your Email for weekly Newsletter and business tips</p>
          <div class="newsletter-form">
            <form>
              <div class="input-group">
                <input type="email" class="form-control" placeholder="Your email..">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-envelope"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Copyright -->
  <div class="section-copyright py-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          Copyright @<?php echo date('Y'); ?> <a href="<?php echo site_url() ?>"><?php echo get_bloginfo('name') ?>.</a> All Rights Reserved.
        </div>
        <div class="col-sm-6">
          <?php
            wp_nav_menu(array(
              'menu_id' => "",
              'container' => "ul",
              'theme_location' => 'footer-links',
              'menu_class' => "nav justify-content-end",
              'add_li_class'  => 'mx-2'
            ));
          ?>
        </div>
      </div>
    </div>    
  </div>
  <!-- Copyright -->
</footer>