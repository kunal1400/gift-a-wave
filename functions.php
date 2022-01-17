<?php
/**
* 
* Handling the menu dynamically that if current page is wave design page then showing download
* and preview buttons.
*
* For all page showing cart icon.
**/
function add_last_nav_item( $items, $args ) {
  if( $args->theme_location == 'primary' ) {
    $isValidOrderPage = false;
    if ( !empty($_GET['orderId']) && !empty($_GET['productId']) ) {
      $isValidOrderPage = isValidProductAndOrder( $_GET['orderId'], $_GET['productId'] );
    }

    /**
    * If current user is administrator then showing them an option to download images so that they can download it for free
    * It will be helpful for marketing
    **/
    $user = wp_get_current_user();
    if ( getCustomizePageUrl() == get_permalink() && is_array($user->roles) && count($user->roles) > 0 ) {
      if( in_array( 'administrator', $user->roles ) ) {
        $isValidOrderPage = true;
      }
    }

    if($isValidOrderPage) {
      $items .= '<li class="menu-item">
          <a href="#" onclick="downloadCanvas()" title="Download" class="downloadPreviewButtons">
            <i class="fa fa-cloud-download" aria-hidden="true"></i> Download
          </a>
        </li>
        <li class="menu-item">
          <a href="#" title="Preview in new tab" onclick="designWaveObject.openCanvasInNewTab()" class="downloadPreviewButtons">
            <i class="fa fa-eye" aria-hidden="true"></i> Preview
          </a>
        </li>';
    }

    // Adding the cart icon to the menu
    // $cart_count = WC()->cart->cart_contents_count;
    $items .= '<li class="menu-item">
      <a href="'.wc_get_cart_url().'" title="" class="downloadPreviewButtons">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
      </a>
    </li>';
  }  
  return $items;
}
add_filter('wp_nav_menu_items','add_last_nav_item', 10, 2);


/**
* Adding all css file required in this theme, also keep an eye for better performance
**/
function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');    
    wp_enqueue_style( 'font-awesome.min-css', get_template_directory_uri() . '/css/font-awesome.min.css', $dependencies );
    // wp_enqueue_style( 'animate.min-css', get_template_directory_uri() . '/css/animate.min.css', $dependencies );
    wp_enqueue_style( 'slicknav-css', get_template_directory_uri() . '/css/slicknav.css', $dependencies );
    // wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css/slick.css', $dependencies );
    // wp_enqueue_style( 'aos-css', get_template_directory_uri() . '/css/aos.css', $dependencies );
    // wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/css/slick-theme.css', $dependencies );
    // wp_enqueue_style( 'swiper.min-css', get_template_directory_uri() . '/css/swiper.min.css', $dependencies );
    // wp_enqueue_style( 'line-awesome-css', get_template_directory_uri() . '/css/line-awesome.css', $dependencies );
    // wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/css/magnific-popup.css', $dependencies );
    // wp_enqueue_style( 'jquery.fancybox-css', get_template_directory_uri() . '/css/jquery.fancybox.css', $dependencies );
    // wp_enqueue_style( 'owl.carousel.min-css', get_template_directory_uri() . '/css/owl.carousel.min.css', $dependencies );
    wp_enqueue_style( 'megapack-style-css', get_template_directory_uri() . '/css/megapack-style.css', $dependencies );
    wp_enqueue_style( 'megapack-responsive-css', get_template_directory_uri() . '/css/megapack-responsive.css', $dependencies );
    wp_enqueue_style( 'gaw_style_css', get_stylesheet_uri(), $dependencies );
}


