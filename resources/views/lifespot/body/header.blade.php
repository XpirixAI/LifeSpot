<div x-data="{headerOpen:true}" class="block md:hidden">
    <div @click.prevent="headerOpen=!headerOpen" class="text-xs text-gray-400 cursor-pointer pl-16">
        <span x-text="headerOpen ? 'Hide Navigation' : 'Show Navigation'"></span>
    </div>
    <ul x-show="headerOpen" class="grid grid-cols-4 gap-0 text-xs py-1 mx-1.5 space-y-2 ">
        <li class="mx-auto mt-2">
           <a href="{{  route('getting_started')  }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-5 text-blue-500" fill="none" viewBox="0 0 24 24"    stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                </svg>
                Get Started
           </a>
        </li>
        <li class="mx-auto">
            <a href="{{ route('webspot') }}">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-4 text-blue-500" fill="none" viewBox="0 0 24 24"    stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                 </svg>
                My Xpirix
            </a>
         </li>
        <li class="mx-auto">
            <a href="{{ route('messages') }}">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-4 text-blue-500" fill="none" viewBox="0 0 24 24"    stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                 </svg>
                Messages
            </a>
         </li>
         <li class="mx-auto">
            <a href="{{ route('mylifespot.personal') }}" class="whitespace-nowrap">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-5 text-blue-500" fill="none" viewBox="0 0 24 24"    stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                 </svg>
                My LifeSpot
            </a>
         </li>
         <li class="mx-auto">
            <a href="{{ route('myestate') }}">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-4 text-blue-500" fill="none" viewBox="0 0 24 24"    stroke="currentColor" stroke-width="2">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                 </svg>
                 My Estate
            </a>
         </li>

    {{-- </ul>
    <ul class="flex space-x2 w-full text-xs justify-around mt-4"> --}}
        <li class="mx-auto">
            <a href="{{ route('mymembers') }}">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-5 text-blue-500" fill="none" viewBox="0 0 24 24"    stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                 </svg>
                 Members
            </a>
         </li>
         <li class="mx-auto">
            <a href="{{ route('documents', 0) }}">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-5 text-blue-500" fill="none" viewBox="0 0 24 24"    stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                 </svg>
                 Documents
            </a>
         </li>
         <li class="mx-auto">
            <a href="{{ route('lifespot.help') }}">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-6 text-blue-500" fill="none" viewBox="0 0 24 24"    stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                 </svg>
                 Help Center
            </a>
         </li>
         <li class="mx-auto">
            <a href="{{ route('growmyestate.index') }}" class="whitespace-nowrap">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-8 text-blue-500" fill="none" viewBox="0 0 24 24"    stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                 </svg>
                 Grow My Estate
            </a>
         </li>
         <li class="mx-auto">
            <a href="#!">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-1 text-blue-500" fill="none" viewBox="0 0 24 24"    stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                 </svg>
                 Tasks
            </a>
         </li>
    </ul>
    <hr class="mt-2">
</div>
