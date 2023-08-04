@extends('lifespot_layout')

@section('content')
<div class="pt-6 px-6">
    <h1 class="font-black text-xl mb-4">Members & Other Estates</h1>
    <div class="lg:flex justify-between text-sm items-center ">
        <div class="flex space-x-3 ">
            <span class="hover:underline underline-offset-8 hover:text-blue-700">
                <a href="{{ route('mymembers') }}" class="{{ (Request::is('**')? 'underline text-blue-700' : '') }}">
                    <span class="hidden lg:block">The {{ Auth::user()->fname }} {{ Auth::user()->lname }} Family Estate</span>
                    <span class="lg:hidden">{{ Auth::user()->fname }} {{ Auth::user()->lname }} Estate</span>
                </a>
            </span>
            <span class="hover:underline underline-offset-8 hover:text-blue-700">
                <a href="{{ route('other_estates') }}" class="{{ (Request::is('')? 'underline text-blue-700' : '') }}">
                    <span class="hidden lg:block">The Brandon Walker Family Estate</span>
                    <span class="lg:hidden"> Brandon Walker Estate</span>
                </a>
            </span>
        </div>
        <div class="flex">
            <a href="#!" class="flex space-x-2 font-bold items-center text-blue-700 pr-8 lg:my-0 my-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-700 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <span>Add an Estate</span>
            </a>
        </div>
    </div>
    <div class="grid lg:grid-cols-4 gap-4 mt-5">

        <div class="lg:col-span-3">

            <div class="grid lg:grid-cols-2 gap-4">

                <div>
                    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                      <div class="text-gray-900 text-xl leading-tight font-medium mb-8">
                        <div class="flex justify-between">
                            <div class="flex space-x-2">
                                <img class="h-12 w-12 rounded-full" src="{{ (!empty(Auth::user()->profile_photo_path)) ? url('upload/admin_images/'.Auth::user()->profile_photo_path) : url('upload/no_image.png') }}" alt="Profile Image">
                                <div class="text-sm">
                                    <span  class="font-bold text-blue-900">
                                        {{ Auth::user()->fname }} {{ Auth::user()->lname }}
                                    </span>
                                    <div class="text-gray-700">LifeSpot Owner</div>
                                <div  class="flex px-2 pt-1 bg-gray-100 whitespace-nowrap text-gray-500 font-bold text-xs leading-tight uppercase rounded-full shadow-md">Overview
                                </div>
                                </div>
                            </div>
                             <a href="#!" class="text-2xl font-bold text-right">...</a>
                        </div>
                      </div>

                        <div class="flex justify-between">
                            <div class="flex space-x-2 pr-2">
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>

                                </a>
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>

                                </a>
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                    </svg>

                                </a>
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                    </svg>

                                </a>
                            </div>
                            <div class="flex justify-end">
                                <button type="button" class="flex  px-2 pt-1 bg-blue-100 whitespace-nowrap text-blue-900 font-bold text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-200 hover:shadow-lg focus:bg-blue-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-300 active:shadow-lg transition duration-150 ease-in-out">Lorem Ipsum
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-2 pb-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                      <div class="text-gray-900 text-xl leading-tight font-medium mb-8">
                        <div class="flex justify-between">
                            <div class="flex space-x-2">
                                <img class="h-12 w-12 rounded-full" src="{{ asset('img/WalkerFamilyPics/Sue.jpeg') }}" alt="">
                                <div class="text-sm">
                                    <span  class="font-bold text-blue-900">Sue Stuart</span>
                                    <div class="text-gray-700">Friend</div>
                                <div  class="flex px-2 pt-1 bg-gray-100 whitespace-nowrap text-gray-500 font-bold text-xs leading-tight uppercase rounded-full shadow-md">Executor
                                </div>
                                </div>
                            </div>
                             <span class="text-2xl font-bold text-right">...</span>
                        </div>
                      </div>

                        <div class="flex justify-between">
                            <div class="flex space-x-2 pr-2">
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>

                                </a>
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>

                                </a>
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                    </svg>

                                </a>
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                    </svg>

                                </a>
                            </div>
                            <div class="flex justify-end">
                                <button type="button" class="flex  px-2 pt-1 bg-blue-100 whitespace-nowrap text-blue-900 font-bold text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-200 hover:shadow-lg focus:bg-blue-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-300 active:shadow-lg transition duration-150 ease-in-out">Emergency Contact
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-2 pb-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                      <div class="text-gray-900 text-xl leading-tight font-medium mb-8">
                        <div class="flex justify-between">
                            <div class="flex space-x-2">
                                <img class="h-12 w-12 rounded-full" src="{{ asset('img/WalkerFamilyPics/tommy.webp') }}" alt="">
                                <div class="text-sm">
                                    <span  class="font-bold text-blue-900">Tommy Hill</span>
                                    <div class="text-gray-700">Neighbor</div>
                                <div  class="flex px-2 pt-1 bg-gray-100 whitespace-nowrap text-gray-500 font-bold text-xs leading-tight uppercase rounded-full shadow-md">Landscaper
                                </div>
                                </div>
                            </div>
                             <span class="text-2xl font-bold text-right">...</span>
                        </div>
                      </div>

                        <div class="flex justify-between">
                            <div class="flex space-x-2 pr-2">
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>

                                </a>
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>

                                </a>
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                    </svg>

                                </a>
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                    </svg>

                                </a>
                            </div>
                            <div class="flex justify-end">
                                <button type="button" class="flex  px-2 pt-1 bg-blue-100 whitespace-nowrap text-blue-900 font-bold text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-200 hover:shadow-lg focus:bg-blue-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-300 active:shadow-lg transition duration-150 ease-in-out">Lorem Ipsum
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-2 pb-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                      <div class="text-gray-900 text-xl leading-tight font-medium mb-8">
                        <div class="flex justify-between">
                            <div class="flex space-x-2">
                                <img class="h-12 w-12 rounded-full" src="{{ asset('img/WalkerFamilyPics/fidelity.png') }}" alt="">
                                <div class="text-sm">
                                    <span  class="font-bold text-blue-900">Gary McDaniel</span>
                                    <div class="text-gray-700">Advisor</div>
                                <div  class="flex px-2 pt-1 bg-gray-100 whitespace-nowrap text-gray-500 font-bold text-xs leading-tight uppercase rounded-full shadow-md">Trustee
                                </div>
                                </div>
                            </div>
                             <span class="text-2xl font-bold text-right">...</span>
                        </div>
                      </div>

                        <div class="flex justify-between">
                            <div class="flex space-x-2 pr-2">
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>

                                </a>
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>

                                </a>
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                    </svg>

                                </a>
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                    </svg>

                                </a>
                            </div>
                            <div class="flex justify-end">
                                <button type="button" class="flex  px-2 pt-1 bg-blue-100 whitespace-nowrap text-blue-900 font-bold text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-200 hover:shadow-lg focus:bg-blue-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-300 active:shadow-lg transition duration-150 ease-in-out">Lorem Ipsum
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-2 pb-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                      <div class="text-gray-900 text-xl leading-tight font-medium mb-8">
                        <div class="flex justify-between">
                            <div class="flex space-x-2">
                                <img class="h-12 w-12 rounded-full" src="{{ asset('img/WalkerFamilyPics/amy.webp') }}" alt="">
                                <div class="text-sm">
                                    <span  class="font-bold text-blue-900">Amy Smith</span>
                                    <div class="text-gray-700">Baby Sitter</div>
                                <div  class="flex px-2 pt-1 bg-gray-100 whitespace-nowrap text-gray-500 font-bold text-xs leading-tight uppercase rounded-full shadow-md">Helper
                                </div>
                                </div>
                            </div>
                             <span class="text-2xl font-bold text-right">...</span>
                        </div>
                      </div>

                        <div class="flex justify-between">
                            <div class="flex space-x-2 pr-2">
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>

                                </a>
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>

                                </a>
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                    </svg>

                                </a>
                                <a href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                    </svg>

                                </a>
                            </div>
                            <div class="flex justify-end">
                                <button type="button" class="flex  px-2 pt-1 bg-blue-100 whitespace-nowrap text-blue-900 font-bold text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-200 hover:shadow-lg focus:bg-blue-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-300 active:shadow-lg transition duration-150 ease-in-out">Lorem Ipsum
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-2 pb-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </div>

        <div class="hidden md:block space-y-4">
            <form class="mb-2">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                <div class="relative mr-2">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="search" id="default-search" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required="">
                </div>
            </form>
            <div class="bg-gray-50 text-center rounded-xl border border-gray-100 h-36 p-5 px-12">
                <div>
                    <img class="rounded-full bg-white w-12 h-12 ml-8" src="{{ asset('img/add_user_icon.jpeg') }}" alt="">
                </div>
                <div class=" p-3">
                    <h5 class="font-bold text-blue-500 text-xs">Invite a New Member</h5>
                </div>
            </div>

            <div class="h-72 overflow-y-auto bg-blue-50 rounded-xl p-6">
                <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                <h3 class="text-black font-black">Why is this information important?</h3>
                <p class="mt-2 text-xs">New members in your Lifespot account can include friends, family, and estate appointed members. Friends and family can be added to the account as part of the primary user’s network of contacts. Estate appointed members are typically people such as a family member, lawyer, or financial advisor who are responsible for managing your estate in the event of death or incapacity. These members can be added to the account to ensure that the user’s wishes are carried out and that the estate is managed properly. When the user adds an estate appointed member to the account, with Lifespot, they can set permissions for that member to access certain information, documents, and financial accounts associated with the user’s estate. This will help to ensure that the user’s wishes are followed and that the estate is managed effectively. Have Fun!</p>
            </div>

        </div>
    </div>



</div>
@endsection
