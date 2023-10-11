<x-xpirix>

    <div x-data="{open:true}" >
        <div  class="lg:hidden lg:relative sticky top-0 z-50 xhidden grid lg:grid-cols-1 h-3 xh-12 lg:h-0 lg:mb-4">
            <div class="relative  bg-[#056591] lg:border-none lg:border-2 xrounded-lg xlg:w-1/2 lg:text-left lg:pl-6">

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
        <div x-show="open"  class="px-12 pt-6 md:px-24">
            <div class="text-center text-[#056591] font-black text-3xl">
                Popular Posts
            </div>

            <!--LifeSport Content ARTICLES -->
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-4 mb-12">
                <div class="mt-8">
                    <a href="#!">
                        <img class="rounded-xl h-52 w-96" src="{{ asset('img/WalkerFamilyPics/kitchen.jpeg') }}" alt="">
                    </a>
                    <div class="mt-3">
                        <div class="flex space-x-2 items-center">
                            <span class="text-xs">Jul 18 </span>
                        </div>
                        <h2 class="font-bold text-lg mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
                        <p class="text-sm my-1.5">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, sapiente? A, dolores suscipit.
                        </p>
                        <a href="#!" class="text-blue-700">Read more...</a>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#!">
                        <img class="rounded-xl h-52 w-96" src="{{ asset('img/WalkerFamilyPics/money.jpeg') }}" alt="">
                    </a>
                    <div class="mt-3">
                        <div class="flex space-x-2 items-center">
                            <span class="text-sm">Jul 18 </span>
                        </div>
                        <h2 class="font-bold text-lg mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
                        <p class="text-sm my-1.5">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, sapiente? A, dolores suscipit.
                        </p>
                        <a href="#!" class="text-blue-700">Read more...</a>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#!">
                        <img class="rounded-xl h-52 w-96" src="{{ asset('img/WalkerFamilyPics/doc_signing.jpeg') }}" alt="">
                    </a>
                    <div class="mt-3">
                        <div class="flex space-x-2 items-center">
                            <span class="text-sm">Jul 18 </span>

                        </div>
                        <h2 class="font-bold text-lg mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
                        <p class="text-sm my-1.5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, sapiente? A, dolores suscipit.
                    </p>
                    <a href="#!" class="text-blue-700">Read more...</a>


                    </div>
                </div>

            </div>

        </div>

        <hr>





        <div class="xrelative mt-10 mb-12 lg:px-12 md:px-24">

            <h3 class="flex space-x-2 font-black text-lg items-center">
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
                    <button class="bg-[#056591] hidden lg:block text-white font-bold tracking-normal rounded-xl xmt-2 py-2 px-3 mb-2">
                        <a href="{{ route('posts.create') }}" >Create a Post</a>
                    </button>
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

                                        "
                                        type="button"
                                        data-te-collapse-init

                                        data-te-toggle="collapse"
                                        data-te-target="#collapseOne{{ $post->id }}" aria-expanded="false"
                                        aria-controls="collapseOne{{ $post->id }}">


                                            Read more...



                                    </button>
                                    @endif
                                </div>
                                <div  class="col-span-1">
                                    @if ($post->thumbnail)


                                    <img class="xw-full xw-auto w-full lg:w-5/6 h-full object-cover rounded-lg mt-4 lg:ml-8"
                                    src="{{ asset($post->thumbnail) }}" alt="">

                                    @else

                                    @endif
                                </div>
                                <div class="mb-5 font-thin break-all max-width my-2 xpl-8 pr-2">



                                    <div class="accordion" id="accordionExample{{ $post->id }}">
                                        <div class="accordion-item bg-white">

                                        <div id="collapseOne{{ $post->id }}" class="!visible hidden accordion-collapse collapse" aria-labelledby="headingOne"
                                            data-bs-parent="#accordionExample{{ $post->id }}">
                                            <div class="accordion-body lg:px-5">
                                                {!! $post->body !!}

                                                <button class="text-blue-700 transition

                                                "
                                                type="button"

                                                data-te-collapse-init
                                                data-te-toggle="collapse" data-te-target="#collapseOne{{ $post->id }}" aria-expanded="false"
                                                aria-controls="collapseOne{{ $post->id }}">


                                                    ...read less



                                                </button>
                                            </div>
                                        </div>

                                        </div>

                                    </div>

                                </div>
                            </div>


                        @endif
                    @endforeach
                </div>



                    <!--Categories-->
                <div class="col-span-3 lg:col-span-1 mx-2">
                    @auth
                    <div class="mb-4">
                        <img src="{{ asset('img/MyXpirixMockup.png') }}" alt="" class="h-96 w-auto object-cover">
                        <h3 class="font-bold text-4xl tracking-thin">
                            Customize your life experience
                        </h3>
                        <p>Create a space that will make you want to stay awhile. <a href="{{ route('webspot') }}" class="text-[#056591] font-semibold"> My Xpirix</a> lets you upload blog posts, manage your photos, and explore your interests in a custom-built envirnoment designed by you.</p>
                        {{-- <button class="bg-[#056591] text-white font-bold tracking-normal rounded-xl mt-3 p-3">
                            <a href="{{ route('posts.create') }}" >Create a Post</a>
                        </button> --}}

                    </div>
                @endauth
                    <div class="sticky top-12">
                        <button class="bg-[#056591] text-white font-bold tracking-normal rounded-xl mt-2 mb-5 p-3">
                            <a href="{{ route('posts.create') }}" >Create a Post</a>
                        </button>
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


    </div>

</x-xpirix>

