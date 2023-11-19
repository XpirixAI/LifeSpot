{{-- @extends('lifespot.mylifespot.mylifespot_layout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@section('mylifespot') --}}
{{-- @extends('lifespot.myestate.myestate-interior-banking-layout')

<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />

@section('myestate_interior_banking') --}}

@extends('lifespot.myestate.myestate_layout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@section('myestate')

<form method="POST" action="{{ route('myestate.financials.update.bank',$asset->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')


    <div class="grid lg:grid-cols-5 gap-4">
        <div class="col-span-4 lg:col-span-1 xmax-h-48 xw-auto lg:border-r px-2 xmx-4">
            <a class="lg:hidden flex text-sm text-blue-800 font-semibold mb-4" href="{{ route('myestate.financials.banking',$asset->id) }}">
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
                    <span class="ml-10">Edit logo/image</span>
                    <label for="image">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 bg-white cursor-pointer rounded-full p-1 absolute bottom-0 left-0 fill-blue-600 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </label>
                    <input 
                        xclass="rounded-lg max-h-full h-auto w-full" 
                        type="file" 
                        name="thumbnail" 
                        id="image" 
                        value="'{{ old('thumbnail') }}'"
                        accept=".jpeg,.png,.jpg,.webp"
                    />
                    @error('thumbnail')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="lg:bg-gray-50 rounded-lg mt-5 px-2 py-4">
                <div class="lg:bg-gray-50 rounded-lg mt-5 lg:px-2 py-4">
                    <div class="flex xmt-6">
                        <input type="checkbox" name="inTrust"  id="inTrust" autocomplete="inTrust" class="xmt-1 focus:ring-blue-500 focus:border-blue-500 block xw-full sm:text-sm border-gray-300 rounded-md"
                    value="{{ old('inTrust',$asset->inTrust) }}" {{ $asset->inTrust == "on" ? 'checked': '' }} >
                    <label for="inTrust" class="block text-sm font-black text-black ml-2">In Trust</label>
                    @error('inTrust')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                   </div>
                </div>

            </div>
        </div>

        <!--QUESTIONS-->
        <div class="col-span-3 lg:col-span-3 space-y-3">
            <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">
                <div class="lg:w-full">
                    <label for="bank_name" class="block text-sm font-black text-black">Financial Institution</label>
                    <input type="text" name="bank_name"  autocomplete="bank_name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('bank_name',$asset->bank_name) }}" placeholder="Financial Institution">
                    @error('bank_name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">
                <div class="lg:w-1/3">
                    <label for="account_type" class="block text-sm font-black text-black">Account Type</label>
                    <input type="text" name="account_type"  autocomplete="account_type" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('account_type',$asset->account_type) }}" placeholder="Account Type">
                    @error('account_type')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="lg:w-1/3">
                    <label for="account_number" class="block text-sm font-black text-black">Account Number</label>
                    <input type="text" name="account_number"  autocomplete="account_number" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('account_number',$asset->account_number) }}" placeholder="Account Number">
                    @error('account_number')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="lg:w-1/3">
                    <label for="account_balance" class="block text-sm font-black text-black">Account Balance</label>
                    <input type="text" name="account_balance"  autocomplete="account_balance" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('account_balance',$asset->account_balance) }}" placeholder="Account Balance">
                    @error('account_balance')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">
                <div class="lg:w-1/2">
                    <label for="contact_name" class="block text-sm font-black text-black">Contact Name</label>
                    <input type="text" name="contact_name"  autocomplete="contact_name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('contact_name',$asset->contact_name) }}" placeholder="Contact Name">
                    @error('contact_name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="lg:w-1/4">
                    <label for="email" class="block text-sm font-black text-black">Email</label>
                    <input type="email" name="email"  autocomplete="email" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('email',$asset->email) }}" placeholder="Email">
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="lg:w-1/4">
                    <label for="phone" class="block text-sm font-black text-black">Phone</label>
                    <input type="text" name="phone"  autocomplete="phone" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('phone',$asset->phone) }}" placeholder="Phone">
                    @error('phone')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="py-1"></div>
            <div>
                <label for="notes_wishes" class="block text-sm font-black text-black">Notes/Wishes</label>
                <textarea class="w-full border border-gray-300 rounded-lg" name="notes_wishes" id="notes_wishes" rows="5">{{ old('notes_wishes',$asset->notes_wishes) }}</textarea>
                {{-- <textarea type="text" name="value"  autocomplete="value" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Notes & Wishes"></textarea> --}}
                @error('notes_wishes')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-8">
                <a href="{{ route('myestate.financials.show.bank',$asset->id) }}" class="border border-gray-400 rounded-lg float-right font-semibold text-xs py-2 px-4">Cancel</a>

                <button class="bg-[#1f588d] text-white border float-right border-gray-400 rounded-lg font-semibold text-xs py-2 px-5 mr-4">Save</button>
            </div>
        </div>
        <!--END QUESTIONS-->

        <div class="xbg-yellow-500 rounded-lg min-h-56 row-span-4">
            <div class="h-72 overflow-y-auto bg-blue-50 rounded-xl p-6">
                <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                <h3 class="text-black font-black">Why is this information important?</h3>
                <p class="mt-2 text-xs">Having immediate access to LifeSpot allows you to confidently plan for the future and make informed decisions about your will & trust. With a complete snapshot of all your financial, tax, health, and retirement information, you can be rest assured that your will & trust is in order and up to date. Furthermore, having a comprehensive view of your financial situation can help you identify any potential risks and plan accordingly, so you can protect your family and assets.</p>
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
