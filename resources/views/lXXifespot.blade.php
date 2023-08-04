<x-app-layout>
<!--Mobile Nav View -->
<div class="md:hidden border-2 border-gray-200 my-4 ml-6 mr-6 p-4">
    <div class="flex justify-between items-center ">
       <div class="flex items-center">
        <span class="mr-2">
            <img class="h-12 w-12 rounded-full mx-2" src="{{ (!empty(Auth::user()->profile_photo_path)) ? url('upload/admin_images/'.Auth::user()->profile_photo_path) : url('upload/no_image.png') }}" alt="Profile Image">
          </span>
          <div class="xhidden xmd:block text-sm">
              <div>Hi, {{ Auth::user()->fname }}</div>
              <a href="#!" class="text-blue-500 text-xs">Switch Account</a>
          </div>
       </div>
        <div class="md:hidden xborder-r-2 h-full xmr-4">
            <div class="flex px-3 py-2 border border-transparent text-sm leading-4 font-medium items-center rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">

             <div class="flex space-x-2">
                <a class="text-xs text-gray-500" href="/">Xpirix</a>
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
        </div>
    </div>

        <!--Mobile (Top Side Nav) Icons-->
        <div class="mt-4">
            <ul class="flex space-x-4 md:space-x-6 md:mx-5">
                <li>
                    <a href="{{ route('messages') }}" class="flex h-8 items-center space-x-4">
                        <span class="{{ (Request::is('messages*')? 'text-blue-400' : '') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('mylifespot.personal') }}" class="flex h-8 items-center space-x-4">
                        <span class="{{ (Request::is('mylifespot*')? 'text-blue-400' : '') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6  w-6" fill="none" viewBox="0 0 24 24"    stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('myestate') }}" class="flex h-8 items-center space-x-4">
                        <span class="{{ (Request::is('myestate*')? 'text-blue-400' : '') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                            </svg>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#!" class="flex h-8 items-center space-x-4">
                        <span class="{{ (Request::is('members_other_estates*')? 'text-blue-400' : '') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('documents', 0) }}" class="flex h-8 items-center space-x-4">
                        <span class="{{ (Request::is('documents*')? 'text-blue-400' : '') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                            </svg>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#!" class="flex h-8 items-center space-x-4">
                        <span class="{{ (Request::is('help_center*')? 'text-blue-400' : '') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('growmyestate.index') }}" class="flex h-8 items-center space-x-4">
                        <span class="{{ (Request::is('grow_my_estate*')? 'text-blue-400' : '') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                            </svg>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#!" class="flex h-8 items-center space-x-4">
                        <span class="{{ (Request::is('tasks*')? 'text-blue-400' : '') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                            </svg>
                        </span>
                        <span class="hover:text-black hidden md:block {{ (Request::is('tasks*')? 'text-black' : '') }}"> Tasks</span>
                    </a>
                </li>
            </ul>
        </div>

