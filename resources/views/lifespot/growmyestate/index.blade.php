@extends('lifespot_layout')

@section('content')
<div class="bg-gray-50">
    <div class="h-screen py-6 px-6">
        <h1 class="font-black text-xl mb-4">Grow My Estate</h1>

        <div class="grid lg:grid-cols-5 gap-4 pt-4">
            <div class="col-span-4 bg-white rounded-2xl shadow-lg h-60 p-10">
                <div class="flex space-x-5">
                    <div class="mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 text-blue-300 font-light bg-blue-100 rounded-full p-4 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.412 15.655L9.75 21.75l3.745-4.012M9.257 13.5H3.75l2.659-2.849m2.048-2.194L14.25 2.25 12 10.5h8.25l-4.707 5.043M8.457 8.457L3 3m5.457 5.457l7.086 7.086m0 0L21 21" />
                          </svg>
                    </div>
                    <div class="space-y-3">
                        <h3 class="font-black text-lg">Estate Analyzer</h3>
                        <p class="text-xs">Plan for tomorrow with Lifespots Estate Analyzer - the ultimate tool for financial planning success!</p>
                        <button class="text-sm font-bold bg-[#1f588d] text-white px-4 py-2 rounded-lg">Run Analysis</button>
                    </div>
                </div>

            </div>

            <div class="hidden lg:block h-72 lg:col-start-5 bg-blue-50 rounded-xl p-6">
                <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                <h3 class="text-black font-black">Why is this information important?</h3>
                <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
            </div>

        </div>

        <div class="grid lg:grid-cols-10 gap-8 pt-4 pb-12">
            <div class="col-span-5 space-y-3">
                <h3 class="font-black text-lg">Helpful Tools and Resources</h3>
                <div class="bg-white rounded-2xl shadow-lg h-fit p-10">
                    <nav class="mb-5">
                        <ul class="flex space-x-3 lg:space-x-8 text-sm text-gray-700">
                            <li class="hover:underline underline-offset-8 hover:text-blue-700">
                                <a href="#!" class="{{ (Request::is('#!*')? 'underline text-blue-700' : 'underline text-blue-800 font-bold') }}"><span class="hidden lg:block">Do it yourself</span><span class="lg:hidden">Do it yourself</span></a>
                            </li>

                            <li class="hover:underline underline-offset-8 hover:text-blue-700">
                                <a href="" class="{{ (Request::is('mylifespot/property*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Professional Help</span><span class="lg:hidden">Professional Help</span></a>
                            </li>
                        </ul>
                        <hr class="mt-1">
                    </nav>
                    <div class="grid grid-cols-3 gap-5 items-center">
                        <div class="px-3">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 text-white font-light bg-blue-700 rounded-full p-4 ">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
                                  </svg>
                            </span>
                          <p class="mt-1 mx-2">Checklist</p>
                        </div>
                        <div class="px-3">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 text-white font-light bg-orange-500 rounded-full p-4 ">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                            </span>
                            <p class="mt-1 text-center">Taxes</p>
                        </div>
                        <div class="px-3">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 text-white font-light bg-cyan-700 rounded-full p-4 ">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
                                  </svg>


                            </span>
                         <p class="mt-1 text-center">Legality</p>
                        </div>
                        <div class="px-3">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 text-white font-light bg-red-500 rounded-full p-4 ">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                  </svg>
                            </span>
                         <p class="mt-1 text-center">Resources</p>
                        </div>
                        <div class="px-3">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 text-white font-light bg-indigo-700 rounded-full p-4 ">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z" />
                                  </svg>
                            </span>
                         <p class="mt-1 text-center">Calculators</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-span-3 space-y-3">
                <div class="flex justify-between">
                    <h3 class="font-black text-lg">Tips from Xpirix</h3>
                   <div class="flex space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 border rounded-full text-blue-900 p-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 border border-blue-900  rounded-full text-blue-900 font-bold p-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                   </div>


                </div>
                <div class="bg-white rounded-2xl shadow-lg h-fit p-4">
                    <div class="">
                        <a href="#!">
                            <img class="rounded-xl h-436 w-56" src="{{ asset('img/WalkerFamilyPics/doc_signing.jpeg') }}" alt="">
                        </a>
                        <div class="mt-3">
                            <div class="flex space-x-2 items-center">
                                <span class="text-xs">Jul 18 </span>
                                <span>|</span>
                                <span>
                                    <a class="rounded-lg text-xs uppercase py-1 px-2 bg-[#f4f0ec]" href="#!"> Category</a>
                                </span>
                            </div>
                            <h2 class="font-bold text-sm mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
                            <p class="text-xs my-1.5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, sapiente? A, dolores suscipit.</p>
                            <a href="#!" class="flex space-x-2 mt-3">
                                <img class="relative top-0 left-0 rounded-full h-6 w-6" src="{{ asset('img/WalkerFamilyPics/person2.jpeg') }}" alt="">
                                <img class="w-4 h-4" src="{{ asset('img/WalkerFamilyPics/ribbon.jpeg') }}" alt="">
                                <span class="text-xs">Firstname Lastname</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-2 space-y-3">
                <h3 class="font-black text-lg">Suggested</h3>
               <div class="space-y-2">
                <div class="bg-white rounded-xl shadow-lg h-28 p-4">
                    <div class="text-gray-600 text-xs">
                        Loving LifeSpot and want to tell the world?  Share a link on:
                    </div>
                    <div class="flex space-x-2 mt-3">
                        <div>
                            <a href="#!" target="_blank"><img class="h-3 w-3" src="{{ asset('img/WalkerFamilyPics/facebook.webp') }}" alt=""></a>
                        </div>
                        <div>
                            <a href="#!"  target="_blank"><img class="h-3 w-3" src="{{ asset('img/WalkerFamilyPics/twitter.webp') }}" alt=""></a>
                        </div>
                        <div>
                            <a href="#!"  target="_blank"><img class="h-3 w-3" src="{{ asset('img/WalkerFamilyPics/instagram.webp') }}" alt=""></a>
                        </div>
                        <div>
                            <a href="#!"  target="_blank"><img class="h-3 w-3" src="{{ asset('img/WalkerFamilyPics/youtube.webp') }}" alt=""></a>
                        </div>
                        <div>
                            <a href="#!" target="_blank"><img class="h-3 w-3" src="{{ asset('img/WalkerFamilyPics/linkedIn.webp') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg h-28 p-5">
                    <div class="text-gray-600 text-xs">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <a href="#!" class="text-blue-500 text-xs">Lorem Ipsum</a>
                </div>
                <div class="bg-white rounded-xl shadow-lg h-28 p-5">
                    <h5><i class="text-gray-700">e</i><span class="font-semibold">Money</span></h5>
                    <div class="text-gray-600 text-xs">
                        Lorem, ipsum dolor sit amet consectetur.
                    </div>
                    <a href="#!" class="text-blue-500 text-xs">Lorem Ipsum</a>
                </div>
               </div>
            </div>
        </div>
    </div>
</div>

@endsection
