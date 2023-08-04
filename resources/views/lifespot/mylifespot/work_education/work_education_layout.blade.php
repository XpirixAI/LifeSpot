@extends('lifespot.mylifespot.mylifespot_layout')

@section('mylifespot')

<div>
    <div>
        <div class="py-3">
          <ul class="grid grid-cols-8 md:grid-cols-10 gap-4">
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

            <li class="hidden lg:block  row-span-4 col-start-9 col-span-2">
                <div class="h-72 bg-blue-50 rounded-xl p-6">
                    <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                    <h3 class="text-black font-black">Why is this information important?</h3>
                    <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
                </div>
            </li>
            @yield('work')
          </ul>
        </div>
    </div>

</div>

@endsection



