@extends('lifespot.mylifespot.mylifespot_layout')

@section('mylifespot')
<ul class="grid grid-cols-8 md:grid-cols-10 gap-4">
    {{-- <li class="row-start-1 lg:row-span-3 col-span-4 lg:col-span-2">
        <div class="flex space-x-5">
            <h1 class="font-black text-xl">
                Your Profile
            </h1>
        </div>
        <img class="relative top-0 left-0 rounded-full h-16 w-16 lg:h-32 lg:w-32 mt-4" src="{{ (!empty(Auth::user()->profile_photo_path)) ? url('upload/admin_images/'.Auth::user()->profile_photo_path) : url('upload/no_image.png') }}" alt="Profile Image">
    </li> --}}

    <li class="row-start-1 row-span-3 col-span-2">
        <div>
            <a class="" href="{{ route('mylifespot.work_education.work') }}">
                <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-sm rounded-lg pl-3 mb-2 {{ Route::is('mylifespot.work_education.work') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                    Work
                </div>
            </a>

            <a class="" href="{{ route('mylifespot.work_education.education') }}">
                <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-sm rounded-lg pl-3 mb-2 {{ Route::is('mylifespot.work_education.education') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                    Education
                </div>
            </a>

            <a class="" href="{{ route('mylifespot.work_education.military') }}">
                <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-sm rounded-lg pl-3 mb-2 {{ Route::is('mylifespot.work_education.military') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                    Military
                </div>
            </a>

            <a class="" href="{{ route('mylifespot.work_education.volunteer') }}">
                <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-sm rounded-lg pl-3 mb-2 {{ Route::is('mylifespot.work_education.volunteer') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                    Volunteer
                </div>
            </a>
        </div>
    </li>

    <li class="row-start-2 lg:row-start-1 col-start-3 lg:col-start-7 col-span-3">
        <a href="{{ route('mylifespot.work_education.work.edit') }}" class="flex mr-20">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
            <span class="ml-2 text-blue-500">Edit</span>
        </a>
    </li>
    <li class="hidden lg:block lg:row-span-4 lg:col-start-9 col-span-2">
        <div class="h-72 bg-blue-50 rounded-xl p-6">
            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
            <h3 class="text-black font-black">Why is this information important?</h3>
            <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
        </div>
    </li>

    <div class="row-start-4 col-span-2 lg:row-start-2 lg:col-start-3 lg:col-span-1 text-right items-center space-y-3">

        <p class="text-gray-500">Title:</p>
        <p class="text-gray-500">Company:</p>
        <p class="text-gray-500">Started:</p>
        <p class="text-gray-500">Current:</p>


    </div>
    <div class="row-start-4 col-span-2 lg:row-start-2 lg:col-start-4  lg:col-span-3 items-center space-y-3">

        <p class="text-gray-700">Product Design Manager</p>
        <p class="text-gray-700">Apple Technology Company</p>
        <p class="text-gray-700">August 15, 2008</p>
        <p class="text-gray-700">Yes</p>



    </div>
</ul>
<ul class="lg:col-span-3 col-span-12 mb-12 mt-8">
   <div class="lg:flex lg:space-x-8 space-y-4">
    <li class="h-72 bg-blue-50 rounded-xl p-6">
        <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
        <h3 class="text-black font-black text-xl">Advertise Here</h3>
        <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
    </li>
    <li class="h-72 bg-blue-50 rounded-xl p-6">
        <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
        <h3 class="text-black font-black text-xl">Advertise Here</h3>
        <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
    </li>
    <li class="h-72 bg-blue-50 rounded-xl p-6">
        <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
        <h3 class="text-black font-black text-xl">Advertise Here</h3>
        <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
    </li>
   </div>
</ul>
<ul class="md:col-span-12 lg:col-span-3 col-span-12 mb-12 xmt-20  space-y-10">
    <li class="h-72 bg-blue-50 rounded-xl p-6">
        <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
        <h3 class="text-black font-black text-xl">Advertise Here</h3>
        <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
    </li>
    <li class="h-72 bg-blue-50 rounded-xl p-6">
        <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
        <h3 class="text-black font-black text-xl">Advertise Here</h3>
        <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
    </li>
</ul>
@endsection
