@extends('lifespot_layout')

@section('content')

<div class="lg:ml-6 mt-6 pr-2 lg:mx-6">
    <h1 class="font-black text-xl mb-4 ml-4">My LifeSpot</h1>

    <nav class="w-full lg:w-9/12 ml-4">
        <ul class="flex space-x-5 lg:space-x-8 text-sm text-gray-700">
            <li class="hover:underline underline-offset-8 hover:text-blue-700">
                <a href="{{ route('myestate.financials.banking') }}" class="{{ (Request::is('*myestate/financial*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Finanacial</span><span class="lg:hidden">Finanacial</span></a>
            </li>

            <li class="disabled:hover:underline underline-offset-8 disabled:hover:text-blue-700 mb-3">
                <a  xhref="#!" class="{{ (Request::is('*myestate/legal*')? 'underline text-blue-700' : '') }}"><span class="hidden lg:block">Legal</span><span class="lg:hidden">Legal</span></a>
            </li>
            <li class="disabled:hover:underline underline-offset-8 disabled:hover:text-blue-700">
                <a xhref="#!" class="{{ (Request::is('*myestate/health*')? 'underline text-blue-700' : '') }}">Health</a>
            </li>
            <li class="disabled:hover:underline underline-offset-8 disabled:hover:text-blue-700">
                <a xhref="#!" class="{{ (Request::is('*myestate/retirment*')? 'underline text-blue-700' : '') }}"><span class="lg:block">Retirement</span> <span class="lg:hidden">Retirement</span></a>
            </li>
        </ul>
        <hr class="mt-1">
    </nav>


    <main class="my-4">
        <div class="py-3">

                @yield('myestate')

        </div>
    </main>
</div>


@endsection
