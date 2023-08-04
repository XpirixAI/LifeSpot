@extends('lifespot.mylifespot.mylifespot_layout')
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
@section('mylifespot')
<a class="flex text-sm text-blue-800 font-semibold mb-4" href="{{ route('mylifespot.home_property.property') }}">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-blue-800 font-semibold">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
     Go Back
</a>
<ul class="grid grid-cols-8 md:grid-cols-10 gap-4">
    <li class="row-start-1 lg:row-span-3 col-span-4 lg:col-span-2">
        <div class="flex space-x-5 mb-2">
            <h1 class="font-black text-xl">
                Asset
            </h1>
        </div>
        <img class="rounded-lg h-36 w-40 object-cover" src="{{ (!empty($asset->thumbnail))? asset($asset->thumbnail):url('thumbnails/default.jpeg') }}" alt="no image">
        <div class="mt-4 space-y-2 pl-5">
            <a href="{{ route('mylifespot.home_property.asset_edit',$asset->id) }}" class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
                <span class="text-blue-500">Edit</span>
            </a>
            <div x-data="{open: false}" >
                <form method="POST" action="{{ route('store.mulit.image',$asset->id) }}" enctype="multipart/form-data" multiple="" class="border-none">
                    @csrf
                    <label @click="open=!open"  for="image" class="ml-2 text-blue-500 whitespace-nowrap cursor-pointer">
                        Add Photos
                    </label>
                    {{-- <label @click="open=!open" for="image" class="ml-2 text-blue-500 whitespace-nowrap cursor-pointer">
                        Upload Documents
                    </label> --}}
                    <input x-show="open" name="multi_image[]" class="xhidden" type="file" id="image" multiple="">

                   <div x-show="open"  class="flex space-x-3">


                        <input @click="open=!open" type="submit" class="rounded-lg bg-blue-700 text-white px-4 py-1 mt-3" value="Add Files">
                        <button @click="open=!open" type="reset"  class="rounded-lg bg-gray-700 text-white px-4 py-1 mt-3">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </li>


    <li class="hidden lg:block lg:row-span-4 lg:col-start-9 col-span-2">
        <div class="h-72 bg-blue-50 rounded-xl p-6">
            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
            <h3 class="text-black font-black">Why is this information important?</h3>
            <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
        </div>
    </li>

    <div class="row-start-3 col-span-3 lg:row-start-1 lg:col-start-3 lg:col-span-2 text-right items-center space-y-3">
        <p class="text-gray-800 whitespace-nowrap">Asset Name:</p>
        <p class="text-gray-800 whitespace-nowrap">Asset Location:</p>
        <p class="text-gray-800 whitespace-nowrap">Value Estimate:</p>


    </div>

    <div class="row-start-3 col-span-2 lg:row-start-1 lg:col-start-5  lg:col-span-3 items-center space-y-3">
        <p class="text-gray-500">{{ Str::limit($asset->name, 25, '...') }}</p>

        <p class="text-gray-500 whitespace-nowrap">{{ Str::limit($asset->location, 25, '...') }}</p>

        <p class="text-gray-500">${{ Str::limit($asset->value, 25, '...') }}</p>
    </div>
</ul>

<hr class="my-3">
<div class="items-center space-y-3">
    <h3>Additional Information Related To This Asset </h3>
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
                <form method="POST" action="{{ route('destroy.mulit.image',$additionalAsset->id)  }}">
                    @csrf
                    @method('DELETE')
                    <button class="absolute left-0 bottom-0 rounded-full bg-white p-1"onclick="return confirm('Are you sure you want to delete this?')">
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




<!--Modal Testing -->
@foreach ($additionalAssets as $additionalAsset)

  <!-- Main modal -->
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

<ul class="md:col-span-12 lg:col-span-3 col-span-12 mb-12 mt-8 space-y-8">
    <li class="h-72 bg-blue-50 rounded-xl p-6">
        <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
        <h3 class="text-black font-black text-xl">Advertise Here</h3>
        <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
    </li>
</ul>

<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
@endsection

