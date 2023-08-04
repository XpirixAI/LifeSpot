@extends('lifespot.mylifespot.mylifespot_layout')

@section('mylifespot')
<div class="lg:pt-3">

    <div class="grid xgrid-cols-1 lg:grid-cols-5 lg:gap-4 px-2">

        <div class="">
            {{-- <button @click.prevent="showMiniNav = !showMiniNav" class="block lg:hidden">click</button> --}}
            <div class="flex lg:block xcol-span-2 md:col-span-1 space-x-1 lg:space-x-0 border rounded-lg mb-2 pt-2.5 px-1 mx-1 lg:border-none lg:px-0 lg:pt-0">
                <a class="" href="{{ route('mylifespot.home_property.real_estate') }}">
                    <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-sm rounded-lg px-1 lg:px-3 mb-2 {{ Route::is('mylifespot.home_property.real_estate*') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                        Home
                    </div>
                </a>

                <a class="" href="{{ route('mylifespot.home_property.property') }}">
                    <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-sm rounded-lg px-1 lg:px-3 mb-2 {{ Route::is('mylifespot.home_property.property*') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                        Assets
                    </div>
                </a>




            </div>
        </div>
        <div class="col-span-3">
            <ul class="grid grid-cols-1 lg:grid-cols-3 lg:gap-4">
                @yield('property')
            </ul>
        </div>
        <div class="xbg-yellow-500 rounded-lg min-h-56 row-span-4">
            <div class="h-72 overflow-y-auto bg-blue-50 rounded-xl p-6">
                <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                <h3 class="text-black font-black">Why is this information important?</h3>
                <p class="mt-2 text-xs">Storing and saving important home and property documentation is important to keep track of ownership, financial records, and important information about your property and assets. Lifespot allows you to store and organize all of your important documents in one convenient place and view in your Document Center. It allows you to easily search and access your documents from anywhere and anytime. It also allows you to securely share documents with others, simplifying collaboration. LifeSpot provides a backup of your documents in the event of a disaster or data loss.</p>
            </div>
        </div>


        </div>
    </div>

</div>
@endsection





