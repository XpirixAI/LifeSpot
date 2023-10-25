@extends('lifespot_layout')

@section('content')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <style>
        [x-cloak] {
            display: none;
        }
        .btn {
            @apply font-bold py-2 px-4 rounded;
        }
        .btn-blue {
            @apply bg-red-500 text-white;
        }
        .btn-blue:hover {
            @apply bg-red-700;
        }
    </style>
    <div 
        x-cloak 
        x-data="data"
        class="grid lg:grid-cols-5 bg-gray-50 h-screen"
    >
        <div class="col-span-4 lg:col-span-1 bg-white pt-6 px-3 pb-3">
            <h2 class="font-black text-lg mb-4">Documents</h2>
            <ul class="space-y-3 mb-5">
                <li class="{{ $page_title == 'Recents' ? 'bg-blue-50' : '' }} hover:bg-blue-50 rounded-lg w-full py-1">
                    <a class="flex space-x-2 text-xs" href="{{route('documents.recents')}}">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                        <span class="font-bold">Recent</span>
                    </a>
                </li>
                <li class="{{ $page_title == 'Favorites' ? 'bg-blue-50' : '' }} hover:bg-blue-50 rounded-lg w-full py-1">
                    <a class="flex space-x-2 text-xs" href="{{route('documents.favorites')}}">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="{{ $page_title == 'Favorites' ? 'red' : 'none'}}" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </span>
                        <span class="font-bold">Favorites</span>
                    </a>
                </li>
            </ul>
            <div class="flex justify-between items-center mb-5">
                <button @click="toggleIsUploadDocumentModalOpen()" class="bg-[#1f588d] text-white border float-right border-gray-400 rounded-lg font-semibold text-xs py-1 lg:py-2 px-2 lg:px-5">Upload a Document</button>
            </div>
            <div class="flex justify-between items-center mb-5">
                <h2 class="font-black text-sm">Folders</h2>
                {{-- <button type="button" class="cursor-pointer" @click="toggleCreateFolderOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button> --}}
            </div>
            <ul class="space-y-3 mb-5">
                <li
                    class="{{ isset($cat_id) && $cat_id == 0 ? 'bg-blue-50' : '' }} hover:bg-blue-50 rounded-lg w-full py-1"
                >
                    <a class="flex space-x-2 text-xs items-center" href="{{route('documents', 0)}}">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
                            </svg>
                        </span>
                        <div class="{{ isset($cat_id) && $cat_id == 0 ? 'font-bold' : '' }}">Uncategorized</div>
                    </a>
                </li>
            </ul>
            <div class="flex justify-between mb-3">
                <div class="rounded-xl text-xs bg-gray-100 px-5 py-1 uppercase">Recommended</div>
                <a href="#!">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                    </svg>
                </a>
            </div>
            <ul class="space-y-3 mb-5">
                @foreach ($default_categories as $def_cat)
                    <li
                        class="{{ isset($cat_id) && $cat_id == $def_cat->id ? 'bg-blue-50' : '' }} hover:bg-blue-50 rounded-lg w-full py-1"
                    >
                        <a class="flex space-x-2 text-xs items-center" href="{{route('documents', $def_cat->id)}}">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
                                </svg>
                            </span>
                            <div class="{{ isset($cat_id) && $cat_id == $def_cat->id ? 'font-bold' : '' }}">{{ $def_cat->title }}</div>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="flex justify-between mb-3">
                <div class="rounded-xl text-xs bg-gray-100 px-5 py-1 uppercase">Custom</div>
                <button type="button" @click="toggleViewFoldersOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                    </svg>
                </button>
            </div>
            <ul class="space-y-3 mb-5">
                @foreach ($custom_categories as $cat)
                    <li
                        id="{{'js-category_side_link'.$cat->id}}"
                        class="{{ isset($custom_cat_id) && $custom_cat_id == $cat->id ? 'bg-blue-50' : '' }} hover:bg-blue-50 hover:rounded-lg w-full py-1"
                    >
                        <a class="flex space-x-2 text-xs items-center" href="{{route('documents.custom.category', $cat->id)}}">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
                                </svg>
                            </span>
                            <div id="{{'js-category_side_link_title'.$cat->id}}">{{$cat->title}}</div>
                        </a>
                    </li>
                @endforeach
                <button @click="toggleCreateFolderOpen()" type="button" href="#!" class="flex space-x-2 font-bold items-center text-blue-700 lg:my-0 my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-700 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <span>Add a Folder</span>
                </button>
            </ul>
        </div>
        <div class="col-span-1 lg:col-span-4 mx-5">
            <div class="pt-6 px-3 pb-3">
                <div class="flex justify-between">
                    <div class="flex items-center space-x-3 mb-4">
                        <h2 class="font-black text-lg ">
                            {{ $page_title }}
                        </h2>
                        <a href="#!">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </a>
                    </div>
                    <ul class="flex items-center pb-4">
                        <li>
                            <a href="#!">
                                <span class="bg-teal-600 text-white text-xs font-bold rounded-full h-8 w-8 uppercase py-3 px-2">SW</span>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <img class="rounded-full h-8 w-8" src="{{ asset('img/WalkerFamilyPics/jared.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <img class="rounded-full h-8 w-8" src="{{ asset('img/WalkerFamilyPics/howard.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <span class="bg-gray-800 text-white text-xs font-bold rounded-full h-8 w-8 uppercase py-2 px-2">+3</span>
                            </a>
                        </li>
                        <li class="ml-5">
                            <a href="#!">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="flex justify-between text-xs">
                    <div class="space-x-5">
                        {{-- <span>Created: July 27, 2022</span> --}}
                        <span>Files: {{ count($documents) }}</span>
                    </div>
                    {{-- <div>Last Edited: 1 hour ago</div> --}}
                </div>
                <hr class="my-1">
                <div class="flex justify-between mt-3 items-center mb-5">
                    <!--Search form-->
                    <div class="flex space-x-3 mr-3">
                        <form id="search-form" class="my-2 lg:w-72">
                            <label for="search-input" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                            <div class="relative mr-2">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </div>
                                <input name="search" type="search" id="search-input" class="block pl-10 w-full text-xs text-gray-900 bg-white xrounded-lg border border-gray-100 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required="">
                            </div>
                        </form>
                        <span class="flex justify-between items-center text-xs ml-1 lg:ml-5"> View:
                            <a class="ml-1" href="#!">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 over:text-blue-500  text-gray-500 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                </svg>
                            </a>
                            <a href="#!">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>

                <div class="grid lg:grid-cols-4 gap-4">
                    <div class="lg:col-span-3">
                        {{-- <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                                <a class="rounded-lg h-40 w-40 bg-white p-1" href="#!">
                                    <div class="flex justify-between items-center mx-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </div>
                                    <div class="my-2 mx-10">
                                        <img class="h-20 w-16 m-0 px-auto" src="{{ asset('img/WalkerFamilyPics/pdf.jpeg') }}" alt="">
                                    </div>
                                    <div class="text-xs text-center">Emergency letter.pdf</div>
                                    <div class="text-gray-500 text-xs text-center my-1">1 hour ago</div>
                                </a>
                                <a class="rounded-lg h-40 w-40 bg-white p-1" href="#!">
                                    <div class="flex justify-between items-center mx-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </div>
                                    <div class="my-2 mx-10">
                                        <img class="h-20 w-16 m-0 px-auto" src="{{ asset('img/WalkerFamilyPics/word_doc.png') }}" alt="">
                                    </div>
                                    <div class="text-xs text-center">Deed-for-estate.doc</div>
                                    <div class="text-gray-500 text-xs text-center my-1">3/26/22</div>

                                </a>
                                <a class="rounded-lg h-40 w-40 bg-white p-1" href="#!">
                                    <div class="flex justify-between items-center mx-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </div>
                                    <div class="my-2 mx-10">
                                        <img class="h-20 w-16 m-0 px-auto" src="{{ asset('img/WalkerFamilyPics/pdf.jpeg') }}" alt="">
                                    </div>
                                    <div class="text-xs text-center">Brandon-DNR.pdf</div>
                                    <div class="text-gray-500 text-xs text-center my-1">3/26/22</div>

                                </a>
                                <a class="rounded-lg h-40 w-40 bg-white p-1" href="#!">
                                    <div class="flex justify-between items-center mx-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </div>
                                    <div class="my-2 mx-10">
                                        <img class="h-20 w-16 m-0 px-auto" src="{{ asset('img/WalkerFamilyPics/excel_doc.png') }}" alt="">
                                    </div>
                                    <div class="text-xs text-center">Estate-items.xls</div>
                                    <div class="text-gray-500 text-xs text-center my-1">3/14/22</div>

                                </a>
                                <a class="rounded-lg h-40 w-40 bg-white p-1" href="#!">
                                    <div class="flex justify-between items-center mx-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-600 " fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </div>
                                    <div class="my-2 mx-5">
                                        <img class="h-20 w-32 m-0 px-auto border border-black rounded-lg" src="{{ asset('img/WalkerFamilyPics/grand-kids.jpeg') }}" alt="">
                                    </div>
                                    <div class="text-xs text-center">Grandparents.jpg</div>
                                    <div class="text-gray-500 text-xs text-center my-1">12/4/21</div>

                                </a>
                                <a class="rounded-lg h-40 w-40 bg-white p-1" href="#!">
                                    <div class="flex justify-between items-center mx-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-600 " fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </div>
                                    <div class="my-2 mx-5">
                                        <img class="h-20 w-32 m-0 px-auto border border-black rounded-lg" src="{{ asset('img/WalkerFamilyPics/fido.jpeg') }}" alt="">
                                    </div>
                                    <div class="text-xs text-center">Fido.jpg</div>
                                    <div class="text-gray-500 text-xs text-center my-1">11/7/21</div>
                                </a>
                                <a @click="showModal = true" class="rounded-lg h-40 w-40 bg-white p-1 space-y-4" href="#!">
                                    <div class="px-12 pt-16">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 center text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                        </svg>
                                    </div>
                                    <div class="text-xs text-center font-bold text-blue-700">Upload a Document</div>
                                </a>
                        </div> --}}
                        <section class="text-gray-600 body-font">
                            <div class="grid grid-cols-3 gap-4">
                                @foreach($documents as $doc)
                                    <div>
                                        <div class="border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                            <div class="w-full">
                                                <div class="w-full flex p-2">
                                                    <div class="p-2">
                                                        <div class="flex justify-between items-center mx-2">
                                                            <svg 
                                                                @click="favoriteDoc( {{$doc->id}}, {{$doc->is_favorite ? 0 : 1}} );" 
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="h-4 w-4 cursor-pointer"
                                                                fill="{{$doc->is_favorite ? 'red' : 'none'}}"
                                                                viewBox="0 0 24 24"
                                                                stroke="currentColor"
                                                                stroke-width="2"
                                                            >
                                                                <path 
                                                                    stroke-linecap="round" 
                                                                    stroke-linejoin="round" 
                                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" 
                                                                />
                                                            </svg>
                                                            <svg 
                                                                @click="selectedDocID = {{$doc->id}}; getDocumentDetails();" 
                                                                xmlns="http://www.w3.org/2000/svg" 
                                                                class="h-6 w-6 cursor-pointer text-gray-500" 
                                                                fill="none" 
                                                                viewBox="0 0 24 24" 
                                                                stroke="currentColor" 
                                                                stroke-width="2"
                                                            >
                                                                <path 
                                                                    stroke-linecap="round" 
                                                                    stroke-linejoin="round" 
                                                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" 
                                                                />
                                                            </svg>
                                                        </div>
                                                        <div class="my-2 mx-10">
                                                            <img class="lg:h-20 md:h-16 w-full object-cover object-center"src="{{ asset('img/WalkerFamilyPics/pdf.jpeg') }}" alt="">
                                                        </div>
                                                        <div class="text-xs text-center">{{ $doc->title }}</div>
                                                        <div class="text-gray-500 text-xs text-center my-1">Last Updated: {{ $doc->updated_at}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{-- <div class="container py-5 mx-auto">
                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                                    <a href="#!" class="" >
                                        <div class="border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                            <div class="w-full">
                                                <div class="w-full flex p-2">
                                                    <div class="p-2 ">
                                                        <div class="flex justify-between items-center mx-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                            </svg>
                                                        </div>
                                                        <div class="my-2 mx-10">
                                                            <img class="lg:h-20 md:h-16 w-full object-cover object-center"src="{{ asset('img/WalkerFamilyPics/pdf.jpeg') }}" alt="">
                                                        </div>
                                                        <div class="text-xs text-center">Emergency letter.pdf</div>
                                                        <div class="text-gray-500 text-xs text-center my-1">1 hour ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="" >
                                        <div class="border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                            <div class="w-full">
                                                <div class="w-full flex p-2">
                                                    <div class="p-2 ">
                                                        <div class="flex justify-between items-center mx-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                            </svg>
                                                        </div>
                                                        <div class="my-2 mx-10">
                                                            <img class="lg:h-20 md:h-16 w-full object-cover object-center" src="{{ asset('img/WalkerFamilyPics/word_doc.png') }}" alt="">
                                                        </div>
                                                        <div class="text-xs text-center">Deed-for-estate.doc</div>
                                                        <div class="text-gray-500 text-xs text-center my-1">3/26/22</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="" >
                                        <div class="border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                            <div class="w-full">
                                                <div class="w-full flex p-2">
                                                    <div class="p-2 ">
                                                        <div class="flex justify-between items-center mx-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                            </svg>
                                                        </div>
                                                        <div class="my-2 mx-10">
                                                            <img class="lg:h-20 md:h-16 w-full object-cover object-center"src="{{ asset('img/WalkerFamilyPics/pdf.jpeg') }}" alt="">
                                                        </div>
                                                        <div class="text-xs text-center">Brandon-DNR.pdf</div>
                                                        <div class="text-gray-500 text-xs text-center my-1">3/26/22</div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="" >
                                        <div class="border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                            <div class="w-full">
                                                <div class="w-full flex p-2">
                                                    <div class="p-2 ">
                                                        <div class="flex justify-between items-center mx-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                            </svg>
                                                        </div>
                                                        <div class="my-2 mx-10">
                                                            <img class="lg:h-20 md:h-16 w-full object-cover object-center" src="{{ asset('img/WalkerFamilyPics/excel_doc.png') }}" alt="">
                                                        </div>
                                                        <div class="text-xs text-center">Estate-items.xls</div>
                                                        <div class="text-gray-500 text-xs text-center my-1">3/14/22</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="" >
                                        <div class="border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                            <div class="w-full">
                                                <div class="w-full flex p-2">
                                                    <div class="p-2 ">
                                                        <div class="flex justify-between items-center mx-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-600 " fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                            </svg>
                                                        </div>
                                                        <div class="my-2 mx-5">
                                                            <img class="lg:h-20 md:h-16 w-full object-cover object-center border border-black rounded-lg" src="{{ asset('img/WalkerFamilyPics/grand-kids.jpeg') }}" alt="">
                                                        </div>
                                                        <div class="text-xs text-center">Grandparents.jpg</div>
                                                        <div class="text-gray-500 text-xs text-center my-1">12/4/21</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="" >
                                        <div class="border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                            <div class="w-full">
                                                <div class="w-full flex p-2">
                                                    <div class="p-2 ">
                                                        <div class="flex justify-between items-center mx-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-600 " fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                            </svg>
                                                        </div>
                                                        <div class="my-2 mx-5">
                                                            <img class="lg:h-20 md:h-16 w-full object-cover object-center border border-black rounded-lg" src="{{ asset('img/WalkerFamilyPics/fido.jpeg') }}" alt="">
                                                        </div>
                                                        <div class="text-xs text-center">Fido.jpg</div>
                                                        <div class="text-gray-500 text-xs text-center my-1">11/7/21</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a @click.prevent="showModal = true"  href="#!" class="container mx-auto" >
                                        <div class="border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                            <div class="w-full">
                                                <div class="w-full flex p-2">
                                                    <div class="p-2 ">
                                                        <div class="px-12 pt-16">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 center text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                                            </svg>
                                                        </div>
                                                        <div class="text-xs text-center font-bold text-blue-700">Upload a Document</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div> --}}
                        </section>
                    </div>
                    <div class="hidden lg:block h-72 overflow-y-auto col-start-4 bg-blue-50 rounded-xl p-6">
                        <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                        <h3 class="text-black font-black">Why is this information important?</h3>
                        <p class="mt-2 text-xs">Lifespot is a digital asset and document management platform that helps people store, add, and manage their digital assets and documents as part of their estate planning.
                            With Lifespot, users can easily store, add, and manage their digital assets and documents, including photos, videos, music, documents, financial accounts, and more. This is an essential part of your estate planning, as it helps to ensure that your digital assets and documents are protected and accessible when needed. Let us help you grow as you go, have fun!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upload Modal -->
        <div x-cloak x-show="isUploadDocumentModalOpen" style="background-color: rgba(0, 0, 0, .5)"
            class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50">
            <!-- inner modal -->
            <div
                @click.away="toggleIsUploadDocumentModalOpen()"
                x-transition:enter="motion-safe:ease-out duration-500"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                class="xmax-w-3xl px-5 py-4 mx-auto text-left bg-white rounded-xl shadow-lg"
            >
                <!-- Title / Close-->
                <div class="flex items-center justify-between space-y-3 mb-3">
                    <h5 class="mr-3 font-black text-black xmax-w-none">Upload a Document</h5>
                    <button type="button" class="z-50 cursor-pointer" @click="toggleIsUploadDocumentModalOpen()">
                        <svg xmlns="http://www.w3.org/2000/svg" xwidth="20" xheight="20 text-gray-300" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form method="post" action="{{route('documents.store')}}" enctype="multipart/form-data">
                    @csrf
                    {{-- <img class="mt-2" src="{{ asset('img/WalkerFamilyPics/drag_drop.png') }}" alt=""> --}}
                    <div class="mb-3">
                        <input class="block form-control" type="file" id="formFile" name="formFile">
                    </div>

                    <!-- content -->
                    <div class="grid grid-cols-2 gap-4 pt-5 pb-2">
                        <div>
                            <div class="font-semibold text-sm mb-2">Folder</div>
                            {{-- <button type="button" class="relative w-full bg-gray-100 border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm mb-2" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                                <span class="flex items-center">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="flex-shrink-0 h-6 w-6 rounded-full">
                                <span class="ml-3 block truncate font-light text-xs"> Select a Folder </span>
                                </span>
                                <span class="ml-3 absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                <!-- Heroicon name: solid/selector -->
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                                </span>
                            </button> --}}

                            <select name="folder" class="category_select form-select w-full bg-gray-100 border border-gray-300 rounded-md">
                                <option 
                                    value="0"
                                    {!! isset($cat_id) && $cat_id == 0 ? 'selected' : '' !!}
                                >
                                    Uncategorized
                                </option>
                                @foreach ($default_categories as $def_cat)
                                    <option
                                        class="js-default-cat-option"
                                        value="{{ $def_cat->id }}"
                                        {!! isset($cat_id) && !isset($custom_cat_id) && $cat_id == $def_cat->id ? 'selected' : '' !!}
                                    >
                                        {{ $def_cat->title }}
                                    </option>
                                @endforeach
                                @foreach ($custom_categories as $cat)
                                    <option
                                        class="js-custom-cat-option hidden"
                                        value="{{$cat->id}}"
                                        {!! isset($custom_cat_id) && $custom_cat_id == $cat->id ? 'selected' : '' !!}
                                    >
                                        {{$cat->title}}
                                    </option>
                                @endforeach
                            </select>

                            <label class="cursor-pointer block my-2">
                                <input class="js-is_custom_cat_checkbox" type="checkbox" name="is_custom_category" />
                                Custom Folder
                            </label>

                            <a class="text-xs text-blue-400 block" href="#!">
                                Add a New Folder
                            </a>
                        </div>
                        <div>
                            <div class="font-semibold text-sm mb-2">Sharing With</div>
                            <ul class="flex items-center mb-2">
                                <li>
                                    <a href="#!">
                                        <span class="bg-teal-600 text-white text-xs font-bold rounded-full h-8 w-8 uppercase py-3 px-2">SW</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <img class="rounded-full h-8 w-8" src="{{ asset('img/WalkerFamilyPics/jared.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <img class="rounded-full h-8 w-8" src="{{ asset('img/WalkerFamilyPics/howard.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 border border-dashed rounded-full text-gray-300 text-center" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                                </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <a class="text-xs text-blue-400 mb-2" href="#!">
                                Add a Member
                            </a> 
                            <br>
                            <div class="float-right mt-5">
                                <button type="button" @click="toggleIsUploadDocumentModalOpen()" class="border border-blue-800 rounded-lg font-semibold text-xs py-2 px-8 mr-1">Cancel</button>
                                <button type="submit" class="bg-[#1f588d] text-white border border-gray-400 rounded-lg font-semibold text-xs py-2 px-8">Upload</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Doc Details Modal -->
        <div
            x-cloak 
            x-show="docDetailsOpen" 
            style="background-color: rgba(0, 0, 0, .5)"
            class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
        >
            <div
                @click.away="toggleDocDetailsOpen()"
                x-transition:enter="motion-safe:ease-out duration-500"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                class="xmax-w-3xl px-5 py-4 mx-auto text-left bg-white rounded-xl shadow-lg"
            >
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-black text-black">Document Details</h5>
                    <button type="button" class="cursor-pointer" @click="toggleDocDetailsOpen">X</button>
                </div>
                <div class="flex items-center justify-start mb-5">
                    <button
                        type="button"
                        @click="downloadDocument()"
                        class="cursor-pointer bg-blue-500 hover:bg-blue-700 text-white border float-right border-gray-400 rounded-lg font-semibold text-xs py-1 lg:py-2 px-2 lg:px-5" 
                    >
                        Download
                    </button>
                </div>
                <div id="doc_details_content">
                    <form method="POST" action="{{route('document.update')}}">
                        @csrf
                        @method('PATCH')
                        <label for="detail_modal_title" class="font-semibold text-sm mb-2">Document Title</label>
                        <input class="font-bold block mb-5 rounded-md" id="detail_modal_title" type="text" name="title"/>

                        <label class="font-semibold text-sm mb-2">Document Category</label>
                        <select id="detail_modal_category" class="category_select form-select w-full bg-gray-100 border border-gray-300 mb-5 rounded-md" name="category">
                            <option value="0" selected>Uncategorized</option>
                            @foreach ($default_categories as $def_cat)
                                <option class="js-default-cat-option" value="{{ $def_cat->id }}">{{ $def_cat->title }}</option>
                            @endforeach
                            @foreach ($custom_categories as $cat)
                                <option class="js-custom-cat-option hidden" value="{{$cat->id}}">{{$cat->title}}</option>
                            @endforeach
                        </select>

                        <label class="cursor-pointer">
                            <input class="js-is_custom_cat_checkbox" type="checkbox" name="is_custom_category" />
                            Custom Folder
                        </label>

                        <input id="detail_modal_id" type="hidden" name="id" />

                        <div class="flex justify-between mt-3">
                            <button
                                type="button"
                                @click="toggleDocDetailsOpen(); toggleDocDeleteOpen();"
                                class="bg-red-500 hover:bg-red-700 text-white border float-right border-gray-400 rounded-lg font-semibold text-xs py-1 lg:py-2 px-2 lg:px-5"
                            >
                                Delete Document
                            </button>
                            <button
                                type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white border float-right border-gray-400 rounded-lg font-semibold text-xs py-1 lg:py-2 px-2 lg:px-5"
                            >
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Doc Delete Modal -->
        <div
            x-cloak 
            x-show="docDeleteOpen" 
            style="background-color: rgba(0, 0, 0, .5)"
            class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
        >
            <div
                @click.away="toggleDocDeleteOpen"
                x-transition:enter="motion-safe:ease-out duration-500"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                class="xmax-w-3xl px-5 py-4 mx-auto text-left bg-white rounded-xl shadow-lg"
            >
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-black text-black">Delete Document</h5>
                    <button type="button" class="cursor-pointer" @click="toggleDocDeleteOpen">X</button>
                </div>
                <div id="doc_delete_content">
                    <div class="mb-5">Are you sure you want to delete this document?</div>

                    <div class="mb-5">Note: <span class="italic">This action cannot be undone.</span></div>

                    <button
                        type="button"
                        class="bg-red-500 hover:bg-red-700 text-white border float-right border-gray-400 rounded-lg font-semibold text-xs py-1 lg:py-2 px-2 lg:px-5"
                        @click="deleteDoc"
                    >
                        Confirm Delete
                    </button>
                </div>
            </div>
        </div>

        <!-- Folder Create Modal -->
        <div
            x-cloak 
            x-show="createFolderOpen" 
            style="background-color: rgba(0, 0, 0, .5)"
            class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
        >
            <div
                @click.away="toggleCreateFolderOpen"
                x-transition:enter="motion-safe:ease-out duration-500"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                class="xmax-w-3xl px-5 py-4 mx-auto text-left bg-white rounded-xl shadow-lg"
            >
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-black text-black">Create Folder</h5>
                    <button type="button" class="cursor-pointer" @click="toggleCreateFolderOpen">X</button>
                </div>
                <form method="POST" action="{{route('documents.custom.category.create')}}">
                    @method('POST')
                    @csrf
                    <input name="title" type="text" class="block mb-5" placeholder="Title..."/>
                    <button
                        type="submit"
                        class="bg-[#1f588d] text-white border float-right border-gray-400 rounded-lg font-semibold text-xs py-1 lg:py-2 px-2 lg:px-5"
                        @click="createFolder"
                    >
                        Create Folder
                    </button>
                </form>
            </div>
        </div>

        <!-- View Folders Modal -->
        <div
            x-cloak 
            x-show="viewFoldersOpen" 
            style="background-color: rgba(0, 0, 0, .5)"
            class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
        >
            <div
                @click.away="toggleViewFoldersOpen()"
                x-transition:enter="motion-safe:ease-out duration-500"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                class="xmax-w-3xl px-5 py-4 mx-auto text-left bg-white rounded-xl shadow-lg"
            >
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-black text-black">Delete Folders</h5>
                    <button type="button" class="cursor-pointer" @click="toggleViewFoldersOpen">X</button>
                </div>
                {{-- <input name="title" type="text" class="block mb-5" placeholder="Title..."/>
                <button
                    type="submit"
                    class="bg-[#1f588d] text-white border float-right border-gray-400 rounded-lg font-semibold text-xs py-1 lg:py-2 px-2 lg:px-5"
                    @click="createFolder"
                >
                    Create Folder
                </button> --}}
                <table class="w-full shadow-md rounded">
                    <thead class="bg-gray-50 border-b-2 border-gray-200">
                        <tr class="bg-white">
                            <th class="w-64 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Title</th>
                            <th class="w-64 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-300">
                        @foreach ($custom_categories as $cat)
                            <tr id="{{ 'js-category_row'.$cat->id }}" class="bg-gray-50">
                                <td class="p-4 text-sm text-gray-700 whitespace-nowrap">
                                    <div
                                        id="{{'js-category_title_text'.$cat->id}}"
                                        class="js-category_title_text"
                                    >
                                        {{ $cat->title }}
                                    </div>
                                    <input
                                        id="{{'js-category_title_input'.$cat->id}}"
                                        class="js-category_title_input hidden block text-sm rounded-md border"
                                        type="text"
                                        value="{{ $cat->title }}"
                                    />
                                </td>
                                <td>
                                    <div id="{{ 'js-category_actions'.$cat->id }}">
                                        <button
                                            type="button"
                                            class="text-red-500 hover:text-red-700 hover:underline rounded-lg font-semibold text-xs px-2"
                                            onclick="checkDelete({{ $cat->id }})"
                                        >
                                            Delete
                                        </button>
                                        
                                        <button
                                            type="button"
                                            class="text-blue-500 hover:text-blue-700 hover:underline rounded-lg font-semibold text-xs px-2"
                                            onclick="editFolder({{ $cat->id }})"
                                        >
                                            Edit
                                        </button>
                                    </div>
                                    <div id="{{ 'js-category_delete_text'.$cat->id }}" class="hidden text-xs">
                                        Are you sure?
                                        <div class="block">
                                            <button 
                                                class="text-blue-500 hover:text-blue-700 hover:underline rounded-lg font-semibold text-xs px-2" 
                                                type="button"
                                                onclick="deleteFolder({{ $cat->id }})"
                                            >
                                                Yes
                                            </button>
                                            <button
                                                class="text-red-500 hover:text-red-700 hover:underline rounded-lg font-semibold text-xs px-2"
                                                type="button"
                                                onclick="cancelDelete({{ $cat->id }})"
                                            >
                                                No
                                            </button>
                                        </div>
                                    </div>
                                    <div id="{{ 'js-category_edit_text'.$cat->id }}" class="hidden text-xs">
                                        <button 
                                            class="text-blue-500 hover:text-blue-700 hover:underline rounded-lg font-semibold text-xs px-2" 
                                            type="button"
                                            onclick="updateFolder({{ $cat->id }})"
                                        >
                                            Confirm
                                        </button>
                                        <button
                                            class="text-red-500 hover:text-red-700 hover:underline rounded-lg font-semibold text-xs px-2"
                                            type="button"
                                            onclick="cancelEditFolder({{ $cat->id }},'{{ $cat->title }}')"
                                        >
                                            Cancel
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('data', () => ({
                isUploadDocumentModalOpen: false,
                toggleIsUploadDocumentModalOpen() { this.isUploadDocumentModalOpen = !this.isUploadDocumentModalOpen },
                'docDetailsOpen': false,
                toggleDocDetailsOpen() { this.docDetailsOpen = !this.docDetailsOpen },
                'docDeleteOpen': false,
                toggleDocDeleteOpen() { this.docDeleteOpen = !this.docDeleteOpen },
                'selectedDocID': '',
                setSelectedDocID(id) { 
                    this.setSelectedDocID = id;
                },
                getDocumentDetails() {
                    $.ajax({
                        context: this,
                        url: "{{ route('document.get.details') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            id: this.selectedDocID,
                        },
                        // TODO:
                        // This should be a GET route, but a bug was causing the route to not execute the controller function.
                        // This is a temporary solution.
                        type: "POST",
                        success: function (data) {
                            this.toggleDocDetailsOpen();
                            $('#detail_modal_title').val(data.title);
                            $('#detail_modal_category').val(data.category);
                            $('#detail_modal_id').val(this.selectedDocID);
                        }
                    });
                },
                downloadDocument() {
                    const link = document.createElement('a');
                    const path = "{{ route('documents.download') }}?id=" + this.selectedDocID;
                    link.setAttribute('href', path);
                    link.click();
                },
                deleteDoc() {
                    $.ajax({
                        context: this,
                        url: "{{ route('document.delete') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            id: this.selectedDocID,
                        },
                        type: "POST",
                        success: function () {
                            this.toggleDocDeleteOpen();
                            location.reload();
                        }
                    });
                },
                favoriteDoc(id, is_favorite){
                    $.ajax({
                        context: this,
                        url: "{{ route('document.favorite') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            id: id,
                            is_favorite: is_favorite
                        },
                        type: "PATCH",
                        success: function () {
                            location.reload();
                        }
                    });
                },
                'createFolderOpen': false,
                toggleCreateFolderOpen() { this.createFolderOpen = !this.createFolderOpen },
                createFolder() {
                    console.log('test');
                },
                'viewFoldersOpen': false,
                toggleViewFoldersOpen() { this.viewFoldersOpen = !this.viewFoldersOpen },
            }))
        });

        $(document).ready(function() {
            $('.js-is_custom_cat_checkbox').change(function() {
                if(this.checked) {
                    $('.js-default-cat-option').addClass('hidden');
                    $('.js-custom-cat-option').removeClass('hidden');
                    $('.category_select option[value=""]').attr('selected', 'selected');
                } else {
                    $('.js-default-cat-option').removeClass('hidden');
                    $('.js-custom-cat-option').addClass('hidden');
                    $('.category_select option[value=""]').attr('selected', 'selected');
                }
            })
        })

        function checkDelete(catID) {
            $('#js-category_actions' + catID).addClass('hidden');
            $('#js-category_delete_text' + catID).removeClass('hidden');
        }

        function cancelDelete(catID) {
            $('#js-category_actions' + catID).removeClass('hidden');
            $('#js-category_delete_text' + catID).addClass('hidden');
        }

        function deleteFolder(catID) {
            $.ajax({
                url: "{{ route('documents.custom.category.delete') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: catID,
                },
                type: "DELETE",
                success: function (data) {
                    console.log('status: ', data.status);
                    $('#js-category_row' + catID).addClass('hidden');
                    $('#js-category_side_link' + catID).addClass('hidden');
                }
            });   
        }

        function editFolder(catID) {
            $('#js-category_title_text' + catID).addClass('hidden');
            $('#js-category_title_input' + catID).removeClass('hidden');

            $('#js-category_actions' + catID).addClass('hidden');
            $('#js-category_edit_text' + catID).removeClass('hidden');
        }

        function cancelEditFolder(catID, catTitle) {
            $('#js-category_title_text' + catID).removeClass('hidden');
            $('#js-category_title_input' + catID).addClass('hidden');

            $('#js-category_actions' + catID).removeClass('hidden');
            $('#js-category_edit_text' + catID).addClass('hidden');

            $('#js-category_title_input' + catID).val(catTitle);
        }

        function updateFolder(catID) {
            $('#js-category_title_text' + catID).removeClass('hidden');
            $('#js-category_title_input' + catID).addClass('hidden');

            $('#js-category_actions' + catID).removeClass('hidden');
            $('#js-category_edit_text' + catID).addClass('hidden');

            var title = $('#js-category_title_input' + catID).val();
            $.ajax({
                url: "{{ route('documents.custom.category.update') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: catID,
                    title: title,
                },
                type: "PATCH",
                success: function (data) {
                    $('#js-category_title_input' + catID).val(title);
                    $('#js-category_title_text' + catID).html(title);
                    $('#js-category_side_link_title' + catID).html(title);
                }
            });
        }
        /*
            function search() {
                $.ajax({
                    url: "",
                    data: {},
                    type: "",
                    success: function (data) {

                    }
                })
            }

            document.getElementById("search-form").addEventListener("search", function(event) {
                console.log('clear');
            });

            $(document).ready(function() {
                $('#search-form').keyup(function() {
                    console.log('test');
                });
            })
        */
    </script>
@endpush

