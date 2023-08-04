@extends('lifespot_layout')

@section('content')

<div class="grid grid-cols-12 min-h-screen xmr-6">

    <!--Webspot -->
    <div class=" bg-gray-100 col-span-12 xlg:col-span-9 border-r border-gray-200">

            <!--Top and Search Area-->
    <div class="bg-[hsl(0,5%,96%)]">
        <h1 class="text-center text-gray-800 font-black text-5xl pt-16 pb-2">WebSpot ~ Your Private Website</h1>
        <p class="text-gray-700 text-center pb-4">Only share what you want to share.</p>

        {{-- <div class="text-center xtext-5xl scontainer lg:mx-56 pb-20">
            <!--Search form-->
            <form class="ml-3 mb-2">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                <div class="relative mr-2">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="search" id="default-search" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search our help center for answers..." required="">
                </div>
            </form>
        </div> --}}
    </div>

    <!--Browser Articles for Help Area-->
    <div class="mx-20">
        <h1 class="text-center text-gray-800 font-black text-3xl pt-12 pb-4">Ideas to get you started...</h1>
        <nav class="">
            <ul class="flex justify-center space-x-4 md:space-x-3 lg:space-x-16 text-xs md:text-sm text-gray-700">
                <li class="hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="{{ route('help_lifespot') }}" class="{{ (Request::is('help_lifespot*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Website</span><span class="lg:hidden">Website</span></a>
                </li>
                <li class="hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Photos</span><span class="lg:hidden">Photos</span></a>
                </li>
                <li class="hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Recipes</span><span class="lg:hidden">Recipes</span></a>
                </li>
                {{-- <li class="hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Notes</span><span class="lg:hidden">Notes</span></a>
                </li> --}}
                <li class="hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Secrets</span><span class="lg:hidden">Secrets</span></a>
                </li>
                <li class="hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Lists</span><span class="lg:hidden">Lists</span></a>
                </li>
                <li class="hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Journal</span><span class="lg:hidden">Journal</span></a>
                </li>

            </ul>
            <hr class="mt-1 px-4 lg:mx-24">
        </nav>
    </div>

    <!--6 Boxes -->
    <div class="flex justify-center">
        <div class="grid grid-cols-1 gap-4 md:gap-6 md:grid-cols-2 lg:grid-cols-3 mt-6">

            <div class="bg-white py-6 px-6 rounded-lg lg:w-64 my-4 shadow-2xl">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-500 bg-yellow-100 rounded-full p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                      </svg>
                </span>
                <h5 class="text-lg font-semibold my-2">{{ Auth::user()->fname }}'s' Website</h5>
                <ul>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('access') }}">It's your site...</a>
                    </li>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('access') }}">Add your own content</a>
                    </li>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('access') }}">You Control the content</a>
                    </li>
                    <li class="invisible">
                        <a class="text-blue-700 underline text-xs" href="{{ route('access') }}">You Control Your Estate Data</a>
                    </li>
                </ul>
                <div class="mt-4 mb-2">
                    <a href="{{ route('access') }}" class=" text-sm text-white bg-[#0682d4] py-2 px-2 rounded font-black">Open my website</a>
                </div>
            </div>
            <div class="bg-white py-6 px-6 rounded-lg w-64 my-4 shadow-2xl">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500 bg-blue-50 rounded-full p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                      </svg>
                </span>
                <h5 class="text-lg font-semibold my-2">Why are my Members so Important?</h5>
                <ul>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('members_important') }}">Inviting Members</a>
                    </li>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('members_important') }}">Sharing Important Data</a>
                    </li>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('members_important') }}">Instant Messaging</a>
                    </li>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('members_important') }}">Family Sharing</a>
                    </li>
                </ul>
                <div class="mt-4 mb-2">
                    <a href="{{ route('members_important') }}" class=" text-sm text-white bg-[#0682d4] py-2 px-2 rounded font-black">Browse More LifeSpot</a>
                </div>
            </div>
            <div class="bg-white py-6 px-6 rounded-lg w-64 my-4 shadow-2xl">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-500 bg-green-100 rounded-full p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
                      </svg>
                </span>
                <h5 class="text-lg font-semibold my-2">Protect your Documents</h5>
                <ul>

                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('protect_docs') }}">Adding Documents to LifeSpot</a>
                    </li>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('protect_docs') }}">Saving Your Documents</a>
                    </li>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('protect_docs') }}">Protecting Your Documents</a>
                    </li>

                    <li class="invisible">
                        <a class="text-blue-700 underline text-xs" href="{{ route('help') }}">Adding Documents to Lifespot</a>
                    </li>

                    <li class="invisible">
                        <a class="text-blue-700 underline text-xs" href="{{ route('help') }}">Adding Docements to Lifespot</a>
                    </li>
                </ul>
                <div class="mt-4 mb-2">
                    <a href="{{ route('protect_docs') }}" class=" text-sm text-white bg-[#0682d4] py-2 px-2 rounded font-black">Browse More LifeSpot</a>
                </div>
            </div>
            <div class="bg-white py-6 px-6 rounded-lg w-64 my-4 shadow-2xl">

                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-cyan-600 bg-cyan-200 rounded-full p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                      </svg>
                </span>
                <h5 class="text-lg font-semibold my-2">Why LifeSpot is so Private?</h5>
                <ul>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('private_lifespot_article') }}">Create Your Estate</a>
                    </li>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('private_lifespot_article') }}">Control Access</a>
                    </li>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('private_lifespot_article') }}">Control Your Data</a>
                    </li>
                </ul>
                <div class="mt-4 mb-2">
                    <a href="{{ route('private_lifespot_article') }}" class=" text-sm text-white bg-[#0682d4] py-2 px-2 rounded font-black">Browse More LifeSpot</a>
                </div>
            </div>
            <div class="bg-white py-6 px-6 rounded-lg w-64 my-4 shadow-2xl">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-500 bg-indigo-100 rounded-full p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                      </svg>
                </span>
                <h5 class="text-lg font-semibold my-2">Will LifeSpot Help us Grow ?</h5>
                <ul>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('grow_lifespot_article') }}">Funding Your Estate</a>
                    </li>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('grow_lifespot_article') }}">Immediate Access to our Affiliates</a>
                    </li>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('grow_lifespot_article') }}">LifeSpot Smartboard</a>
                    </li>
                </ul>
                <div class="mt-4 mb-2">
                    <a href="{{ route('grow_lifespot_article') }}" class=" text-sm text-white bg-[#0682d4] py-2 px-2 rounded font-black">Browse More LifeSpot</a>
                </div>
            </div>
            <div class="bg-white py-6 px-6 rounded-lg w-64 my-4 shadow-2xl">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-red-300 bg-red-100 rounded-full p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                      </svg>
                </span>
                <h5 class="text-lg font-semibold my-2">WebSpot</h5>
                <ul>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('webspot_article') }}">Create Your Legacy Your Story</a>
                    </li>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('webspot_article') }}">
                            Save Historic Family Files</a>
                    </li>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('webspot_article') }}">Save and Share with who you wish</a>
                    </li>

                    <li class="invisible">
                        <a class="text-blue-700 underline text-xs" href="{{ route('webspot_article') }}">Save and Share what you wish</a>
                    </li>
                </ul>
                <div class="mt-4 mb-2">
                    <a href="{{ route('webspot_article') }}" class=" text-sm text-white bg-[#0682d4] py-2 px-2 rounded font-black">Browse More LifeSpot</a>
                </div>
            </div>
        </div>
    </div>
    <ul class="md:col-span-12 lg:col-span-3 col-span-12 mb-12 mt-8  space-y-8">
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
    </div>

    {{-- <ul class="md:col-span-12 lg:col-span-3 col-span-12 mb-12 mt-8 mx-4 space-y-8">
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
        <li class="h-72 bg-blue-50 rounded-xl p-6">
            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
            <h3 class="text-black font-black text-xl">Advertise Here</h3>
            <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
        </li>
    </ul> --}}
</div>


@endsection
