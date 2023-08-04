@extends('lifespot.mylifespot.mylifespot_layout')

@section('mylifespot')
<div class="pt-3">

    <div class="grid grid-cols-5 gap-4">
        <div>
            <a class="" href="{{ route('mylifespot.home_property.real_estate') }}">
                <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-sm rounded-lg pl-3 mb-2 {{ Route::is('mylifespot.home_property.real_estate*') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                    Home
                </div>
            </a>

            <a class="" href="{{ route('mylifespot.home_property.property') }}">
                <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-sm rounded-lg pl-3 mb-2 {{ Route::is('mylifespot.home_property.property*') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                    Assets
                </div>
            </a>

            {{-- <a class="" href="{{ route('mylifespot.home_property.lorem_ipsum') }}">
                <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-sm rounded-lg pl-3 mb-2 {{ Route::is('mylifespot.home_property.lorem_ipsum') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                    Lorem Ipsum
                </div>
            </a> --}}

            {{-- <a class="" href="{{ route('mylifespot.home_property.lorem') }}">
                <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-sm rounded-lg pl-3 mb-2 {{ Route::is('mylifespot.home_property.lorem') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                    Lorem
                </div>
            </a> --}}
        </div>

        <div class="col-span-3">
            <ul class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                @yield('property')
            </ul>
        </div>
        <div class="hidden lg:block h-72 bg-blue-50 rounded-xl p-6">
            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
            <h3 class="text-black font-black">Why is this information important?</h3>
            <p class="mt-2 text-xs">Access to your properties and assets are important to ensure that they are secure and managed efficiently.</p>
        </div>


    </div>

</div>
@endsection





