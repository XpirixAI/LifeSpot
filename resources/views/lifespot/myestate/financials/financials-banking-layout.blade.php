@extends('lifespot.myestate.myestate-interior-banking-layout')

@section('myestate_interior_banking')

<div class="ml-6 mt-6 mx-6">
    <div class="flex justify-between">
        <a class="flex text-sm text-blue-800 font-semibold mb-4" href="{{ route('myestate') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-blue-800 font-semibold">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
              </svg>
             Go Back
        </a>
        <ul class="flex items-center pb-4">
            <li>
                <a href="#!">
                    <img class="rounded-full h-8 w-8" src="{{ asset('img/WalkerFamilyPics/jared.png') }}" alt="">
                </a>
            </li>
            <li>
                <a href="#!">
                    <img class="rounded-full h-8 w-8" src="{{ asset('img/WalkerFamilyPics/howard.png') }}" alt="">
                </a>
            </li>
            <li>
                <a href="#!">
                    <span class="bg-gray-500 text-white text-xs font-bold rounded-full h-8 w-8 uppercase py-2 px-2">+3</span>
                </a>
            </li>
            <li class="ml-5">
                <a href="#!">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                    </svg>
                </a>
            </li>

        </ul>
    </div>
    <div class="flex space-x-3 mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 p-2 text-white bg-blue-500 rounded-full">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>

        <h1 class="font-black text-xl pb-4 pt-3">Financial</h1>
    </div>

    <div class="grid grid-cols-5 gap-4">
        <div>
            <a class="" href="{{ route('myestate.financials.banking') }}">
                <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-sm rounded-lg pl-3 mb-2 {{ Route::is('myestate.financials.banking*') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                    Banking
                </div>
            </a>

            <a class="" href="{{ route('myestate.financials.taxes') }}">
                <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-sm rounded-lg pl-3 mb-2 {{ Route::is('myestate.financials.taxes*') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                    Taxes
                </div>
            </a>
        </div>



        <div class="col-span-3">
            <ul class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                @yield('financials')
            </ul>
        </div>
        <div class="hidden lg:block h-72 bg-blue-50 rounded-xl p-6">
            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
            <h3 class="text-black font-black">Why is this information important?</h3>
            <p class="mt-2 text-xs">LifeSpot's a secure filing place to store and upload financial and banking documents.</p>
        </div>


    </div>



</div>

@endsection
