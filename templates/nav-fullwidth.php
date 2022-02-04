<?php /*<div id="header-sticky_" class="shop-nav white-shadow seo saas porri gym">
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-12">
        <div class="logo">
          <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          if ( has_custom_logo() ) {
            echo '<a href="'.site_url().'"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
          } else {
            echo '<a href="'.site_url().'" class="giftawave-navbar-brand">' . get_bloginfo('name') . '</a>';
          }
          ?>
        </div>
      </div>
      <div class="col-xl-9 col-lg-9 col-md-9 col-sm-8 col-xs-12">
        <div class="wrap_nav mainmenu text-right">
          <?php
          wp_nav_menu(array(
            'menu_id' => "nav-demo",
            'container' => "ul",
            'theme_location' => 'primary',
            'menu_class' => ""
          ));
          ?>
        </div>        
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="mobile-menu"></div>
      </div>
    </div>
  </div>
</div>
*/?>

<div role="navigation" class="navbar navbar-expand-lg">
  <div class="container">
    <?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      if ( has_custom_logo() ) {
        echo '<a class="navbar-brand" href="'.site_url().'">
          <img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">
        </a>';
      } else {
        echo '<a href="'.site_url().'" class="navbar-brand giftawave-navbar-brand">' . get_bloginfo('name') . '</a>';
      }
    ?>

    <button type="button" class="navbar-toggler" data-bs-target="#navigation" data-bs-toggle="collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </button>

    <div id="navigation" class="collapse navbar-collapse">        
        <?php
        wp_nav_menu(array(
          'menu_id' => "main-navbar-nav",
          'container' => "ul",
          'theme_location' => 'primary',
          'menu_class' => "navbar-nav ms-auto",
          'add_li_class'  => 'nav-item'
        ));
        ?>
    </div>
  </div>
</div>