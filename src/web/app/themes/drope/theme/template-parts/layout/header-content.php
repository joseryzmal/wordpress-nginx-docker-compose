<header class="relative">
  <nav aria-label="Top">
    <!-- Top navigation -->
    <div class="bg-gray-900">
      <div class="mx-auto flex h-10 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
        <!-- Currency selector -->
        <form class="hidden lg:block lg:flex-1">
          <div class="flex">
            <label for="desktop-currency" class="sr-only">Currency</label>
            <div class="group relative -ml-2 rounded-md border-transparent bg-gray-900 focus-within:ring-2 focus-within:ring-white">
              <select id="desktop-currency" name="currency" class="flex items-center rounded-md border-transparent bg-gray-900 bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-white focus:border-transparent focus:outline-none focus:ring-0 group-hover:text-gray-100">
                <option>CAD</option>

                <option>USD</option>

                <option>AUD</option>

                <option>EUR</option>

                <option>GBP</option>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center">
                <!-- Heroicon name: mini/chevron-down -->
                <svg class="h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
          </div>
        </form>

        <p class="flex-1 text-center text-sm font-medium text-white lg:flex-none">Get free delivery on orders over $100</p>

        <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
          <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Create an account</a>
          <span class="h-6 w-px bg-gray-600" aria-hidden="true"></span>
          <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
        </div>
      </div>
    </div>

    <!-- Secondary navigation -->
    <div class="bg-white">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="border-b border-gray-200">
          <div class="flex h-16 items-center justify-between">
            <!-- Logo (lg+) -->
            <div class="hidden lg:flex lg:items-center">
              <a href="#">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
              </a>
            </div>

            <div class="hidden h-full lg:flex">
              <!-- Mega menus -->
              <div class="ml-8">
                <div class="flex h-full justify-center space-x-8">
                  <?php /*
                  <div
                    class="flex"
                    data-controller="header-nav"
                    data-header-nav-active-class="border-indigo-600 text-indigo-600"
                    data-header-nav-inactive-class="border-transparent text-gray-700 hover:text-gray-800"
                  >
                    <div class="relative flex">
                      <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                      <button type="button" data-action="click->header-nav#showMenu focusout->header-nav#hideMenu" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false">Women</button>
                    </div>

                    <!--
                      'Women' mega menu, show/hide based on flyout menu state.

                      Entering: "transition ease-out duration-200"
                        From: "opacity-0"
                        To: "opacity-100"
                      Leaving: "transition ease-in duration-150"
                        From: "opacity-100"
                        To: "opacity-0"
                    -->
                    <div class="opacity-0 absolute inset-x-0 top-full text-gray-500 sm:text-sm">
                      <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                      <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                      <div class="relative bg-white">
                        <div class="mx-auto max-w-7xl px-8">
                          <div class="grid grid-cols-2 items-start gap-y-10 gap-x-8 pt-10 pb-12">
                            <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                              <div>
                                <p id="desktop-featured-heading-0" class="font-medium text-gray-900">Featured</p>
                                <ul role="list" aria-labelledby="desktop-featured-heading-0" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Sleep</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Swimwear</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Underwear</a>
                                  </li>
                                </ul>
                              </div>
                              <div>
                                <p id="desktop-categories-heading" class="font-medium text-gray-900">Categories</p>
                                <ul role="list" aria-labelledby="desktop-categories-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Basic Tees</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Artwork Tees</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Bottoms</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Underwear</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Accessories</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                              <div>
                                <p id="desktop-collection-heading" class="font-medium text-gray-900">Collection</p>
                                <ul role="list" aria-labelledby="desktop-collection-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Everything</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Core</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">New Arrivals</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Sale</a>
                                  </li>
                                </ul>
                              </div>

                              <div>
                                <p id="desktop-brand-heading" class="font-medium text-gray-900">Brands</p>
                                <ul role="list" aria-labelledby="desktop-brand-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Full Nelson</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">My Way</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Significant Other</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="flex">
                    <div class="relative flex">
                      <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                      <button type="button" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false">Men</button>
                    </div>

                    <!--
                      'Men' mega menu, show/hide based on flyout menu state.

                      Entering: "transition ease-out duration-200"
                        From: "opacity-0"
                        To: "opacity-100"
                      Leaving: "transition ease-in duration-150"
                        From: "opacity-100"
                        To: "opacity-0"
                    -->
                    <div class="absolute inset-x-0 top-full text-gray-500 sm:text-sm">
                      <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                      <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                      <div class="relative bg-white">
                        <div class="mx-auto max-w-7xl px-8">
                          <div class="grid grid-cols-2 items-start gap-y-10 gap-x-8 pt-10 pb-12">
                            <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                              <div>
                                <p id="desktop-featured-heading-1" class="font-medium text-gray-900">Featured</p>
                                <ul role="list" aria-labelledby="desktop-featured-heading-1" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Casual</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Boxers</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Outdoor</a>
                                  </li>
                                </ul>
                              </div>
                              <div>
                                <p id="desktop-categories-heading" class="font-medium text-gray-900">Categories</p>
                                <ul role="list" aria-labelledby="desktop-categories-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Artwork Tees</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Pants</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Accessories</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Boxers</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Basic Tees</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                              <div>
                                <p id="desktop-collection-heading" class="font-medium text-gray-900">Collection</p>
                                <ul role="list" aria-labelledby="desktop-collection-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Everything</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Core</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">New Arrivals</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Sale</a>
                                  </li>
                                </ul>
                              </div>

                              <div>
                                <p id="desktop-brand-heading" class="font-medium text-gray-900">Brands</p>
                                <ul role="list" aria-labelledby="desktop-brand-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Significant Other</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">My Way</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                  </li>

                                  <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Full Nelson</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  */ ?>

                  <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Women</a>

                  <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Men</a>

                  <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>

                  <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a>
                </div>
              </div>
            </div>

            <!-- Mobile menu and search (lg-) -->
            <div class="flex flex-1 items-center lg:hidden">
              <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
              <button type="button" class="-ml-2 rounded-md bg-white p-2 text-gray-400">
                <span class="sr-only">Open menu</span>
                <!-- Heroicon name: outline/bars-3 -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
              </button>

              <!-- Search -->
              <a href="#" class="ml-2 p-2 text-gray-400 hover:text-gray-500">
                <span class="sr-only">Search</span>
                <!-- Heroicon name: outline/magnifying-glass -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
              </a>
            </div>

            <!-- Logo (lg-) -->
            <a href="#" class="lg:hidden">
              <span class="sr-only">Your Company</span>
              <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto">
            </a>

            <div class="flex flex-1 items-center justify-end">
              <div class="flex items-center lg:ml-8">
                <div class="flex space-x-8">
                  <div class="hidden lg:flex">
                    <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                      <span class="sr-only">Search</span>
                      <!-- Heroicon name: outline/magnifying-glass -->
                      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                      </svg>
                    </a>
                  </div>

                  <div class="flex">
                    <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                      <span class="sr-only">Account</span>
                      <!-- Heroicon name: outline/user -->
                      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                      </svg>
                    </a>
                  </div>
                </div>

                <span class="mx-4 h-6 w-px bg-gray-200 lg:mx-6" aria-hidden="true"></span>

                <div class="flow-root">
                  <a href="#" class="group -m-2 flex items-center p-2">
                    <!-- Heroicon name: outline/shopping-cart -->
                    <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                    <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                    <span class="sr-only">items in cart, view bag</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
