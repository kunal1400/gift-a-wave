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
* If current user is administrator then showing them an option to download images so that they can download it for free
* It will be helpful for marketing
**/
$user = wp_get_current_user();
if ( is_array($user->roles) && count($user->roles) > 0 ) {
  if( in_array( 'administrator', $user->roles ) ) {
    $isValidProductAndOrder = true;
  }
}
?>

<div class="container-fluid cover-container">
  <div class="row">
    <div class="col-md-3">
      <?php dynamic_sidebar( 'wave-customization-sidebar' ); ?>
    </div>
    <div class="<?php echo ($isValidProductAndOrder ? 'col-md-6' : 'col-md-9') ?> nopadding">
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) : the_post();
          the_content();
        endwhile;
      }
      ?>
    </div>
    <?php
    if ( $isValidProductAndOrder ) {
      echo '<div class="col-md-3">
      <form onsubmit="return updateCanvasSize(this)" action="" class="mt-3 mb-3">
          <h4>Update Canvas Size</h4>
          <em><small>You are free to customize this canvas by putting any width & height</small></em>
          <div class="table-responsive">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td><b>Enter Canvas Width (PX)</b></td>
                  <td><input min="0" step="5" required="required" type="number" class="form-control" value="'.$default_canvas_width.'" id="canvas_width" name="default_canvas_width"></td>
                </tr>
                <tr>
                  <td><b>Enter Canvas Height (PX)</b></td>
                  <td><input min="0" step="5" required="required" type="number" class="form-control" value="'.$default_canvas_height.'" id="canvas_height" name="default_canvas_height"></td>
                </tr>
                <tr>
                  <td colspan="2">
                    <input type="hidden" name="productId" value="'.$productId.'" />
                    <input type="hidden" name="orderId" value="'.$orderId.'" />
                    <button type="submit" class="bpack-btn">Update Canvas Size</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </form>';
        echo '<h4>Dimensions in other unit</h4>
        <div class="canvasOtherUnits">Loading...</div>';
        echo '</div>';
    }
    ?>
  </div>
</div>

<?php get_footer(); ?>
