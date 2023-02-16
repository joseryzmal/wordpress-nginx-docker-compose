<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
?>
<div class="flex flex-col-reverse product-image-gallery" data-controller="tabs">
  <div class="mx-auto mt-6 hidden w-full max-w-2xl sm:block lg:max-w-none">
    <div class="grid grid-cols-4 gap-6" aria-orientation="horizontal" role="tablist">
      <?php do_action( 'woocommerce_product_thumbnails' ); ?>
    </div>
  </div>

  <div class="aspect-w-1 aspect-h-1 w-full">
    <?php
    $attachment_ids = $product->get_gallery_image_ids();
    array_unshift($attachment_ids, $post_thumbnail_id);

    foreach( $attachment_ids as $index => $attachment_id ):
      $image_link = wp_get_attachment_url( $attachment_id );
      $element_id = "product-image-{$attachment_id}";
      $alt_text = trim( wp_strip_all_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) );
      $hidden_css = $index > 0 ? 'hidden' : '' ?>
    <div id="<?php echo $element_id ?>"
      data-tabs-target="tabpanel"
      aria-labelledby="<?php echo $element_id ?>"
      role="tabpanel"
      tabindex="0"
      class="<?php echo $hidden_css ?>">
      <img src="<?php echo $image_link ?>" alt="<?php echo $alt_text ?>" class="h-full w-full object-cover object-center sm:rounded-lg zoomImg">
    </div>
    <?php
    endforeach;
    ?>
  </div>
</div>
