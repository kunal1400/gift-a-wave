<footer class="site-footer">
  <div class="upper-footer">
    <div class="container">
      <div class="row">
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
            <p>Lorem ipsum dolor sit amet, consecte tur adipiscing elit, sed do eiusmod te mpor incididunt ut.mco laboris nisi ut aliquip ex ea commodo.</p>
            <ul class="contact-info">
              <li><i class="fa fa-phone"></i> +1 (234) 567 890</li>
              <li><i class="fa fa-clock-o"></i> Working Hours: <br>Mon-Fri (9 am - 8 pm)</li>
            </ul>
          </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
          <div class="widget recent-post-widget">
            <h3>Recent Posts</h3>            
            <ul>              
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
                'theme_location' => 'footer-link',
                'menu_class' => ""
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
                <div>
                  <input type="email" class="form-control" placeholder="Your email..">
                  <button type="submit"><i class="fa fa-envelope"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- end upper-footer -->
  <div class="copyright-info">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <p>Copyright @2021 <a href="<?php echo site_url() ?>"><?php echo get_bloginfo('name') ?>.</a> All Rights Reserved.</p>
        </div>	
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <?php
            wp_nav_menu(array(
              'menu_id' => "",
              'container' => "ul",
              'theme_location' => 'footer-link',
              'menu_class' => ""
            ));
          ?>     
        </div>
      </div>
    </div>
  </div>
</footer>