/**
* Adding all js file required in this theme, also keep an eye for better performance
**/
function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('modernizr-3.6.0.min.js', get_template_directory_uri().'/js/vendor/modernizr-3.6.0.min.js', $dependencies, '3.3.6', true );
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', $dependencies, '3.3.6', true );
    wp_enqueue_script('jquery.slicknav.min.js', get_template_directory_uri().'/js/jquery.slicknav.min.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('jquery-1.12.4.min.js', get_template_directory_uri().'/js/vendor/jquery-1.12.4.min.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('jquery.ripples-min.js', get_template_directory_uri().'/js/jquery.ripples-min.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('particles.min.js', get_template_directory_uri().'/js/particles.min.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('scrollreveal.min.js', get_template_directory_uri().'/js/scrollreveal.min.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('countdown.min.js', get_template_directory_uri().'/js/countdown.min.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('tilt.jquery.min.js', get_template_directory_uri().'/js/tilt.jquery.min.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('typewritter.js', get_template_directory_uri().'/js/typewritter.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('aos.js', get_template_directory_uri().'/js/aos.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('isotope.pkgd.min.js', get_template_directory_uri().'/js/isotope.pkgd.min.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('imagesloaded.pkgd.min.js', get_template_directory_uri().'/js/imagesloaded.pkgd.min.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('fancyBox.js', get_template_directory_uri().'/js/fancyBox.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('jquery.counterup.min.js', get_template_directory_uri().'/js/jquery.counterup.min.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('jquery.barfiller.js', get_template_directory_uri().'/js/jquery.barfiller.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('waypoints.min.js', get_template_directory_uri().'/js/waypoints.min.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('slick.js', get_template_directory_uri().'/js/slick.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('swiper.min.js', get_template_directory_uri().'/js/swiper.min.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('jquery.parallax-1.1.3.js', get_template_directory_uri().'/js/jquery.parallax-1.1.3.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('owl.carousel.min.js', get_template_directory_uri().'/js/owl.carousel.min.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('jquery.scrollUp.min.js', get_template_directory_uri().'/js/jquery.scrollUp.min.js', $dependencies, '3.3.6', true );
    // wp_enqueue_script('megapack-main.js', get_template_directory_uri().'/js/megapack-main.js', $dependencies, '3.3.6', true );
    wp_enqueue_script('gaw_main.js', get_template_directory_uri().'/js/gaw_main.js', $dependencies, '3.3.6', true );
}
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );


/**
* Adding Theme support features
**/
function gaw_theme_setup() {
    // Support for title tag
    add_theme_support( 'title-tag' );

    // Support for woocommerce
    add_theme_support( 'woocommerce' );

    // Adding primary navigations
    register_nav_menu( 'primary', __( 'Primary Menu', 'theme_name' ) );

    // Adding footer navigations
    register_nav_menu( 'footer-menu', __( 'Footer Menu', 'theme_name' ) );

    // Adding footer links
    register_nav_menu( 'footer-links', __( 'Footer Links', 'theme_name' ) );

    // Adding support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    ));

    // Adding support for wave canvas sidebar
    register_sidebar( array(
        'name'          => __( 'Wave Customization Sidebar', 'theme_name' ),
        'id'            => 'wave-customization-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action( 'after_setup_theme', 'gaw_theme_setup' );


/**
 * Change number of related products output
 */
function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 4 related products
	$args['columns'] = 3; // arranged in 2 columns
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );


/**
* Change number or products per row to 3
*/
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}
add_filter('loop_shop_columns', 'loop_columns', 999);


/**
* Adding class to product loop
**/
add_filter('post_class', function($classes, $class, $product_id) {
    // if(is_product_category()) {
        //only add these classes if we're on a product category page.
        $classes = array_merge(['gaw_product_loop_item'], $classes);
    // }
    return $classes;
},10,3);


/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
    echo '<ul id="tm-breadcrumb" class="bdt-breadcrumb "><li><a href="'.home_url().'" rel="nofollow">Home</a></li>';
    if (is_category() || is_single()) {
        echo '<li>';
        the_category(' &bull; ');
        echo '</li>';
        if (is_single()) {
          echo '<li><span>';
          the_title();
          echo '</span></li>';
        }
    } elseif (is_page()) {
        echo '<li><span>';
        echo the_title();
        echo '</span></li>';
    } elseif (is_search()) {
        echo '<li><span>';
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
        echo '</span></li>';
    }
    echo '</ul>';
}

/**
* Showing the Read More link after all excerpt
**/
function new_excerpt_more($more) {
 global $post;
 return '<a class="mp-button" href="'. get_permalink($post->ID) . '"> Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


/**
* This function is returning the section of featured products by category slug
**/
function get_products_html_section_by_slug( $featuredSlug ) {
  $featuredProducts = get_term_by('slug', $featuredSlug, 'product_cat');
  $products = "";

  $loop = new WP_Query(array(
      'post_type'      => 'product',
      'posts_per_page' => 5,
      'product_cat'    => $featuredSlug
  ));

  while ( $loop->have_posts() ) : $loop->the_post();
    $_product = wc_get_product( $loop->post->ID );
    $products .= '<div class="col-md-4 col-sm-12">
      <div class="product-card-one">        
         '.woocommerce_get_product_thumbnail( 'woocommerce_single' ).'        
        <figcaption>
          <h3><a href="'.get_permalink().'">'.get_the_title().'</a></h3>
          <div class="price">'.$_product->get_price_html().'</div>
          <div class="button_wrappers d-flex justify-content-between">
            <a href="'.site_url( 'wave-design/?productId='.$loop->post->ID ).'" class="bpack-btn-nine">Customize</a>            
              '.sprintf( '<a href="%s" data-quantity="1" class="%s add_to_cart_button" %s>%s</a>',
                  esc_url( $_product->add_to_cart_url() ),
                  esc_attr( implode( ' ', array_filter( array(
                      'button', 'product_type_' . $_product->get_type(),
                      $_product->is_purchasable() && $_product->is_in_stock() ? 'add_to_cart_button' : '',
                      $_product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
                  ) ) ) ),
                  wc_implode_html_attributes( array(
                      'data-product_id'  => $_product->get_id(),
                      'data-product_sku' => $_product->get_sku(),
                      'aria-label'       => $_product->add_to_cart_description(),
                      'rel'              => 'nofollow',
                  ) ),
                  esc_html( $_product->add_to_cart_text() )
              ).'
          </div>
        </figcaption>
      </div>
    </div>';
  endwhile;
  wp_reset_query();

  return '<div id="" class="saas gym section-all-2 section">
    <div class="container">
      <div class="row shop-pro-slide">
        <div class="col-lg-12">
          <div class="gym-section-title">
            <span>'.$featuredProducts->name.'</span>
            <h2>'.$featuredProducts->description.'</h2>
          </div>
        </div>
      </div>
      <div class="row product-ml">'.$products.'</div>
    </div>
  </div>';

}


/**
 * Including SVG Icons class
 */
require get_template_directory() . '/classes/gift-a-wave-svg-icons.php';

/**
 * Gets the SVG code for a given icon.
 */
function gift_a_wave_get_icon_svg( $group, $icon, $size = 24 ) {
	return Twenty_Twenty_One_SVG_Icons::get_svg( $group, $icon, $size );
}

if ( ! function_exists( 'gift_a_wave_posts_navigation' ) ) {	
	function gift_a_wave_posts_navigation() {
		the_posts_pagination(
			array(
				'before_page_number' => esc_html__( 'Page', 'twentytwentyone' ) . ' ',
				'mid_size'           => 0,
				'prev_text'          => sprintf(
					'%s <span class="nav-prev-text">%s</span>',
					is_rtl() ? gift_a_wave_get_icon_svg( 'ui', 'arrow_right' ) : gift_a_wave_get_icon_svg( 'ui', 'arrow_left' ),
					wp_kses(
						__( 'Newer <span class="nav-short">posts</span>', 'twentytwentyone' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					)
				),
				'next_text'          => sprintf(
					'<span class="nav-next-text">%s</span> %s',
					wp_kses(
						__( 'Older <span class="nav-short">posts</span>', 'twentytwentyone' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					is_rtl() ? gift_a_wave_get_icon_svg( 'ui', 'arrow_left' ) : gift_a_wave_get_icon_svg( 'ui', 'arrow_right' )
				),
			)
		);
	}
}
