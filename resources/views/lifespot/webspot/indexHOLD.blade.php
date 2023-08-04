<div class="grid lg:grid-cols-2 gap-4 lg:mx-4 ">
    <div class="m-4">
        <h1 class="text-5xl font-extrabold text-gray-50">
            {{-- My Digital World --}}
            {{-- <span >{{ Auth::user()->fname }}'s Digital World</span> --}}
            <span >{{ $myxpirix->title }}</span>

        </h1>
        <p class="text-gray-200 text-lg font-bold my-3">{{ $myxpirix->line_1 }}
            {{ $myxpirix->line_2 }} {{ $myxpirix->line_3 }} {{ $myxpirix->line_4 }} </p>

            <!-- ========SAVE THIS FOR NOW============
                Transform how YOU store, share, and upload content. This is YOUR website. Change it EVERYDAY or whenever you wish. Make any parts of it public and or private. You're in control. Store and organize your favorite recipes, photos, or anything you want. GO AHEAD AND CUSTOMIZE YOUR WORLD.
            ============END SAVE THIS FOR NOW========= -->


        {{-- <p  class="text-gray-200 text-lg font-bold my-3">Transform how YOU store, share, and upload content.This is YOUR website.
            <i class=" text-white">Change it EVERYDAY or whenever you wish.</i>  Make any parts of it public and or private. You're in control. --}}


            {{-- Store and organize your favorite recipes, photos, or anything you want. --}}


            {{-- <span   class="uppercase text-gray-200 text-lg text-center">Go ahead and customize your world.</span></p> --}}

        {{-- <p class="text-gray-200 text-lg">Personally designed and written blogs that are sharable ...<i class=" text-white">or not.</i>  My favorite recipes.  Securely stored private journals. Photo albums. Store stuff so I can always find it. It's my site to let my personality shine through. <span class="uppercase">It's all customizable! LOOK FOR THE EDIT ICON and you can edit.</span></p> --}}

        <!--This initial help button will be gone (if statement check) once user has data in their database AND then the Click Me button content would appear -->
        @if (!$myxpirix)
        <button    class="my-12 cursor-default bg-gray-50 rounded-lg font-semibold  px-10 py-4">
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
        <button   class="mt-10  border-2 text-sky-800 font-bold bg-gray-50 rounded-lg hover:bg-sky-600 hover:text-white px-10 py-4">{{ $myxpirix->cta_button }} </button>
        @endif




    </div>
    <div class="relative">
        <img class="object-cover border-4 border-transparent rounded-xl w-full max-h-96 xh-full" src="{{ (!empty($myxpirix->thumbnail)) ? asset($myxpirix->thumbnail) :  asset('img/Breckenridge2.jpeg') }}" alt="">

        <img class="absolute bottom-0 left-0 border-4 border-gray-50 rounded-lg w-1/4 h-auto object-cover" src="{{ (!empty(Auth::user()->profile_photo_path)) ? url('upload/admin_images/'.Auth::user()->profile_photo_path) : url('upload/no_image.png') }}" alt="Profile Image">


    </div>
</div>