</div>

    <div xx-data="{ sidebarOpen: true }" class="flex overflow-x-hidden xh-screen">

        <!--Left Side-->
        <div
            :class="sidebarOpen ?  'md:w-60' : 'w-20' "
            class="hidden md:flex flex-col min-h-screen top-18 left-0 h-full transition-all duration-300 border-r-2  ">
            {{-- <div class="xflex-shrink-0 overflow-y-auto overflow-x-hidden fxlex xflex-col justify-between flex-grow text-sm text-gray-600 ml-3">

                <!--Side Nav-->
                <!--Welcome-->
                <div class="flex items-center pt-8">
                    <span class="mr-2">
                      <img class="h-12 w-12 rounded-full ml-2" src="{{ (!empty(Auth::user()->profile_photo_path)) ? url('upload/admin_images/'.Auth::user()->profile_photo_path) : url('upload/no_image.png') }}" alt="Profile Image">
                    </span>
                    <div class="hidden md:block text-sm">
                        <div>Hi, {{ Auth::user()->fname }}</div>
                        <a href="#!" class="text-blue-500 text-xs">Switch Account</a>
                    </div>
                </div>

                <div class="w-64 space-y-5 my-5">

                    <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('nomembers*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                        <div class="w-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 px-2 {{ (Request::is('nomembers*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                            <a href="{{ route('message_no_members') }}" class="flex h-8 items-center space-x-4">
                                <span class="{{ (Request::is('nomembers*')? 'text-blue-400' : '') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6  w-6" fill="none" viewBox="0 0 24 24"    stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                    </svg>


                                </span>
                                <span class="hover:text-black hidden md:block {{ (Request::is('nomembers*')? 'text-black' : '') }}"> Getting Started</span>
                            </a>
                        </div>
                    </div>


                    <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('messages*') ? 'border-r-4 border-blue-500 rounded' : '') }}">
                        <div class="w-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 px-2 {{ (Request::is('messages*') ? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                            <a href="{{ route('messages') }}" class="flex h-8 items-center space-x-4">
                                <span class="{{ (Request::is('messages*')? 'text-blue-400' : '') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                    </svg>
                                </span>
                                <span class="hover:text-black hidden md:block {{ (Request::is('messagse*') ? 'text-black' : '') }}"> Messages</span>
                            </a>
                        </div>
                    </div>

                    <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('mylifespot*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                        <div class="w-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 px-2 {{ (Request::is('mylifespot*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                            <a href="{{ route('mylifespot.personal') }}" class="flex h-8 items-center space-x-4">
                                <span class="{{ (Request::is('mylifespot*')? 'text-blue-400' : '') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6  w-6" fill="none" viewBox="0 0 24 24"    stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </span>
                                <span class="hover:text-black hidden md:block {{ (Request::is('mylifespot*')? 'text-black' : '') }}"> My Lifespot</span>
                            </a>
                        </div>
                    </div>

                    <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('myestate*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                        <div class="w-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 px-2 {{ (Request::is('myestate*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                            <a href="{{ route('myestate') }}" class="flex h-8 items-center space-x-4">
                                <span class="{{ (Request::is('myestate*')? 'text-blue-400' : '') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                    </svg>
                                </span>
                                <span class="hover:text-black hidden md:block {{ (Request::is('myestate*')? 'text-black' : '') }}"> My Estate</span>
                            </a>
                        </div>
                    </div>

                    <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('members_other_estates*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                        <div class="w-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 px-2 {{ (Request::is('members_other_estates*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                            <a href="#!" class="flex h-8 items-center space-x-4">
                                <span class="{{ (Request::is('members_other_estates*')? 'text-blue-400' : '') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </span>
                                <span class="hover:text-black hidden md:block {{ (Request::is('members_other_estates*')? 'text-black' : '') }}"> Members & Other Estates</span>
                            </a>
                        </div>
                    </div>



                    <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('documents*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                        <div class="w-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 px-2 {{ (Request::is('documents*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                            <a href="{{ route('documents', 0) }}" class="flex h-8 items-center space-x-4">
                                <span class="{{ (Request::is('documents*')? 'text-blue-400' : '') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                                    </svg>
                                </span>
                                <span class="hover:text-black hidden md:block {{ (Request::is('documents*')? 'text-black' : '') }}"> Documents</span>
                            </a>
                        </div>
                    </div>

                    <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('help_center*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                        <div class="w-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 px-2 {{ (Request::is('help_center*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                            <a href="#!" class="flex h-8 items-center space-x-4">
                                <span class="{{ (Request::is('help_center*')? 'text-blue-400' : '') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                <span class="hover:text-black hidden md:block {{ (Request::is('help_center*')? 'text-black' : '') }}"> Help Center</span>
                            </a>
                        </div>
                    </div>

                    <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('grow_my_estate*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                        <div class="w-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 px-2 {{ (Request::is('grow_my_estate*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                            <a href="{{ route('growmyestate.index') }}" class="flex h-8 items-center space-x-4">
                                <span class="{{ (Request::is('grow_my_estate*')? 'text-blue-400' : '') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                                    </svg>
                                </span>
                                <span class="hover:text-black hidden md:block {{ (Request::is('grow_my_estate*')? 'text-black' : '') }}"> Grow My Estate</span>
                            </a>
                        </div>
                    </div>

                    <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('tasks*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                        <div class="w-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 px-2 {{ (Request::is('tasks*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                            <a href="#!" class="flex h-8 items-center space-x-4">
                                <span class="{{ (Request::is('tasks*')? 'text-blue-400' : '') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                    </svg>
                                </span>
                                <span class="hover:text-black hidden md:block {{ (Request::is('tasks*')? 'text-black' : '') }}"> Tasks</span>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- Sponsor Ads -->
                <div class="xw-15 mx-4 hidden md:block">
                    <div class="bg-blue-300 items-center py-8 md:px-12 sm:px-2 text-white sm:text-xs md:text-lg tracking-tighter text-center">Sponsor Ad</div>
                </div>

                <div class="hidden md:block mt-20">
                    <div @click.prevent="sidebarOpen = !sidebarOpen" class="xinvisible flex text-xs rounded-sm bg-gray-100 text-blue-400 items-center py-4 px-10  cursor-pointer">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </span>
                        <span class="hidden md:block ml-2">Collapse Menu</span>
                    </div>
                    <p class="flex text-xs text-blue-400 my-5 px-12">

                        <a href="#!" class="underline">Terms </a>
                        <span>&nbsp;&&nbsp;</span>
                        <a href="#!" class="underline"> Privacy</a>

                    </p>
                </div>

            </div> --}}

        </div>

        <!--Right Side-->
        <div class="w-full">
            @yield('content')
        </div>

    </div>

</x-app-layout>
