@extends('lifespot_layout')

@section('content')

<div class="grid grid-cols-12 min-h-screen xmr-6">

    <!--Webspot -->
    <div class="col-span-12 border-r border-gray-200">




        <!--Top Area-->
        <div class="bg-gradient-to-r from-sky-500 to-yellow-500 w-full h-auto pb-8">
            {{-- <div class="bg-gradient-to-r from-blue-500 to-cyan-500 w-full h-auto pb-8"> --}}
            {{-- <div class="bg-gradient-to-r from-gray-700 to-orange-500 w-full h-auto pb-8"> --}}
              <!--Webspot NavBar-->
            <div class="flex justify-between px-2 lg:px-8 pt-4 pb-12 text-gray-50 font-bold text-lg">
                <a class="flex items-center" href="#!">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                    </svg>
                   <span class="pr-8"> {{ Auth::user()->fname }}</span>
                </a>
                <div class="flex justify-around space-x-4 lg:space-x-16">
                    <a href="#!">Home</a>
                    <a href="#!">Blog</a>
                    <a href="#!">MyStuff</a>

                </div>
                <div>
                    <a href="#!">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                          </svg>

                    </a>
                </div>
            </div>
            <div class="grid lg:grid-cols-2 gap-4 mx-4 ">
                <div class="m-12">
                    <h1 class="text-5xl font-extrabold text-gray-50">My Digital World</h1>
                    <p class="text-gray-200 text-lg">Personally designed and written blogs that are sharable ...<i class=" text-white">or not.</i>  My favorite recipes.  Securely stored private journals. Photo albums. Store stuff so I can always find it. It's my site to let my personality shine through. <span class="uppercase">It's all customizable!</span></p>
                    <button class="mt-12  bg-gray-50 rounded-lg font-semibold  px-10 py-4">
                        <div class="flex items-center text-sky-800">
                            <span class="text-xl">Get Start</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 font-bold ml-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                          </svg>
                        </div>
                          <p class="text-xs text-gray-400">(open settings)</p>
                    </button>
                </div>
                <div class="relative">
                    <img class=" border-4 border-transparent rounded-xl w-full h-full"  src="{{ asset('img/Breckenridge2.jpeg') }}" alt="">
                    <img class="absolute bottom-0 left-0 border-4 border-gray-50 rounded-lg w-1/4 h-auto object-cover" src="{{ (!empty(Auth::user()->profile_photo_path)) ? url('upload/admin_images/'.Auth::user()->profile_photo_path) : url('upload/no_image.png') }}" alt="Profile Image">
                </div>
            </div>
        </div>

         <!--About Me-->
         {{-- <div class="grid grid-cols-6 gap-4 mb-16">
            <div class="ml-8 mt-36">

            </div>
            <div class="col-span-4 text-center mt-8 space-y-4">
                <img class="h-48 w-auto mx-auto" src="{{ asset('img/uparrow.png') }}" alt="">
                <i class="font-black text-8xl">Hey</i>
                <h1 class="font-black text-8xl">I'm {{ Auth::user()->fname }}</h1>
                <p class="text-gray-900 font-thin text-2xl">Vacations, sports, good recipes, enjoying life with friends ~ that is what makes my world go round.</p>
            </div>
            <div></div>
        </div> --}}

         <!--Blogs-->
       <div>
        <div class="text-center bg-gray-50 rounded-xl pt-12">
            {{-- <hr class="mx-auto mb-3 w-1/3"> --}}
            <h2 class="text-sky-900 font-bold text-3xl">{{ Auth::user()->fname }}'s Blog Posts</h2>
            <a class="text-sky-900 text-sm font-bold" href="{{ route('posts.create') }}">Create a new post</a>
                </div>
            <hr class="mx-auto mt-3 w-1/3">
        </div>

         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-8 px-8 bg-gray-50 rounded-xl">
            @foreach ($posts as $post)
                <div class="w-full max-h-96 object-cover rounded-lg p-2 space-y-2 overflow-y-auto border">

                        <p class="text-gray-700 font-medium">Dec 8, 2022</p>
                        <h5 class="font-bold text-xl">{{ $post->title }} </h5>
                        @if ($post->thumbnail)
                            <img src="{{ asset($post->thumbnail) }}" alt="" class="w-full max-h-48 object-cover rounded-lg">
                        @endif
                        <div class="px-2 text-sm text-gray-700 text-justify">
                            {!! $post->body !!}
                        </div>
                </div>
            @endforeach


            {{-- @foreach ($posts as $post)
                <div class="p-2 space-y-2">
                    <a class="h-96" href="#!">

                    <img class="w-full h-96 object-cover rounded-lg"
                        src="{{ empty(asset($post->thumbnail)) ?  asset('img/default-image.png') : asset($post->thumbnail) }}"
                        alt=""></a>
                    <p class="text-gray-700 font-medium">Dec 8, 2022</p>
                    <a href="#!"><h5 class="font-bold text-xl">{{ $post->title }} </h5></a>
                </div>
            @endforeach --}}

            {{-- <div class="p-2 space-y-2">
                <a class="h-96" href="#!"><img class="w-full h-96 object-cover rounded-lg"

                    src="{{ asset('img/beach.avif') }}"
                    alt=""></a>
                <p class="text-gray-700 font-medium">Dec 8, 2022</p>
                <a href="#!"><h5 class="font-bold text-xl">My Favorite Trip </h5></a>
            </div>
            <div class="p-2 space-y-2">
                <a class="h-96" href="#!"><img class="w-full h-96 object-cover rounded-lg" src="{{ asset('img/tree-bench.avif') }}" alt=""></a>

                <p class="text-gray-700 font-medium">Dec 8, 2022</p>
                <a href="#!"><h5 class="font-bold text-xl">Create My First Blog </h5></a>
            </div>
            <div class="p-2 space-y-2">
                <a class="h-96" href="#!"><img class="w-full h-96 object-cover rounded-lg"  src="{{ asset('img/Jupiter.png') }}" alt=""></a>
                <p class="text-gray-700 font-medium">Dec 8, 2022</p>
                <a href="#!"><h5 class="font-bold text-xl">How I Became a Social Influencer on Jupiter </h5></a>
            </div>
            <div class="p-2 space-y-2">
                <a class="h-96" href="#!"><img class="w-full h-96 object-cover rounded-lg"  src="{{ asset('img/hot-air-balloon.avif') }}" alt=""></a>
                <p class="text-gray-700 font-medium">Dec 8, 2022</p>
                <a href="#!"><h5 class="font-bold text-xl">Hot Air Balloon Trip To Remember </h5></a>
            </div>
            <div class="p-2 space-y-2">
                <a class="h-96" href="#!"><img class="w-full h-96 object-cover rounded-lg"  src="{{ asset('img/633c9626290b5.jpeg') }}" alt=""></a>
                <p class="text-gray-700 font-medium">Dec 8, 2022</p>
                <a href="#!"><h5 class="font-bold text-xl">Brrrrrr...But soooo much fun! </h5></a>
            </div>
            <div class="p-2 space-y-2">
                <a class="h-96" href="#!"><img class="w-full h-96 object-cover rounded-lg"  src="{{ asset('img/waterfall.avif') }}" alt=""></a>
                <p class="text-gray-700 font-medium">Dec 8, 2022</p>
                <a href="#!"><h5 class="font-bold text-xl">The sound of a waterfall </h5></a>
            </div> --}}

            {{-- <a class="mt-4 text-sky-900" href="#!">See More</a> --}}
         </div>

       </div>

       <div class="w-full my-2">
        <p class="">{{ $posts->links() }}</p>
        </div>

            <!--Some of My Interest-->
        <section class="mb-12">
            <h1 class="text-center text-gray-800 font-black text-3xl pt-16 pb-4">Some of My Interest</h1>
            <p class="text-gray-700 text-2xl text-center pb-8">Favorite Recipes ~ Scrapbooking ~ Workout Schedules ~ Or Really Anything I Want.</p>

            <div class="lg:max-w-5xl container mx-auto grid lg:grid-cols-3 gap-8 text-center">
                <div class="space-y-4 px-5 mb-8">
                    <div class="mx-auto container">
                        <img class="inline-block h-56 w-56 p-4 mr-0 text-center rounded-full  font-light" src="{{ asset('img/desserts.avif') }}" alt="">
                    </div>
                    <h3 class="font-black text-2xl">My Favorite Recipes</h3>
                    <p class="text-gray-800">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia placeat eius quod impedit dolorem? Dicta, reiciendis unde tenetur eum placeat qui rem quod quae beatae. Labore vitae dolorum iusto voluptatum!</p>
                    <button class="bg-[#0682d4] font-bold text-white px-6 py-3 rounded-xl">Get Started</button>
                </div>
                <div class="space-y-4 px-5 mb-8">
                    <div class="mx-auto container">
                        <img class="inline-block h-56 w-56 p-4 mr-0 text-center rounded-full  font-light" src="{{ asset('img/album.avif') }}" alt="">
                    </div>
                    <h3 class="font-black text-2xl">Photo Albums</h3>
                    <p class="text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est minus eaque porro explicabo id voluptatem. Aspernatur illum rerum modi. Perspiciatis repellat ex dignissimos blanditiis corrupti inventore dolor neque, animi perferendis?</p>
                    <button class="bg-[#0682d4] font-bold text-white px-6 py-3 rounded-xl">Get Started</button>
                </div>
                <div class="space-y-4 px-5 mb-8">
                    <div class="mx-auto container">
                        <img class="inline-block h-56 w-56 p-4 mr-0 text-center rounded-full  font-light" src="{{ asset('img/workout.avif') }}" alt="">
                    </div>
                    <h3 class="font-black text-2xl">My Workouts</h3>
                    <p class="text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolores eum qui provident! Laborum perferendis quisquam pariatur! Est placeat consectetur dolorum asperiores sint, officiis ad cum perferendis voluptatum ea fuga.</p>
                    <button class="bg-[#0682d4] font-bold text-white px-6 py-3 rounded-xl">Get Started</button>
                </div>


            </div>
        </section>

            <!--Browser Articles for Help Area-->
    <div class="mx-1 mt-12 space-y-4 bg-sky-600 rounded-lg py-8 text-white">
        <hr class="w-1/5 mx-auto">
        <hr class="w-1/4 mx-auto">
        <img class="h-56 w-auto mx-auto" src="{{ asset('img/splash-of-color.avif') }}" alt="">
        <hr class="w-1/3 mx-auto">
       <hr class="w-1/2 mx-auto">
        <h1 class="text-center  font-black text-3xl xpt-12 pb-4 text-white ">My personal areas of interest...</h1>
        <nav class="">
            <ul class="flex justify-center space-x-1 md:space-x-3 lg:space-x-16 text-xs md:text-sm  text-white">
                <li class="hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('help_lifespot*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Social</span><span class="lg:hidden">Social</span></a>
                </li>
                <li class="hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Games</span><span class="lg:hidden">Games</span></a>
                </li>
                <li class="hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Books</span><span class="lg:hidden">Books</span></a>
                </li>
                <li class="hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Movies</span><span class="lg:hidden">Movies</span></a>
                </li>
                <li class="hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Journal</span><span class="lg:hidden">Journal</span></a>
                </li>
                <li class="hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Gifts</span><span class="lg:hidden">Gifts</span></a>
                </li>
                <li class="hover:underline underline-offset-8 hover:text-blue-700">
                    <a href="#!" class="{{ (Request::is('mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Shows</span><span class="lg:hidden">Shows</span></a>
                </li>

            </ul>

            <hr class="mt-1 px-4 xlg:mx-24 ">
        </nav>
        <h4 class="font-semibold text-xl text-center my-12">Keep Adding More Helpful Tools and Links...</h4>
    </div>

        {{-- <div class="h-4/5"></div> --}}


         <!--Ad Space -->
        <ul class="md:col-span-12 lg:col-span-3 col-span-12 mb-12 mt-8 mx-8 space-y-8">
            <li class=" rounded-xl xp-6">
                <li class="rounded-xl p-6">
                    <a href="#!"> <img class="h-full w-full object-cover" src="{{ asset('img/AdSamples/ad12-Adver--Banners--150x750px-RIOT.jpeg') }}" alt=""></a>
                </li>
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
