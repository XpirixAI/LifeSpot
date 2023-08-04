@extends('lifespot.mylifespot.mylifespot_layout')

@section('mylifespot')

<div class="lg:pt-3">

    <div class="grid xgrid-cols-1 lg:grid-cols-5 lg:gap-4 px-2">

        <div class="">
            {{-- <button @click.prevent="showMiniNav = !showMiniNav" class="block lg:hidden">click</button> --}}
            <div class="flex lg:block xcol-span-2 md:col-span-1 space-x-1 lg:space-x-0 border rounded-lg mb-2 pt-2.5 px-1 mx-1 lg:border-none lg:px-0 lg:pt-0">
                <a class="" href="{{ route('mylifespot.family.spouse') }}">
                    <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-xs lg:text-sm rounded-lg px-0.5 sm:px-3 mb-2 {{ Route::is('mylifespot.family.spouse') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                        Spouse<span class="hidden sm:inline">/Partner</span>
                    </div>
                </a>

                <a class="" href="{{ route('mylifespot.family.dependents') }}">
                    <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-xs lg:text-sm rounded-lg px-0.5 sm:px-3 mb-2 {{ Route::is('mylifespot.family.dependents') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                        Dependents
                    </div>
                </a>

                <a class="" href="{{ route('mylifespot.family.beneficeries') }}">
                    <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-xs lg:text-sm rounded-lg px-0.5 sm:px-3 mb-2 {{ Route::is('mylifespot.family.beneficeries') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                        Beneficeries
                    </div>
                </a>

                <a class="" href="{{ route('mylifespot.family.emergency-contacts') }}">
                    <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-xs lg:text-sm rounded-lg px-0.5 sm:px-3 xpl-3 mb-2 xpr-2 {{ Route::is('mylifespot.family.emergency-contacts') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                        Emergency <span class="hidden lg:inline">Contacts</span>
                    </div>
                </a>

                <a class="" href="{{ route('mylifespot.family.pets') }}">
                    <div class="hover:bg-blue-50 hover:text-blue-900 hover:font-bold py-1 text-xs lg:text-sm rounded-lg px-0.5 sm:px-3 xpl-3 mb-2 xpr-2 {{ Route::is('mylifespot.family.pets') ? 'bg-blue-50 text-blue-900 font-bold ' : '' }}">
                        Pets
                    </div>
                </a>

            </div>
        </div>
        <div class="col-span-3">
            <ul class="grid grid-cols-1 lg:grid-cols-3 lg:gap-4">
                @yield('family')
            </ul>
        </div>
        <div class="h-72 overflow-y-auto bg-blue-50 rounded-xl p-6 xtext-center mx-3 mt-3 lg:mx-0 lg:mt-0">
           <div class="flex items-center mb-2">
                <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2 mr-1 lg:mr-0">?</div>
                <h3 class="text-black font-black text-sm txext-center xml-2 text-center">What's The Difference </h3>
           </div>
          <div x-data="{openDependent:false}" class="text-center mb-2">
            <button @click.prevent="openDependent=!openDependent" class="bg-sky-700 text-white rounded-md py-1 px-3 text-xs font-bold">Dependent</button>
            <p x-show="openDependent" class="mt-2 text-xs text-start">A <span class="underline">dependent</span> is someone who is sustained by another person, such as a child supported by his or her parents. Dependents are either a qualifying child or a qualifying relative of the taxpayer. The taxpayer's spouse cannot be claimed as a dependent. Some examples of dependents include a child, stepchild, brother, sister, or parent.
            </p>
          </div>
            <div x-data="{openBeneficiary:false}"  class="text-center">
                <button @click.prevent="openBeneficiary=!openBeneficiary" class="bg-sky-700 text-white rounded-md py-1 px-3 text-xs font-bold">Beneficiary</button>
            <p x-show="openBeneficiary" class="mt-2 text-xs text-start">A <span class="underline">beneficiary</span> is the person or entity that you legally designate to receive the benefits from your financial products. For life insurance coverage, that is the death benefit your policy will pay if you die.</p>
            </div>

        </div>
    </div>

</div>

@endsection



