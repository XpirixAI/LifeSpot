<div  x-data="{ isExpanded: true }" class="hidden md:block border-r-2 border-gray-100">
    {{-- <button @click="isExpanded= !isExpanded">Toggle</button> --}}
    <div x-cloak :class="isExpanded ? 'md:w-64 w-20' : 'w-20 pl-2' ">

         <!--Welcome-->
         <div class="flex items-center pt-8">
            <span class="mr-2">
                <img class="h-12 w-12 rounded-full ml-3 lg:ml-2" src="{{ (!empty(Auth::user()->profile_photo_path)) ? url('upload/admin_images/'.Auth::user()->profile_photo_path) : url('upload/no_image.png') }}" alt="Profile Image">
            </span>
            <div x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " xclass="hidden md:block text-sm">
                <div>Hi, {{ Auth::user()->fname }}</div>
                <a href="/" class="text-blue-500 text-xs">Home</a>
                {{-- <a href="#!" class="text-blue-500 text-xs">Switch Account</a> --}}
            </div>
        </div>

        <!--Side Nav-->

            <div class="xw-64 space-y-5 my-5">

                <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('*getting_started*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                    <div class="xw-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 pl-4 lg:px-2 {{ (Request::is('*getting_started*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                        <a href="{{ route('getting_started') }}" class="flex h-8 items-center space-x-4">
                            <span class="{{ (Request::is('*getting_started*')? 'text-blue-400' : '') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6  w-6" fill="none" viewBox="0 0 24 24"    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                </svg>


                            </span>
                            <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black {{ (Request::is('*getting_started*')? 'text-black' : '') }}"> Getting Started</span>
                        </a>
                    </div>
                </div>




                <div class="items-center  hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('*my-xpirix*') ? 'border-r-4 border-blue-500 rounded' : '') }}">
                    <div class="xw-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 pl-4 lg:px-2 {{ (Request::is('*my-xpirix*') ? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                        <a href="{{ route('webspot') }}" class="flex h-8 items-center space-x-4">
                            <span class="{{ (Request::is('*my-xpiri*')? 'text-blue-400' : '') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                                </svg>
                            </span>
                            <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black {{ (Request::is('*my-xpiri*') ? 'text-black' : '') }}"> My Xpirix</span>
                        </a>
                    </div>
                </div>

                <div class="items-center  hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('*messages*') ? 'border-r-4 border-blue-500 rounded' : '') }}">
                    <div class="xw-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 pl-4 lg:px-2 {{ (Request::is('*messages*') ? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                        <a href="{{ route('messages') }}" class="flex h-8 items-center space-x-4">
                            <span class="{{ (Request::is('*messages*')? 'text-blue-400' : '') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                            </span>
                            <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black {{ (Request::is('*messages*') ? 'text-black' : '') }}"> Messages</span>
                        </a>
                    </div>
                </div>


                <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('*mylifespot*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                    <div class="xw-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 pl-4 lg:px-2 {{ (Request::is('*mylifespot*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                        <a href="{{ route('mylifespot.personal') }}" class="flex h-8 items-center space-x-4">
                            <span class="{{ (Request::is('*mylifespot*')? 'text-blue-400' : '') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6  w-6" fill="none" viewBox="0 0 24 24"    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </span>
                            <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black  {{ (Request::is('*mylifespot*')? 'text-black' : '') }}"> My Lifespot</span>
                        </a>
                    </div>
                </div>

                <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('myestate*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                    <div class="xw-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 pl-4 lg:px-2 {{ (Request::is('myestate*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                        <a href="{{ route('myestate') }}" class="flex h-8 items-center space-x-4">
                            <span class="{{ (Request::is('myestate*')? 'text-blue-400' : '') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                </svg>
                            </span>
                            <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black  {{ (Request::is('myestate*')? 'text-black' : '') }}"> My Estate</span>
                        </a>
                    </div>
                </div>

                <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('*members*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                    <div class="xw-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 pl-4 lg:px-2 {{ (Request::is('*members*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                        <a href="{{ route('mymembers') }}" class="flex h-8 items-center space-x-4">
                            <span class="{{ (Request::is('*members*')? 'text-blue-400' : '') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </span>
                            <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black  {{ (Request::is('*memberss*')? 'text-black' : '') }}"> Members & Other Estates</span>
                        </a>
                    </div>
                </div>

                <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('documents*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                    <div class="xw-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 pl-4 lg:px-2 {{ (Request::is('documents*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                        <a href="{{ route('documents', 1) }}" class="flex h-8 items-center space-x-4">
                            <span class="{{ (Request::is('documents*')? 'text-blue-400' : '') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                                </svg>
                            </span>
                            <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black  {{ (Request::is('documents*')? 'text-black' : '') }}"> Documents</span>
                        </a>
                    </div>
                </div>

                <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('*help*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                    <div class="xw-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 pl-4 lg:px-2 {{ (Request::is('*help*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                        <a href="{{ route('lifespot.help') }}" class="flex h-8 items-center space-x-4">
                            <span class="{{ (Request::is('*help*')? 'text-blue-400' : '') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                            <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black  {{ (Request::is('*help*')? 'text-black' : '') }}"> Help Center</span>
                        </a>
                    </div>
                </div>

                <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('*growmyestate*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                    <div class="xw-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 pl-4 lg:px-2 {{ (Request::is('*growmyestate*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                        <a href="{{ route('growmyestate.index') }}" class="flex h-8 items-center space-x-4">
                            <span class="{{ (Request::is('*growmyestate*')? 'text-blue-400' : '') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                                </svg>
                            </span>
                            <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black  {{ (Request::is('*growmyestate*')? 'text-black' : '') }}"> Grow My Estate</span>
                        </a>
                    </div>
                </div>

                <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('tasks*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                    <div class="xw-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 pl-4 lg:px-2 {{ (Request::is('tasks*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                        <a href="#!" class="flex h-8 items-center space-x-4">
                            <span class="{{ (Request::is('tasks*')? 'text-blue-400' : '') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                </svg>
                            </span>
                            <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black  {{ (Request::is('tasks*')? 'text-black' : '') }}"> Tasks</span>
                        </a>
                    </div>
                </div>

            </div>

        <!-- Sponsor Ads -->
        <div  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="xw-15 mx-1 xhidden xmd:block">
            <ul>
                <li class="rounded-xl">
                    <a href="#!"><img class="max-h-40 w-full object-cover" src="{{ asset('img/AdSamples/ad11-disney-logo-640x360.jpeg') }}" alt=""></a>
                </li>
            </ul>
        </div>

        <!-- Collapse Terms and Privacy -->
        <div  @click="isExpanded= !isExpanded" class="hidden md:block mt-20 ">
            <div  x-cloak :class="isExpanded ? 'lg:bg-gray-100' : '' " class="xinvisible flex text-xs rounded-sm xbg-gray-100 text-blue-400 items-center py-4 px-5   x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' "  cursor-pointer">
                <button>

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>

                </button>
                <button  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' "
                    xclass="hidden md:block ml-2">Collapse Menu
                </button>
            </div>

        </div>
        <p  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="flex text-xs text-blue-400 my-5 px-12">

            <a href="#!" class="underline">Terms </a>
            <span>&nbsp;&&nbsp;</span>
            <a href="#!" class="underline"> Privacy</a>

        </p>

        <ul x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' ">
            <li class="rounded-xl">
                <a href="#!#"><img class="max-h-96 xh-full w-full object-cover" src="{{ asset('img/AdSamples/ad7-insurance-for-home.jpeg') }}" alt=""></a>
            </li>
        </ul>
    </div>
</div>

         <!--Welcome-->
         {{-- <div class="flex items-center pt-8">
            <span class="mr-2">
                <img class="h-12 w-12 rounded-full ml-2" src="{{ (!empty(Auth::user()->profile_photo_path)) ? url('upload/admin_images/'.Auth::user()->profile_photo_path) : url('upload/no_image.png') }}" alt="Profile Image">
            </span>
            <div class="hidden md:block text-sm">
                <div>Hi, {{ Auth::user()->fname }}</div>
                <a href="#!" class="text-blue-500 text-xs">Switch Account</a>
            </div>
        </div> --}}

        <!--Side Nav-->
        {{-- <div

            class="xw-64 space-y-5 my-5">

            <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('nomembers*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                <div class="w-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 px-2 {{ (Request::is('nomembers*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                    <a href="" class="flex h-8 items-center space-x-4">
                        <span class="{{ (Request::is('nomembers*')? 'text-blue-400' : '') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6  w-6" fill="none" viewBox="0 0 24 24"    stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                            </svg>


                        </span>
                        <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black  {{ (Request::is('nomembers*')? 'text-black' : '') }}"> Getting Started</span>
                    </a>
                </div>
            </div>


            <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('messages*') ? 'border-r-4 border-blue-500 rounded' : '') }}">
                <div class="w-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 px-2 {{ (Request::is('messages*') ? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                    <a href="" class="flex h-8 items-center space-x-4">
                        <span class="{{ (Request::is('messages*')? 'text-blue-400' : '') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </span>
                        <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black  {{ (Request::is('messagse*') ? 'text-black' : '') }}"> Messages</span>
                    </a>
                </div>
            </div>

            <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('mylifespot*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                <div class="w-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 px-2 {{ (Request::is('mylifespot*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                    <a href="" class="flex h-8 items-center space-x-4">
                        <span class="{{ (Request::is('mylifespot*')? 'text-blue-400' : '') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6  w-6" fill="none" viewBox="0 0 24 24"    stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black  {{ (Request::is('mylifespot*')? 'text-black' : '') }}"> My Lifespot</span>
                    </a>
                </div>
            </div>

            <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('myestate*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                <div class="w-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 px-2 {{ (Request::is('myestate*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                    <a href="" class="flex h-8 items-center space-x-4">
                        <span class="{{ (Request::is('myestate*')? 'text-blue-400' : '') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                            </svg>
                        </span>
                        <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black  {{ (Request::is('myestate*')? 'text-black' : '') }}"> My Estate</span>
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
                        <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black  {{ (Request::is('members_other_estates*')? 'text-black' : '') }}"> Members & Other Estates</span>
                    </a>
                </div>
            </div>



            <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('documents*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                <div class="w-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 px-2 {{ (Request::is('documents*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                    <a href="" class="flex h-8 items-center space-x-4">
                        <span class="{{ (Request::is('documents*')? 'text-blue-400' : '') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                            </svg>
                        </span>
                        <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black  {{ (Request::is('documents*')? 'text-black' : '') }}"> Documents</span>
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
                        <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black  {{ (Request::is('help_center*')? 'text-black' : '') }}"> Help Center</span>
                    </a>
                </div>
            </div>

            <div class="items-center hover:border-r-4 hover:border-blue-500 hover:rounded hover:font-black h-8 my-2 {{ (Request::is('grow_my_estate*')? 'border-r-4 border-blue-500 rounded' : '') }}">
                <div class="w-56 md:hover:bg-blue-50 hover:rounded-lg py-1 mx-2 px-2 {{ (Request::is('grow_my_estate*')? 'md:bg-blue-100 rounded-lg font-black' : '') }}">
                    <a href="" class="flex h-8 items-center space-x-4">
                        <span class="{{ (Request::is('grow_my_estate*')? 'text-blue-400' : '') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                            </svg>
                        </span>
                        <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black  {{ (Request::is('grow_my_estate*')? 'text-black' : '') }}"> Grow My Estate</span>
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
                        <span  x-cloak :class="isExpanded ? 'hidden md:block text-sm' : 'hidden' " class="hover:text-black  {{ (Request::is('tasks*')? 'text-black' : '') }}"> Tasks</span>
                    </a>
                </div>
            </div>

        </div>
        <!-- Sponsor Ads -->
        {{-- <div class="xw-15 mx-4 hidden md:block">
            <div class="bg-blue-300 items-center py-8 md:px-12 sm:px-2 text-white sm:text-xs md:text-lg tracking-tighter text-center">Sponsor Ad</div>
        </div> --}}

        {{-- <div class="xhidden md:block mt-20">
            <div class="xinvisible flex text-xs rounded-sm bg-gray-100 text-blue-400 items-center py-4 px-10  cursor-pointer">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </span>
                <button x-on:click="isOpen"
                    class="xhidden md:block ml-2">Collapse Menu</button>
            </div>
            <p class="flex text-xs text-blue-400 my-5 px-12">

                <a href="#!" class="underline">Terms </a>
                <span>&nbsp;&&nbsp;</span>
                <a href="#!" class="underline"> Privacy</a>

            </p>
        </div> --}}
