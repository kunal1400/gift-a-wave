<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>

		<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
		<figcaption class="pb-3 pl-3 pr-3">
			<?php do_action( 'woocommerce_shop_loop_item_title' ); ?>

			<?php echo $product->get_meta('spotify_embed_code') ?>
			<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
			<div class="button_wrappers d-flex justify-content-between">
				<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
			</div>
		</figcaption>
</li>
