<div wire:poll>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @stack('styles')
    @stack('scripts')
     <!-- Scripts -->
     {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @include('lifespot.body.header')

    <div class="flex min-h-screen xbg-gray-100">
        <!-- ========== Left Sidebar ========== -->
        <div  class="flex xbg-blue-200">
            @include('lifespot.body.sidebar')
        </div>
        <!-- ========== Right Side Main Content ========== -->
        <div class="w-full">

            <div class="grid grid-cols-12 min-h-screen lg:mr-6">
                <!--Chat Members-->
                <div class="md:col-span-5 lg:col-span-3 col-span-12 border-r border-gray-200">
                    <div class="mt-6">
                            <!--Messages and Hide Header-->
                        <div class="flex justify-between mx-3 mb-3">
                            <h2 class="font-black text-lg">
                                <a href="{{ route('getting_started') }}">Messages</a>
                            </h2>
                            <div class="flex items-center text-sm text-blue-500 space-x-3">
                                <a href="">Hide</a>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!--Search form-->
                        <form class="ml-3 mb-2">
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                            <div class="relative mr-2">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </div>
                                <input type="search" id="default-search" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required="">
                            </div>
                        </form>

                        <!--Get Started invite a new member-->
                        <div x-data="{ showUsers: false}" class="mb-3">
                            <div class="relative flex py-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2 ml-3">
                                <span class="flex-shrink">Get Started</span>
                                <div class="flex-grow border-t"></div>
                            </div>
                            <a href="#!" class="flex space-x-2 text-xs ml-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400 bg-gray-50 border border-gray-100 rounded-full p-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                </svg>

                                <div @click.prevent="showUsers = !showUsers" class="flex space-x-4 items-center">
                                    <span class="text-blue-400">
                                        {{-- Invite a new member --}}
                                        Start a new conversation
                                    </span>
                                    <span class="text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </span>
                                </div>
                            </a>

                           <span x-show="showUsers"> @include('lifespot.messages.users_to_msg')</span>
                        </div>

                         <!--Members-->
                         <ul class="text-gray-400 text-xs whitespace-nowrap">
{{-- @php
    $mostRecent = DB::table('messages')->orderBy('created_at','desc');
@endphp --}}

                            @foreach ($conversations as $conversation)
                            {{-- {{ $conversation->sender_id }} & {{ $conversation->receiver_id }} --}}
                                <li class="hover:bg-blue-50   px-3 pb-1.5 {{ $conversation->id === $selectedConversation->id ? 'bg-blue-100' : '' }}">
                                    <a href="#!" wire:click.prevent="viewMessage({{ $conversation->id }})">
                                        <div class="relative flex mt-3 items-center text-xs text-gray-400 uppercase space-x-1 mr-2">
                                            <span class="flex-shrink pt-1.5">
                                                <!-- Co-Trustee -->
                                            </span>
                                            <div class="flex-grow border-t"></div>
                                        </div>
                                        <div class="grid grid-cols-6">
                                            <span class="col-span-1">
                                                <div class="relative top-0 left-0">
                                                    <img class="relative top-0 left-0 rounded-full h-10 w-10" src="{{ $conversation->sender_id === auth()->id() ? 'upload/admin_images/'.$conversation->receiver->profile_photo_path : 'upload/admin_images/'. $conversation->sender->profile_photo_path }}" alt="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-8 left-8 h-2 w-2 bg-blue-600 rounded-full text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                                        </svg>
                                                </div>
                                            </span>
                                            <span class="col-span-3 ml-2">
                                                <h5 class="font-bold text-black">
                                                    @if ($conversation->sender_id == $conversation->receiver_id)
                                                        You

                                                        @else
                                                        @if ($conversation->sender_id === auth()->id())
                                                        {{ $conversation->receiver->name }}
                                                    @else
                                                        {{ $conversation->sender->name }}
                                                    @endif
                                                    @endif

                                                </h5>
                                                <p>{{ Str::limit($conversation->messages->last()?->body, 25, '...') }}</p>
                                            </span>
                                            <span class="col-start-5 col-span-2 text-right">
                                                <span class="uppercase">{{ $conversation->messages->last()?->created_at->format('m/d/Y') }}</span><br>
                                            </span>
                                        </div>
                                        <!-- <div class="">
                                            <p class="text-white text-center float-right rounded-full h-4 w-4 bg-blue-600">
                                                <span class=""></span> 4</p>
                                        </div> -->
                                    </a>
                                </li>
                            @endforeach


                        </ul>


                    </div>
                </div>

                <!--Chat Messages-->

                <div class="md:col-span-7 lg:col-span-6 col-span-12 border-r border-gray-200">
                        <!-- 3rd col Main Body of Message Area -->
                    @if ($conversations->isNotEmpty())
                        <div class="mt-6">
                                <!--Active Chat Message Person-->
                            <div class="hidden lg:block flex justify-between mx-5 mb-5">
                                <div class="flex space-x-2">
                                    <div class="relative top-0 left-0">
                                        <img class="relative top-0 left-0 rounded-full h-10 w-10"
                                        src="
                                            {{-- @if ($conversation->sender_id === auth()->id())
                                            {{ 'upload/admin_images/'.$selectedConversation->receiver->profile_photo_path }}"
                                        @else
                                            {{ 'upload/admin_images/'.$selectedConversation->sender->profile_photo_path }}"
                                        @endif --}}


                                            {{  $conversation->sender_id === auth()->id() ? 'upload/admin_images/'.$selectedConversation->receiver->profile_photo_path : 'upload/admin_images/'.$selectedConversation->sender->profile_photo_path }}"
                                            alt="">
                                    </div>
                                    <div>
                                        <h5 class="font-bold text-sm">
                                        @if ($conversation->sender_id === auth()->id())
                                            {{ $selectedConversation->receiver->name }}
                                        @else
                                            {{ $selectedConversation->sender->name }}
                                        @endif

                                        </h5>
                                        <p class="text-gray-400 text-xs">
                                            Active Now
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <a href="" class="text-blue-600 text-xs">
                                        View Profile
                                    </a>
                                </div>
                            </div>

                                <!--Chat Area-->
                            <div id="conversation" class="bg-gray-100 px-8 border-b border-gray-200 xflex xflex-col-reverse overflow-auto scroll-smooth h-96 pb-5">

                                @foreach ($selectedConversation->messages as $message)
                                    <div class="flex flex-row {{ $message->user_id === auth()->id() ? 'flex justify-end' : '' }}">
                                        <div class="mt-4">
                                            <div class="flex space-x-1 {{ $message->user_id === auth()->id() ? 'flex-row-reverse' : '' }}">
                                                <div class="relative top-0 left-0">
                                                    <img class="relative top-0 left-0 rounded-full h-8 w-8" src="{{ 'upload/admin_images/'. $message->user->profile_photo_path }}" alt="">
                                                </div>
                                                <div class="items-center px-1 {{ $message->user_id === auth()->id() ? 'flex flex-row-reverse' : '' }}">
                                                    <span class="font-bold text-sm px-2 ">
                                                        {{ $message->user_id === auth()->id() ? 'You' :  $message->user->name }}
                                                    </span>
                                                    <span class="uppercase ml-2 text-xs text-gray-500 px-2">{{ $message->created_at->format('M d h:i a') }}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="xcol-start-3 rounded-b-lg  w-64 p-4 text-xs mx-5 -mt-2 {{ $message->user_id === auth()->id() ? 'bg-blue-500 text-white rounded-tl-lg' : 'bg-gray-200 text-gray-600 rounded-tr-lg' }}">
                                                {{ $message->body }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                            <!-- Send Msg Form -->
                        <div class="my-6 mx-3">
                            <form wire:submit.prevent="sendMessage" action="#">
                                <div class="flex space-x-3 border-0 bg-gray-100 rounded-lg">
                                    <textarea wire:model.dever="body" name="message" id=""class="focus:ring-0 resize-none border-none w-full focus-none bg-transparent" placeholder="Your message..."></textarea>
                                    <div class="flex space-x-4 items-center">
                                        {{-- <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </a>

                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                            </svg>
                                        </a> --}}
                                        <x-jet-button class="bg-blue-600">Send</x-jet-button>
                                        {{-- <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4 text-blue-700 font-black text-2xl" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </button> --}}
                                    </div>

                                </div>
                            </form>
                        </div>
                        @else
                            <div class="bg-gray-50 text-center text-gray-700 h-24 pt-8 font-bold text-xl rounded-xl m-4">You do not have any messages yet.</div>
                    @endif
                        <!--Ad Space bottom below send msg form -->
                    <ul class="md:col-span-12 lg:col-span-3 col-span-12 mb-12 mt-8 mx-3 space-y-8 ">
                        <li class="rounded-xl">
                            <a href="#!"><img class="h-full w-full object-cover rounded-xl" src="{{ asset('img/AdSamples/ad25-cokecola.jpeg') }}" alt=""></a>
                        </li>
                    </ul>
                </div>

                <!--Right Side Calendar and Ad Space -->
                 <div class="md:col-span-12 lg:col-span-3 col-span-12 mb-12 mt-8 ml-4 space-y-8">
                   <ul class="mb-12 mt-8 ml-4 space-y-8">
                        <li class="h-72 bg-blue-50 rounded-xl p-6">
                            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                            @include('lifespot.messages.calendar')
                        </li>
                        <li class="rounded-xl">
                            <a href="#!"><img class="h-full w-full object-cover" src="{{ asset('img/AdSamples/ad23-liberty.jpeg') }}" alt=""></a>
                        </li>
                        <li class="rounded-xl">
                            <a href="#!"><img class="h-full w-full object-cover" src="{{ asset('img/AdSamples/ad22-AAA.jpeg') }}" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

@push('js')
<script>
    window.addEventListener('scrollDown', () => {
        let container = document.querySelector('#conversation');
        container.scrollTop = container.scrollHeight;
    });
</script>
@endpush
    {{-- <script>
        window.addEventListener('scrollDown', () => {
             let container = document.querySelector('#conversation');
             container.scrollTop container.scrollHeight;
        });
    </script> --}}

    {{-- <script>
        let container = document.querySelector('#conversation');
        window.addEventListener('DOMContentLoaded', () => {
                scrollDown();
        });
        window.addEventListener('scrollDown', () => {
            Livewire.hook('message.processed', () => {
                if (container.scrollTop + container. + 100 < container.scrollHeight) {
                    return;
                }
                scrollDown();
            });
        });

        function scrollDown() {
            container.scrollTop = container.scrollHeight;
        }
    </script> --}}




