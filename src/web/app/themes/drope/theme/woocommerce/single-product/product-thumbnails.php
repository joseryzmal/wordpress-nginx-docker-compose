<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$attachment_ids = $product->get_gallery_image_ids();

if ( $attachment_ids && $product->get_image_id() ):
  array_unshift($attachment_ids, $product->get_image_id());
	foreach ( $attachment_ids as $index => $attachment_id ):
    $gallery_thumbnail = wc_get_image_size( 'woocommerce_thumbnail' );
    $thumbnail_size    = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
    $image_size        = apply_filters( 'woocommerce_gallery_image_size', $thumbnail_size );
    $thumbnail_src     = wp_get_attachment_image_src( $attachment_id, $thumbnail_size );
    $alt_text          = trim( wp_strip_all_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) );
    $element_id = "product-image-{$attachment_id}"; ?>
<button class="relative flex h-24 cursor-pointer items-center justify-center rounded-md bg-white text-sm font-medium uppercase text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring focus:ring-opacity-50 focus:ring-offset-4"
  data-action="click->tabs#selectTab"
  data-tabs-target="tab"
  aria-controls="<?php echo $element_id ?>"
  aria-selected="<?php echo $index == 0 ? 'true' : 'false' ?>"
  role="tab"
  type="button">
  <span class="sr-only"><?php echo $alt_text ?></span>
  <span class="absolute inset-0 overflow-hidden rounded-md">
    <img src="<?php echo $thumbnail_src[0] ?>" alt="<?php echo $alt_text ?>" class="h-full w-full object-cover object-center">
  </span>
  <span class="ring-transparent pointer-events-none absolute inset-0 rounded-md ring-2 ring-offset-2" aria-hidden="true"></span>
</button>
<?php
  endforeach;
endif;
