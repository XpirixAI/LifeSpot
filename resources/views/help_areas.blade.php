<x-xpirix>

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
                    <a href="{{ route('help_lifespot') }}" class="{{ (Request::is('help_lifespot*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Lifespot</span><span class="lg:hidden">Lifespot</span></a>
                </li>
                <li class="hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="{{ route('help_xpirix') }}" class="{{ (Request::is('help_xpirix*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Xpirix</span><span class="lg:hidden">Xpirix</span></a>
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
                <li class="hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="{{ route('price') }}" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Pricing</span><span class="lg:hidden">Pricing</span></a>
                </li>
                <li class="hidden hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Account</span><span class="lg:hidden">Account</span></a>
                </li>

            </ul>
            <hr class="mt-1 px-4 lg:mx-24">
        </nav>
    </div>

    <!--Lifespot/Xpiriix/Advertising/Influencers/Developers/Pricing/Account Help Areas-->
    @yield('content')

       <!--H I D D E N:  Frequently Asked Questions and Step-by-step guides-->
    <div class="hidden container ml-2 md:ml-8 lg:ml-48">
        <div class="grid grid-cols-2 gap-8">

            <!--Frequently Asked Questions-->
            <section class="mb-12">
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

    @include('xpirix.body.footer')

</x-xpirix>

