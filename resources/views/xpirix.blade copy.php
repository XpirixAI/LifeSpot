<x-xpirix>


    {{-- <div class="max-w-7xl px-4 sm:px-12 mx-auto p-4">
        <div x-data="{ open: false }"
            class="flex flex-col max-w-screen-xl p-5 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="flex flex-row items-center justify-between md:justify-start">
                <a href="./index.html" class="">
                    <h1 class="text-3xl font-bold">YourLogo</h1>
                </a>
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" style="display: none"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}"
                class="flex-col flex-grow hidden md:flex md:justify-end md:flex-row">
                <ul class="space-y-2 list-none md:space-y-0 md:items-center md:inline-flex mt-4 md:mt-0">
                    <li>
                        <a href="#"
                            class="px-2 md:px-6 py-6 text-base font-bold border-b-2 border-transparent hover:border-violet-400 text-gray-700">
                            Link 1
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-2 md:px-6 py-6 text-base font-bold border-b-2 border-transparent hover:border-violet-400 text-gray-700">
                            Link 2
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-2 md:px-6 py-6 text-base font-bold border-b-2 border-transparent hover:border-violet-400 text-gray-700">
                            Link 3
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div> --}}



{{-- <style>
    [x-cloak] { display: none; }
  </style> --}}
<div x-data="{open:true}" >

<div  class="lg:relative sticky top-0 z-50 xhidden grid grid-cols-1 h-12 lg:h-0 lg:mb-4">
    <div class="relative bg-[#056591] xbg-blue-400 lg:border-none lg:border-2 xrounded-lg xlg:w-1/2 lg:text-left lg:pl-6">
        {{-- <div class=""> @include('xpirix.body.top-content')</div> --}}
        <div class="flex space-x-3 pl-5 w-full lg:w-1/2">
            <div @click.prevent="open=!open" class="text-xs text-gray-100 cursor-pointer pl-16">
                <span x-text="open ? 'See what\'s trending' : 'See More'"></span>
            </div>
            <a class="text-xs text-gray-100 cursor-pointer pl-6" href="{{ route('posts.create') }}">Create a post</a>
        </div>

    </div>
</div>




    <div x-show="open" >@include('xpirix.body.top-content')</div>

<div class="border border-b"></div>



    <!--All non trending posts area -->
