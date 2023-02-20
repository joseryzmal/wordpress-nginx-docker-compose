<?php
/**
 * Single variation display
 *
 * This is a javascript-based template for single variations (see https://codex.wordpress.org/Javascript_Reference/wp.template).
 * The values will be dynamically replaced after selecting attributes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.5.0
 */

defined( 'ABSPATH' ) || exit;

?>
<script type="text/template" id="tmpl-variation-template">
  <div class="flex flex-col md:flex-row md:items-center gap-x-6">
    <div class="text-3xl tracking-tight text-gray-900">{{{ data.variation.price_html }}}&nbsp;</div>
    <div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
  </div>
</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
	<span class="text-red-600"><?php esc_html_e( 'Sorry, this product is unavailable. Please choose a different combination.', 'woocommerce' ); ?></span>
</script>
