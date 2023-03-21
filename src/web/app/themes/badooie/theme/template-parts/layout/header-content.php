<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package badooie
 */

?>

<header id="masthead" class="relative bg-white">
  <nav aria-label="Top" class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
    <div class="border-b border-gray-200">
      <div class="flex h-16 items-center justify-between">
        <!-- Logo -->
        <a href="#" class="flex">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
        </a>

        <!-- Flyout menus -->
        <div class="hidden ml-6 lg:block lg:flex-1 lg:self-stretch">
          <?php
          /*wp_nav_menu(
            array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
              'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
            )
          );*/
          ?>
        </div>

        <div class="flex flex-1 items-center justify-end">
          <a href="#" class="hidden text-gray-700 hover:text-gray-800 lg:flex lg:items-center">
            <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt="" class="block h-auto w-5 flex-shrink-0">
            <span class="ml-3 block text-sm font-medium">CAD</span>
            <span class="sr-only">, change currency</span>
          </a>

          <!-- Search -->
          <a href="#" class="ml-6 block p-2 text-gray-400 hover:text-gray-500">
            <span class="sr-only">Search</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
          </a>

          <!-- Account -->
          <a href="#" class="p-2 text-gray-400 hover:text-gray-500 lg:ml-4">
            <span class="sr-only">Account</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
          </a>

          <!-- Cart -->
          <div class="ml-4 flow-root lg:ml-6">
            <?php _s_woocommerce_cart_link(); ?>
          </div>

          <?php
            if ( function_exists( '_s_woocommerce_header_cart' ) ) {
              // _s_woocommerce_header_cart();
            }
          ?>
        </div>
      </div>
    </div>
  </nav>
</header><!-- #masthead -->
