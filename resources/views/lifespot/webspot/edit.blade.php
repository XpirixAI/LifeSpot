@extends('lifespot_layout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@section('content')

     <!--Top Area-->
    <form method="POST"  action="{{ route('update.webspot', $myxpirix->id) }}" enctype="multipart/form-data" class="grid grid-cols-">
        {{-- {{ dd($myxpirix) }} --}}
        @csrf
        @method('PUT')
        <!--My Xpirix NavBar-->
        @if ($myxpirix->left_color == 'gray-600')
        <div class="flex justify-between px-2 lg:px-8 pt-4 pb-12 text-gray-50 font-bold text-lg bg-black">
                        @else
                        <div class="flex justify-between px-2 lg:px-8 pt-4 pb-12 text-gray-50 font-bold text-lg bg-{{ $myxpirix->left_color !=NULL ? $myxpirix->left_color : '[#056591]' }}">
                @endif
        {{-- <div class="flex justify-between px-2 lg:px-8 pt-4 pb-12 text-gray-50 font-bold text-lg bg-{{ $myxpirix->left_color !=NULL ? $myxpirix->left_color : 'blue-500' }}"> --}}
            <a class="hidden lg:flex items-center" href="#!">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>
                <span class="pr-8"> {{ Auth::user()->fname }}</span>
            </a>
            <div class="flex justify-around space-x-4 lg:space-x-16">
                <a href="{{ route('webspot') }}">Home</a>
                <a href="#blog">Blog</a>

                <span  class="flex space-x-2"><input class="text-black w-3/4 lg:w-1/2 rounded" type="text" name="nav_3" value="{{ $myxpirix->nav_3 != NULL ? $myxpirix->nav_3 : "My Stuff" }}">
                </span>

            </div>


                <button class="hover:text-gray-700">Update</button>

        </div>
        <!--Full form-->
        @if ($myxpirix->left_color == 'gray-600')
        <div class="grid grid-cols-2 gap-4 px-6 bg-black">
                        @else
                        <div class="grid grid-cols-2 gap-4 px-6 bg-{{ $myxpirix->left_color !=NULL ? $myxpirix->left_color : '[#056591]' }}">
                @endif
        {{-- <div class="grid grid-cols-2 gap-4 px-6 bg-{{ $myxpirix->left_color !=NULL ? $myxpirix->left_color : 'blue-500' }}"> --}}
            <!--Left side of form-->
            <div class="col-span-12 lg:col-span-1">
                <div class="m-2">
                    <h1 class="text-5xl font-extrabold text-gray-50">

                        <span>{{ $myxpirix->title !=NULL ? $myxpirix->title : "Website for " . Auth::user()->fname }}</span>
                        <span class="flex space-x-2"><input class="text-black rounded" type="text" name="title" value="{{ $myxpirix->title !=NULL ? $myxpirix->title : "Website for " . Auth::user()->fname }} ">
                        </span>
                    </h1>
                    <p  class="text-gray-200 text-lg font-bold my-3">{{ $myxpirix->line_1 !=NULL ? $myxpirix->line_1 : "Transform how YOU store, share, and upload content." }}</p>
                    <p class="flex space-x-2"><input class="text-black rounded w-full" type="text" name="line_1" value="{{ $myxpirix->line_1 !=NULL ? $myxpirix->line_1 : "Transform how YOU store, share, and upload content." }}">
                    </p>

                    <p  class="text-gray-200 text-lg font-bold my-3">{{ $myxpirix->line_2 !=NULL ? $myxpirix->line_2 : "This is YOUR website. Change it EVERYDAY or whenever you wish. Make any parts of it public and or private. You're in control." }}</p>

                        <p class="flex space-x-2"><input class="text-black rounded w-full" type="text" name="line_2" value="{{ $myxpirix->line_2 !=NULL ? $myxpirix->line_2 : "This is YOUR website. Change it EVERYDAY or whenever you wish. Make any parts of it public and or private. You're in control." }}">
                        </p>

                        <p class="text-gray-200 text-lg my-2">{{ $myxpirix->line_3 !=NULL ? $myxpirix->line_3 : "Store and organize your favorite recipes, photos, or anything you want." }}</p>
                        <p class="flex space-x-2"><input class="text-black rounded w-full" type="text" name="line_3"value="{{ $myxpirix->line_3 !=NULL ? $myxpirix->line_3 : "Store and organize your favorite recipes, photos, or anything you want." }}">
                        </p>

                        <p><span class="uppercase text-gray-200 text-lg text-center">{{ $myxpirix->line_4 !=NULL ? $myxpirix->line_4 : "Go ahead and customize your world." }}</span></p>
                        <p class="flex space-x-2"><input class="text-black rounded w-full" type="text" name="line_4" value="{{ $myxpirix->line_4 !=NULL ? $myxpirix->line_4 : "Go ahead and customize your world." }}">
                        </p>

                    @if ($myxpirix)
                    <button  class="my-12 cursor-default bg-gray-50 rounded-lg font-semibold  px-10 py-1">
                        <div class="flex items-center text-sky-800">
                            <span class="text-xl">Get Started</span>

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
                    <button class="mt-12  bg-gray-50 rounded-lg font-semibold  px-10 py-4">{{ $myxpirix->cta_button != NULL ?$myxpirix->cta_button : "Edit this Button" }} </button>
                    @endif
                    <p><span  class="uppercase text-gray-200 text-lg text-center">{{ $myxpirix->cta_button != NULL ?$myxpirix->cta_button : "Edit this Button" }}</span></p>
                    <p :class="showEdit ? '' : 'hidden'" class="flex space-x-2 xmt-12"><input class="text-black rounded w-1/2 lg:w-1/3" type="text" name="cta_button" value="{{ $myxpirix->cta_button != NULL ?$myxpirix->cta_button : "Edit this Button" }}">
                    </p>



                </div>
            </div>
{{--
            <img class="absolute bottom-0 left-0 border-4 border-gray-50 rounded-lg w-1/4 h-auto object-cover" src="{{ (!empty(Auth::user()->profile_photo_path)) ? url('upload/admin_images/'.Auth::user()->profile_photo_path) : url('upload/no_image.png') }}" alt="Profile Image"> --}}



            <!--Right side of form-->
            <div class="col-span-12 lg:col-span-1">
                 <!--Big Image-->
                <div class="relative top-0 left-0 xh-full">
                    <img id="showImage" class="object-cover rounded-lg min-h-72 max-h-96 xh-auto w-full" src="{{ (!empty($myxpirix->thumbnail)) ? asset($myxpirix->thumbnail) :  asset('img/Breckenridge2.jpeg') }}">

                    <input xclass="rounded-lg xmax-h-56 h-full w-full" type="hidden" name="oldimage" value="{{ $myxpirix->thumbnail }}">
                    <style>
                        .image-upload>input {
                    display: none;
                    }
                    </style>


                    <div class="image-upload">

                        <label for="image">

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 bg-white cursor-pointer rounded-full p-1 absolute -top-2 left-0 fill-blue-600 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>

                        </label>
                        <input xclass="rounded-lg max-h-full h-auto w-full" type="file" name="thumbnail" id="image" value="'{{ old('thumbnail') }}'">
                        @error('thumbnail')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!--Small Image-->
                <div class="relative top-0 left-0 xh-full mb-8">
                    <img class="absolute bottom-0 left-0 border-4 border-gray-50 rounded-lg w-1/4 h-auto object-cover" src="{{ (!empty(Auth::user()->profile_photo_path)) ? url('upload/admin_images/'.Auth::user()->profile_photo_path) : url('upload/no_image.png') }}" alt="Profile Image">

                    <input xclass="rounded-lg xmax-h-56 h-full w-full" type="hidden" name="oldimageSmall" value="{{ asset('img/Breckenridge2.jpeg') }}">
                    <style>
                        .image-upload>input {
                    display: none;
                    }
                    </style>


                    <div class="image-upload">

                        <label for="image">

                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 bg-white cursor-pointer rounded-full p-1 absolute -top-3 left-0 fill-blue-600 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg> --}}

                        </label>
                        <input xclass="rounded-lg max-h-full h-auto w-full" type="file" name="small_image" id="image" value="'{{ old('small_image') }}'">
                        @error('small_image')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                 @include('lifespot.webspot.colorpicker')


                    <button class="text-gray-50 hover:text-gray-700 font-bold text-lg float-right my-8">Update</button>

            </div>
        </div>

    </form>
         <!--Ad Space -->
    <ul class="md:col-span-12 lg:col-span-3 col-span-12 mb-12 mt-8 mx-8 space-y-8">
        <li class=" rounded-xl xp-6">
            <li class="rounded-xl p-6">
                <a href="#!"> <img class="h-auto w-full object-cover" src="{{ asset('img/AdSamples/ad12-Adver--Banners--150x750px-RIOT.jpeg') }}" alt=""></a>
            </li>
        </li>
        <li class="h-72 bg-blue-50 rounded-xl p-6">
            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
            <h3 class="text-black font-black text-xl">Advertise Here</h3>
            <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
        </li>
    </ul>
@endsection

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
