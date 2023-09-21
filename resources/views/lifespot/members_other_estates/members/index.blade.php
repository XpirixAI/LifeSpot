@extends('lifespot_layout')

@section('content')
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <div 
        x-cloak
        x-data="data"
        @keydown.escape="isInviteModalOpen = false"
        class="pt-6 px-6"
    >
        <div class="flex flex-row justify-start items-center mb-4">
            <h1 class="font-black text-xl">Members & Other Estates</h1>
        </div>
        
        <div class="grid lg:grid-cols-4 gap-4 mt-5">
            <div class="lg:col-span-3">
                <div class="w-full grid grid-cols-4 gap-4 mb-2">
                    <div class="col-span-2">
                        <form method="GET" action="{{route('mymembers')}}" class="w-full">
                            @csrf()
                            @method('GET')
                            <select
                                name="estate_id"
                                onchange="this.form.submit()"
                                class="w-full focus:ring-blue-500 focus:border-blue-500 block sm:text-sm border-gray-300 rounded-md"
                            >
                                <option
                                    value="{{Auth::user()->id}}"
                                    {{ $selected_estate == Auth::user()->id ? 'selected' : ''}}
                                >
                                    The {{Auth::user()->name}} Family Estate
                                </option>
                                @foreach ($owners as $owner)
                                    <option
                                        {{ $selected_estate == $owner->id ? 'selected' : ''}}
                                        value="{{$owner->id}}"
                                    >
                                        The {{$owner->name}} Family Estate
                                    </option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                    <div class="col-span-2 flex items-center justify-end">
                        <a href="#!" class="flex space-x-2 font-bold items-center text-blue-700 pr-8 lg:my-0 my-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-700 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Add an Estate</span>
                        </a>
                    </div>
                    <div class="col-span-2">
                        <form>
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </div>
                                <input type="search" id="default-search" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Members..." required="">
                            </div>
                        </form>
                    </div>
                    <div class="col-span-2 flex items-center justify-end">
                        <button @click="toggleIsInviteModalOpen" type="button" href="#!" class="flex space-x-2 font-bold items-center text-blue-700 pr-8 lg:my-0 my-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-700 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <span>Invite a New Member</span>
                        </button>
                    </div>
                </div>

                @if(!$is_owned_by_current_user)
                    <div class="w-full flex justify-end">
                        <button @click="toggleIsSharedDocumentsModalOpen" type="button" href="#!" class="flex space-x-2 font-bold items-center text-blue-700 pr-8 lg:my-0 my-4">
                            <span>View Shared Documents</span>
                        </button>
                    </div>
                @endif

                <div class="grid lg:grid-cols-2 gap-4">
                    <div>
                        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                            <div class="text-gray-900 text-xl leading-tight font-medium mb-8">
                                <div class="flex justify-between">
                                    <div class="flex space-x-2">
                                        <img class="h-12 w-12 rounded-full" src="{{ (!empty(Auth::user()->profile_photo_path)) ? url('upload/admin_images/'.Auth::user()->profile_photo_path) : url('upload/no_image.png') }}" alt="Profile Image">
                                        <div class="text-sm">
                                            <span  class="font-bold text-blue-900">
                                                {{ Auth::user()->fname }} {{ Auth::user()->lname }}
                                            </span>
                                            <div class="text-gray-700">LifeSpot Owner</div>
                                            {{-- <div class="flex px-2 pt-1 bg-gray-100 whitespace-nowrap text-gray-500 font-bold text-xs leading-tight uppercase rounded-full shadow-md">
                                                Overview
                                            </div> --}}
                                        </div>
                                    </div>
                                    <a href="#!" class="text-2xl font-bold text-right">...</a>
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="flex space-x-2 pr-2">
                                    {{-- <a href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                        </svg>
                                    </a> --}}
                                    @if(!$is_owned_by_current_user)
                                        <button type="button" @click="toggleIsDocumentPermissionsModalOpen">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                            </svg>
                                        </button>
                                    
                                        <a href="#!">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                            </svg>
                                        </a>
                                    @endif
                                    {{-- <a href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                        </svg>
                                    </a> --}}
                                </div>
                                <div class="flex justify-end">
                                    <button type="button" class="flex  px-2 pt-1 bg-blue-100 whitespace-nowrap text-blue-900 font-bold text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-200 hover:shadow-lg focus:bg-blue-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-300 active:shadow-lg transition duration-150 ease-in-out">Lorem Ipsum
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-2 pb-1">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach ($relations as $rel)
                        <div class="">
                            <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm {{$rel['user']->id == Auth::user()->id ? 'border-blue-500 border-2' : ''}}">
                                <div class="text-gray-900 text-xl leading-tight font-medium mb-8">
                                    <div class="flex justify-between">
                                        <div class="flex space-x-2">
                                            <img class="h-12 w-12 rounded-full" src="{{ (!empty($rel['user']->profile_photo_path)) ? asset('upload/admin_images/'.$rel['user']->profile_photo_path) : url('upload/no_image.png') }}" alt="Profile Image">
                                            <div class="text-sm">
                                                <span  class="font-bold text-blue-900">
                                                    {{ $rel['user']->name }}
                                                </span>
                                                <div class="text-gray-700">{{ $rel['info']->title }}</div>
                                            <div  class="flex px-2 pt-1 bg-gray-100 whitespace-nowrap text-gray-500 font-bold text-xs leading-tight uppercase rounded-full shadow-md">Overview
                                            </div>
                                            </div>
                                        </div>
                                        <a href="#!" class="text-2xl font-bold text-right">...</a>
                                    </div>
                                </div>

                                <div class="flex justify-between">
                                    <div class="flex space-x-2 pr-2">
                                        {{-- <a href="#!">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                            </svg>

                                        </a> --}}
                                        @if($is_owned_by_current_user)
                                            <button type="button" @click="toggleIsDocumentPermissionsModalOpen({{$rel['user']->id}})">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                                </svg>
                                            </button>
                                        @endif
                                        <a href="#!">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                            </svg>
                                        </a>
                                        {{-- <a href="#!">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                            </svg>

                                        </a> --}}
                                    </div>
                                    <div class="flex justify-end">
                                        <button type="button" class="flex  px-2 pt-1 bg-blue-100 whitespace-nowrap text-blue-900 font-bold text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-200 hover:shadow-lg focus:bg-blue-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-300 active:shadow-lg transition duration-150 ease-in-out">Lorem Ipsum
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-2 pb-1">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="hidden md:block space-y-4">
                <div class="h-72 overflow-y-auto bg-blue-50 rounded-xl p-6">
                    <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                    <h3 class="text-black font-black">Why is this information important?</h3>
                    <p class="mt-2 text-xs">New members in your Lifespot account can include friends, family, and estate appointed members. Friends and family can be added to the account as part of the primary user’s network of contacts. Estate appointed members are typically people such as a family member, lawyer, or financial advisor who are responsible for managing your estate in the event of death or incapacity. These members can be added to the account to ensure that the user’s wishes are carried out and that the estate is managed properly. When the user adds an estate appointed member to the account, with Lifespot, they can set permissions for that member to access certain information, documents, and financial accounts associated with the user’s estate. This will help to ensure that the user’s wishes are followed and that the estate is managed effectively. Have Fun!</p>
                </div>
            </div>
        </div>

        {{-- START INVITE USER MODAL --}}
        <div
            x-cloak
            x-show="isInviteModalOpen"
            style="background-color: rgba(0, 0, 0, .5)"
            class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
        >
            <div
                @click.away="toggleIsInviteModalOpen()"
                x-transition:enter="motion-safe:ease-out duration-500"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                class="xmax-w-3xl px-5 py-4 mx-auto text-left bg-white rounded-xl shadow-lg"
            >
                <label for="email_invite" class="font-semibold text-sm mb-2">Invite By Email</label>
                <input id="email_invite" class="block mb-5 rounded-md" name="email" type="email" placeholder="john.doe@gmail.com" />
                <label for="relationship_type" class="font-semibold text-sm mb-2">Relationship In Your Estate</label>
                <select id="relationship_type" class="block mb-5 rounded-md w-full" name="relationship_type">
                    <option value="" disabled selected>Select An Option</option>
                    @foreach ($rel_types as $rel)
                        <option value="{{$rel->id}}">{{$rel->title}}</option>
                    @endforeach
                </select>
                <button type="button" class="btn bg-blue-500 p-3 rounded-lg text-white float-right" @click="submitInvite">Submit</button>
            </div>
        </div>
        {{-- END INVITE USER MODAL --}}

        {{-- START SHARED DOCUMENTS MODAL --}}
        <div
            x-cloak
            x-show="isSharedDocumentsModalOpen"
            style="background-color: rgba(0, 0, 0, .5)"
            class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
        >
            <div
                @click.away="toggleIsSharedDocumentsModalOpen()"
                x-transition:enter="motion-safe:ease-out duration-500"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                class="xmax-w-3xl px-5 py-4 mx-auto text-left bg-white rounded-xl shadow-lg"
            >
                <h1>Shared Documents</h1>
            </div>
        </div>
        {{-- END SHARED DOCUMENTS MODAL --}}

        {{-- START DOCUMENT PERMISSIONS MODAL --}}
        <div
            x-cloak
            x-show="isDocumentPermissionsModalOpen"
            {{-- x-trap.noscroll="open" --}}
            style="background-color: rgba(0, 0, 0, .5)"
            class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
        >
            <div
                @click.away="toggleIsDocumentPermissionsModalOpen()"
                x-transition:enter="motion-safe:ease-out duration-500"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                class="xmax-w-5xl px-5 py-4 mx-auto text-left bg-white rounded-xl shadow-lg"
            >
                <div class="max-h-36 overflow-y-scroll">
                    <h3 class="border-b-4 mb-4">Document Permissions</h1>
                    <div>
                        <div class="mb-6">
                            <div class="flex justify-start items-center my-4">
                                <input
                                    id="all_documents_checkbox"
                                    type="checkbox"
                                    class="rounded-full mr-2"
                                    name="all-documents"
                                />
                                <label for="all_documents_checkbox">ALL DOCUMENTS</label>
                            </div>
                            @foreach($default_file_categories as $cat)
                                <div class="border-b-2 w-full min-w-32 mb-2">
                                    <button
                                        type="button"
                                        class="w-full"
                                        onclick="toggleAccordion({{$cat->id}}, true)"
                                    >
                                        <div
                                            id="default_doc_category_{{$cat->id}} w-full"
                                            class="flex justify-between items-center"
                                        >
                                            <div class="flex justify-start items-center">
                                                <input
                                                    type="checkbox"
                                                    name="default_cat_{{$cat->id}}"
                                                    class="cat_checkbox mr-2 rounded-full"
                                                    onclick="checkCategory({{$cat->id}}, true)"
                                                    id="default_cat_{{$cat->id}}"
                                                />
                                                <label for="default_cat_{{$cat->id}}" >{{$cat->title}}</label>
                                            </div>
                                            <div id="default_doc_category_{{$cat->id}}_chevron_down">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                </svg>
                                            </div>
                                            <div id="default_doc_category_{{$cat->id}}_chevron_up" class="hidden">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                                </svg>

                                            </div>
                                        </div>
                                    </button>
                                    <div id="default_doc_category_content_{{$cat->id}}" class="doc_permissions_modal_accordion_content hidden my-4">
                                        @if(count($files->filter(function($file) use ($cat) { return $file->category == $cat->id && !$file->is_custom_category; })) >= 1)
                                            @foreach($files as $file)
                                                @if($file->category == $cat->id && !$file->is_custom_category)
                                                    <div class="flex justify-between items-center">
                                                        <label for="default_cat_file_{{$file->id}}">{{$file->title}}</label>
                                                        <input
                                                            id="default_cat_file_{{$file->id}}"
                                                            type="checkbox"
                                                            name="default_cat_file_{{$file->id}}"
                                                            class="default_cat_{{$cat->id}}_file_checkbox file_checkbox rounded-full"
                                                        />
                                                    </div>
                                                @endif
                                            @endforeach 
                                        @else
                                            <div>No Files</div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                            @foreach($custom_file_categories as $cat)
                                <div class="border-b-2 w-full min-w-32 mb-2">
                                    <button
                                        type="button"
                                        class="w-full"
                                        onclick="toggleAccordion({{$cat->id}}, false)"
                                    >
                                        <div
                                            id="custom_doc_category_{{$cat->id}} w-full"
                                            class="flex justify-between"
                                        >
                                            <div class="mr-6 flex justify-start items-center">
                                                <input
                                                    id="custom_cat_{{$cat->id}}"
                                                    type="checkbox"
                                                    name="custom_cat_{{$cat->id}}"
                                                    class="cat_checkbox mr-2 rounded-full"
                                                    onclick="checkCategory({{$cat->id}}, false)"
                                                />
                                                <label for="custom_cat_{{$cat->id}}">
                                                    {{$cat->title}}
                                                </label>
                                            </div>
                                            <div id="custom_doc_category_{{$cat->id}}_chevron_down">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                </svg>
                                            </div>
                                            <div id="custom_doc_category_{{$cat->id}}_chevron_up" class="hidden">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                                </svg>

                                            </div>
                                        </div>
                                    </button>
                                    <div id="custom_doc_category_content_{{$cat->id}}" class="doc_permissions_modal_accordion_content hidden my-4">
                                        @if(count($files->filter(function($file) use ($cat) { return $file->category == $cat->id && $file->is_custom_category; })) >= 1)
                                            @foreach($files as $file)
                                            @if($file->category == $cat->id && $file->is_custom_category)
                                                    <div class="flex justify-between items-center">
                                                        <label for="custom_cat_file_{{$file->id}}">
                                                            {{$file->title}}
                                                        </label>
                                                        <input
                                                            id="custom_cat_file_{{$file->id}}"
                                                            type="checkbox"
                                                            name="custom_cat_file_{{$file->id}}"
                                                            class="custom_cat_{{$cat->id}}_file_checkbox file_checkbox rounded-full"
                                                        />
                                                    </div>
                                                @endif
                                            @endforeach
                                        @else
                                            <div>No Files</div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <input type="hidden" id="doc_permissions_user_id" name="doc_permissions_user_id" />
                        <button
                            type="button"
                            class="btn bg-blue-500 p-2 rounded-lg text-white float-right"
                            @click="submitDocumentPermissions()"
                        >
                            Update Permissions
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- END DOCUMENT PERMISSIONS MODAL --}}
    </div>
