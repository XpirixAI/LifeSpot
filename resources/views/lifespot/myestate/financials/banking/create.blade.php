{{-- @extends('lifespot.mylifespot.mylifespot_layout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@section('mylifespot') --}}

{{-- @extends('lifespot.myestate.financials.financials-banking-layout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@section('financials') --}}

{{-- @extends('lifespot.myestate.financials.myestate_layout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@section('financials') --}}

@extends('lifespot.myestate.myestate_layout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@section('myestate')
    <div
        x-cloak
        x-data="data"
    >
        <form id="create_bank_form" method="POST" action="{{ route('myestate.financials.store.bank') }}" enctype="multipart/form-data">
            @csrf
            <div class="grid lg:grid-cols-5 gap-4">
                <div class="col-span-4 lg:col-span-1 xmax-h-48 xw-auto lg:border-r border-r-none pr-2">
                    <div class="relative top-0 left-0 xh-full">
                        <img id="showImage" class="object-fit rounded-lg min-h-72 h-auto w-full" src="{{ (!empty($asset->thumbnail))? url($asset->thumbnail):url('thumbnails/default.jpeg') }}" alt="Card image cap">
                        <style>
                            .image-upload>input {
                                display: none;
                            }
                        </style>
                        <span class="ml-10">Add bank logo</span>
                        <div class="image-upload">
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
                            >
                            @error('thumbnail')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="lg:bg-gray-50 rounded-lg mt-5 lg:px-2 py-4">
                        <div class="flex xmt-6">
                            <input 
                                type="checkbox" 
                                name="inTrust" 
                                id="inTrust" 
                                autocomplete="inTrust" 
                                class="xmt-1 focus:ring-blue-500 focus:border-blue-500 block xw-full sm:text-sm border-gray-300 rounded-md"
                                @checked(old('inTrust') === 1)
                            />
                            <label for="inTrust" class="block text-sm font-black text-black ml-2">In Trust</label>
                            @error('inTrust')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-span-3 lg:col-span-3 space-y-3">
                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">
                        <div class="lg:w-full">
                            <label for="bank_name" class="block text-sm font-black text-black">Financial Institution</label>
                            <input 
                                type="text" 
                                name="bank_name"  
                                autocomplete="bank_name" 
                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" 
                                value="{{ old('bank_name') }}" 
                                placeholder="Financial Institution"
                            />
                            @error('bank_name')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">
                        <div class="lg:w-1/3">
                            <label for="account_type" class="block text-sm font-black text-black">Account Type</label>
                            <input type="text" name="account_type"  autocomplete="account_type" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('account_type') }}" placeholder="Account Type">
                            @error('account_type')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="lg:w-1/3">
                            <label for="account_number" class="block text-sm font-black text-black">Account Number</label>
                            <input type="text" name="account_number"  autocomplete="account_number" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('account_number') }}" placeholder="Account Number">
                            @error('account_number')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="lg:w-1/3">
                            <label for="account_balance" class="block text-sm font-black text-black">Account Balance</label>
                            <input type="text" name="account_balance"  autocomplete="account_balance" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('account_balance') }}" placeholder="Account Balance">
                            @error('account_balance')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">
                        <div class="lg:w-1/2">
                            <label for="contact_name" class="block text-sm font-black text-black">Contact Name</label>
                            <input type="text" name="contact_name"  autocomplete="contact_name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('contact_name') }}" placeholder="Contact Name">
                            @error('contact_name')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="lg:w-1/4">
                            <label for="email" class="block text-sm font-black text-black">Email</label>
                            <input type="email" name="email"  autocomplete="email" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('email') }}" placeholder="Email">
                            @error('email')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="lg:w-1/4">
                            <label for="phone" class="block text-sm font-black text-black">Phone</label>
                            <input type="text" name="phone"  autocomplete="phone" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('phone') }}" placeholder="Phone">
                            @error('phone')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="notes_wishes" class="block text-sm font-black text-black">Notes/Wishes</label>
                        <textarea class="w-full border border-gray-300 rounded-lg" name="notes_wishes" id="notes_wishes"  rows="5"></textarea>
                        {{-- <textarea type="text" name="value"  autocomplete="value" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Notes & Wishes"></textarea> --}}
                        @error('notes_wishes')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="pt-5">
                        <label 
                            @click="isAdditionalAssetsOpen = true;" 
                            for="additional_document_input" 
                            class="inline-block bg-[#1f588d] text-white border border-gray-400 rounded-lg font-semibold text-xs py-1 lg:py-2 px-2 lg:px-5"
                        >
                            Add Documents
                        </label>
                        <input 
                            x-show="isAdditionalAssetsOpen" 
                            name="multi_image[]" 
                            type="file" 
                            id="additional_document_input" 
                            multiple=""
                            accept=".jpeg,.png,.jpg,.webp"
                            class="xhidden block mt-3"
                        >
                    </div>

                    <div class="pt-8">
                        <a 
                            href="{{ route('myestate.financials.banking') }}" 
                            class="border border-gray-400 rounded-lg float-right font-semibold text-xs py-2 px-4"
                        >
                            Cancel
                        </a>

                        <button
                            type="button"
                            @click="submitForm()"
                            class="bg-[#1f588d] text-white border float-right border-gray-400 rounded-lg font-semibold text-xs py-2 px-5 mr-4"
                        >
                            Save
                        </button>
                    </div>
                </div>

                <div class="xbg-yellow-500 rounded-lg min-h-56 row-span-4">
                    <div class="h-72 overflow-y-auto bg-blue-50 rounded-xl p-6">
                        <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                        <h3 class="text-black font-black">Why is this information important?</h3>
                        <p class="mt-2 text-xs">Having immediate access to LifeSpot allows you to confidently plan for the future and make informed decisions about your will & trust. With a complete snapshot of all your financial, tax, health, and retirement information, you can be rest assured that your will & trust is in order and up to date. Furthermore, having a comprehensive view of your financial situation can help you identify any potential risks and plan accordingly, so you can protect your family and assets.</p>
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

        <!-- Start 'Are You Sure' Modal -->
        <div
            x-cloak 
            x-show="isModalOpen"
            style="background-color: rgba(0, 0, 0, .5)"
            class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
        >
            <div
                @click.away="toggleIsModalOpen()"
                x-transition:enter="motion-safe:ease-out duration-500"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                class="xmax-w-3xl px-5 py-4 mx-auto text-left bg-white rounded-xl shadow-lg"
            >
                <h4 class="mb-5">Are you sure you want to submit without adding any additional documents?</h4>
                <button
                    type="button"
                    @click="toggleIsModalOpen()"
                    class="border border-gray-400 rounded-lg float-right font-semibold text-xs py-2 px-4"
                >
                    Cancel
                </button>
                <button 
                    type="button"
                    onclick="forceSubmitForm()"
                    class="bg-[#1f588d] text-white border float-right border-gray-400 rounded-lg font-semibold text-xs py-1 lg:py-2 px-2 lg:px-5 mr-4"
                >
                    Submit
                </button>
            </div>
        </div>
        <!-- End 'Are You Sure' Modal -->
    </div>
@endsection

@push('js')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('data', () => ({
                isModalOpen: false,
                toggleIsModalOpen() {
                    this.isModalOpen = !this.isModalOpen
                },
                isAdditionalAssetsOpen: false,
                toggleIsAdditionalAssetsOpen() {
                    this.isAdditionalAssetsOpen = !this.isAdditionalAssetsOpen
                },
                submitForm() {
                    console.log('attempted form submission');
                    if ($('#additional_document_input')[0].files.length > 0) {
                        $('#create_bank_form').submit();
                    } else {
                        this.toggleIsModalOpen();
                    }
                },
            }));
        });

        function forceSubmitForm() {
            $('#create_bank_form').submit();
        }

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
@endpush
