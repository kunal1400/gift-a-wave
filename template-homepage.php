<?php
/**
* Template Name: Home Page
**/
get_header();
?>

<?php get_template_part('templates/nav', 'fullwidth'); ?>

<!-- START HOME -->
<div id="home" class="shop-banner constru-banner saas banner-area">
  <div class="banner-active">
    <div class="slider-area">
      <div class="slider-active-saas">
        <div class="slider-wrapper-saas vh d-flex" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/bg0.png)">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_khggnjkd.json"  background="transparent"  speed="0.1"  style="width: 100%; height: auto;"  loop autoplay></lottie-player>
                <!-- <div class="shop-banner-pic">
                  <img src="<?php //echo get_template_directory_uri() ?>/img/demo/shop/hero-man.png" alt="" />
                </div> -->
              </div>
              <div class="col-md-6 text-right mt-5">
                <div class="slider-text-new">
                  <h1>Generate. <span>Customize.</span> Download.</h1>
                  <p>We helps you create your unique sound wave art based on a sound of your choice. Simply upload your audio, pick a song from Spotify or start with a sample.</p>
                  <div class="saas-button new-btn mt-4 text-right">
                    <a href="<?php site_url('giftawave') ?>">Start Designing</a>
                  </div>
                  <p>Simply select the audio file and we'll convert it to a sound wave for you.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END HOME -->
 <div class="icon-card-area">
  	<div class="icon-card-warp">
  		<div class="icon-card-one">
  			<div class="container">
  				<div class="row">
  					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
  						<div class="grid-wrp">
  							<div class="wrp">
  								<a class="icon icon-twitter" href="#">
  									<i class="fa fa-home"></i>
  								</a>
  								<h4>Audio file or Spotify</h4>
  								<p>Upload an audio file or simply copy and paste a Spotify link to your favourite song to generate a sound wave</p>
  							</div>
  						</div>
  					</div>
  					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
  						<div class="grid-wrp">
  							<div class="wrp">
  								<a class="icon icon-twitter" href="#">
  									<i class="fa fa-sun-o circle-yes"></i>
  								</a>
  								<h4>Customize Your Design</h4>
  								<p>Use our many tools to customize your sound wave art to make something special</p>
  							</div>
  						</div>
  					</div>
  					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
  						<div class="grid-wrp">
  							<div class="wrp">
  								<a class="icon icon-twitter" href="#">
  									<i class="fa fa-users circle-yes"></i>
  								</a>
  								<h4>Download</h4>
  								<p>Download your design in many formats and sizes</p>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>

 <!-- START ABOUT -->
 <div id="about" class="saas finance gym section about-us-area">
   <div class="container">
     <div class="row">
       <div class="col-lg-6">
         <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_mksle47o.json"  background="#ffffff"  speed="0.1"  style="width: 100%; height: auto;"  loop autoplay></lottie-player>
         <!-- <img class="about-img" src="<?php echo get_template_directory_uri() ?>/img/banner-img.png" alt=""> -->
       </div>
       <div class="col-lg-5 offset-lg-1">
         <div class="about-text">
           <span>about us</span>
           <h3>We are selling all our the world</h3>
           <p>Our users can create beautiful wave art anytime, anywhere and Download it. You can use the generated wave arts in these areas</p>
           <div class="about-features">
             <div class="about-features-item">
               <div class="about-feature-icon">
                 <i class="fa fa-check"></i>
               </div>
               <div class="about-feature-text">
                 <h4>Greeting Card</h4>
               </div>
             </div>
             <div class="about-features-item">
               <div class="about-feature-icon">
                 <i class="fa fa-check"></i>
               </div>
               <div class="about-feature-text">
                 <h4>Coffie Mugs</h4>
               </div>
             </div>
             <div class="about-features-item">
               <div class="about-feature-icon">
                 <i class="fa fa-check"></i>
               </div>
               <div class="about-feature-text">
                 <h4>Frames</h4>
               </div>
             </div>
           </div>
           <!-- <div class="saas-button-2 new-btn mt-4 text-left">
             <a href="#">Contact Now</a>
           </div> -->
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- END ABOUT -->

 <div id="service" class="saas finance gym section section-service">
   <div class="container">
     <div class="row">
       <div class="col-lg-12">
         <!-- <div class="saas gym-section-title">
           <span><?php //the_title(); ?></span>
         </div> -->
         <?php
         if ( have_posts() ) {
           while ( have_posts() ) : the_post();
           ?>
           <div class="blog-post">
             <h2 class="blog-post-title"></h2>
             <?php the_content(); ?>
           </div>
           <?php
           endwhile;
         }
         ?>
       </div>
     </div>
   </div>
 </div>

 <!-- <section class="saas section dash-call-action">
  <div class="container">
     <div class="heading-action text-center">
         <h2>We are selling all our the world</h2>
         <div class="saas-button new-btn mt-4 mb-4 text-center">
           <a href="#">Contact Now</a>
         </div>
         <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_mksle47o.json"  background="#ffffff"  speed="0.1"  style="width: 100%; height: auto;"  loop autoplay></lottie-player>
     </div>
   </div>
 </section> -->

 <?php echo get_products_html_section_by_slug( 'featured-products' ); ?>

 <?php echo get_products_html_section_by_slug( 'featured-games' ); ?>

 <!-- START CLIENT -->
 <?php /*
 <div id="client" class="saas gym testimonials-area section section-testimonials">
   <div class="container">
     <div class="row">
       <div class="col-lg-12">
         <div class="gym-section-title">
           <span>review</span>
           <h2>Our worldwide happy user <br />says about megapack</h2>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col col-md-12">
         <div class="testimonials-grids gym-testimonials owl-carousel owl-theme owl-loaded owl-text-select-on">
           <?php
            $feedbackPosts = get_posts( array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'client-feedback',
            ));
             if( empty( $feedbackPosts ) ) return '';
             foreach( $feedbackPosts as $feedbackPost ) {
               $thumbnainUrl = get_the_post_thumbnail_url($feedbackPost, 'post-thumbnail');
               if ( !$thumbnainUrl ) {
                 $thumbnainUrl = get_template_directory_uri().'/img/defaultManPlaceholder.png';
               }
               echo '<div class="new-testimonials-7 text-left">
                 <div class="queit-box">
                   <i class="fa fa-quote-right"></i>
                 </div>
                 <div class="client-pic">
                   <img width="90px" height="90px" alt="'.$feedbackPost->post_title.'" src="'.$thumbnainUrl.'">
                 </div>
                 <div class="details-about">
                   <h4>'.$feedbackPost->post_title.'</h4>
                   <div class="rating">
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                   </div>
                   <p>'.$feedbackPost->post_content.'</p>
                 </div>
               </div>';
             }
            ?>
         </div>
       </div>
     </div>
   </div>
 </div>
 */ ?>
 <!-- END CLIENT -->

 <!-- START BLOG -->
 <div id="blog" class="saas finance gym section section-blog">
   <div class="container">
     <div class="blog-area">
       <div class="row">
         <div class="col-lg-12">
           <div class="gym-section-title">
             <span>How To</span>
             <h2>These articles will <br /> help you in your customizations</h2>
           </div>
         </div>
       </div>
       <div class="row">
         <?php
          $posts = get_posts( array('numberposts' => 6) );
          if( empty( $posts ) ) return '';
          foreach( $posts as $post ) {
            // Feature image
            // $img_url = '<img src="'.get_template_directory_uri().'/img/demo/saas/m-01.jpg"/>' ;
            // if (has_post_thumbnail( $post->ID ) ) {
            //   $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
            //   $img_url = '<img src="'.$image[0].'" width="360" height="540"/>';
            // }
            $youtubeVideoUrl = get_field('_youtube_video_link', $post->ID);

            $youtubewrapper = "";
            if ( !empty($youtubeVideoUrl) ) {
              $youtubewrapper = '<div class="youtubewrapper">'.$youtubeVideoUrl.'</div>';
            }

            echo '<div class="col-md-6 mb-4">
              <h5 class=""><a href="'.get_permalink( $post ).'">'.$post->post_title.'</a></h5>
              '.$youtubewrapper.'
            </div>';
          }
         ?>
       </div>
     </div>
   </div>
 </div>
 <!-- END BLOG -->

 <?php get_template_part('templates/footer', 'socialicons'); ?>

<?php get_footer(); ?>