@endsection

@push('js')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('data', () => ({
                isDocumentPermissionsModalOpen: false,
                toggleIsDocumentPermissionsModalOpen(user_id) {
                    if(!this.isDocumentPermissionsModalOpen) {
                        $('#doc_permissions_user_id').val(user_id);
                        $.ajax({
                            context: this,
                            url: "{{ route('get.user.document.permissions') }}",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                doc_viewer_id: user_id,
                            },
                            type: "GET",
                            success: function (data) {       
                                console.log('data.doc_permissions:', data.doc_permissions);           
                                data.doc_permissions.forEach(filePerm => {
                                    if($('#custom_cat_file_' + filePerm.doc_id).length) {
                                        $('#custom_cat_file_' + filePerm.doc_id).prop('checked', true);
                                    } else if($('#default_cat_file_' + filePerm.doc_id).length) {
                                        $('#default_cat_file_' + filePerm.doc_id).prop('checked', true)
                                    } else {
                                        console.log("no input found");
                                    }
                                })
                                this.isDocumentPermissionsModalOpen = true;
                            }
                        });
                    }
                    else {
                        $('#doc_permissions_user_id').val('');
                        $('.doc_permissions_modal_accordion_content').addClass('hidden');
                        this.isDocumentPermissionsModalOpen = false;
                    }
                },
                submitDocumentPermissions() {
                    // TODO: replace modal content with loading animation.
                    // Do not allow user to click away while loading is occuring.
                    var file_permissions = {};
                    $('.file_checkbox').each(function() {
                        file_permissions[$(this).attr("name")] = $(this).prop('checked');
                    })
                    $.ajax({
                        context: this,
                        url: "{{ route('update.user.document.permissions') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            file_permissions: file_permissions,
                            doc_viewer_id: $('#doc_permissions_user_id').val(),
                        },
                        type: "POST",
                        success: function (data) {                      
                            this.toggleIsDocumentPermissionsModalOpen();
                            // TODO: remove loading animation
                        }
                    });
                },
                isSharedDocumentsModalOpen: false,
                toggleIsSharedDocumentsModalOpen() { this.isSharedDocumentsModalOpen = !this.isSharedDocumentsModalOpen },
                isInviteModalOpen: false,
                toggleIsInviteModalOpen() { this.isInviteModalOpen = !this.isInviteModalOpen },
                submitInvite() {
                    // TODO: replace modal content with loading animation.
                    // Do not allow user to click away while loading is occuring.
                    var email = $('#email_invite').val();
                    var rel = $('#relationship_type').val();
                    $.ajax({
                        context: this,
                        url: "{{ route('dispatch.invite.email') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            email: email,
                            relationship_type: rel,
                        },
                        type: "POST",
                        success: function (data) {                            
                            this.toggleIsInviteModalOpen();
                            $('#email_invite').val('');
                            $('#relationship_type').val('');
                            // TODO: remove loading animation
                        }
                    })
                },
            }));
        });


        // START functions for Document Permission modal, UI
        $(document).ready( function() {
            $('#all_documents_checkbox').on('click', function(e) {
                $('.file_checkbox').prop('checked', e.target.checked);
                $('.cat_checkbox').prop('checked', e.target.checked);
            });
        });
       
        function toggleAccordion(id, isDefaultCategory) {            
            var type_string = isDefaultCategory ? 'default' : 'custom';
            var opening = $('#' + type_string + '_doc_category_content_' + id).hasClass('hidden');
            
            if(opening) {
                $('#' + type_string + '_doc_category_content_' + id).removeClass('hidden');

                $('#' + type_string + '_doc_category_' + id + '_chevron_up').removeClass('hidden');
                $('#' + type_string + '_doc_category_' + id + '_chevron_down').addClass('hidden');
            } else {
                $('#' + type_string + '_doc_category_content_' + id).addClass('hidden');

                $('#' + type_string + '_doc_category_' + id + '_chevron_up').addClass('hidden');
                $('#' + type_string + '_doc_category_' + id + '_chevron_down').removeClass('hidden');
            }
        }

        function checkCategory(id, isDefaultCategory, e) {
            // stop propagation
            if (!e) var e = window.event
            e.cancelBubble = true;
            if (e.stopPropagation) e.stopPropagation();

            // open the accordion if not already open
            var type_string = isDefaultCategory ? 'default' : 'custom';
            var isClosed = $('#' + type_string + '_doc_category_content_' + id).hasClass('hidden');
            if(isClosed) toggleAccordion(id, isDefaultCategory);

            // check or uncheck all inputs in the given category
            $('.' + type_string + '_cat_' + id + '_file_checkbox').prop('checked', e.target.checked);
        }
        // END functions for Document Permission modal, UI
    </script>
@endpush
