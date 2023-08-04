@extends('lifespot.mylifespot.mylifespot_layout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@section('mylifespot')

<form method="POST" action="{{ route('mylifespot.home_property.asset_update',$asset->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    {{-- <ul class="grid grid-cols-8 md:grid-cols-10 gap-4">
        <li class="row-start-1 row-span-3 col-span-2">
            <div class="relative top-0 left-0">
                <img id="showImage" class="object-cover rounded xh-20 xw-auto  mt-5" src="{{ (!empty($asset->thumbnail))? url($asset->thumbnail):url('thumbnails/default.jpeg') }}" alt="Card image cap">

                <input type="hidden" name="oldimage" value="{{ $asset->thumbnail }}">
                <style>
                    .image-upload>input {
                display: none;
                }
                </style>


                <div class="image-upload">

                    <label for="image">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 bg-white cursor-pointer rounded-full p-1 absolute bottom-0 left-0 fill-blue-600 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>

                    </label>
                    <input type="file" name="thumbnail" id="image" value="'{{ old('thumbnail') }}'">
                    @error('thumbnail')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </li>





        <li class="hidden lg:block row-span-4 col-start-9 col-span-2">
            <div class="h-72 bg-blue-50 rounded-xl p-6">
                <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                <h3 class="text-black font-black">Why is this information important?</h3>
                <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
            </div>
        </li>

        <li class="row-start-1 col-span-8 lg:col-span-3 rounded-lg">
                <label for="name" class="block text-sm font-black text-black">Asset Name</label>
                <input type="text" name="name"  autocomplete="name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('name',$asset->name) }}" placeholder="Asset Name">
                @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
        </li>

        <li class="row-start-2 col-span-8 lg:col-span-6 rounded-lg">
                <label for="location" class="block text-sm font-black text-black">Asset Location</label>
                <input type="text" name="location"  autocomplete="location" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                value="{{ old('location',$asset->location) }}" placeholder="My Home Safe">
                @error('location')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
        </li>
        <li class="bg-white row-start-3 col-span-8 lg:col-span-3 rounded-lg">
                <label for="value" class="block text-sm font-black text-black">Value Estimate</label>
                <input type="text" name="value"  autocomplete="value" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('value',$asset->value) }}" placeholder="$">
                @error('value')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
        </li>

        <li class="mt-8 row-start-11 lg:row-start-8 col-start-6 lg:col-start-7">
            <a href="{{ route('mylifespot.home_property.asset', $asset->id) }}" class="border border-gray-400 rounded-lg float-right font-semibold text-xs py-2 px-4">Cancel</a>
        </li>

        <li class="mt-8 row-start-11 lg:row-start-8 col-start-8">
            <button class="bg-[#1f588d] text-white border float-right border-gray-400 rounded-lg font-semibold text-xs py-2 px-5">Save</button>
        </li>

    </ul> --}}

    {{-- <div class="grid lg:grid-cols-5 gap-4">
        <div class="col-span-2 lg:col-span-1 max-h-48 w-auto bg-blue-300">image</div>
        <div class="col-span-4 lg:col-span-3 bg-yellow-300">inputs</div>
        <div class="hidden md:block">Why</div>
    </div> --}}

    <div class="grid lg:grid-cols-5 gap-4">
        <div class="col-span-2 lg:col-span-1 xmax-h-48 xw-auto">
            <div class="relative top-0 left-0 xh-full">
                <img id="showImage" class="object-cover rounded-lg max-h-72 h-auto w-full" src="{{ (!empty($asset->thumbnail))? url($asset->thumbnail):url('thumbnails/default.jpeg') }}" alt="Card image cap">

                <input xclass="rounded-lg xmax-h-56 h-full w-full" type="hidden" name="oldimage" value="{{ $asset->thumbnail }}">
                <style>
                    .image-upload>input {
                display: none;
                }
                </style>


                <div class="image-upload">

                    <label for="image">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 bg-white cursor-pointer rounded-full p-1 absolute bottom-0 left-0 fill-blue-600 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>

                    </label>
                    <input xclass="rounded-lg max-h-full h-auto w-full" type="file" name="thumbnail" id="image" value="'{{ old('thumbnail') }}'">
                    @error('thumbnail')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-span-4 lg:col-span-3 space-y-3">
            <div>
                <label for="name" class="block text-sm font-black text-black">Asset Name</label>
                <input type="text" name="name"  autocomplete="name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('name',$asset->name) }}" placeholder="Asset Name">
                @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

           <div>
                <label for="location" class="block text-sm font-black text-black">Asset Location</label>
                <input type="text" name="location"  autocomplete="location" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                value="{{ old('location',$asset->location) }}" placeholder="Asset location">
                @error('location')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
           </div>

            <div>
                <label for="value" class="block text-sm font-black text-black">Value Estimate</label>
                <input type="text" name="value"  autocomplete="value" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('value',$asset->value) }}" placeholder="$">
                @error('value')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-8">
                <a href="{{ route('mylifespot.home_property.asset', $asset->id) }}" class="border border-gray-400 rounded-lg float-right font-semibold text-xs py-2 px-4">Cancel</a>

                <button class="bg-[#1f588d] text-white border float-right border-gray-400 rounded-lg font-semibold text-xs py-2 px-5 mr-4">Save</button>
            </div>
        </div>
        <div class="xcol-span-5">
            <div class="h-72  bg-blue-50 rounded-xl p-6">
                <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                <h3 class="text-black font-black">Why is this information important?</h3>
                <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
            </div>
        </div>
    </div>
</form>
<ul class="md:col-span-12 lg:col-span-3 col-span-12 mb-12 mt-8  space-y-8">
    <li class="h-72 bg-blue-50 rounded-xl p-6">
        <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
        <h3 class="text-black font-black text-xl">Advertise Here</h3>
        <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
    </li>
</ul>

<ul class="md:col-span-12 lg:col-span-3 col-span-12 mb-12 mt-8  space-y-8">
    <li class="h-72 bg-blue-50 rounded-xl p-6">
        <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
        <h3 class="text-black font-black text-xl">Advertise Here</h3>
        <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
    </li>
</ul>

@endsection

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
