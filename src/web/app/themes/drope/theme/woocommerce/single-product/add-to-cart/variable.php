<?php
/**
 * Variable product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/variable.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 6.1.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

$attribute_keys  = array_keys( $attributes );
$variations_json = wp_json_encode( $available_variations );
$variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : _wp_specialchars( $variations_json, ENT_QUOTES, 'UTF-8', true );

do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>"
  method="post"
  class="variations_form1 cart"
  data-controller="variations"
  data-variations-price-display-outlet=".mt-3"
  data-variations-purchasable-text-value="Add to cart"
  data-variations-sold-out-text-value="Out of stock"
  data-variations-unavailable-text-value="Unavailable"
  enctype='multipart/form-data'
  data-variations-data-value="<?php echo $variations_attr; // WPCS: XSS ok. ?>"
  data-product_id="<?php echo absint( $product->get_id() ); ?>"
  data-product_variations="<?php #echo $variations_attr; // WPCS: XSS ok. ?>">
	<?php do_action( 'woocommerce_before_variations_form' ); ?>

	<?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
		<p class="stock out-of-stock"><?php echo esc_html( apply_filters( 'woocommerce_out_of_stock_message', __( 'This product is currently out of stock and unavailable.', 'woocommerce' ) ) ); ?></p>
	<?php else : ?>
    <?php foreach ( $attributes as $attribute_name => $options ): ?>
      <div class="mt-8">
        <div class="flex items-center justify-between">
          <h2 class="text-sm font-medium text-gray-900"><?php echo wc_attribute_label( $attribute_name ) ?></h2>
          <?php /*<a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">See TEST chart</a>*/ ?>
        </div>

        <fieldset class="mt-2 variations" data-controller="attribute">
          <legend class="sr-only">Choose a <?php echo wc_attribute_label( $attribute_name ) ?></legend>
          <div class="grid grid-cols-5 gap-4 sm:grid-cols-10 lg:grid-cols-6">
            <?php
            drope_radio_variation_attribute_options(
              array(
                'options'   => $options,
                'attribute' => $attribute_name,
                'product'   => $product,
              )
            );
            ?>
          </div>
        </fieldset>
      </div>
    <?php endforeach; ?>

		<?php do_action( 'woocommerce_after_variations_table' ); ?>

		<div class="single_variation_wrap">
			<?php
				/**
				 * Hook: woocommerce_before_single_variation.
				 */
				do_action( 'woocommerce_before_single_variation' );

				/**
				 * Hook: woocommerce_single_variation. Used to output the cart button and placeholder for variation data.
				 *
				 * @since 2.4.0
				 * @hooked woocommerce_single_variation - 10 Empty div for variation data.
				 * @hooked woocommerce_single_variation_add_to_cart_button - 20 Qty and cart button.
				 */
				do_action( 'woocommerce_single_variation' );

				/**
				 * Hook: woocommerce_after_single_variation.
				 */
				do_action( 'woocommerce_after_single_variation' );
			?>
		</div>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_variations_form' ); ?>
</form>

<?php
do_action( 'woocommerce_after_add_to_cart_form' );
