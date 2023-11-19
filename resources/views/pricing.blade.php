<x-xpirix>
    <style>
        [x-cloak] { display: none !important; }
    </style>
        <div class="bg-[hsl(0,5%,96%)]">
            <h1 class="text-center text-gray-800 font-black text-5xl pt-12 pb-4">{{ $contentsForPricing->price_main_title }}</h1>
            <p class="text-gray-700 text-center pb-4">{{ $contentsForPricing->price_desc_heading }}</p>

            <!--Pricing Section-->
            <div x-data="{ open: false, toggle() { this.open = ! this.open } }">
                <div class="text-center">
                    <label class="align-top mr-3 text-blue-800 font-bold text-sm" for="">Monthly</label>
                    <label for="default-toggle" class="inline-flex relative items-center cursor-pointer">
                        <input @click="toggle()" type="checkbox" value="Yearly" id="default-toggle" class="sr-only peer">
                        <div class="w-11 h-6 bg-blue-800 peer-focus:outline-none peer-focus:ring-4 xpeer-focus:ring-blue-300 xdark:peer-focus:ring-blue-800 rounded-full peer xdark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white xafter:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all xdark:border-gray-600 xpeer-checked:bg-blue-600"></div>
                        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Yearly</span>
                    </label>
                </div>

                {{-- <!-- component -->
                <div class="flex items-center justify-center">
                    <input
                        type="checkbox"
                        class="appearance-none w-9 focus:outline-none checked:bg-blue-300 h-5 bg-gray-300 rounded-full before:inline-block before:rounded-full before:bg-blue-500 before:h-4 before:w-4 checked:before:translate-x-full shadow-inner transition-all duration-300 before:ml-0.5"
                    />
                </div> --}}

                <section class="lg:max-w-5xl lg:container lg:mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4 pb-12">
                    <div class="rounded-xl border-2 border-gray-900 py-4 px-6">
                        <div class="w-1/2 border border-black rounded-2xl pl-4 uppercase text-xs font-black p-1">{{ $contentsForPricing->xpirix_plan_title }}</div>
                        <div class="font-black text-3xl text-gray-900 my-2">{{ $contentsForPricing->month_price_free }}</div>
                        <button class=" w-full bg-black text-white px-8 py-2 rounded-lg text-sm font-bold">{{ $contentsForPricing->button_free_text }}</button>
                    <ul class="mt-4 space-y-3">
                        <li class="flex justify-start space-x-2 items-center">
                            <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg></span>
                            <span class="text-sm font-black">{{ $contentsForPricing->free_feature_1 }}</span>
                        </li>
                        <li class="flex justify-start space-x-2 items-center">
                            <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg></span>
                            <span class="text-sm">{{ $contentsForPricing->free_feature_2 }}</span>
                        </li>
                        <li class="flex justify-start space-x-2 items-center">
                            <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg></span>
                            <span class="text-sm">{{ $contentsForPricing->free_feature_3 }}</span>
                        </li>
                        <li class="flex justify-start space-x-2 items-center">
                            <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg></span>
                            <span class="text-sm">{{ $contentsForPricing->free_feature_4 }}</span>
                        </li>
                        <li class="flex justify-start space-x-2 items-center">
                            <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg></span>
                            <span class="text-sm">{{ $contentsForPricing->free_feature_5 }}</span>
                        </li>
                        <li class="flex justify-start space-x-2 items-center">
                            <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg></span>
                            <span class="text-sm">{{ $contentsForPricing->free_feature_6 }}</span>
                        </li>
                        <li class="flex justify-start space-x-2 items-center">
                            <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg></span>
                            <span class="text-sm">{{ $contentsForPricing->free_feature_7 }}</span>
                        </li>

                    </ul>
                    </div>
                    <div x-cloak class="rounded-xl shadow-xl bg-white py-4 px-6">
                        <div class="w-3/4 rounded-2xl bg-[hsl(0,5%,96%)] pl-4 uppercase text-xs font-black p-1">{{ $contentsForPricing->basic_plan_title }}</div>
                        <div x-cloak  x-show="!open" class="font-black text-3xl text-gray-900 my-2">
                            {{ $contentsForPricing->month_price_basic }}
                        </div>
                        <div x-cloak  x-show="open" class="font-black text-3xl text-gray-900 my-2">
                            {{ $contentsForPricing->year_price_basic }}
                        </div>
                        <button x-cloak  class=" w-full bg-black text-white px-8 py-2 rounded-lg text-sm font-bold">{{ $contentsForPricing->button_basic_text }}</button>
                        <ul class="mt-4 space-y-3">
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-black text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                                <span class="text-sm font-bold">{{ $contentsForPricing->basic_feature_1 }}</span>
                            </li>
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-black text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                                <span class="text-sm font-bold">{{ $contentsForPricing->basic_feature_2 }}</span>
                            </li>
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-black text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                                <span class="text-sm font-bold">{{ $contentsForPricing->basic_feature_3 }}</span>
                            </li>
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg></span>
                                <span class="text-sm">{{ $contentsForPricing->basic_feature_4 }}</span>
                            </li>
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg></span>
                                <span class="text-sm">{{ $contentsForPricing->basic_feature_5 }}</span>
                            </li>
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg></span>
                                <span class="text-sm">{{ $contentsForPricing->basic_feature_6 }}</span>
                            </li>
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg></span>
                                <span class="text-sm">{{ $contentsForPricing->basic_feature_7 }}</span>
                            </li>
                        </ul>
                    </div>
                    <div x-cloak class="rounded-xl shadow-xl border bg-white border-blue-700 py-4 px-6">
                        <div class="w-3/4 rounded-2xl bg-cyan-100 text-cyan-800 pl-4 uppercase text-xs font-black p-1">{{ $contentsForPricing->family_plan_title }}</div>
                        <div class="font-black text-3xl text-gray-900 my-2">
                            <div x-cloak  x-show="!open" class="font-black text-3xl text-gray-900 my-2">
                                {{ $contentsForPricing->month_price_family }}
                            </div>
                            <div x-cloak  x-show="open" class="font-black text-3xl text-gray-900 my-2">
                                {{ $contentsForPricing->year_price_family }}
                            </div>
                        </div>
                        <button x-cloak  class=" w-full bg-cyan-600 text-white px-8 py-2 rounded-lg text-sm font-bold">{{ $contentsForPricing->button_family_text }}</button>
                        <ul class="mt-4 space-y-3">
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                                <span class="text-sm font-black">{{ $contentsForPricing->family_feature_1 }}</span>
                            </li>
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                                <span class="text-sm font-black">{{ $contentsForPricing->family_feature_2 }}</span>
                            </li>
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                                <span class="text-sm font-black">{{ $contentsForPricing->family_feature_3 }}</span>
                            </li>
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                                <span class="text-sm font-black">{{ $contentsForPricing->family_feature_4 }}</span>
                            </li>
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                                <span class="text-sm font-black">{{ $contentsForPricing->family_feature_5 }}</span>
                            </li>
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg></span>
                                <span class="text-sm">{{ $contentsForPricing->family_feature_6 }}</span>
                            </li>
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg></span>
                                <span class="text-sm">{{ $contentsForPricing->family_feature_7 }}</span>
                            </li>

                        </ul>
                    </div>
                    <div x-cloak class="rounded-xl shadow-xl bg-white py-4 px-6">
                        <div class="w-3/4 rounded-2xl bg-indigo-100 text-indigo-800 pl-4 uppercase text-xs font-black p-1">{{ $contentsForPricing->premium_plan_title }}</div>
                        <div class="font-black text-3xl text-gray-900 my-2">
                            <div x-cloak  x-show="!open" class="font-black text-3xl text-gray-900 my-2">
                                {{ $contentsForPricing->month_price_premium }}
                            </div>
                            <div x-cloak  x-show="open" class="font-black text-3xl text-gray-900 my-2">
                                {{ $contentsForPricing->year_price_premium }}
                            </div>
                        </div>
                        <button x-cloak class=" w-full bg-indigo-700 text-white px-8 py-2 rounded-lg text-sm font-bold">{{ $contentsForPricing->button_premium_text }}</button>
                        <ul class="mt-4 space-y-3">
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                                <span class="text-sm font-bold">{{ $contentsForPricing->premium_feature_1 }}</span>
                            </li>
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                                <span class="text-sm font-bold">{{ $contentsForPricing->premium_feature_2 }}</span>
                            </li>
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                                <span class="text-sm font-bold">{{ $contentsForPricing->premium_feature_3 }}</span>
                            </li>
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                                <span class="text-sm font-bold">{{ $contentsForPricing->premium_feature_4 }}</span>
                            </li>
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                                <span class="text-sm font-bold">{{ $contentsForPricing->premium_feature_5 }}</span>
                            </li>
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                                <span class="text-sm font-bold">{{ $contentsForPricing->premium_feature_6 }}</span>
                            </li>
                            <li class="flex justify-start space-x-2 items-center">
                                <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                                <span class="text-sm font-bold">{{ $contentsForPricing->premium_feature_7 }}</span>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>


            <!--Additional Plans Section-->
            <section>
                <h1 class="text-center text-gray-800 font-black text-3xl pt-16 pb-4">{{ $contentsForPricing->title_additional_plans }}</h1>
                <p class="text-gray-700 text-2xl text-center pb-8">{{ $contentsForPricing->desc_additional_plans }}</p>

                <div class="lg:max-w-5xl container mx-auto grid lg:grid-cols-3 gap-8 text-center">
                    <div class="space-y-4 px-5 mb-8">
                        <span class="container mx-auto"><svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-20 w-20 p-4 mr-0 text-center rounded-full bg-red-100 text-red-300 font-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                          </svg></span>
                        <h3 class="font-black text-2xl">{{ $contentsForPricing->additonal_plans_title_1 }}</h3>
                        <p class="text-gray-800">{{ $contentsForPricing->additonal_plans_desc_1 }}</p>
                        <button class="bg-[#0682d4] font-bold text-white px-6 py-3 rounded-xl">{{ $contentsForPricing->button_addtional_plans_text_1 }}</button>
                    </div>
                    <div class="space-y-4 px-5 mb-8">
                        <span class="container mx-auto"><svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-20 w-20 p-4 mr-0 text-center rounded-full bg-green-100 text-green-300 font-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                          </svg></span>
                        <h3 class="font-black text-2xl">{{ $contentsForPricing->additonal_plans_title_2 }}</h3>
                        <p class="text-gray-800">{{ $contentsForPricing->additonal_plans_desc_2 }}</p>
                        <button class="bg-[#0682d4] font-bold text-white px-6 py-3 rounded-xl">{{ $contentsForPricing->button_addtional_plans_text_2 }}</button>
                    </div>
                    <div class="space-y-4 px-5 mb-8">
                        <span class="container mx-auto"><svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-20 w-20 p-4 mr-0 text-center rounded-full bg-blue-100 text-blue-300 font-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                          </svg></span>
                        <h3 class="font-black text-2xl">{{ $contentsForPricing->additonal_plans_title_3 }}</h3>
                        <p class="text-gray-800">{{ $contentsForPricing->additonal_plans_desc_3 }}</p>
                        <button class="bg-[#0682d4] font-bold text-white px-6 py-3 rounded-xl">{{ $contentsForPricing->button_addtional_plans_text_3 }}</button>
                    </div>


                </div>
            </section>


             <!--Frequently Asked Questions-->
             <section class="mb-12">
                <h1 class="text-center text-gray-800 font-black text-3xl pt-16 pb-4">{{ $contentsForPricing->faq_section_title }}</h1>

                <div class="bg-white max-w-2xl mx-auto" x-data="{isSelected:0}">
                    <ul class="shadow-box xaccordion" xid="accordionExample">

                        <li class="relative bg-[hsl(0,5%,96%)] rounded mt-5">

                             <button type="button" class="accordion-button w-full px-8 py-3 text-left" @click="isSelected !== 1 ? isSelected = 1 : isSelected = null" xtype="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="flex items-center justify-between">
                                    <span  class="font-bold text-xl tracking-wide">
                                        {{ $contentsForPricing->faq_title_1 }}			</span>
                                        {{-- <i id="icon" class="fa fa-arrow-down"></i> --}}
                                </div>
                            </button>

                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="isSelected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <div class="px-6 pb-10">
                                    <hr class="border-2 border-b-gray-700 ">
                                    <p class="pt-3">
                                        {{-- {{ $contentsForPricing->faq_desc_1 }} --}}
                                        While it may seem daunting to start from scratch on a brand-new platform and become an influencer, it is actually quite straightforward. Some things to know before you get started: The Xpirix algorithm is unique.</p><br>
