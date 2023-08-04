@extends('lifespot_layout')

@section('content')

<div  class="grid grid-cols-12 min-h-screen xmr-6">

    <!--Webspot -->
    <div class="col-span-12 border-r border-gray-200">




        <!--Top Area-->
        <form method="POST"  action="{{ route('update.webspot', $myxpirix->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- <div class="bg-gradient-to-r from-sky-500 to-yellow-500 w-full h-auto pb-8"> --}}
            {{-- <div class="bg-gradient-to-r from-sky-500 to-yellow-500 w-full h-auto pb-8"> --}}
            {{-- <div class="bg-{{ $myxpirix->left_color }} w-full h-auto pb-8"> --}}
            {{-- <div class="bg-{{ $myxpirix->left_color }} w-full h-auto pb-8"> --}}
            <div class="bg-{{ $myxpirix->left_color }}  w-full h-auto pb-8">


                {{-- <input type="text" name="right_color" value="{{ trim($myxpirix->right_color) }}"> --}}


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
                        <a href="{{ route('webspot') }}">Home</a>
                        <a href="#blog">Blog</a>

                        <span  class="flex space-x-2"><input class="text-black rounded" type="text" name="nav_3" value="{{ $myxpirix->nav_3 }}">
                        </span>

                    </div>

                    <div >
                        {{-- <a @click.prevent="showEdit =!showEdit" href="#!">
                            <svg :class="showEdit ? 'hidden' : ''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </a> --}}
                        <button x-show="showEdit" href="">Update</button>

                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-4 mx-4 ">
                    <div class="m-2">
                        <h1 class="text-5xl font-extrabold text-gray-50">
                            {{-- My Digital World --}}
                            <span>{{ Auth::user()->fname }}'s Digital World</span>
                            <span  class="flex space-x-2"><input class="text-black rounded" type="text" name="title" value="{{ $myxpirix->title }} ">
                            </span>
                        </h1>
                        <p :class="showEdit ? 'hidden' : ''" class="text-gray-200 text-lg font-bold my-3">Transform how YOU store, share, and upload content.</p>
                        <p :class="showEdit ? '' : 'hidden'" class="flex space-x-2"><input class="text-black rounded w-full" type="text" name="line_1" value="{{ $myxpirix->line_1 }}">
                        </p>

                        <p  class="text-gray-200 text-lg font-bold my-3">This is YOUR website. Change it EVERYDAY or whenever you wish. Make any parts of it public and or private. You're in control.

                            <p :class="showEdit ? '' : 'hidden'" class="flex space-x-2"><input class="text-black rounded w-full" type="text" name="line_2" value="{{ $myxpirix->line_2 }}">
                            </p>

                            <p :class="showEdit ? 'hidden' : ''"  class="text-gray-200 text-lg my-2">Store and organize your favorite recipes, photos, or anything you want.</p>
                            <p :class="showEdit ? '' : 'hidden'" class="flex space-x-2"><input class="text-black rounded w-full" type="text" name="line_3"value="{{ $myxpirix->line_3 }}">
                            </p>

                            <p><span :class="showEdit ? 'hidden' : ''"  class="uppercase text-gray-200 text-lg text-center">Go ahead and customize your world.</span></p>
                            <p :class="showEdit ? '' : 'hidden'" class="flex space-x-2"><input class="text-black rounded w-full" type="text" name="line_4" value="{{ $myxpirix->line_4 }}">
                            </p>
                        {{-- <p class="text-gray-200 text-lg">Personally designed and written blogs that are sharable ...<i class=" text-white">or not.</i>  My favorite recipes.  Securely stored private journals. Photo albums. Store stuff so I can always find it. It's my site to let my personality shine through. <span class="uppercase">It's all customizable! LOOK FOR THE EDIT ICON and you can edit.</span></p> --}}

                        <!--This initial help button will be gone (if statement check) once user has data in their database AND then the Click Me button content would appear -->
                        @if ($myxpirix)
                        <button :class="showEdit ? 'hidden' : ''"   class="my-12 cursor-default bg-gray-50 rounded-lg font-semibold  px-10 py-1">
                            <div class="flex items-center text-sky-800">
                                <span class="text-xl">Get Started</span>
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 font-bold ml-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg> --}}
                            </div>
                            <div class="space-y-2">
                                <p class="flex items-center text-xs text-gray-400">
                                    <span class="text-white bg-sky-800 rounded-full w-6 h-6 text-center px-2 py-1 mr-1">1</span>
                                    Click the edit button at top
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </p>
                                <p class="flex items-center text-xs text-gray-400">
                                    <span class="text-white bg-sky-800 rounded-full w-6 h-6 text-center px-2 py-1 mr-1">2</span>
                                    Make changes in the white boxes
                                </p>
                                <p class="flex items-center text-xs text-gray-400">
                                    <span class="text-white bg-sky-800 rounded-full w-6 h-6 text-center px-2 py-1 mr-1">3</span>
                                Click camera
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                                </svg>

                                to change a photo
                                </p>
                                <p class="flex items-center text-xs text-gray-400">
                                    <span class="text-white bg-sky-800 rounded-full w-6 h-6 text-center px-2 py-1 mr-1">4</span>
                                Click "Update" to close or save changes
                                </p>
                            </div>

                        </button>
                        @else
                        <button :class="showEdit ? 'hidden' : ''"  class="mt-12  bg-gray-50 rounded-lg font-semibold  px-10 py-4">Edit this Button </button>
                        @endif
                        <p><span :class="showEdit ? 'hidden' : ''"  class="uppercase text-gray-200 text-lg text-center">Edit this Button</span></p>
                        <p :class="showEdit ? '' : 'hidden'" class="flex space-x-2 xmt-12"><input class="text-black rounded w-1/3" type="text" name="cta_button" value="{{ $myxpirix->cta_button }}">
                        </p>



                    </div>
                    <div class="relative">
                        <img :class="showEdit ? 'hidden' : ''"  class=" border-4 border-transparent rounded-xl w-full h-auto"  src="{{ asset('img/Breckenridge2.jpeg') }}" alt="">
                        <a :class="showEdit ? '' : 'hidden'" href="#!" class="flex space-x-2 hover:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                            </svg> Big image
                        </a>
                        <img :class="showEdit ? 'hidden' : ''"  class="absolute bottom-0 left-0 border-4 border-gray-50 rounded-lg w-1/4 h-auto object-cover" src="{{ (!empty(Auth::user()->profile_photo_path)) ? url('upload/admin_images/'.Auth::user()->profile_photo_path) : url('upload/no_image.png') }}" alt="Profile Image">
                        <a :class="showEdit ? '' : 'hidden'" href="#!" class="flex space-x-2 mt-2 hover:text-gray-800">
                            <svg   xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                            </svg> Small image
                        </a>

                        <div class="flex justify-start">
                            @include('lifespot.webspot.colorpicker')
                       </div>

                        </div>

                    </div>


                </div>

            </div>

        </form>









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