<div class="xrelative mt-10 mb-12 lg:px-12 md:px-24">

    <h3 class="flex space-x-2 font-black text-lg xitems-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#0682d4]" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>

        <div> {{ $contents->trending_title }}</div>
            <!--Search form-->
            <div>
                <form method="GET" action="/" class="mb-2 w-full">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                    <div class="relative mr-2">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="search" id="default-search" name="search" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required="">
                    </div>
                </form>

                @if (url()->current() === url()->full())

                    @else
                <a class="rounded-lg py-1 px-3 xmb-5 blu hover:bg-blue-300 hover:text-gray-700"  href="/" x-show="isOpen=true">Back to All Posts</button></a>

                @endif
            </div>
    </h3>

    <!--Trending Now Blog Feeds-->
     <div class="relative grid lg:grid-cols-2 md:gap-36 lg:gap-48">
        <div class="col-span-1 p-4">
            @foreach ($posts as $post)
                @if ($post->isPublished=="Published")
                    <div class="pb-4">
                        <hr class="w-1/5">
                        <div class="flex space-x-2 items-center mt-4">
                            <span class="text-sm">{{ $post->updated_at->format('M-d') }} </span>
                            <span>|</span>

                            <span>
                                <a href="/?category={{ $post->category->slug }}"
                                class="rounded-lg text-sm uppercase py-1 px-2 bg-[#f4f0ec]">{{ $post->category->name}}</a>
                            </span>
                        </div>
                        <div class="flex space-x-2 mb-3">
                            <a href="/?author={{ $post->author->uname}}" class="flex space-x-2">
                                <img class="relative top-0 left-0 rounded-full h-6 w-6" src="{{ (!empty($post->author->profile_photo_path)) ? url('upload/admin_images/'.$post->author->profile_photo_path) : url('upload/no_image.png') }}" alt="">
                                <span>{{ $post->author->fname }} {{ $post->author->lname }}</span>
                            </a>
                        </div>
                        <h2 class="font-bold text-lg mt-2 lg:pl-8 lg:pr-5">
                            <span class="capitalize" href="#!">
                            @if ($post->isPublic=='private')
                                <i class="fas fa-lock text-blue-400 mr-2"></i>
                            @endif
                            {{ Str::limit($post->title, 120, '...') }}</span>
                        </h2>
                        <div class="lg:px-8 text-sm text-gray-700">{{ $post->excerpt }}
                            @if (Str::length($post->body) > 0)
                            <button class="text-blue-700 transition

                          " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $post->id }}" aria-expanded="false"
                            aria-controls="collapseOne{{ $post->id }}">


                               Read more...



                          </button>
                            @endif
                        </div>
                        <div  class="col-span-1">
                            @if ($post->thumbnail)


                           {{-- <img class="h-48 w-full object-cover" src="{{ asset($post->thumbnail) }}" alt=""> --}}

                            <img class="xw-full xw-auto w-full lg:w-5/6 h-full object-cover rounded-lg mt-4 lg:ml-8"
                            src="{{ asset($post->thumbnail) }}" alt="">

                            @else

                            @endif
                        </div>
                        <div class="mb-5 font-thin break-all max-width my-2 xpl-8 pr-2">



                            <div class="accordion" id="accordionExample{{ $post->id }}">
                                <div class="accordion-item bg-white">

                                  <div id="collapseOne{{ $post->id }}" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample{{ $post->id }}">
                                    <div class="accordion-body lg:px-5">
                                        {!! $post->body !!}

                                        <button class="text-blue-700 transition

                                        " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $post->id }}" aria-expanded="false"
                                          aria-controls="collapseOne{{ $post->id }}">


                                             ...read less



                                        </button>
                                    </div>
                                  </div>

                                </div>

                            </div>

                        </div>
                    </div>

                    {{-- <hr > --}}
                @endif
            @endforeach
        </div>

             <!--Categories-->
        <div class="col-span-3 lg:col-span-1 mx-2">
            <div class="sticky top-52">
                <h3 class="font-bold mb-2 text-lg">Categories</h3>
                <div class="grid grid-cols-2 lg:grid-cols-3 xpr-2">
                    @foreach ($categories as $category)
                        <div class="flex text-sm text-blue-400 xspace-x-2 mb-2">
                            <a href="/?category={{ $category->slug }}" class="rounded-xl border border-blue-400 px-2">
                                {{ $category->name }}
                            </a>
                        </div>
                    @endforeach
                </div>

                <div class="bg-gray-100 rounded-lg items-center text-center space-y-2 py-8 my-8 mr-4 xlg:mr-12 px-4">

                    <!--Side Footer-->
                    <div class="flex justify-between items-center mr-4">
                        {{-- <img src="{{ asset('logos/xpirix-logo-transparent.png') }}" class="mr-3 h-12 xsm:h-9" alt="Xpirix Logo"> --}}
                        <x-jet-application-mark class="block h-9 w-auto" />
                        <div class="flex space-x-2">
                            <div>
                                <a href="{{ $contents->facebook_url }}" target="_blank"><img class="h-5 w-5" src="{{ asset('img/WalkerFamilyPics/facebook.webp') }}" alt=""></a>
                            </div>
                            <div>
                                <a href="{{ $contents->twitter_url }}" target="_blank"><img class="h-5 w-5" src="{{ asset('img/WalkerFamilyPics/twitter.webp') }}" alt=""></a>
                            </div>
                            <div>
                                <a href="{{ $contents->instagram_url }}" target="_blank"><img class="h-5 w-5" src="{{ asset('img/WalkerFamilyPics/instagram.webp') }}" alt=""></a>
                            </div>
                            <div>
                                <a href="{{ $contents->youtube_url }}" target="_blank"><img class="h-5 w-5" src="{{ asset('img/WalkerFamilyPics/youtube.webp') }}" alt=""></a>
                            </div>
                            <div>
                                <a href="{{ $contents->linkedin_url }}" target="_blank"><img class="h-5 w-5" src="{{ asset('img/WalkerFamilyPics/linkedIn.webp') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-3">
                        <div class="grid md:grid-cols-3 md:gap-4 ml-4">
                            <div>
                                <ul class="text-xs space-y-3 my-5">
                                    <li class="font-bold">
                                        <a href="#!">{{ $contents->footer_left_link_1 }}</a>
                                    </li>
                                    <li>
                                        <a href="#!">{{ $contents->footer_left_link_2 }}</a>
                                    </li>
                                    <li>
                                        <a href="#!">{{ $contents->footer_left_link_3 }}</a>
                                    </li>
                                    <li>
                                        <a href="#!">{{ $contents->footer_left_link_4 }}</a>
                                    </li>
                                    <li>
                                        <a href="#!">{{ $contents->footer_left_link_5 }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <ul class="text-xs space-y-3 my-5">
                                    <li class="font-bold">
                                        <a href="#!">{{ $contents->footer_middle_link_1 }}</a>
                                    </li>
                                    <li>
                                        <a href="#!">{{ $contents->footer_middle_link_2 }}</a>
                                    </li>
                                    <li>
                                        <a href="#!">{{ $contents->footer_middle_link_3 }}</a>
                                    </li>
                                    <li>
                                        <a href="#!">{{ $contents->footer_middle_link_4 }}</a>
                                    </li>
                                    <li>
                                        <a href="#!">{{ $contents->footer_middle_link_5 }}</a>
                                    </li>
                                    <li>
                                        <a href="#!">{{ $contents->footer_middle_link_6 }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <ul class="text-xs space-y-3 my-5">
                                    <li class="font-bold">
                                        <a href="#!">{{ $contents->footer_right_link_1 }}</a>
                                    </li>
                                    <li>
                                        <a href="#!">{{ $contents->footer_right_link_2 }}</a>
                                    </li>
                                    <li>
                                        <a href="#!">{{ $contents->footer_right_link_3 }}</a>
                                    </li>
                                    <li>
                                        <a href="#!">{{ $contents->footer_right_link_4 }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Side Footer -->
                </div>
            </div>
        </div>

    </div>

</div>

{{-- <div class="hidden pt-3">
    @include('xpirix.body.footer')
</div> --}}

</div>
</x-xpirix>

