<!-- navbar -->
<header class="bg-white px-2 sm:px-4 py-2.5 fixed w-full z-50 top-0 left-0 border-b shadow-lg border-gray-200 mb-24">
  <div class="navbar-body">
    <a href="/" class="flex items-center">
      <span class="self-center text-xl font-semibold whitespace-nowrap">YuhDolan</span>
    </a>
    <div class="navbar-button">
      
      @auth
        <div class="flex items-center md:order-2">
          <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            {{-- <span class="sr-only">Open user menu</span> --}}
            <img class="w-8 h-8 rounded-full" src="https://stjohnsfoundation.health/wp-content/uploads/2016/03/headshot_placeholder.jpg" alt="">
            
          </button>
            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
              <div class="px-4 py-3">
                <span class="block text-sm text-gray-900 dark:text-white">Howdy, {{ auth()->user()->username }}</span>
              </div>
              <ul class="py-1" aria-labelledby="user-menu-button">
                <li>
                  <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                  <form action="/logout" method="post" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                    @csrf
                    <button type="submit">Sign Out</button>
                  </form>
                </li>
              </ul>
            </div>
            
        </div>
      @else
        <a href="/login" class="text-white bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">
          Login
        </a>
      @endauth
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
    <div class="navbar-menu items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul>
        <li>
          <a href="/wisata">Top Destination</a>
        </li>
        <li>
          <a href="/kota">City</a>
        </li>
        <li>
          <a href="/blog">Hidden Gems</a>
        </li>
        <li>
          <a href="/about-us">About Us</a>
        </li>
      </ul>
    </div>
  </div>
</header>