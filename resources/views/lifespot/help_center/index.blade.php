@extends('lifespot_layout')

@section('content')

<div class="grid grid-cols-12 min-h-screen xmr-6">

    <!--Help Center via LifeSpot Access -->
    <div class="relative xbg-gray-100 col-span-12 xlg:col-span-9 border-r border-gray-200">

    <!--Top and Search Area-->
    <div class="bg-[hsl(0,5%,96%)]">
        <h1 class="text-center text-gray-800 font-black text-5xl pt-16 pb-2">How can we help you?</h1>
        <p class="text-gray-700 text-center pb-4">Type your question into the search bar below for answers to commonly asked questions.</p>

        <div class="text-center xtext-5xl scontainer lg:mx-56 pb-20">
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
        </div>
    </div>

    <!--Browser Articles for Help Area-->
    <div class="mx-20">
        <h1 class="text-center text-gray-800 font-black text-3xl pt-12 pb-4">Browse for help for...</h1>
        <nav class="">
            <ul class="flex justify-center space-x-1 md:space-x-3 lg:space-x-16 text-xs md:text-sm text-gray-700">
                <li class="hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="{{ route('lifespot.help') }}" class="{{ (Request::is('lifespot/help*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Lifespot</span><span class="lg:hidden">Lifespot</span></a>
                </li>
                <li class="hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="{{ route('lifespot.xpirix.help') }}" class="{{ (Request::is('lifespot/xpirix-help*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Xpirix</span><span class="lg:hidden">Xpirix</span></a>
                </li>
                <li class="hidden hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Advertising</span><span class="lg:hidden">Advertising</span></a>
                </li>
                <li class="hidden hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Influencers</span><span class="lg:hidden">Influencers</span></a>
                </li>
                <li class="hidden hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Enterprise</span><span class="lg:hidden">Enterprise</span></a>
                </li>
                <li class="hidden hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Pricing</span><span class="lg:hidden">Pricing</span></a>
                </li>
                <li class="hidden hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Account</span><span class="lg:hidden">Account</span></a>
                </li>

            </ul>
            <hr class="mt-1 px-4 xlg:mx-24 ">
        </nav>
    </div>

    <!--Lifespot/Xpiriix/Advertising/Influencers/Developers/Pricing/Account Help Areas-->
    {{-- @yield('content') --}}
    <div class="flex justify-center">
        @include('xpirix.body.help_center.lifespot_help.HelpBoxesContent')
        {{-- <div class="grid grid-cols-1 gap-4 md:gap-6 md:grid-cols-2 lg:grid-cols-3 mt-6">

            <div class="bg-white py-6 px-6 rounded-lg lg:w-64 my-4 shadow-2xl">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-500 bg-yellow-100 rounded-full p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                      </svg>
                </span>
                <h5 class="text-lg font-semibold my-2">Why LifeSpot is so Accessibe?</h5>
                <ul>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('access') }}">Growing Your Estate</a>
                    </li>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('access') }}">Data Access</a>
                    </li>
                    <li>
                        <a class="text-blue-700 underline text-xs" href="{{ route('access') }}">You Control Your Data</a>
                    </li>
                    <li class="invisible">
                        <a class="text-blue-700 underline text-xs" href="{{ route('access') }}">You Control Your Estate Data</a>
                    </li>
                </ul>
                <div class="mt-4 mb-2">
                    <a href="{{ route('access') }}" class=" text-sm text-white bg-[#0682d4] py-2 px-2 rounded font-black">Browse More LifeSpot</a>
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
        </div> --}}
    </div>

       <!--H I D D E N:  Frequently Asked Questions and Step-by-step guides-->
    <div class="hidden container ml-2 xmd:ml-8 xlg:ml-48">
        <div class="grid grid-cols-2 gap-8">

            <!--Frequently Asked Questions-->
            <section class=" mb-12">
                <h1 class="text-gray-800 font-black text-xl md:text-3xl pt-16 pb-4 mx-2">Frequently Asked Questions</h1>
                <div class="bg-white max-w-2xl mx-2 md:mx-auto" x-data="{isSelected:0}">
                    <ul class="shadow-box accordion" xid="accordionExample">

                        <li class="relative bg-[hsl(0,5%,96%)] rounded mt-5">

                                <button type="button" class="accordion-button w-full px-8 py-3 text-left" @click="isSelected !== 1 ? isSelected = 1 : isSelected = null" xtype="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="flex items-center justify-between">
                                    <span  class="font-bold  md:text-xl tracking-wide">
                                        Lorem ipsum dolor sit amet consectetur?				</span>
                                </div>
                            </button>

                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="isSelected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <div class="px-6 pb-10">
                                    <hr class="border-2 border-b-gray-700 ">
                                    <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis laudantium impedit officiis perspiciatis dicta placeat. Delectus laborum esse vero consequatur possimus id accusamus! Aut quibusdam expedita possimus quidem impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, vero? Odit quas doloremque quo libero ex, repudiandae sit exercitationem veniam dolorem quibusdam, ut in dolore maxime dicta? Sit, explicabo voluptatibus?</p>
                                </div>
                            </div>
                        </li>

                        <li class="relative  bg-[hsl(0,5%,96%)] rounded mt-5">

                            <button type="button" class="w-full px-8 py-6 text-left" @click="isSelected !== 2 ? isSelected = 2 : isSelected = null">
                                <div class="flex items-center justify-between">
                                    <span class="font-bold md:text-xl tracking-wide">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit?				</span>
                                    <span class="ico-plus"></span>
                                </div>
                                            </button>

                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container2" x-bind:style="isSelected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                <div class="px-6 pb-10">
                                    <hr class="border-2 border-b-gray-700 ">
                                    <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis laudantium impedit officiis perspiciatis dicta placeat. Delectus laborum esse vero consequatur possimus id accusamus! Aut quibusdam expedita possimus quidem impedit.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, adipisci cumque quis provident veniam excepturi possimus! Dolorem mollitia esse ratione repellat a temporibus nobis labore ab reiciendis omnis. Sequi, quibusdam.</p>
                                                </div>
                                            </div>
                        </li>

                        <li class="relative  bg-[hsl(0,5%,96%)] rounded mt-5">

                            <button type="button" class="w-full px-8 py-6 text-left" @click="isSelected !== 3 ? isSelected = 3 : isSelected = null">
                                <div class="flex items-center justify-between">
                                    <span class="font-bold md:text-xl tracking-wide">
                                        Lorem ipsum dolor sit amet consectetur?
                                    </span>
                                    <span class="ico-plus"></span>
                                </div>
                            </button>

                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container3" x-bind:style="isSelected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                <div class="px-6 pb-10">
                                    <hr class="border-2 border-b-gray-700 ">
                                    <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis laudantium impedit officiis perspiciatis dicta placeat. Delectus laborum esse vero consequatur possimus id accusamus! Aut quibusdam expedita possimus quidem impedit.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, adipisci cumque quis provident veniam excepturi possimus! Dolorem mollitia esse ratione repellat a temporibus nobis labore ab reiciendis omnis. Sequi, quibusdam.</p>

                                    <ul class="mt-3 space-y-3">
                                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga cum enim dignissimos vitae ipsa, saepe consequatur ex illum eligendi eum architecto vel natus praesentium perspiciatis omnis assumenda commodi consectetur fugit!</li>
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, quod. Laudantium consequuntur nesciunt vero libero error neque ipsa reprehenderit omnis est voluptas excepturi beatae nisi ab, consectetur nam magnam temporibus.</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="relative  bg-[hsl(0,5%,96%)] rounded mt-5">
                            <button type="button" class="w-full px-8 py-6 text-left" @click.="isSelected !== 4 ? isSelected = 4 : isSelected = null">
                                <div class="flex items-center justify-between">
                                    <span class="font-bold md:text-xl tracking-wide">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                                    </span>
                                    <span class="ico-plus"></span>
                                </div>
                            </button>

                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container2" x-bind:style="isSelected == 4 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                <div class="px-6 pb-10">
                                    <hr class="border-2 border-b-gray-700 ">
                                    <p class="pt-3">Monday is ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis laudantium impedit officiis perspiciatis dicta placeat. Delectus laborum esse vero consequatur possimus id accusamus! Aut quibusdam expedita possimus quidem impedit.</p>
                                    <p>Friday is time sit amet consectetur adipisicing elit. Eligendi, adipisci cumque quis provident veniam excepturi possimus! Dolorem mollitia esse ratione repellat a temporibus nobis labore ab reiciendis omnis. Sequi, quibusdam.</p>
                                                </div>
                                            </div>
                        </li>
                    </ul>
                </div>

                {{-- <div class="text-center mt-8">
                    <button class="bg-[#0682d4] font-bold text-white px-9 py-3 rounded-xl">View More</button>
                </div> --}}
            </section>

            <!--Step-by-step Guides-->
            <section class="">
                <h1 class="text-gray-800 font-black text-xl md:text-3xl pt-16 pb-4 ml-4">Step-by-step Guides</h1>
                <div class="bg-white max-w-2xl mx-auto">
                    <ul class="space-y-4 ml-4">
                        <li><a href="#!" class="text-blue-800 font-semibold underline text-sm">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#!" class="text-blue-800 font-semibold underline text-sm">Consectetur adipisicing elit. Reiciendis vel excepturi rem </a></li>
                        <li><a href="#!" class="text-blue-800 underline text-sm">Reiciendis vel excepturi rem, aspernatur, deleniti nulla culpa </a></li>
                        <li><a href="#!" class="text-blue-800 font-semibold underline text-sm">Reiciendis vel excepturi rem, aspernatur </a></li>
                        <li><a href="#!" class="text-blue-800 font-semibold underline text-sm">Tenetur officia distinctio</a></li>
                        <li><a href="#!" class="text-blue-800 font-semibold underline text-sm">Fficia distinctio laudantium neque quaerat</a></li>
                        <li><a href="#!" class="text-blue-800 font-semibold underline text-sm">Bnulla culpa beatae tenetur o voluptates</a></li>
                        <li><a href="#!" class="text-blue-800 font-semibold underline text-sm">Maiores quasi iure blanditiis? Commodi alias</a></li>

                    </ul>
                </div>
            </section>
        </div>
    </div>


         <!--Ad Space -->
        <ul class="md:col-span-12 lg:col-span-3 col-span-12 mx-4 mb-12 mt-8  space-y-8">
            <li class="rounded-xl p-6">
                <a href="#!"> <img class="h-full w-full object-cover" src="{{ asset('img/AdSamples/ad14-microsoft-banner.png') }}" alt=""></a>
            </li>
            <li class="h-72 bg-blue-50 rounded-xl p-6">
                <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                <h3 class="text-black font-black text-xl">Advertise Here</h3>
                <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
            </li>
        </ul>
    </div>

</div>


@endsection
