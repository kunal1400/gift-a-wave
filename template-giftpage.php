<?php
/**
* Template Name: Gift page
**/
get_header();

// get_template_part('templates/nav', 'fullwidth');

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

<div class="container cover-container">
  <div class="row">    
    <div class="col-md-12 text-center">
        <div id="outputwaveimage"></div>
        <!-- Showing the Spotify player on site -->
        <iframe src="https://open.spotify.com/embed/track/31boen8ePYpKovywHdLDGy?utm_source=generator" width="100%" height="80" frameBorder="0" allowfullscreen=""></iframe>
        <!-- Showing default audio player on site -->
        <audio controls>
            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/ogg">
            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mp3">
            Your browser does not support the audio element.
        </audio>
    </div>
  </div>
</div>

<?php get_footer(); ?>
