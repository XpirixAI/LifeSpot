<style>
    [x-cloak] { display: none !important; }
</style>
<nav x-data="{ Navopen: false }" class="bg-white border-gray-200 px-24 sm:px-24 py-1.5 rounded dark:bg-gray-900 shadow">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="/" class="flex items-center">
          {{-- <img src="{{ asset('logos/xpirix-logo-transparent.png') }}" class="mr-3 h-9 xsm:h-9" alt="Flowbite Logo"> --}}
          <x-jet-application-mark class="block h-9 w-auto" />

            {{-- <span class="h-10 w-10 rounded-full bg-gray-700 mr-3"></span>

          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Xpirix</span> --}}
      </a>
      <button @click="Navopen = ! Navopen" data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row space-x-2 md:space-x-4 lg:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li class="">
                <a href="{{ route('getting_started') }}" class="block py-2 pr-4 pl-3 text-black font-black text-lg rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-600 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Customize your world</a>
            </li>
            {{-- <li>
                <a href="/" class="block py-2 pr-4 pl-3 text-black font-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
            </li>
            @auth
            <li>
                <a href="{{ route('getting_started') }}" class="block py-2 pr-4 pl-3 text-black font-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Lifespot</a>
            </li>

                @else
                <li>
                    <a href="{{ route('login') }}" class="block py-2 pr-4 pl-3 text-black font-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Lifespot</a>
                </li>--}}

            {{-- @endauth --}}
            <li>
                <a href="{{ route('price') }}" class="block py-2 pr-4 pl-3 text-black font-black text-lg rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-600 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
            </li>
            {{-- <li>
                <a href="{{ route('help_lifespot') }}" class="block py-2 pr-4 pl-3 text-black font-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Help</a>
            </li>  --}}
            @auth
            <li class="invisible">
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="border border-[#0682d4] text-white bg-[#0682d4] py-2 px-4 lg:px-8 rounded-lg font-bold">Sign Up</a>
                @endif
                </li>
            <li>
                <!-- Authentication -->
                {{-- <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <a class="border-2 border-[#0682d4] bg-white text-[#0682d4] py-2 px-8 rounded-lg font-bold" href="{{ route('logout') }}"
                            @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </a>
                </form> --}}
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <!-- Teams Dropdown -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="ml-3 relative">
                            <x-jet-dropdown align="right" width="60">
                                <x-slot name="trigger">
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                            {{ Auth::user()->currentTeam->name }}

                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                </x-slot>

                                <x-slot name="content">
                                    <div class="w-60">
                                        <!-- Team Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Manage Team') }}
                                        </div>

                                        <!-- Team Settings -->
                                        <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                            {{ __('Team Settings') }}
                                        </x-jet-dropdown-link>

                                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                            <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                                {{ __('Create New Team') }}
                                            </x-jet-dropdown-link>
                                        @endcan

                                        <div class="border-t border-gray-100"></div>

                                        <!-- Team Switcher -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-jet-switchable-team :team="$team" />
                                        @endforeach
                                    </div>
                                </x-slot>
                            </x-jet-dropdown>
                        </div>
                    @endif

                    <!-- Icons -->
                    {{-- <div class="hidden md:block border-r-2 h-full mr-4">
                       <div class="flex px-3 py-2 border border-transparent text-sm leading-4 font-medium items-center rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">

                        <div class="flex space-x-2">
                            <a class="text-xs text-gray-500" href="/">Xpirix</a>
                            <a class="text-xs text-gray-500" href="{{ route('company_admin') }}">Admin</a>
                         </div>

                        <a href="" class="m-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </a>
                            <a href="" class="m-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                            </a>
                       </div>
                    </div> --}}
                    <!-- Settings Dropdown -->
                    @php
                $id = Auth::user()->id;
                $user = App\Models\User::find($id);
            @endphp
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->fname }} {{ Auth::user()->lname }}" />
                                    </button>
                                @else

                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 xpy-2 border border-transparent text-sm leading-4 font-black rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                            <img xid="showImage" class="object-cover rounded w-6 h-6 mr-2" src="{{ (!empty($user->profile_photo_path)) ? url('upload/admin_images/'.$user->profile_photo_path) : asset('thumbnails/no_image.png') }}" alt="">
                                           Hi, {{ Auth::user()->fname }} {{ Auth::user()->lname }}
                                        <svg class="ml-4 xml-12  h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        </button>
                                    </span>
                                @endif
                                {{-- <p class="flex items-center px-3 xpy-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition truncate">The {{ Auth::user()->fname }} {{ Auth::user()->lname }}  Family Estate</p> --}}
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>
                                {{-- <x-jet-dropdown-link href="{{ route('company_admin_users') }}">
                                    {{ __('ssAdmin') }}
                                </x-jet-dropdown-link> --}}

                                <x-jet-dropdown-link href="{{ route('viewProfile') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>
                                @if (Auth::user()->role == 'Owner')
                                    <x-jet-dropdown-link href="{{ route('dashboard_home') }}">
                                        {{ __('Admin') }}
                                    </x-jet-dropdown-link>
                                @elseif (Auth::user()->role == 'Editor')
                                    <x-jet-dropdown-link href="{{ route('dashboard_home') }}">
                                        {{ __('Admin') }}
                                    </x-jet-dropdown-link>
                                 @else
                                    <x-jet-dropdown-link href="{{ route('dashboard_home') }}">
                                        {{ __('Admin') }}
                                    </x-jet-dropdown-link>
                                @endif
                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                             @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                </div>
                    </li>
                @else
                <li>
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="border-2 border-[#0682d4] bg-white text-[#0682d4] py-2 px-4 lg:px-8 rounded-lg font-bold">
                        Log in
                        </a>
                    @endif
                </li>
                <li>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="border border-[#0682d4] text-white bg-[#0682d4] py-2 px-4 lg:px-8 rounded-lg font-bold">Sign Up</a>
                    @endif
                </li>
            @endauth
            </ul>
        </div>
    </div>


    <!--Mobile Menu-->
    <div x-cloak x-show="Navopen" class="md:hidden w-full block md:w-auto" id="navbar-default">
    <ul class="flex flex-col w-full md:p-4 mt-2 py-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        {{-- <li>
            <a href="/" class="block py-2 pr-4 pl-3 text-black font-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
        </li> --}}
        @auth
        <li>
            <a href="{{ route('getting_started') }}" class="block py-2 pr-4 pl-3 text-black font-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Customize your world</a>
        </li>
        {{-- <li>
            <a href="{{ route('getting_started') }}" class="block py-2 pr-4 pl-3 text-black font-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Lifespot</a>
        </li> --}}
            @else
            <li>
                <a href="{{ route('login') }}" class="block py-2 pr-4 pl-3 text-black font-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Lifespot</a>
            </li>
            @endauth
        {{-- <li>
            <a href="{{ route('price') }}" class="block py-2 pr-4 pl-3 text-black font-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
        </li> --}}
        {{-- <li>
            <a href="{{ route('company_admin') }}" class="block py-2 pr-4 pl-3 text-black font-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Admin</a>
        </li> --}}
        {{-- <li>
            <a href="{{ route('help_lifespot') }}" class="block py-2 pr-4 pl-3 text-black font-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Help</a>
        </li> --}}
            @auth
            @if (Auth::user()->role == 'Owner')
                <li>
                    <a href="{{ route('dashboard_home') }}" class="block py-2 pr-4 pl-3 text-black font-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Admin</a>
                </li>

              @elseif (Auth::user()->role == 'Editor')
                    <li>
                        <a href="{{ route('dashboard_home') }}" class="block py-2 pr-4 pl-3 text-black font-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Admin</a>
                    </li>
                 @else
                    <li>
                        <a href="{{ route('dashboard_home') }}" class="block py-2 pr-4 pl-3 text-black font-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Admin</a>
                    </li>
                @endif
            {{-- <li>
                <a href="{{ route('dashboard_home') }}" class="block py-2 pr-4 pl-3 text-black font-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">44Admin</a>
            </li> --}}
            <li class="invisible">
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="border border-[#0682d4] text-white bg-[#0682d4] py-2 px-4 lg:px-8 rounded-lg font-bold">Sign Up</a>
                @endif
            </li>
                  <!-- Authentication -->

        <li>


            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <a class="border-2 border-[#0682d4] bg-white text-[#0682d4] py-2 px-4 lg:px-8 rounded-lg font-bold" href="{{ route('logout') }}"
                        @click.prevent="$root.submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
        </li>

            @else
        <li class="mt-4 mb-8">
            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="border-2 border-[#0682d4] bg-white text-[#0682d4] py-2 px-5 lg:px-10 rounded-lg font-bold">
                Log in
                </a>
            @endif
        </li>
        <li>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="border border-[#0682d4] text-white bg-[#0682d4] py-2 px-4 lg:px-8 rounded-lg font-bold">Sign Up</a>
            @endif
        </li>
        @endauth
    </ul>
    </div>

</nav>