{{-- https://codepen.io/dvalonso/pen/ZEeabVb
<body class="bg-gray-700 min-h-screen w-100 flex">

    <div class="bg-white mx-auto my-auto p-6">
      <div x-data="app()" x-init="[initColor()]">
        <div>
          <label for="color-picker" class="block mb-1 font-semibold">Select a color</label>
          <div class="flex flex-row relative">
            <input id="color-picker" class="border border-gray-400 p-2 rounded-lg" x-model="currentColor">
            <div @click="isOpen = !isOpen" class="cursor-pointer rounded-full ml-3 my-auto h-10 w-10 flex" :class="`bg-${currentColor}`" >
              <svg xmlns="http://www.w3.org/2000/svg" :class="`${iconColor}`" class="h-6 w-6 mx-auto my-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
              </svg>
            </div>
            <div x-show="isOpen" @click.away="isOpen = false" x-transition:enter="transition ease-out duration-100 transform"
              x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100"
              x-transition:leave-end="opacity-0 scale-95" class="border border-gray-300 origin-top-right absolute right-0 top-full mt-2 rounded-md shadow-lg">
              <div class="rounded-md bg-white shadow-xs p-2">
                <div class="flex">
                  <template x-for="color in colors">
                    <div class="">
                      <template x-for="variant in variants">
                        <div @click="selectColor(color,variant)" class="cursor-pointer w-6 h-6 rounded-full mx-1 my-1" :class="`bg-${color}-${variant}`"></div>
                      </template>
                    </div>
                  </template>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      function app() {
          return {
            colors: ['gray', 'red', 'yellow', 'green', 'blue', 'indigo', 'purple', 'pink'],
            variants: [100, 200, 300, 400, 500, 600, 700, 800, 900],
            currentColor: '',
            iconColor: '',
            isOpen: false,
            initColor () {
              this.currentColor = 'red-800'
              this.setIconWhite()
            },
            setIconWhite () {
              this.iconColor = 'text-white'
            },
            setIconBlack () {
              this.iconColor = 'text-black'
            },
            selectColor (color, variant) {
              this.currentColor = color + '-' + variant
              if (variant < 500) {
                this.setIconBlack()
              }
              else {
                this.setIconWhite()
              }
            }
          }
      }
    </script>
</body> --}}
