<x-guest-layout>
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-1.5 rounded dark:bg-gray-900">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
          <a href="https://flowbite.com/" class="flex items-center">
              {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo"> --}}

                <span class="h-12 w-12 rounded-full bg-gray-700 mr-3"></span>

              <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Xpirix</span>
          </a>
          <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
              <li>
                <a href="#" class="block py-2 pr-4 pl-3 text-black font-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
              </li>
              <li>
                <a href="{{ route('message') }}" class="block py-2 pr-4 pl-3 text-black font-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Lifespot</a>
              </li>
              <li>
                <a href="{{ route('price') }}" class="block py-2 pr-4 pl-3 text-black font-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
              </li>
              @auth
              <li class="invisible">
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="border border-[#0682d4] text-white bg-[#0682d4] py-2 px-8 rounded-lg font-bold">Sign Up</a>
                @endif
            </li>
              <li>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <a class="border-2 border-[#0682d4] bg-white text-[#0682d4] py-2 px-8 rounded-lg font-bold" href="{{ route('logout') }}"
                             @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
              </li>
                 @else
                 <li>
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="border-2 border-[#0682d4] bg-white text-[#0682d4] py-2 px-8 rounded-lg font-bold">
                        Log in
                        </a>
                    @endif
                  </li>
                  <li>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="border border-[#0682d4] text-white bg-[#0682d4] py-2 px-8 rounded-lg font-bold">Sign Up</a>
                    @endif
                  </li>
              @endauth
            </ul>
          </div>
        </div>
    </nav>
    <main class="mt-6">
        {{-- @yield('xpirix') --}} hey I'm logged in
        </main>
</x-guest-layout>
