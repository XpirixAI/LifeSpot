@extends('lifespot.myestate.financials.financials-banking-layout')
@section('financials')

    <li>
        <a href="#!" class="flex justify-center h-52 rounded-xl border border-gray-100 p-2">
            <div class="rounded-lg bg-white max-w-sm">
                <img class="rounded-lg h-24 w-40" src="{{ asset('img/chase_bank.png') }}" alt=""/>
                <div class="text-center p-3">
                    <h5 class="text-blue-900 text-xs font-bold mb-1">Chase Bank</h5>
                    <p class="text-gray-700 text-xs">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </div>
        </a>
    </li>
    <li>
        <a href="#!" class="flex justify-center h-52 rounded-xl border border-gray-100 p-2">
            <div class="rounded-lg bg-white max-w-sm">
                <img class="rounded-lg h-24 w-40" src="{{ asset('img/fidelity_bank.jpeg') }}" alt=""/>
                <div class="text-center p-3">
                    <h5 class="text-blue-900 text-xs font-bold mb-1">Fidelity Bank</h5>
                    <p class="text-gray-700 text-xs">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </div>
        </a>
    </li>
    <li>
        <a href="#!" class="flex justify-center h-52 items-center bg-gray-50 rounded-xl border border-gray-100 p-2">
            <div class="rounded-lg bg-white max-w-sm">
                <div class="bg-gray-50 max-w-sm r">

                        <img class="h-10 w-10 text-gray-500 bg-white mx-8" src="{{ asset('img/add_home.jpeg') }}" alt=""/>

                        <div class="text-center p-3">
                            <h5 class="text-blue-900 text-xs font-bold mb-1">Add a Bank Account</h5>
                        </div>
                </div>
            </div>
        </a>
    </li>

    <div class="grid col-start-3 grid-rows-8 gap-4">
        <div class="h-72"></div>


            <ul class="flex ">

                <li class="row-start-8 col-start-6 lg:col-start-7">
                    <button class="border border-gray-400 rounded-lg float-right font-semibold text-xs py-2 px-4 mr-2">Cancel</button>
                </li>
                <li class="row-start-8 col-start-8">
                    <button class="bg-[#1f588d] text-white border float-right border-gray-400 rounded-lg font-semibold text-xs py-2 px-5 ">Save</button>
                </li>
            </ul>


    </div>




@endsection



