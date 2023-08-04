@extends('help_areas')

@section('content')

<div class="flex justify-center">
    @include('xpirix.body.help_center.lifespot_help.HelpBoxesContent')
    {{-- <div class="grid grid-cols-1 gap-4 md:gap-6 md:grid-cols-2 lg:grid-cols-3 mt-6">

        <div class="bg-white py-6 px-6 rounded-lg lg:w-64 my-4 shadow-2xl">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-500 bg-yellow-100 rounded-full p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                  </svg>
            </span>
            <h5 class="text-lg font-semibold my-2">Why LifeSpot is so accessable?</h5>
            <ul>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('access') }}">Access to your Legacy</a>
                </li>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('access') }}">Create your Estate Access</a>
                </li>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('access') }}">Immediate access</a>
                </li>
                <li class="">
                    <a class="text-blue-700 underline text-xs" href="{{ route('access') }}">Control Your Data</a>
                </li>
                <li class="invisible">
                    <a class="text-blue-700 underline text-xs" href="{{ route('access') }}">Control Your Data</a>
                </li>
            </ul>
            <div class="mt-4 mb-2">
                <a href="{{ route('access') }}" class=" text-sm text-white bg-[#0682d4] py-2 px-2 rounded font-black">Browse More LifeSpot</a>
            </div>
        </div>
        <div class="bg-white py-6 px-6 rounded-lg w-64 my-4 shadow-2xl">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500 bg-blue-50 rounded-full p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                  </svg>
            </span>
            <h5 class="text-lg font-semibold my-2">Members, why are they so Important?</h5>
            <ul>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('members_important') }}">Members of your Estate</a>
                </li>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('members_important') }}">Inviting Members</a>
                </li>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('members_important') }}">Sharing Important Data</a>
                </li>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('members_important') }}">Instant Messaging</a>
                </li>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('members_important') }}">Family Sharing</a>
                </li>
            </ul>
            <div class="mt-4 mb-2">
                <a href="{{ route('members_important') }}" class=" text-sm text-white bg-[#0682d4] py-2 px-2 rounded font-black">Browse More LifeSpot</a>
            </div>
        </div>
        <div class="bg-white py-6 px-6 rounded-lg w-64 my-4 shadow-2xl">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-500 bg-green-100 rounded-full p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
                  </svg>
            </span>
            <h5 class="text-lg font-semibold my-2">How do I Protect my Documents </h5>
            <ul>

                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('protect_docs') }}">Your Suggested Documents</a>
                </li>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('protect_docs') }}">Adding Documents </a>
                </li>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('protect_docs') }}">Saving Documents</a>
                </li>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('protect_docs') }}">Protecting Documents</a>
                </li>

                <li class="invisible">
                    <a class="text-blue-700 underline text-xs" href="{{ route('help') }}">Adding Documents to Lifespot</a>
                </li>


            </ul>
            <div class="mt-4 mb-2">
                <a href="{{ route('protect_docs') }}" class=" text-sm text-white bg-[#0682d4] py-2 px-2 rounded font-black">Browse More LifeSpot</a>
            </div>
        </div>
        <div class="bg-white py-6 px-6 rounded-lg w-64 my-4 shadow-2xl">

            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-cyan-600 bg-cyan-200 rounded-full p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                  </svg>
            </span>
            <h5 class="text-lg font-semibold my-2">Why LifeSpot is so Private?</h5>
            <ul>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('private_lifespot_article') }}">Create Your Estate</a>
                </li>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('private_lifespot_article') }}">Control Access</a>
                </li>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('private_lifespot_article') }}">Control Your Data</a>
                </li>
            </ul>
            <div class="mt-4 mb-2">
                <a href="{{ route('private_lifespot_article') }}" class=" text-sm text-white bg-[#0682d4] py-2 px-2 rounded font-black">Browse More LifeSpot</a>
            </div>
        </div>
        <div class="bg-white py-6 px-6 rounded-lg w-64 my-4 shadow-2xl">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-500 bg-indigo-100 rounded-full p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                  </svg>
            </span>
            <h5 class="text-lg font-semibold my-2">Will LifeSpot Help us Grow ?</h5>
            <ul>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('grow_lifespot_article') }}">Funding Your Estate</a>
                </li>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('grow_lifespot_article') }}">Immediate Access to our Affiliates</a>
                </li>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('grow_lifespot_article') }}">LifeSpot Smartboard</a>
                </li>
            </ul>
            <div class="mt-4 mb-2">
                <a href="{{ route('grow_lifespot_article') }}" class=" text-sm text-white bg-[#0682d4] py-2 px-2 rounded font-black">Browse More LifeSpot</a>
            </div>
        </div>
        <div class="bg-white py-6 px-6 rounded-lg w-64 my-4 shadow-2xl">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-red-300 bg-red-100 rounded-full p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                  </svg>
            </span>
            <h5 class="text-lg font-semibold my-2">WebSpot</h5>
            <ul>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('webspot_article') }}">Create Your Legacy Your Story</a>
                </li>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('webspot_article') }}">
                        Save Historic Family Files</a>
                </li>
                <li>
                    <a class="text-blue-700 underline text-xs" href="{{ route('webspot_article') }}">Save and Share with who you wish</a>
                </li>

                <li class="invisible">
                    <a class="text-blue-700 underline text-xs" href="{{ route('webspot_article') }}">Save and Share what you wish</a>
                </li>
            </ul>
            <div class="mt-4 mb-2">
                <a href="{{ route('webspot_article') }}" class=" text-sm text-white bg-[#0682d4] py-2 px-2 rounded font-black">Browse More LifeSpot</a>
            </div>
        </div>
    </div> --}}
</div>

@endsection
