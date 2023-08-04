@extends('lifespot_layout')

@section('content')

<div class="grid grid-cols-12 min-h-screen mr-6">
    <div

        class="md:col-span-5 lg:col-span-3 col-span-12 border-r border-gray-200">
        <div



         class="mt-6">

            <div class="flex justify-between mx-3 mb-3">
                <h2 class="font-black text-lg">
                    <a href="{{ route('getting_started') }}">Messages</a>
                </h2>
                <div class="flex items-center text-sm text-blue-500 space-x-3">
                    <a href="">Hide</a>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </a>
                </div>
            </div>

                <!--Search form-->
            <form class="ml-3 mb-2">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                <div class="relative mr-2">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="search" id="default-search" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required="">
                </div>
            </form>

                <!--Get Started invite a new member-->
            <div class="mb-3">
                <div class="relative flex py-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2 ml-3">
                    <span class="flex-shrink">Get Started</span>
                    <div class="flex-grow border-t"></div>
                </div>
                <a href="#!" class="flex space-x-2 text-xs ml-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400 bg-gray-50 border border-gray-100 rounded-full p-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>

                    <div class="flex space-x-4 items-center">
                        <span class="text-blue-400">
                            Invite a new member
                        </span>
                        <span class="text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </a>
            </div>

            <!--Members-->
            <ul class="text-gray-400 text-xs whitespace-nowrap">
                <li class="hover:bg-blue-50 bg-blue-50  px-3 pb-1.5">
                    <a href="">
                        <div class="relative flex mt-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2">
                            <span class="flex-shrink pt-0.5">Co-Trustee</span>
                            <div class="flex-grow border-t"></div>
                        </div>
                        <div class="grid grid-cols-6">
                            <span class="col-span-1">
                                <div class="relative top-0 left-0">
                                    <img class="relative top-0 left-0 rounded-full h-10 w-10" src="{{ asset('img/WalkerFamilyPics/sara.png') }}" alt="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-8 left-8 h-2 w-2 bg-blue-600 rounded-full text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                        </svg>
                                </div>
                            </span>
                            <span class="col-span-3 ml-2">
                                <h5 class="font-bold text-black">Sara Walker</h5>
                                <p>Lorem ipum dolor sit</p>
                            </span>
                            <span class="col-start-5 col-span-2 text-right">
                                <span class="uppercase">4:30 pm</span><br>
                                <p class="text-white text-center float-right rounded-full h-4 w-4 bg-blue-600"><span class=""></span> 4</p>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="hover:bg-blue-50 px-3 pb-1.5">
                    <a href="">
                        <div class="relative flex mt-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2">
                            <span class="flex-shrink pt-0.5">Heir</span>
                            <div class="flex-grow border-t"></div>
                        </div>
                        <div class="grid grid-cols-6">
                            <span class="col-span-1">
                                <div class="relative top-0 left-0">
                                    <img class="relative top-0 left-0 rounded-full h-10 w-10" src="{{ asset('img/WalkerFamilyPics/vienna.png') }}" alt="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-8 left-8 h-2 w-2 bg-blue-600 rounded-full text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                        </svg>
                                </div>
                            </span>
                            <span class="col-span-3 ml-2">
                                <h5 class="font-bold text-black">Vienna Walker</h5>
                                <p>Lorem ipum dolor sit</p>
                            </span>
                            <span class="col-start-5 col-span-2 text-right">
                                <span class="uppercase">4:12 pm</span><br>
                                <p class="text-white text-center float-right rounded-full h-4 w-4 bg-blue-600"><span class=""></span> 2</p>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="hover:bg-blue-50 px-3 pb-1.5">
                    <a href="">
                        <div class="relative flex mt-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2">
                            <span class="flex-shrink pt-0.5">Successors-Trustee</span>
                            <div class="flex-grow border-t"></div>
                        </div>
                        <div class="grid grid-cols-6">
                            <span class="col-span-1">
                                <div class="relative top-0 left-0">
                                    <img class="relative top-0 left-0 rounded-full h-10 w-10" src="{{ asset('img/WalkerFamilyPics/jared.png') }}" alt="">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-8 left-8 h-2 w-2 bg-blue-600 rounded-full text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                        </svg> --}}
                                </div>
                            </span>
                            <span class="col-span-3 ml-2">
                                <h5 class="font-bold text-black">Jared Walker</h5>
                                <p>Lorem ipum dolor sit</p>
                            </span>
                            <span class="col-start-5 col-span-2 text-right">
                                <span class="uppercase">3:15 pm</span><br>
                                {{-- <p class="text-white text-center float-right rounded-full h-4 w-4 bg-blue-600"><span class=""></span> 4</p> --}}
                            </span>
                        </div>
                    </a>
                </li>
                <li class="hover:bg-blue-50 px-3 pb-1.5">
                    <a href="">
                        <div class="relative flex mt-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2">
                            <span class="flex-shrink pt-0.5">Heir</span>
                            <div class="flex-grow border-t"></div>
                        </div>
                        <div class="grid grid-cols-6">
                            <span class="col-span-1">
                                <div class="relative top-0 left-0">
                                    <img class="relative top-0 left-0 rounded-full h-10 w-10" src="{{ asset('img/WalkerFamilyPics/rocco.png') }}" alt="">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-8 left-8 h-2 w-2 bg-blue-600 rounded-full text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                        </svg> --}}
                                </div>
                            </span>
                            <span class="col-span-3 ml-2">
                                <h5 class="font-bold text-black">Rocco Walker</h5>
                                <p>Lorem ipum dolor sit</p>
                            </span>
                            <span class="col-start-5 col-span-2 text-right">
                                <span class="uppercase">May 28</span><br>
                                {{-- <p class="text-white text-center float-right rounded-full h-4 w-4 bg-blue-600"><span class=""></span> 4</p> --}}
                            </span>
                        </div>
                    </a>
                </li>
                <li class="hover:bg-blue-50 px-3 pb-1.5">
                    <a href="">
                        <div class="relative flex mt-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2">
                            <span class="flex-shrink pt-0.5">Emergency Contact</span>
                            <div class="flex-grow border-t"></div>
                        </div>
                        <div class="grid grid-cols-6">
                            <span class="col-span-1">
                                <div class="relative top-0 left-0">
                                    <img class="relative top-0 left-0 rounded-full h-10 w-10" src="{{ asset('img/WalkerFamilyPics/florence.png') }}" alt="">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-8 left-8 h-2 w-2 bg-blue-600 rounded-full text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                        </svg> --}}
                                </div>
                            </span>
                            <span class="col-span-3 ml-2">
                                <h5 class="font-bold text-black">Florence Walker</h5>
                                <p>Lorem ipum dolor sit</p>
                            </span>
                            <span class="col-start-5 col-span-2 text-right">
                                <span class="uppercase">Apr 12</span><br>
                                {{-- <p class="text-white text-center float-right rounded-full h-4 w-4 bg-blue-600"><span class=""></span> 4</p> --}}
                            </span>
                        </div>
                    </a>
                </li>
                <li class="hover:bg-blue-50 px-3 pb-1.5">
                    <a href="">
                        <div class="relative flex mt-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2">
                            <span class="flex-shrink pt-0.5">Executor</span>
                            <div class="flex-grow border-t"></div>
                        </div>
                        <div class="grid grid-cols-6">
                            <span class="col-span-1">
                                <div class="relative top-0 left-0">
                                    <img class="relative top-0 left-0 rounded-full h-10 w-10" src="{{ asset('img/WalkerFamilyPics/howard.png') }}" alt="">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-8 left-8 h-2 w-2 bg-blue-600 rounded-full text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                        </svg> --}}
                                </div>
                            </span>
                            <span class="col-span-3 ml-2">
                                <h5 class="font-bold text-black">Howard Walker</h5>
                                <p>Lorem ipum dolor sit</p>
                            </span>
                            <span class="col-start-5 col-span-2 text-right">
                                <span class="uppercase">Mar 6</span><br>
                                {{-- <p class="text-white text-center float-right rounded-full h-4 w-4 bg-blue-600"><span class=""></span> 4</p> --}}
                            </span>
                        </div>
                    </a>
                </li>
                <li class="hover:bg-blue-50 px-3 pb-1.5">
                    <a href="">
                        <div class="relative flex mt-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2">
                            <span class="flex-shrink pt-0.5">Co-Trustee</span>
                            <div class="flex-grow border-t"></div>
                        </div>
                        <div class="grid grid-cols-6">
                            <span class="col-span-1">
                                <div class="relative top-0 left-0">
                                    <img class="relative top-0 left-0 rounded-full h-10 w-10" src="{{ asset('img/WalkerFamilyPics/bryon.png') }}" alt="">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-8 left-8 h-2 w-2 bg-blue-600 rounded-full text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                        </svg> --}}
                                </div>
                            </span>
                            <span class="col-span-3 ml-2">
                                <h5 class="font-bold text-black">Bryon Swanson</h5>
                                <p>Lorem ipum dolor sit</p>
                            </span>
                            <span class="col-start-5 col-span-2 text-right">
                                <span class="uppercase">Mar 2</span><br>
                                {{-- <p class="text-white text-center float-right rounded-full h-4 w-4 bg-blue-600"><span class=""></span> 4</p> --}}
                            </span>
                        </div>
                    </a>
                </li>
                <li class="hover:bg-blue-50 px-3 pb-1.5">
                    <a href="">
                        <div class="relative flex mt-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2">
                            <span class="flex-shrink pt-0.5">Co-Executor</span>
                            <div class="flex-grow border-t"></div>
                        </div>
                        <div class="grid grid-cols-6">
                            <span class="col-span-1">
                                <div class="relative top-0 left-0">
                                    <img class="relative top-0 left-0 rounded-full h-10 w-10" src="{{ asset('img/WalkerFamilyPics/brian.jpeg') }}" alt="">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-8 left-8 h-2 w-2 bg-blue-600 rounded-full text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                        </svg> --}}
                                </div>
                            </span>
                            <span class="col-span-3 ml-2">
                                <h5 class="font-bold text-black">Brian Agster</h5>
                                <p>Lorem ipum dolor sit</p>
                            </span>
                            <span class="col-start-5 col-span-2 text-right">
                                <span class="uppercase">Feb 21</span><br>
                                {{-- <p class="text-white text-center float-right rounded-full h-4 w-4 bg-blue-600"><span class=""></span> 4</p> --}}
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!--Chat Messages-->
    <div class="md:col-span-7 lg:col-span-6 col-span-12 border-r border-gray-200">
        <div class="mt-6">
            <div class="flex justify-between mx-5 mb-5">
                <div class="flex space-x-2">
                    <div class="relative top-0 left-0">
                        <img class="relative top-0 left-0 rounded-full h-10 w-10" src="{{ asset('img/WalkerFamilyPics/sara.png') }}" alt="">
                    </div>

                    <div>
                        <h5 class="font-bold text-sm">Sara Walker</h5>
                        <p class="text-gray-400 text-xs">
                            Active Now
                        </p>
                    </div>
                </div>
                <div>
                    <a href="" class="text-blue-600 text-xs">
                        View Profile
                    </a>
                </div>
            </div>
            <div class="bg-gray-100 p-8">
                <div class="flex space-x-2">
                    <div class="relative top-0 left-0">
                        <img class="relative top-0 left-0 rounded-full h-8 w-8" src="{{ asset('img/WalkerFamilyPics/sara.png') }}" alt="">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-8 left-8 h-2 w-2 bg-blue-600 rounded-full text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                          </svg> --}}
                    </div>
                    <div class="items-center">
                        <span class="font-bold text-sm ">Sara Walker</span>
                        <span class="uppercase ml-2 text-xs text-gray-500">May 29</span>
                    </div>
                    </div>
                <div class="bg-gray-200 text-gray-600 rounded-b-lg rounded-tr-lg sm:w-64 md:w-48 lg:w-64 p-4 text-xs mx-10 -mt-2">
                    Lorem test ipsum dolor sit amet consectetur adipisicing elit. Riusto ea perspiciatis tenetur at molestias!
                </div>
            </div>
            <div class="relative flex py-5 items-center text-xs bg-gray-100 text-gray-400 uppercase space-x-1">
                <div class="flex-grow border-t"></div>
                <span class="flex-shrink uppercase px-2">Today</span>
                <div class="flex-grow border-t"></div>
            </div>
            <div class="bg-gray-100 px-8 border-b border-gray-200 overflow-auto scroll-smooth h-96">
                <div class="flex space-x-2">
                    <div class="relative top-0 left-0">
                        <img class="relative top-0 left-0 rounded-full h-8 w-8" src="{{ asset('img/WalkerFamilyPics/sara.png') }}" alt="">
                    </div>
                    <div class="items-center">
                        <span class="font-bold text-sm ">Sara Walker</span>
                        <span class="uppercase ml-2 text-xs text-gray-500">4:30 PM</span>
                    </div>
                </div>
                <div class="col-start-3 bg-gray-200 text-gray-600 rounded-b-lg rounded-tr-lg w-64 p-4 text-xs mx-10 -mt-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Riusto ea perspiciatis tenetur at molestias!
                </div>

                <div class="grid grid-cols-12 text-xs text-gray-400 my-5">
                    <div class="col-start-9 col-span-4 text-right">
                        <span class="text-xs uppercase text-gray-400">5:30 PM</span>
                        <span class="text-black font-black mx-2">You</span>
                        <img class="inline rounded-full h-8 w-8" src="{{ (!empty(Auth::user()->profile_photo_path)) ? url('upload/admin_images/'.Auth::user()->profile_photo_path) : url('upload/no_image.png') }}" alt="Profile Image">
                    </div>


                    <div class="md:col-start-8 lg:col-start-9 col-span-3 md:col-span-4 col-end-12 text-right">
                        <img class="h-28 w-28 rounded-l-lg rounded-b-lg border-8  border-blue-600" src="{{ asset('img/pdf.jpeg') }}" alt="">
                    </div>

                    <div class="col-start-3 col-span-9 bg-blue-600 text-gray-200 rounded-b-lg rounded-tl-lg p-4 mt-3">
                        Lorem ipsum dolor sit amet consectetur
                    </div>

                </div>

                <div class="flex space-x-2">
                    <div class="relative top-0 left-0">
                        <img class="relative top-0 left-0 rounded-full h-8 w-8" src="{{ asset('img/WalkerFamilyPics/sara.png') }}" alt="">
                    </div>
                    <div class="items-center">
                        <span class="font-bold text-sm ">Sara Walker</span>
                        <span class="uppercase ml-2 text-xs text-gray-500">11:59 AM</span>
                    </div>
                </div>
                <div class="col-start-3 bg-gray-200 text-gray-600 rounded-b-lg rounded-tr-lg w-64 p-4 text-xs mx-10 -mt-2 mb-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Riusto ea perspiciatis tenetur at molestias!
                </div>

                <div class="flex space-x-2">
                    <div class="relative top-0 left-0">
                        <img class="relative top-0 left-0 rounded-full h-8 w-8" src="{{ asset('img/WalkerFamilyPics/sara.png') }}" alt="">
                    </div>
                    <div class="items-center">
                        <span class="font-bold text-sm ">Sara Walker</span>
                        <span class="uppercase ml-2 text-xs text-gray-500">4:30 PM</span>
                    </div>
                </div>
                <div class="col-start-3 bg-gray-200 text-gray-600 rounded-b-lg rounded-tr-lg w-64 p-4 text-xs mx-10 -mt-2 mb-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Riusto ea perspiciatis tenetur at molestias!
                </div>

                <div class="grid grid-cols-12 text-xs text-gray-400 my-5">
                    <div class="col-start-9 col-span-4 text-right">
                        <span class="text-xs uppercase text-gray-400">10:30 AM</span>
                        <span class="text-black font-black mx-2">You</span>
                        <img class="inline rounded-full h-8 w-8" src="{{ (!empty(Auth::user()->profile_photo_path)) ? url('upload/admin_images/'.Auth::user()->profile_photo_path) : url('upload/no_image.png') }}" alt="Profile Image">
                    </div>


                    <div class="md:col-start-8 lg:col-start-9 col-span-3 md:col-span-4 col-end-12 text-right">
                        <img class="h-28 w-28 rounded-l-lg rounded-b-lg border-8  border-blue-600" src="{{ asset('img/pdf.jpeg') }}" alt="">
                    </div>

                    <div class="col-start-3 col-span-9 bg-blue-600 text-gray-200 rounded-b-lg rounded-tl-lg p-4 mt-3">
                        Lorem ipsum dolor sit amet consectetur
                    </div>

                </div>



            </div>

            <div class="my-6 mx-3">
                <form>
                    <div class="flex space-x-3 border-0 bg-gray-100 rounded-lg">
                        <textarea name="" id=""class="focus:ring-0 resize-none border-none w-full focus-none bg-transparent" placeholder="Your message..."></textarea>
                        <div class="flex space-x-4 items-center">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </a>

                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4 text-blue-700 font-black text-2xl" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </form>
            </div>

            <ul class="md:col-span-12 lg:col-span-3 col-span-12 mb-12 mt-8 mx-3 space-y-8">
                <li class="h-72 bg-blue-50 rounded-xl p-6">
                    <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                    <h3 class="text-black font-black text-xl">Advertise Here</h3>
                    <p class="mt-2 text-xs">Lorasdfem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
                </li>
            </ul>


        </div>
    </div>

    <!--Right Side  -->
    <ul class="md:col-span-12 lg:col-span-3 col-span-12 mb-12 mt-8 ml-4 space-y-8">
        <li class="h-72 bg-blue-50 rounded-xl p-6">
            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
            {{-- <h3 class="text-black font-black text-xl">Advertise Here</h3>
            <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p> --}}
            @include('lifespot.messages.calendar')
        </li>
        <li class="h-72 bg-blue-50 rounded-xl p-6">
            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
            <h3 class="text-black font-black text-xl">Advertise Here</h3>
            <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
        </li>
        <li class="h-72 bg-blue-50 rounded-xl p-6">
            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
            <h3 class="text-black font-black text-xl">Advertise Here</h3>
            <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
        </li>
    </ul>

    <div class="hidden md:col-span-12 lg:col-span-3 col-span-12 mb-12">
        <div class="mt-6 ml-5">
            <div class="flex justify-between items-center mr-2">
                <h3 class="font-black text-black mb-2">Shared with Sara</h3>
                <a href="" class="text-blue-500 text-xs">Hide</a>
            </div>
            <p class="text-sm text-gray-800">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem vel impedit eius eveniet facilis, deserunt labore delectus eum iure temporibus dolore.</p>
        </div>
        <div class="mt-6 ml-5">
            <div class="flex justify-between items-center mr-2 mb-3">
                <h5 class="font-black text-gray-400 text-xs uppercase mb-2">Documents <span>(8)</span></h5>
                <a href="" class="text-blue-500 text-xs">Show All</a>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <a href="">
                    <img class="h-24 w-28 rounded" src="{{ asset('img/pdf.jpeg') }}" alt="">
                </a>
                <a href="">
                    <img class="h-24 w-28 rounded" src="{{ asset('img/pdf.jpeg') }}" alt="">
                </a>
               <a href="">
                <img class="h-24 w-28 rounded" src="{{ asset('img/sample.png') }}" alt="">
               </a>
               <a class="relative w-28 h-24 rounded bg-gray-500" href="">
                    <div class="">
                        <img class="h-24 w-28 rounded opacity-20" src="{{ asset('img/sample2.png') }}" alt="">
                        <h1 class="absolute text-3xl font-bold text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            5+</h1>
                    </div>
                </a>
            </div>
        </div>
        <div class="mt-6 ml-5">
            <style>
                input[type=checkbox]:checked + label.strikethrough {
                    text-decoration:line-through;
                }
            </style>
            <div class="flex justify-between items-center mr-2 mb-3">
                <h5 class="font-black text-gray-400 text-xs uppercase mb-2">Tasks <span>(8)</span></h5>
                <a href="" class="text-blue-500 text-xs">Show All</a>
            </div>
            <div class="space-y-4">
                <div class="form-check">
                    <input class="form-check-input appearance-none h-6 w-6 border border-gray-300 rounded-full bg-white checked:bg-gray-600 checked:border-gray-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked1" checked>
                    <label class="strikethrough form-check-label inline-block text-sm font-bold text-gray-500 pt-1.5" for="flexCheckChecked1">
                      Update Living Will
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input appearance-none h-6 w-6 border border-gray-300 rounded-full bg-white checked:bg-gray-600 checked:border-gray-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked2" checked>
                    <label class="strikethrough form-check-label inline-block text-sm font-bold text-gray-500 pt-1.5" for="flexCheckChecked2">
                     Update Executor
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input appearance-none h-6 w-6 border border-gray-300 rounded-full bg-white checked:bg-gray-600 checked:border-gray-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked3" xchecked>
                    <label class="strikethrough form-check-label inline-block text-sm font-bold text-gray-500 pt-1.5" for="flexCheckChecked3">
                     Lorem Ipsum Dolor
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input appearance-none h-6 w-6 border border-gray-300 rounded-full bg-white checked:bg-gray-600 checked:border-gray-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked4" xchecked>
                    <label class="strikethrough form-check-label inline-block text-sm font-bold text-gray-500 pt-1.5" for="flexCheckChecked4">
                     Add Kendal to Lifespot
                    </label>
                </div>
            </div>


        </div>
        <div class="mt-4 ml-5">
            <a href="" class="text-blue-500 text-xs">Add a New Task</a>
        </div>
    </div>

</div>

@endsection
