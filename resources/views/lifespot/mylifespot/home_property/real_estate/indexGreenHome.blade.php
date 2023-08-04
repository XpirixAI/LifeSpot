@extends('lifespot.mylifespot.home_property.home_property_layout')
@section('property')

<li class="mx-2 mb-5">
    <a href="{{ route('mylifespot.home_property.add.real_estate') }}" class="flex justify-center h-40 items-center bg-gray-50 rounded-xl border border-gray-100 p-2">
        <div class="rounded-lg bg-white max-w-sm">
            <div class="bg-gray-50 max-w-sm r">

                    <img class="h-20 w-20 object-cover text-gray-500 bg-white mx-8" src="{{ asset('img/add_home.jpeg') }}" alt=""/>

                    <div class="text-center p-3">
                        <h5 class="text-blue-900 text-xs font-bold mb-1">Add a Home</h5>
                    </div>
            </div>
        </div>
    </a>
</li>

@foreach ($assets as $asset)
    <li class="relative mx-2 mb-5">
        <a href="{{ route('mylifespot.home_property.realestate', $asset->id) }}" class="flex justify-center h-40  rounded-xl border border-gray-100 p-6">
            <div class="rounded-lg bg-white max-w-sm">
                <p class="flex justify-center">
                    <img class="rounded-full h-12 w-12 object-cover"
                    src="{{ (!empty($asset->thumbnail))? url($asset->thumbnail):asset('thumbnails/default.jpeg') }}" alt="no image">
                </p>
                <div class="text-center p-3">
                    <h5 class="text-blue-900 text-xs font-bold mb-1">{{ Str::limit($asset->name, 14,' ...' ) }}</h5>
                        <p class="text-gray-700 text-xs">
                        {{ Str::limit($asset->location, 50, '...') }}
                        </p>
                </div>
            </div>
            <form method="POST" action="{{ route('mylifespot.home_property.destroy.real_estate',$asset->id) }">
                @csrf
                @method('DELETE')

                <button class="absolute right-1 bottom-1 text-xs text-gray-400" onclick="return confirm('Are you sure you want to delete this?')"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5  h-5 text-blue-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
                </button>
            </form>
        </a>
    </li>
@endforeach
@endsection
