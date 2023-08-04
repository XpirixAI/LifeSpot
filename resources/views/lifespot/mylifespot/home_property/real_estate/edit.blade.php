@extends('lifespot.mylifespot.mylifespot_layout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@section('mylifespot')

<form method="POST" action="{{ route('mylifespot.home_property.update.real_estate',$asset->id) }}" enctype="multipart/form-data">
    @csrf
@method('PUT')


<div class="grid lg:grid-cols-5 gap-4">
    <div class="col-span-4 lg:col-span-1 xmax-h-48 xw-auto lg:border-r px-2 xmx-4">
        <a class="lg:hidden flex text-sm text-blue-800 font-semibold mb-4" href="{{ route('mylifespot.home_property.realestate',$asset->id) }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-blue-800 font-semibold">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                  </svg>
                 Go Back
            </a>
            <div class="relative top-0 left-0 xh-full">
                <img id="showImage" class="object-fit rounded-lg min-h-72 h-auto w-full" src="{{ (!empty($asset->thumbnail))? url($asset->thumbnail):url('thumbnails/default.jpeg') }}" alt="Card image cap">

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
            <div class="lg:bg-gray-50 rounded-lg mt-5 lg:px-2 py-4 space-y-3">
                <div class="flex xmt-6">
                    <input type="checkbox" name="inTrust"  id="inTrust" autocomplete="inTrust" class="xmt-1 focus:ring-blue-500 focus:border-blue-500 block xw-full sm:text-sm border-gray-300 rounded-md"
                    value="{{ old('inTrust',$asset->inTrust) }}" {{ $asset->inTrust == "on" ? 'checked': '' }} >
                    <label for="inTrust" class="block text-sm font-black text-black ml-2">In Trust</label>
                    @error('inTrust')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                    {{-- <input type="checkbox" name="inTrust" id="inTrust" autocomplete="inTrust" class="xmt-1 focus:ring-blue-500 focus:border-blue-500 block xw-full sm:text-sm border-gray-300 rounded-md"

                    @checked(old('inTrust') === 1)
                    >
                    <label for="inTrust" class="block text-sm font-black text-black ml-2">In Trust</label>
                    @error('inTrust')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror --}}
               </div>

                <div class="flex xmt-6">
                    <input type="checkbox" name="isPrimary_residence"  id="isPrimary_residence" autocomplete="isPrimary_residence" class="xmt-1 focus:ring-blue-500 focus:border-blue-500 block xw-full sm:text-sm border-gray-300 rounded-md"
                    value="{{ old('isPrimary_residence',$asset->isPrimary_residence) }}" {{ $asset->isPrimary_residence == "on" ? 'checked': '' }} >
                    <label for="isPrimary_residence" class="block text-sm font-black text-black ml-2">Primary Home</label>
                    @error('isPrimary_residence')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                    {{-- <input type="checkbox" name="isPrimary_residence" id="isPrimary_residence" autocomplete="isPrimary_residence" class="xmt-1 focus:ring-blue-500 focus:border-blue-500 block xw-full sm:text-sm border-gray-300 rounded-md"

                    @checked(old('isPrimary_residence') === 1)
                    >
                    <label for="isPrimary_residence" class="block text-sm font-black text-black ml-2">Primary Home</label>
                    @error('isPrimary_residence')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror --}}
               </div>
            </div>
        </div>

            <!--QUESTIONS-->
            <div class="col-span-4 lg:col-span-3 space-y-3 px-4">
                <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">
                    <div class="lg:w-2/3">
                        <label for="name" class="block text-sm font-black text-black">Property Name</label>
                        <input type="text" name="name"  autocomplete="name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('name',$asset->name) }}" placeholder="Property Name">
                        @error('name')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="lg:w-1/3">
                        <label for="value" class="block text-sm font-black text-black">Value Estimate</label>
                        <input type="text" name="value"  autocomplete="value" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('value',$asset->value) }}" placeholder="$">
                        @error('value')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- <div class="py-2 lg:py-6">
                    <div class="flex space-x-5 lg:mx-8">
                        <div class="w-36">
                            <label for="birth_month" class="block text-sm font-black text-black">Birth Month</label>
                            <select class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"  name="birth_month" >
                                <option value="">Select One</option>
                                @foreach ($months as $month)

                                <option value="{{ $month->id }}"

                                    {{ $month->id == old('birth_month') ? 'selected' : '' }}>{{ $month->mth }}
                                </option>

                                @endforeach
                            </select>
                        </div>


                        <div class="w-24">
                            <label for="birth_day" class="block text-sm font-black text-black">Birth Day</label>
                            <select class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"  name="birth_day" >
                                <option value="">Select</option>
                                @foreach ($days as $day)
                                    <option value="{{ $day->id }}"

                                        {{ $day->id == old('birth_day') ? 'selected' : '' }}>{{ $day->days }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="birth_year" class="block text-sm font-black text-black">Birth Year</label>
                            <input class=" mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md border px-4 py-2 pr-8" placeholder="yyyy"  name="birth_year"

                            value="{{ old('birth_year')  }}"
                            >
                            @error('birth_year')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror

                        </div>
                    </div>
                </div> --}}

                <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">
                    <div class="lg:w-3/4">
                        <label for="address" class="block text-sm font-black text-black">Address</label>
                        <input type="text" name="address"  autocomplete="address" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('address',$asset->address) }}" placeholder="Address">
                        @error('address')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="lg:w-1/4">
                        <label for="address2" class="block text-sm font-black text-black">Address 2</label>
                        <input type="text" name="address2"  autocomplete="address2" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                        value="{{ old('address2',$asset->address2) }}" placeholder="Address 2">
                        @error('address2')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">
                    <div class="lg:w-1/2">
                        <label for="city" class="block text-sm font-black text-black">City</label>
                        <input type="text" name="city"  autocomplete="city" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('city',$asset->city) }}" placeholder="City">
                        @error('city')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="lg:w-1/4">
                        <label for="st" class="block text-sm font-black text-black">State</label>
                        <input type="text" name="st"  autocomplete="state" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                        value="{{ old('st',$asset->st) }}" placeholder="State">
                        @error('st')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="lg:w-1/4">
                        <label for="zip" class="block text-sm font-black text-black">Zip</label>
                        <input type="text" name="zip"  autocomplete="zip" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                        value="{{ old('zip',$asset->zip) }}" placeholder="Zip">
                        @error('zip')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">
                    <div class="lg:w-full">
                        <label for="location" class="block text-sm font-black text-black">Discription/Property Location</label>
                <input type="text" name="location"  autocomplete="location" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                value="{{ old('location',$asset->location) }}" placeholder="Discription/">
                @error('location')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
                    </div>
                </div>

                <div class="py-1"></div>
                <div>
                    <label for="notes_wishes" class="block text-sm font-black text-black">Notes/Wishes</label>
                    <textarea class="w-full border border-gray-300 rounded-lg" name="notes_wishes" id="notes_wishes"  rows="5">{{ old('notes_wishes',$asset->notes_wishes) }}</textarea>

                    @error('notes_wishes')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pt-8">
                    <a href="{{ route('mylifespot.home_property.real_estate') }}" class="border border-gray-400 rounded-lg float-right font-semibold text-xs py-2 px-4">Cancel</a>

                    <button class="bg-[#1f588d] text-white border float-right border-gray-400 rounded-lg font-semibold text-xs py-2 px-5 mr-4">Save</button>
                </div>
            </div>
            <!--END QUESTIONS-->

        <div class="col-span-4 lg:col-span-1 xmr-4 px-4">
            <div class="min-h-72  bg-blue-50 rounded-xl p-6">
                <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                <h3 class="text-black font-black">Why is this information important?</h3>
                <p class="mt-2 text-xs">Access to your properties and assets are important to ensure that they are secure and managed efficiently.</p>
            </div>
        </div>
    </div>
</form>
<ul class="md:col-span-12 lg:col-span-3 col-span-12 mb-12 mt-8  px-4 space-y-8">
    <li class="h-72 bg-blue-50 rounded-xl p-6">
        <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
        <h3 class="text-black font-black text-xl">Advertise Here</h3>
        <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
    </li>
</ul>

<ul class="md:col-span-12 lg:col-span-3 col-span-12 mb-12 mt-8 px-4  space-y-8">
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
