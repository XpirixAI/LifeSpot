@extends('lifespot.mylifespot.mylifespot_layout')
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />

@section('mylifespot')

{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<a class="flex text-sm text-blue-800 font-semibold mb-4" href="{{ route('mylifespot.family.dependents') }}">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-blue-800 font-semibold">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
     Go Back
</a>


<div class="grid grid-cols-1 lg:grid-cols-5 gap-x-2 gap-y-3 lg:grid-flow-row-dense">
    <div class="xbg-red-500 rounded-lg xshadow-xl min-h-20 row-span-6">
        <div class="flex space-x-8 mb-2">

                <h1 class="font-black text-xl">
                   Dependent
                </h1>
                   <a href="{{ route('mylifespot.family.edit.dependent',$asset->id) }}" class="flex">
                    <span class="text-blue-500">Edit</span>
                    </a>
        </div>
        <div class="mt-3">
            <img class="rounded-lg lg:min-h-36 lg:max-h-48  lg:w-auto object-cover" src="{{ (!empty($asset->thumbnail))? asset($asset->thumbnail):url('thumbnails/default.jpeg') }}" alt="no image">
        </div>
        <div class="shrink-0 flex items-center ml-4 mt-5">
            <a xhref="">
                <x-jet-application-mark class="block h-9 w-auto" />
            </a>
        </div>

        <hr class="lg:hidden mt-3">
    </div>

    <div class="xbg-orange-500 rounded-lg xshadow-xl min-h-20 row-span-5 col-span-3 mt-5">
        <div class="grid grid-cols-6 gap-2 ">
          <div class="col-span-1 text-right mr-1 xspace-y-3">
            <div class="mb-3 ">Name:</div>
            <div class="">
                <div class="">Address:</div>
                <div class="mb-3 invisible">Address:</div>
            </div>
            <div class="space-y-3.5 mr-1">
                <div class="">Phone:</div>
                <div class="">Email:</div>
                <div class="">Gender:</div>
                <div class="">Birthdate:</div>
                <div class="">Notes:</div>
            </div>
          </div>
          <div class="col-span-5 xspace-y-3 ml-6 lg:ml-0">
            <div class="mb-3 text-gray-500 whitespace-nowrap">{{ Str::limit($asset->fname, 25, '...') }} {{ Str::limit($asset->lname, 50, '...') }}</div>
            <div class="text-gray-500 whitespace-nowrap">
                {{ ($asset->address ) != NULL || '' ? $asset->address : '-' }}
                {{ ($asset->address2 ) != NULL || '' ?  $asset->address2 : '-' }}</div>
            <div class="text-gray-500 mt-0 mb-3"> {{ ($asset->city ) != NULL || '' ? $asset->city .',': '-' }}
                {{ ($asset->st ) != NULL || '' ? $asset->st : '-' }} &nbsp;
                {{ ($asset->zip ) != NULL || '' ? $asset->zip : '-' }}</div>
           <div class="space-y-3.5">
            <div class="text-gray-500">{{ ($asset->phone) != NULL || '' ? $asset->phone : '-' }}</div>
            <div class="text-gray-500 whitespace-nowrap">{{ ($asset->email) != NULL || '' ? $asset->email : '-' }}</div>
            <div class="text-gray-500 whitespace-nowrap">{{ ($asset->gender) != NULL || '' ? $asset->gender : '-' }}</div>
            <div class="text-gray-500">
                {{ ($asset->birth_month ) != NULL || '' ? $asset->birth_month : '-' }}/
                {{ ($asset->birth_day   ) != NULL || '' ? $asset->birth_day   : '-' }}/
                {{ ($asset->birth_year  ) != NULL || '' ? $asset->birth_year  : '-' }}</div>
            <div class="text-gray-500">{{ ($asset->notes_wishes) != NULL || '' ? $asset->notes_wishes : '-' }}</div>
           </div>
          </div>
        </div>
    </div>

    <div class="xbg-yellow-500 rounded-lg min-h-56 row-span-4">
        {{-- <div class="hidden lg:block lg:row-span-3 lg:col-start-9 col-span-2"> --}}
            <div class="min-h-72 bg-blue-50 rounded-xl p-6">
                <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                <h3 class="text-black font-black">Why is this information important?</h3>
               <p class="mt-2 text-xs">A <span class="font-bold underline">dependent</span> is someone who relies on another person for financial support, such as for housing, food, clothing, necessities, and more.</p><p class="font-semibold">Protect Them!</p>
            </div>
        {{-- </div> --}}
    </div>



</div>



<div class="hidden border rounded-md bg-gray-50 p-4 mt-3">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
        <div x-data="{guardianInfoOpen:false}">
            <button @click.prevent="guardianInfoOpen =!guardianInfoOpen" class="bg-sky-700 text-white px-4 py-2 rounded-md xflex xspace-x-2 mb-3">
                <h5>Guardian</h5>
            </button>


            <div x-show="guardianInfoOpen">
                @isset($guardian[0])
                    <span class="font-semibold text-lg">{{ $guardian[0]->fname }} {{ $guardian[0]->lname }}</span>
                    <p class="underline">Contact Info</p>
                        <p>{{ $guardian[0]->email }}</p>
                        <p>{{ $guardian[0]->phone }}</p>
                    <p class="underline mt-2">Mailing Address </p>
                        <p>123 N. Main St</p>
                        <p>Franklin, Mississippi  MO</p>
                        @else
                        <a href="#!">Add Guardian</a>
                        <form action="">
                            <div>
                                <label for="fname">First Name</label>
                                <input type="text" name="fname">
                            </div>
                            <div>
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname">
                            </div>
                            <button>Add Guardian</button>
                        </form>
                        @endisset
            </div>

        </div>

        <div x-data="{medicalInfoOpen:false}">
            <button @click.prevent="medicalInfoOpen =!medicalInfoOpen" class="bg-sky-700 text-white px-4 py-2 rounded-md xflex xspace-x-2 mb-3">
                <h5>Medical</h5>
            </button>
            <div x-show="medicalInfoOpen">
                <span class="font-semibold text-lg">Dr. Suzy Smith </span>
                <p class="underline">Contact Info</p>
                    <p></p>
                    <p></p>
                <p class="underline mt-2">Doctor </p>
                    <p>123 N. Main St</p>
                    <p>Franklin, Mississippi  MO</p>
            </div>
        </div>
    </div>
    <p class="text-gray-800 whitespace-nowrap">Guardian
        @isset($guardian[0])
             <button type="button" data-bs-toggle="modal" data-bs-target="#viewGuardianModal"  class="bg-sky-800 text-white text-xs rounded-md  px-1 py-1">View</button>
             @else
             <button type="button" data-bs-toggle="modal" data-bs-target="#guardianModal" class="bg-sky-800 text-white text-xs rounded-md  px-1.5 py-1">Add</button>
        @endisset
        :
    </p>
    <p class="text-gray-800 whitespace-nowrap">Medical Info
        @isset($medical[0])
            <button class="bg-sky-800 text-white text-xs rounded-md  px-1 py-1">View</button>
             @else
             <button class="bg-sky-800 text-white text-xs rounded-md  px-1.5 py-1">Add</button>
        @endisset
        :
    </p>
    <p class="text-gray-800 whitespace-nowrap">School Info
        @isset($school[0])
             <button class="bg-sky-800 text-white text-xs rounded-md  px-1 py-1">View</button>
             @else
             <button class="bg-sky-800 text-white text-xs rounded-md  px-1.5 py-1">Add</button>
        @endisset
        :
    </p>

</div>

<!--Additional Information Related to this Dependent -->
@include('livewire.guardianmodal')
<div>
    <hr class="mt-6 pb-4 mb-3">

    <div class="items-center space-y-3">
        <h3 class="font-semibold text-lg">Additional Information Related To <span class="">{{ Str::limit($asset->fname, 25, '...') }}</span> </h3>

        <div class="mt-2 space-y-3 col-span-5">
            <div class="xbg-gray-400 grid grid-cols-7 lg:grid-cols-12 gap-0 lg:gap-4">
                <div class="xbg-green-400 col-span-3 lg:col-span-2 text-right space-y-3">
                    <p class="text-gray-800 whitespace-nowrap">Guardian
                        <livewire:guardian $asset="asset">
                        @isset($guardian[0])
                             <button type="button" data-bs-toggle="modal" data-bs-target="#viewGuardianModal"  class="bg-sky-800 text-white text-xs rounded-md  px-1 py-1">View</button>
                             @else
                             <button type="button" data-bs-toggle="modal" data-bs-target="#guardianModal" class="bg-sky-800 text-white text-xs rounded-md  px-1.5 py-1">Add</button>
                        @endisset
                        :
                    </p>
                    <p class="text-gray-800 whitespace-nowrap">Medical Info
                        @isset($medical[0])
                            <button class="bg-sky-800 text-white text-xs rounded-md  px-1 py-1">View</button>
                             @else
                             <button class="bg-sky-800 text-white text-xs rounded-md  px-1.5 py-1">Add</button>
                        @endisset
                        :
                    </p>
                    <p class="text-gray-800 whitespace-nowrap">School Info
                        @isset($school[0])
                             <button class="bg-sky-800 text-white text-xs rounded-md  px-1 py-1">View</button>
                             @else
                             <button class="bg-sky-800 text-white text-xs rounded-md  px-1.5 py-1">Add</button>
                        @endisset
                        :
                    </p>
                </div>
                <div class="xbg-blue-400 col-span-4 lg:col-span-9 text-left ml-1 space-y-3">
                    <p class="text-gray-500">
                        @isset($guardian[0])
                            {{ $guardian[0]->fname }} {{ $guardian[0]->lname }}
                            @else <span>-</span>
                        @endisset
                    </p>
                     <p class="text-gray-500">
                        @isset($medical[0])

                            @else <span>-</span>
                        @endisset
                    </p>
                    <p class="text-gray-500">
                        @isset($medical[0])

                            @else <span>-</span>
                        @endisset
                    </p>
                </div>
            </div>

        </div>
        <div x-data="{open: false}" >
            <form method="POST" action="{{ route('store.multi.image.dependent',$asset->id) }}" enctype="multipart/form-data" multiple="" class="border-none">
                @csrf
                <label @click="open=!open"  for="image" class="xml-2 text-blue-500 whitespace-nowrap cursor-pointer">
                    Add Documents and Photos
                </label>
                <input x-show="open" name="multi_image[]" class="xhidden" type="file" id="image" multiple="">

               <div x-show="open"  class="flex space-x-3">


                    <input @click="open=!open" type="submit" class="rounded-lg bg-blue-700 text-white px-4 py-1 mt-3" value="Add Files">
                    <button @click="open=!open" type="reset"  class="rounded-lg bg-gray-700 text-white px-4 py-1 mt-3">Cancel</button>
                </div>
            </form>
        </div>

        <div class="ml-5">
            <div class="items-center mr-2 mb-3">
                <h5 class="font-black text-gray-400 text-xs uppercase mb-2">Documents & Photos <span>({{ $additionalAssets->count() }})</span>
                </h5>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-6 gap-4">
                @foreach ($additionalAssets as $additionalAsset)
                <div class="relative">
                <!-- Modal toggle -->
                    <button type="button" data-modal-toggle="{{ $additionalAsset->id }}"> <img class="h-24 w-28 rounded object-cover" src="{{ asset($additionalAsset->multi_image) }}" alt=""></button>
                    <form method="POST" action="{{ route('destroy.mulit.image.dependent',$additionalAsset->id)  }}">
                        @csrf
                        @method('DELETE')
                        <button class="absolute left-0 bottom-0 rounded-full bg-white p-1" onclick="return confirm('Are you sure you want to delete this?')">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-blue-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </form>
                </div>
                @endforeach

            </div>
        </div>
    </div>






    <!--Modal for Additional Information -->
    @foreach ($additionalAssets as $additionalAsset)

    <!-- Main modal for Additional Assets (photos/documents) -->
    <div id="{{ $additionalAsset->id }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        {{-- Terms of Service --}}
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="{{ $additionalAsset->id }}">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <img class="w-full h-auto" src="{{ asset($additionalAsset->multi_image) }}" alt="">
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    {{-- <button data-modal-toggle="{{ $additionalAsset->id }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button> --}}
                    <button data-modal-toggle="{{ $additionalAsset->id }}" type="button" class="text-right text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Close</button>
                </div>
            </div>
        </div>
    </div>

    @endforeach
</div>

  <!-- Modal for Guardian Info -->
<div wire:ignore.self  id="Add_guardian_idforThisDependent" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    <span class="text-sky-700 font-semibold">{{ $asset->fname }}'s Guardian!</span>
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="Add_guardian_idforThisDependent">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                {{-- <livewire:guardian [:asset="$asset", :dependentGuardian="$guardian"]> --}}
                {{-- <livewire:edit-guardian :asset="$asset"> --}}
                {{-- <livewire:edit-guardian :asset="$asset"> --}}

                <!-- Modal footer -->
                <div class="flex items-center p-3 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    {{-- <button data-modal-toggle="Add_guardian_idforThisDependent" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button> --}}
                    <button data-modal-toggle="Add_guardian_idforThisDependent" type="button" class="text-right text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Close / Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div wire:ignore.self  id="Edit_guardian_idforThisDependent" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    <span class="text-sky-700 font-semibold">Update {{ $asset->fname }}'s Guardian!</span>
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="Edit_guardian_idforThisDependent">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                {{-- <livewire:guardian :asset="$asset"> --}}
                {{-- <livewire:edit-guardian :asset="$guardian[0]"/> --}}
                    {{-- <livewire:edit-guardian :asset="$asset"> --}}


                <!-- Modal footer -->
                <div class="flex items-center p-3 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    {{-- <button data-modal-toggle="Edit_guardian_idforThisDependent" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button> --}}
                    <button data-modal-toggle="Edit_guardian_idforThisDependent" type="button" class="text-right text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Close / Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Modal for Dependent's Medical Info  -->
<div id="medical_idforThisDependent" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    <span class="text-sky-700 font-semibold">{{ $asset->fname }}'s Medical Information!</span>
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="medical_idforThisDependent">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                {{-- <livewire:guardian> --}}

                <!-- Modal footer -->
                <div class="flex items-center p-3 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    {{-- <button data-modal-toggle="medical_idforThisDependent" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button> --}}
                    <button data-modal-toggle="medical_idforThisDependent" type="button" class="text-right text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Close / Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Modal for Dependent's school Info  -->
  <div id="school_idforThisDependent" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    <span class="text-sky-700 font-semibold">{{ $asset->fname }}'s Medical Information!</span>
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="school_idforThisDependent">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                {{-- <livewire:guardian> --}}

                <!-- Modal footer -->
                <div class="flex items-center p-3 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    {{-- <button data-modal-toggle="school_idforThisDependent" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button> --}}
                    <button data-modal-toggle="school_idforThisDependent" type="button" class="text-right text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Close / Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Modal for Dependent's activities Info  -->
  <div id="activities_idforThisDependent" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    <span class="text-sky-700 font-semibold">{{ $asset->fname }}'s Activies, Clubs and Information!</span>
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="activities_idforThisDependent">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                {{-- <livewire:guardian> --}}

                <!-- Modal footer -->
                <div class="flex items-center p-3 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    {{-- <button data-modal-toggle="activities_idforThisDependent" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button> --}}
                    <button data-modal-toggle="activities_idforThisDependent" type="button" class="text-right text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Close / Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>


<ul class="md:col-span-12 lg:col-span-3 col-span-12 mb-12 mt-8 space-y-8">
    <li class="h-72 bg-blue-50 rounded-xl p-6">
        <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
        <h3 class="text-black font-black text-xl">Advertise Here</h3>
        <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
    </li>
</ul>

<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
@endsection
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> --}}

{{-- <script>
    window.addEventListener('close-modal', event => {

        $('#studentModal').modal('hide');
        $('#updateStudentModal').modal('hide');
        $('#deleteStudentModal').modal('hide');
    })
</script> --}}

{{-- <div class="grid grid-cols-10 gap-x-2 gap-y-3 grid-flow-row-dense mt-2">
    <div class="bg-red-500 rounded-lg shadow-xl h-20 col-span-2 row-span-3"></div>
    <div class="bg-orange-500 rounded-lg shadow-xl h-20"></div>
    <div class="bg-yellow-500 rounded-lg shadow-xl min-h-20 row-span-2 col-span-2"></div>
    <div class="bg-green-500 rounded-lg shadow-xl h-20"></div>
    <div class="bg-teal-500 rounded-lg shadow-xl h-20"></div>
    <div class="bg-blue-500 rounded-lg shadow-xl h-20"></div>
    <div class="bg-indigo-500 rounded-lg shadow-xl h-20"></div>
    <div class="bg-purple-500 rounded-lg shadow-xl h-20"></div>
    <div class="bg-pink-500 rounded-lg shadow-xl h-20"></div>
    <div class="bg-slate-500 rounded-lg shadow-xl h-20"></div>
    <div class="bg-red-500 rounded-lg shadow-xl h-20"></div>
    <div class="bg-orange-500 rounded-lg shadow-xl h-20 col-span-3"></div>
    <div class="bg-yellow-500 rounded-lg shadow-xl min-h-20 row-span-2 col-span-2"></div>
    <div class="bg-green-500 rounded-lg shadow-xl h-20"></div>
    <div class="bg-teal-500 rounded-lg shadow-xl h-20"></div>
    <div class="bg-blue-500 rounded-lg shadow-xl h-20"></div>
    <div class="bg-indigo-500 rounded-lg shadow-xl h-20"></div>
    <div class="bg-purple-500 rounded-lg shadow-xl h-20"></div>
    <div class="bg-pink-500 rounded-lg shadow-xl h-20"></div>
    <div class="bg-slate-500 rounded-lg shadow-xl h-20"></div>
</div> --}}














