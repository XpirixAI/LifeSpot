@extends('lifespot_layout')

@section('content')

<div class="grid grid-cols-12 min-h-screen xmr-6">

    <!--Webspot -->
    <div class="relative xbg-gray-100 col-span-12 xlg:col-span-9 border-r border-gray-200">
        <!--Webspot NavBar-->
        <div class="flex justify-between mt-4 mx-8 space-x-8">
           {{-- <a href="#!">Your Logo</a> --}}
           <a href="#!">Home</a>
           <a href="#!">Blogs</a>
           <a href="#!">My Stuff</a>
           <a href="#!">Settings</a>
        </div>

        <!--Top Area-->
        {{-- <div class="bg-gradient-to-b from-blue-300 to-blue-700 via-black w-full h-full">

        </div> --}}
        <div
            class="w-full h-full bg-no-repeat bg-cover bg-left bg-fixed"
            style="background-image: url('https://images.unsplash.com/photo-1519046904884-53103b34b206?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');">
        </div>
        <div class="h-4/5"></div>


         <!--Ad Space -->
        <ul class="md:col-span-12 lg:col-span-3 col-span-12 mb-12 mt-8  space-y-8">
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
    </div>

</div>


@endsection
