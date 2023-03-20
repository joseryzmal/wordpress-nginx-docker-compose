<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : ?>
  <div class="divide-y divide-gray-200 border-t my-8">
  <?php foreach ( $product_tabs as $key => $product_tab ) : ?>
    <details>
      <summary role="button" class="py-6 flex flex-row justify-between items-center">
        <h2 class="text-sm font-semibold">
          <?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
        </h2>
        <span class="flex items-center">
          <!-- Open: "hidden", Closed: "block" -->
          <svg class="indicator plus text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
          </svg>
          <!-- Open: "block", Closed: "hidden" -->
          <svg class="indicator minus text-indigo-400 group-hover:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
          </svg>
        </span>
      </summary>
      <div class="mb-6 pr-6">
        <?php
        if ( isset( $product_tab['callback'] ) ) {
          call_user_func( $product_tab['callback'], $key, $product_tab );
        }
        ?>
      </div>
    </details>
  <?php endforeach; ?>
  </div>

  <?php do_action( 'woocommerce_product_after_tabs' ); ?>
<?php
endif;
