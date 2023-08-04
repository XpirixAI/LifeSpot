@extends('lifespot_layout')

@section('content')

<div class="lg:ml-6 mt-6 lg:pr-2 lg:mx-6">
    <h1 class="font-black text-xl mb-4 ml-4">My LifeSpot</h1>

    <nav class="w-full lg:w-9/12 ml-4">
        <ul class="flex space-x-5 lg:space-x-8 text-sm text-gray-700">
            <li class="hover:underline underline-offset-8 hover:text-blue-700">
                <a href="{{ route('mylifespot.personal') }}" class="{{ (Request::is('*mylifespot/personal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Personal Information</span><span class="lg:hidden">Personal</span></a>
            </li>

            <li class="hover:underline underline-offset-8 hover:text-blue-700 mb-3">
                <a href="{{ route('mylifespot.home_property.real_estate') }}" class="{{ (Request::is('*mylifespot/property*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Home and Property</span><span class="lg:hidden">Home/Property</span></a>
            </li>
            <li class="hover:underline underline-offset-8 hover:text-blue-700">
                <a href="{{ route('mylifespot.family.spouse') }}" class="{{ (Request::is('*mylifespot/spouse*')? 'underline text-blue-700' : '') }}">Family</a>
            </li>
            <li class="hidden hover:underline underline-offset-8 hover:text-blue-700">
                <a href="{{ route('mylifespot.work_education.work') }}" class="{{ (Request::is('*mylifespot/work*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Work and Education</span> <span class="lg:hidden">Work/Education</span></a>
            </li>
        </ul>
        <hr class="mt-1">
    </nav>


    <main class="my-4">
        <div class="py-3">

                @yield('mylifespot')

        </div>
    </main>
</div>


@endsection
