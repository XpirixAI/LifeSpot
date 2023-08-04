{{-- @extends('lifespot.mylifespot.mylifespot_layout')

@section('mylifespot') --}}

@extends('lifespot.myestate.financials.financial_layout')
@section('myestate')

<div class="lg:pt-3">

    <div class="grid xgrid-cols-1 lg:grid-cols-5 lg:gap-4 px-2">

        <div class="">
            {{-- <button @click.prevent="showMiniNav = !showMiniNav" class="block lg:hidden">click</button> --}}
            <div class="flex lg:block xcol-span-2 md:col-span-1 space-x-1 lg:space-x-0 border rounded-lg mb-2 pt-2.5 px-1 mx-1 lg:border-none lg:px-0 lg:pt-0">
                <a class="" href="{{ route('mylifespot.family.dependents') }}">
                    <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-sm rounded-lg px-1 lg:px-3 mb-2 {{ Route::is('mylifespot.family.dependents') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                        Banking
                    </div>
                </a>

                <a class="" href="{{ route('mylifespot.family.beneficeries') }}">
                    <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-sm rounded-lg px-1 lg:px-3 mb-2 {{ Route::is('mylifespot.family.beneficeries') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                        Taxes
                    </div>
                </a>

            </div>
        </div>
        <div class="col-span-3">
            <ul class="grid grid-cols-1 lg:grid-cols-3 lg:gap-4">
                @yield('financials')
            </ul>
        </div>
        <div class="xbg-yellow-500 rounded-lg min-h-56 row-span-4">
            <div class="h-72 overflow-y-auto bg-blue-50 rounded-xl p-6">
                <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                <h3 class="text-black font-black">Why is this information important?</h3>
                <p class="mt-2 text-xs">Having immediate access to LifeSpot allows you to confidently plan for the future and make informed decisions about your will & trust. With a complete snapshot of all your financial, tax, health, and retirement information, you can be rest assured that your will & trust is in order and up to date. Furthermore, having a comprehensive view of your financial situation can help you identify any potential risks and plan accordingly, so you can protect your family and assets.</p>
            </div>
        </div>
    </div>

</div>

@endsection



