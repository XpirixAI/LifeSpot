@extends('lifespot_layout')

@section('content')

<div class="relative grid grid-cols-12 min-h-screen">
    {{-- <div class="hidden col-span-12 lg:col-span-3 border-r border-gray-200">
        <div class="mt-6">

            <div class="flex justify-between mx-3 mb-3">
                <h2 class="font-black text-lg">
                    <a href="">Messages</a>
                </h2>
                <div class="flex items-center text-sm text-blue-500 space-x-3">
                    <a href="">Hide</a>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </a>
                </div>
            </div>

                <!--Search form-->
            <form class="ml-3 mb-2">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                <div class="relative mr-2">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="search" id="default-search" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required="">
                </div>
            </form>

                <!--Get Started invite a new member-->
            <div class="mb-3">
                <div class="relative flex py-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2 ml-3">
                    <span class="flex-shrink">Get Started</span>
                    <div class="flex-grow border-t"></div>
                </div>
                <a href="#!" class="flex space-x-2 text-xs ml-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400 bg-gray-50 border border-gray-100 rounded-full p-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>

                    <div class="flex space-x-4 items-center">
                        <span class="text-blue-400">
                            Invite a new member
                        </span>
                        <span class="text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </a>
            </div>

             <!--Members-->
                <ul class="hidden text-gray-400 text-xs whitespace-nowrap">
                    <li class="hover:bg-blue-50 bg-blue-50  px-3 pb-1.5">
                        <a href="">
                            <div class="relative flex mt-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2">
                                <span class="flex-shrink pt-0.5">Co-Trustee</span>
                                <div class="flex-grow border-t"></div>
                            </div>
                            <div class="grid grid-cols-6">
                                <span class="col-span-1">
                                    <div class="relative top-0 left-0">
                                        <img class="relative top-0 left-0 rounded-full h-10 w-10" src="{{ asset('img/WalkerFamilyPics/sara.png') }}" alt="">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-8 left-8 h-2 w-2 bg-blue-600 rounded-full text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                            </svg>
                                    </div>
                                </span>
                                <span class="col-span-3 ml-2">
                                    <h5 class="font-bold text-black">Sara Walker</h5>
                                    <p>Lorem ipum dolor sit</p>
                                </span>
                                <span class="col-start-5 col-span-2 text-right">
                                    <span class="uppercase">4:30 pm</span><br>
                                    <p class="text-white text-center float-right rounded-full h-4 w-4 bg-blue-600"><span class=""></span> 4</p>
                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="hover:bg-blue-50 px-3 pb-1.5">
                        <a href="">
                            <div class="relative flex mt-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2">
                                <span class="flex-shrink pt-0.5">Heir</span>
                                <div class="flex-grow border-t"></div>
                            </div>
                            <div class="grid grid-cols-6">
                                <span class="col-span-1">
                                    <div class="relative top-0 left-0">
                                        <img class="relative top-0 left-0 rounded-full h-10 w-10" src="{{ asset('img/WalkerFamilyPics/vienna.png') }}" alt="">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-8 left-8 h-2 w-2 bg-blue-600 rounded-full text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                            </svg>
                                    </div>
                                </span>
                                <span class="col-span-3 ml-2">
                                    <h5 class="font-bold text-black">Vienna Walker</h5>
                                    <p>Lorem ipum dolor sit</p>
                                </span>
                                <span class="col-start-5 col-span-2 text-right">
                                    <span class="uppercase">4:12 pm</span><br>
                                    <p class="text-white text-center float-right rounded-full h-4 w-4 bg-blue-600"><span class=""></span> 2</p>
                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="hover:bg-blue-50 px-3 pb-1.5">
                        <a href="">
                            <div class="relative flex mt-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2">
                                <span class="flex-shrink pt-0.5">Successors-Trustee</span>
                                <div class="flex-grow border-t"></div>
                            </div>
                            <div class="grid grid-cols-6">
                                <span class="col-span-1">
                                    <div class="relative top-0 left-0">
                                        <img class="relative top-0 left-0 rounded-full h-10 w-10" src="{{ asset('img/WalkerFamilyPics/jared.png') }}" alt="">

                                    </div>
                                </span>
                                <span class="col-span-3 ml-2">
                                    <h5 class="font-bold text-black">Jared Walker</h5>
                                    <p>Lorem ipum dolor sit</p>
                                </span>
                                <span class="col-start-5 col-span-2 text-right">
                                    <span class="uppercase">3:15 pm</span><br>

                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="hover:bg-blue-50 px-3 pb-1.5">
                        <a href="">
                            <div class="relative flex mt-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2">
                                <span class="flex-shrink pt-0.5">Heir</span>
                                <div class="flex-grow border-t"></div>
                            </div>
                            <div class="grid grid-cols-6">
                                <span class="col-span-1">
                                    <div class="relative top-0 left-0">
                                        <img class="relative top-0 left-0 rounded-full h-10 w-10" src="{{ asset('img/WalkerFamilyPics/rocco.png') }}" alt="">

                                    </div>
                                </span>
                                <span class="col-span-3 ml-2">
                                    <h5 class="font-bold text-black">Rocco Walker</h5>
                                    <p>Lorem ipum dolor sit</p>
                                </span>
                                <span class="col-start-5 col-span-2 text-right">
                                    <span class="uppercase">May 28</span><br>

                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="hover:bg-blue-50 px-3 pb-1.5">
                        <a href="">
                            <div class="relative flex mt-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2">
                                <span class="flex-shrink pt-0.5">Emergency Contact</span>
                                <div class="flex-grow border-t"></div>
                            </div>
                            <div class="grid grid-cols-6">
                                <span class="col-span-1">
                                    <div class="relative top-0 left-0">
                                        <img class="relative top-0 left-0 rounded-full h-10 w-10" src="{{ asset('img/WalkerFamilyPics/florence.png') }}" alt="">

                                    </div>
                                </span>
                                <span class="col-span-3 ml-2">
                                    <h5 class="font-bold text-black">Florence Walker</h5>
                                    <p>Lorem ipum dolor sit</p>
                                </span>
                                <span class="col-start-5 col-span-2 text-right">
                                    <span class="uppercase">Apr 12</span><br>

                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="hover:bg-blue-50 px-3 pb-1.5">
                        <a href="">
                            <div class="relative flex mt-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2">
                                <span class="flex-shrink pt-0.5">Executor</span>
                                <div class="flex-grow border-t"></div>
                            </div>
                            <div class="grid grid-cols-6">
                                <span class="col-span-1">
                                    <div class="relative top-0 left-0">
                                        <img class="relative top-0 left-0 rounded-full h-10 w-10" src="{{ asset('img/WalkerFamilyPics/howard.png') }}" alt="">

                                    </div>
                                </span>
                                <span class="col-span-3 ml-2">
                                    <h5 class="font-bold text-black">Howard Walker</h5>
                                    <p>Lorem ipum dolor sit</p>
                                </span>
                                <span class="col-start-5 col-span-2 text-right">
                                    <span class="uppercase">Mar 6</span><br>

                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="hover:bg-blue-50 px-3 pb-1.5">
                        <a href="">
                            <div class="relative flex mt-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2">
                                <span class="flex-shrink pt-0.5">Co-Trustee</span>
                                <div class="flex-grow border-t"></div>
                            </div>
                            <div class="grid grid-cols-6">
                                <span class="col-span-1">
                                    <div class="relative top-0 left-0">
                                        <img class="relative top-0 left-0 rounded-full h-10 w-10" src="{{ asset('img/WalkerFamilyPics/bryon.png') }}" alt="">

                                    </div>
                                </span>
                                <span class="col-span-3 ml-2">
                                    <h5 class="font-bold text-black">Bryon Swanson</h5>
                                    <p>Lorem ipum dolor sit</p>
                                </span>
                                <span class="col-start-5 col-span-2 text-right">
                                    <span class="uppercase">Mar 2</span><br>

                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="hover:bg-blue-50 px-3 pb-1.5">
                        <a href="">
                            <div class="relative flex mt-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2">
                                <span class="flex-shrink pt-0.5">Co-Executor</span>
                                <div class="flex-grow border-t"></div>
                            </div>
                            <div class="grid grid-cols-6">
                                <span class="col-span-1">
                                    <div class="relative top-0 left-0">
                                        <img class="relative top-0 left-0 rounded-full h-10 w-10" src="{{ asset('img/WalkerFamilyPics/brian.jpeg') }}" alt="">

                                    </div>
                                </span>
                                <span class="col-span-3 ml-2">
                                    <h5 class="font-bold text-black">Brian Agster</h5>
                                    <p>Lorem ipum dolor sit</p>
                                </span>
                                <span class="col-start-5 col-span-2 text-right">
                                    <span class="uppercase">Feb 21</span><br>

                                </span>
                            </div>
                        </a>
                    </li>
                </ul>
        </div>
    </div> --}}
    <div class=" bg-gray-100 col-span-12 lg:col-span-9 border-r border-gray-200">

        <div class="xh-full bg-gray-100 pb-12">
            <h1 class="font-black text-black text-3xl text-center mx-2 pt-16 pb-4">
                Welcome to <br>
               The {{ Auth::user()->fname }} {{ Auth::user()->lname }} Family<br>
                Estate's Lifespot
            </h1>

            <div class="px-5 lg:px-20">
                <p class="text-center text-sm text-gray-700 mx-5 lg:mx-20">Welcome to Lifespot! Lifespot helps you to plan, manage and protect your estate, so you can start building your legacy today.  <a class="text-blue-500" href="{{ route('gettingStartedGuide') }}">Getting Started Guide</a></p>
            </div>

            <div class="mx-3 lg:mx-20 border-l-8 border-l-blue-400 bg-white rounded-lg mt-8 px-5">
                <a href="{{ route('mymembers') }}" class="flex justify-between items-center mr-4">
                    <div class="py-2">
                        <div class="flex items-center lg:px-5 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="lg:h-10 lg:w-10 h-12 w-20 bg-blue-400 text-white p-1 rounded-full" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                              </svg>
                              <span class="font-black text-gray-900  ml-5">
                                Invite a new member
                            </span>
                        </div>

                    </div>
                    <span class=" ml-16 font-bold text-2xl text-blue-500">
                        >
                    </span>
                </a>
            </div>
            <div class="mx-3 lg:mx-20 border-l-8 border-l-orange-400 bg-white rounded-lg mt-8 px-5">
                <a href="{{ route('mylifespot.personal') }}" class="flex justify-between items-center mr-4">
                    <div class="py-2">
                        <div class="flex items-center lg:px-5 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="lg:h-10 lg:w-10 h-12 w-20 bg-orange-500 text-white p-1 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                < <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                              </svg>
                              <span class="font-black text-gray-900  ml-5">
                                Personalize your profle
                            </span>
                        </div>

                    </div>
                    <span class="ml-10 lg:ml-16 font-bold text-2xl text-blue-500">
                        >
                    </span>
                </a>
            </div>
            <div class="mx-3 lg:mx-20 border-l-8 border-l-indigo-400 bg-white rounded-lg mt-8 px-5">
                <a href="{{ route('myestate') }}" class="flex justify-between items-center mr-4">
                    <div class="py-2">
                        <div class="flex items-center lg:px-5 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="lg:h-10 lg:w-10 h-12 w-20 bg-indigo-500 text-white p-1 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                              </svg>
                              <span class="font-black text-gray-900  ml-5">
                                Update your estate
                            </span>
                        </div>

                    </div>
                    <span class="ml-16 lg:ml-16 font-bold text-2xl text-blue-500">
                        >
                    </span>
                </a>
            </div>
            <div class="mx-3 lg:mx-20 border-l-8 border-l-teal-700 bg-white rounded-lg mt-8 px-5">
                <a href="{{ route('documents', 1) }}" class="flex justify-between items-center mr-4">
                    <div class="py-2">
                        <div class="flex items-center lg:px-5 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="lg:h-10 lg:w-10 h-12 w-20 bg-teal-700 text-white p-1 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                              </svg>
                              <span class="font-black text-gray-900  ml-5">
                                Upload documents
                            </span>
                        </div>

                    </div>
                    <span class="ml-10 lg:ml-16 font-bold text-2xl text-blue-500">
                        >
                    </span>
                </a>
            </div>


        </div>

            <!-- Live Blog Post Feed -->


            <div class="xhidden mx-auto bg-white rounded-lg shadow-lg lg:w-3/5">
                <h2 class="text-3xl font-bold text-sky-600 text-center pt-4">See What's Trending</h2>
                {{-- <p class="text-center"><a href="{{ route('posts.create') }}" class="text-sky-600">Create a Post</a> </p> --}}
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
            </div>








            <!-- END Live Blog Post Feed -->

        <div class="hidden my-6 mx-3 pb-8">
            <form>
                <div class="flex space-x-3 border-0 bg-gray-100 rounded-lg">
                    <textarea name="" id=""class="focus:ring-0 resize-none border-none w-full focus-none bg-transparent" placeholder="Your message..."></textarea>
                    <div class="flex space-x-4 items-center">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </a>

                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                            </svg>
                        </a>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4 text-blue-700 font-black text-2xl" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                </div>
            </form>
        </div>

    </div>


    <!--Original Design Content from GoFish for Right Side Layout-->
    {{-- <div class="col-span-3">
        <div class="mt-6 ml-5">
            <div class="flex justify-between items-center mr-2">
                <h3 class="font-black text-black mb-2">Shared with Sara</h3>
                <a href="" class="text-blue-500 text-xs">Hide</a>
            </div>
            <p class="text-sm text-gray-800">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem vel impedit eius eveniet facilis, deserunt labore delectus eum iure temporibus dolore.</p>
        </div>
        <div class="mt-6 ml-5">
            <div class="flex justify-between items-center mr-2 mb-3">
                <h5 class="font-black text-gray-400 text-xs uppercase mb-2">Documents <span>(8)</span></h5>
                <a href="" class="text-blue-500 text-xs">Show All</a>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <a href="">
                    <img class="h-24 w-28 rounded" src="{{ asset('img/pdf.jpeg') }}" alt="">
                </a>
                <a href="">
                    <img class="h-24 w-28 rounded" src="{{ asset('img/pdf.jpeg') }}" alt="">
                </a>
               <a href="">
                <img class="h-24 w-28 rounded" src="{{ asset('img/sample.png') }}" alt="">
               </a>
                <a href class="relative rounded opacity-60 bg-gray-700 text-white">
                    <img class="h-24 w-28 rounded " src="{{ asset('img/sample2.png') }}" alt="">
                    <div class="absolute opacity-90 rounded h-full bg-gray-900 py-10 top-0 inset-x-0  text-white text-3xl text-center font-black leading-4">5+</div>
                </a>
            </div>
        </div>
        <div class="mt-6 ml-5">
            <style>
                input[type=checkbox]:checked + label.strikethrough {
                    text-decoration:line-through;
                }
            </style>
            <div class="flex justify-between items-center mr-2 mb-3">
                <h5 class="font-black text-gray-400 text-xs uppercase mb-2">Tasks <span>(8)</span></h5>
                <a href="" class="text-blue-500 text-xs">Show All</a>
            </div>
            <div class="space-y-4">
                <div class="form-check">
                    <input class="form-check-input appearance-none h-6 w-6 border border-gray-300 rounded-full bg-white checked:bg-gray-600 checked:border-gray-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="strikethrough form-check-label inline-block text-sm font-bold text-gray-500 pt-1.5" for="flexCheckChecked">
                      Update Living Will
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input appearance-none h-6 w-6 border border-gray-300 rounded-full bg-white checked:bg-gray-600 checked:border-gray-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="strikethrough form-check-label inline-block text-sm font-bold text-gray-500 pt-1.5" for="flexCheckChecked">
                     Update Executor
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input appearance-none h-6 w-6 border border-gray-300 rounded-full bg-white checked:bg-gray-600 checked:border-gray-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked" xchecked>
                    <label class="strikethrough form-check-label inline-block text-sm font-bold text-gray-500 pt-1.5" for="flexCheckChecked">
                     Lorem Ipsum Dolor
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input appearance-none h-6 w-6 border border-gray-300 rounded-full bg-white checked:bg-gray-600 checked:border-gray-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked" xchecked>
                    <label class="strikethrough form-check-label inline-block text-sm font-bold text-gray-500 pt-1.5" for="flexCheckChecked">
                     Add Kendal to Lifespot
                    </label>
                </div>
            </div>


        </div>
        <div class="mt-4 ml-5">
            <a href="" class="text-blue-500 text-xs">Add a New Task</a>
        </div>

    </div> --}}
    <!--Replacement for the GoFish Design Content on Right Side using Ad Space -->

        <ul class=" md:col-span-12 lg:col-span-3 col-span-12 mb-12 mt-8 mx-4 space-y-8">
            <div class="sticky top-0 space-y-8">
                <li class="rounded-xl">
                    <a href="#!"><img class="h-full w-full object-cover" src="{{ asset('img/AdSamples/ad19-geico.jpeg') }}" alt=""></a>
                </li>
                <li class="rounded-xl">
                   <a href="#!"> <img class="h-1/2 w-full object-cover" src="{{ asset('img/AdSamples/ad15-power-clean-soap-banner-ads-design-washing-powder-or-laundry-detergent-M3RPF9.jpeg') }}" alt=""></a>
                </li>
                <li class="rounded-xl">
                    <a href="#!"><img class="h-full w-full object-cover" src="{{ asset('img/AdSamples/ad5-dicks.png') }}" alt=""></a>
                </li>
                <li class="invisible rounded-xl">
                    <a href="#!"><img class="h-full w-full object-cover" src="{{ asset('img/AdSamples/ad10-home.jpeg') }}" alt=""></a>
                </li>
                <li class="invisible h-72 bg-blue-50 rounded-xl p-6">
                    <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                    <h3 class="text-black font-black text-xl">2Advertise Here</h3>
                    <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
                </li>
                <li class="invisible h-72 bg-blue-50 rounded-xl p-6">
                    <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                    <h3 class="text-black font-black text-xl">2Advertise Here</h3>
                    <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
                </li>
                <li class="invisible h-72 bg-blue-50 rounded-xl p-6">
                    <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                    <h3 class="text-black font-black text-xl">3Advertise Here</h3>
                    <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
                </li>
            </div>
        </ul>

</div>


@endsection
