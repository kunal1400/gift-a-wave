<?php
/**
* Template Name: Wave Design After Order
**/
get_header();
?>

<?php get_template_part('templates/nav', 'fullwidth');?>
<div class="container-fluid cover-container">
  <div class="row">
    <div class="col-3">
      <?php
      if ( !empty($_GET['orderId']) ) {
        echo '<form onsubmit="return updateCanvasSize(this)" action="" class="mt-3 mb-3">
            <div class="heading-tittle-eight">
              <div class="heading-tittle">
                <h4>Update Canvas Size</h4>
                <p>You are free to customize this canvas by putting any width & height</p>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td><b>Enter Canvas Width (PX)</b></td>
                    <td><input min="0" step="5" required="required" type="number" class="form-control" value="'.$_GET['default_canvas_width'].'" id="canvas_width" name="default_canvas_width"></td>
                  </tr>
                  <tr>
                    <td><b>Enter Canvas Height (PX)</b></td>
                    <td><input min="0" step="5" required="required" type="number" class="form-control" value="'.$_GET['default_canvas_height'].'" id="canvas_height" name="default_canvas_height"></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <input type="hidden" name="productId" value="'.$_GET['productId'].'" />
                      <input type="hidden" name="orderId" value="'.$_GET['orderId'].'" />
                      <button type="submit" class="bpack-btn">Update Canvas Size</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>';
          echo '<div class="heading-tittle-eight">
            <div class="heading-tittle">
              <h4>Dimensions in other unit</h4>
            </div>
          </div>
          <div class="canvasOtherUnits">Loading...</div>';
      }
      ?>
    </div>
    <div style="background-color:#f4f3f3" class="col-6">
      <?php
      // Showing post content
      if ( have_posts() ) {
        while ( have_posts() ) : the_post();
          the_content();
        endwhile;
      }
      ?>
    </div>
    <div class="col-3">
      <?php dynamic_sidebar( 'wave-customization-sidebar' ); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
