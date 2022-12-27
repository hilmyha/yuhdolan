
<header class="bg-white border-gray-200 md:px-10 sm:px-2 py-5 rounded dark:bg-gray-900">
  <div class="px-4 flex flex-wrap items-center justify-between">
    <a href="#" class="flex items-center">
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">YuhDolan</span>
    </a>
    <div class="flex items-center md:order-1">
        <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
          <span class="sr-only">Open user menu</span>
          <img class="w-8 h-8 rounded-full" src="https://stjohnsfoundation.health/wp-content/uploads/2016/03/headshot_placeholder.jpg" alt="">
        </button>
        <!-- Dropdown menu -->
        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
          <div class="px-4 py-3">
            <span class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->username }}</span>
          </div>
          <ul class="py-1" aria-labelledby="user-menu-button">
            <li>
              <a href="/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Home</a>
            </li>
            <li>
              <form action="/logout" method="post" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                @csrf
                <button type="submit">Sign out</button>
              </form>
            </li>
          </ul>
        </div>
        
    </div>
  </div>
</header>