<p>
Other social media platforms use a social graph to predict content that their users will want to watch. This is because they suggest content based on who you follow, your interests, where you live, etc., but Xpirix uses an interest graph. It is used on both Tiktok and Twitter to measure users’ interests based on how they interact with content. The longer you interact with a specific type of content (like, comment, or share), the more tailored your recommendations will be.</p><br>
<p>
This is something to keep in mind when you’re creating content! Keep your content fresh and exciting, so viewers keep coming back for more. Make your blog posts surprising (a bit of unpredictability goes a long way!), informative, or relatable so that users share your content with friends.</p>


                                </div>
                            </div>

                        </li>

                       <li class="relative  bg-[hsl(0,5%,96%)] rounded mt-5">

                            <button type="button" class="w-full px-8 py-6 text-left" @click="isSelected !== 2 ? isSelected = 2 : isSelected = null">
                                <div class="flex items-center justify-between">
                                    <span class="font-bold text-xl tracking-wide">
                                        {{ $contentsForPricing->faq_title_2 }}				</span>
                                    <span class="ico-plus"></span>
                                </div>
                            </button>

                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container2" x-bind:style="isSelected == 2 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <div class="px-6 pb-10">
                                    <hr class="border-2 border-b-gray-700 ">
                                    <p class="pt-3">{{ $contentsForPricing->faq_desc_2 }}</p>
                                                </div>
                                            </div>

                        </li>

                        <li class="relative  bg-[hsl(0,5%,96%)] rounded mt-5">

                            <button type="button" class="w-full px-8 py-6 text-left" @click="isSelected !== 3 ? isSelected = 3 : isSelected = null">
                                <div class="flex items-center justify-between">
                                    <span class="font-bold text-xl tracking-wide">
                                        {{ $contentsForPricing->faq_title_3 }}				</span>
                                    <span class="ico-plus"></span>
                                </div>
                                            </button>

                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container3" x-bind:style="isSelected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                <div class="px-6 pb-10">
                                    <hr class="border-2 border-b-gray-700 ">
                                    <p class="pt-3">{{ $contentsForPricing->faq_desc_3 }}

                                </div>
                            </div>

                        </li>

                        <li class="relative  bg-[hsl(0,5%,96%)] rounded mt-5">

                            <button type="button" class="w-full px-8 py-6 text-left" @click="isSelected !== 4 ? isSelected = 4 : isSelected = null">
                                <div class="flex items-center justify-between">
                                    <span class="font-bold text-xl tracking-wide">
                                        {{-- {{$contentsForPricing->faq_title_3 }} --}}
                                        Who qualifies as an influencer?				</span>
                                    <span class="ico-plus"></span>
                                </div>
                                            </button>

                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container4" x-bind:style="isSelected == 4 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                <div class="px-6 pb-10">
                                    <hr class="border-2 border-b-gray-700 ">
                                    <p class="pt-3">
                                        {{-- {{ $contentsForPricing->faq_desc_3 }} --}}
                                        There is no minimum number of followers you need to qualify as an influencer. Whether you have 2,000 or 200,000 our plan is designed to work for you.
                                </div>
                            </div>

                        </li>

                        <li class="relative  bg-[hsl(0,5%,96%)] rounded mt-5">

                            <button type="button" class="w-full px-8 py-6 text-left" @click.="isSelected !== 5 ? isSelected = 5 : isSelected = null">
                                <div class="flex items-center justify-between">
                                    <span class="font-bold text-xl tracking-wide">
                                        {{ $contentsForPricing->faq_title_4 }}				</span>
                                    <span class="ico-plus"></span>
                                </div>
                                            </button>

                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container5" x-bind:style="isSelected == 5 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                <div class="px-6 pb-10">
                                    <hr class="border-2 border-b-gray-700 ">
                                    {{ $contentsForPricing->faq_desc_4 }}
                                                </div>
                                            </div>

                        </li>

                    </ul>

                </div>

                <div class="text-center mt-8">
                    <button class="bg-[#0682d4] font-bold text-white px-9 py-3 rounded-xl">View More</button>
                </div>
             </section>

               <!--Carousel -->
         <!-- Required font awesome -->
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

                <style>
                .carousel-open:checked+.carousel-item {
                    position: static;
                    opacity: 100;
                }

                .carousel-item {
                    -webkit-transition: opacity 0.6s ease-out;
                    transition: opacity 0.6s ease-out;
                }

                #carousel-1:checked~.control-1,
                #carousel-2:checked~.control-2,
                #carousel-3:checked~.control-3 {
                    display: block;
                }

                .carousel-indicators {
                    list-style: none;
                    margin: 0;
                    padding: 0;
                    position: absolute;
                    bottom: 2%;
                    left: 0;
                    right: 0;
                    text-align: center;
                    z-index: 10;
                }

                #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
                #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
                #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
                    color: #2b6cb0;
                    /*Set to match the Tailwind colour you want the active one to be */
                }
                </style>

                <div class="carousel rounded bg-gray-100 relative overflow-hidden shadow-xl">
                    <div class="carousel-inner relative overflow-hidden text-center w-full">
                        <!--Slide 1-->
                        <input class="hidden carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                        checked="checked">

                        <div class="w-7/12 carousel-item absolute opacity-0 bg-center container mx-auto py-36" style="height:500px;">
                            <img class="h-10 w-10 flex container mx-auto mb-10" src="{{ asset('img/leftQuotes.png') }}" alt="">
                            {{ $contentsForPricing->carousel_testimonial_1 }}
                            <p class="text-center text-blue-600 font-bold text-sm tracking-wide"> {{ $contentsForPricing->testiomonial_person_1 }}</p>
                            <p class="text-center text-sm text-gray-700">{{ $contentsForPricing->carousel_info_1 }}</p>
                        </div>

                        <label for="carousel-3"
                        class="control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto xflex justify-center content-center"><i
                        class="fas fa-angle-left mt-3"></i></label>
                        <label for="carousel-2"
                        class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto"><i
                        class="fas fa-angle-right mt-3"></i></label>

                        <!--Slide 2-->
                        <input class="hidden carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                        <div class="w-7/12 carousel-item absolute opacity-0 bg-center container mx-auto py-36" style="height:500px;">
                            <img class="h-10 w-10 flex container mx-auto mb-10" src="{{ asset('img/leftQuotes.png') }}" alt="">
                            {{ $contentsForPricing->carousel_testimonial_2 }}
                            <p class="text-center text-blue-600 font-bold text-sm tracking-wide"> {{ $contentsForPricing->testiomonial_person_2 }} </p>
                            <p class="text-center text-sm text-gray-700"> {{ $contentsForPricing->carousel_info_2 }}</p>
                        </div>
                        <label for="carousel-1"
                        class=" control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto"><i
                            class="fas fa-angle-left mt-3"></i></label>
                        <label for="carousel-3"
                        class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto"><i
                            class="fas fa-angle-right mt-3"></i></label>

                        <!--Slide 3-->
                        <input class="hidden carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                        <div class="w-7/12 carousel-item absolute opacity-0 bg-center container mx-auto py-36" style="height:500px;">
                            <img class="h-10 w-10 flex container mx-auto mb-10" src="{{ asset('img/leftQuotes.png') }}" alt="">
                            {{ $contentsForPricing->carousel_testimonial_3 }}
                            <p class="text-center text-blue-600 font-bold text-sm tracking-wide">{{ $contentsForPricing->testiomonial_person_3 }}</p>
                            <p class="text-center text-sm text-gray-700">{{ $contentsForPricing->carousel_info_3 }}</p>
                        </div>
                        <label for="carousel-2"
                        class="control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto"><i
                            class="fas fa-angle-left mt-3"></i></label>
                        <label for="carousel-1"
                        class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto"><i
                            class="fas fa-angle-right mt-3"></i></label>

                        <!-- Add additional indicators for each slide-->
                        <ol class="carousel-indicators">
                        <li class="inline-block mr-3">
                            <label for="carousel-1"
                            class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-2"
                            class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-3"
                            class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                        </ol>

                    </div>
                </div>

              @include('xpirix.body.footer')


         </x-xpirix>
