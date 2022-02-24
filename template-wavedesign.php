<?php
/**
* Template Name: Wave Design
**/
get_header();

get_template_part('templates/nav', 'fullwidth');

/**
* Checking if order id and product id are valid or not.
* If not valid then redirecting to original product page
**/
$isValidProductAndOrder = false;
$default_canvas_width = 0;
$default_canvas_height = 0;
$orderId = 0;
$productId = 0;

// Setting default canvas width in a variable
if( !empty($_GET['default_canvas_width']) ) {
  $default_canvas_width = $_GET['default_canvas_width'];
}

// Setting default canvas height in a variable
if( !empty($_GET['default_canvas_height']) ) {
  $default_canvas_height = $_GET['default_canvas_height'];
}

if ( !empty($_GET['orderId']) && !empty($_GET['productId']) ) {
  $isValidProductAndOrder = isValidProductAndOrder( $_GET['orderId'], $_GET['productId'] );
  $orderId = $_GET['orderId'];
  $productId = $_GET['productId'];

  // Appending the product id with query string
  if ( !$isValidProductAndOrder ) {
    $wp->query_vars['productId'] = $_GET['productId'];
    $urlWithQueryString = site_url( 'wave-design' );
    ?>
    <script type="text/javascript">
      window.location.href = "<?php echo $urlWithQueryString ?>";
    </script>
    <?php
  }
}

/**
* If current user is administrator then generating a popup to update canvas size
**/
$user = wp_get_current_user();
if ( is_array($user->roles) && count($user->roles) > 0 ) {
  if( in_array( 'administrator', $user->roles ) ) {
    echo '<div class="modal fade" id="updateCanvasModal" tabindex="-1" role="dialog" aria-labelledby="Modal To Update Canvas Size" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Update Canvas Size</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            '.do_shortcode("[update_canvas_form]").'
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>';
  }
}
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <?php dynamic_sidebar( 'wave-customization-sidebar' ); ?>
    </div>
    <div class="col-md-9 nopadding">
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) : the_post();
          the_content();
        endwhile;
      }
      ?>
    </div>    
  </div>
</div>

<?php get_footer(); ?>
