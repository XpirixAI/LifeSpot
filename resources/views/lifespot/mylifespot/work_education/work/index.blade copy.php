@extends('lifespot.mylifespot.work_education.work_education_layout')
@section('work')
<span class="text-right row-start-1 col-start-6 col-span-2">
    <a href="{{ route('mylifespot.work_education.work.edit') }}" class="flex mr-20">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-500">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
        </svg>
        <span class="ml-2 text-blue-500">Edit</span>
    </a>
</span>
<ul class="">
    <li xclass="row-start-1 lg:row-span-3 col-span-4 lg:col-span-2">
        {{-- <div class="flex space-x-5">
            <h1 class="font-black text-xl">
                Your Profile
            </h1>
        </div> --}}
        {{-- <img class="relative top-0 left-0 rounded-full h-16 w-16 lg:h-32 lg:w-32 mt-4" src="{{ (!empty(Auth::user()->profile_photo_path)) ? url('upload/admin_images/'.Auth::user()->profile_photo_path) : url('upload/no_image.png') }}" alt="Profile Image"> --}}
    </li>
    {{-- <span class="text-right">
        <a href="{{ route('mylifespot.work_education.work.edit') }}" class="flex mr-20">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
            <span class="ml-2 text-blue-500">Edit</span>
        </a>
    </span> --}}
    {{-- <li class="hidden lg:block lg:row-span-4 lg:col-start-9 col-span-2">
        <div class="h-72 bg-blue-50 rounded-xl p-6">
            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
            <h3 class="text-black font-black">Why is this information important?</h3>
            <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
        </div>
    </li> --}}

    <div xclass="row-start-4 col-span-2 lg:row-start-2 lg:col-start-3 lg:col-span-1 text-right items-center space-y-5">
        <p class="text-gray-500">Title:</p>
        <p class="text-gray-500">Company:</p>
        <p class="text-gray-500">Started:</p>
        <p class="text-gray-500">Current</p>



    </div>
    <div xclass="row-start-4 col-span-2 lg:row-start-2 lg:col-start-4  lg:col-span-3 items-center space-y-5">
        <p class="text-gray-700"></p>
        <p class="text-gray-700"></p>
        <p class="text-gray-700"></p>
        <p class="text-gray-700"></p>



    </div>
</ul>
@endsection
