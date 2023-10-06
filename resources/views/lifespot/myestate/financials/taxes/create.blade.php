@extends('lifespot.myestate.financials.financials-taxes-layout')
@section('financials')
    <div>
        <div>
            <div class="py-3">
                <form method="POST" action="{{route('myestate.financials.store.tax')}}">
                    @csrf
                    @method('POST')
                    <ul class="grid grid-cols-8 md:grid-cols-10 gap-4">
                        <li class="hidden lg:block row-span-4 col-start-9 col-span-2">
                            <div class="h-72 bg-blue-50 rounded-xl p-6">
                                <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                                <h3 class="text-black font-black">Why is this information important?</h3>
                                <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
                            </div>
                        </li>
                        <li class="row-start-1 col-span-3 rounded-lg">
                            <label for="fname" class="block text-sm font-black text-black">Tax Advisor</label>
                            <input 
                                type="text" 
                                name="tax_advisor"  
                                autocomplete="given-name" 
                                class="bg-gray-50 mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md" 
                                placeholder="Advisor Name..."
                            >
                        </li>
                        <li class="bg-white row-start-1 col-span-2 rounded-lg">
                            <label for="lname" class="block text-sm font-black text-black">Account Type</label>
                            <input 
                                type="text" 
                                name="account_type"
                                autocomplete="given-name" 
                                class="bg-gray-50 mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md"
                                placeholder="Business"
                            >
                        </li>
                        <li class="row-start-1 col-span-3 rounded-lg">
                            <label for="fname" class="block text-sm font-black text-black">Account Description</label>
                            <input 
                                type="text" 
                                name="account_description"  
                                autocomplete="given-name" 
                                class="bg-gray-50 mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md" 
                                placeholder="Description..."
                            >
                        </li>
                        <li class="row-start-2 col-span-2 rounded-lg">
                            <label for="fname" class="block text-sm font-black text-black">Contact Name</label>
                            <input 
                                type="text" 
                                name="contact_name"  
                                autocomplete="given-name" 
                                class="bg-gray-50 mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md" 
                                placeholder="Contact's Name..."
                            >
                        </li>
                        <li class="bg-white row-start-2 col-span-4 rounded-lg">
                            <label for="lname" class="block text-sm font-black text-black">Email</label>
                            <input 
                                type="text" 
                                name="email"  
                                autocomplete="given-name" 
                                class="bg-gray-50 mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md"
                                placeholder="brandon.walker@gamil.com"
                            >
                        </li>
                        <li class="row-start-2 col-span-2 rounded-lg">
                            <label for="fname" class="block text-sm font-black text-black">Phone</label>
                            <input 
                                type="text" 
                                name="phone"  
                                autocomplete="given-name" 
                                class="bg-gray-50 mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md" 
                                placeholder="Contact's Phone..."
                            >
                        </li>
                        <li class="row-start-3 col-span-2 rounded-lg">
                            <label for="fname" class="block text-sm font-black text-black">Account Number</label>
                            <input 
                                type="text" 
                                name="account_number"  
                                autocomplete="given-name" 
                                class="bg-gray-50 mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md" 
                                placeholder="........"
                            >
                        </li>
                        <li class="row-start-3 col-span-6 rounded-lg" rows="8">
                            <label for="notes" class="block text-sm font-black text-black">Special Notes</label>
                            <textarea 
                                type="text" 
                                name="special_notes"  
                                autocomplete="given-name" 
                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                            > 
                            </textarea>
                        </li>
                        <li class="row-start-11 lg:row-start-8 col-start-6 lg:col-start-7">
                            <a href="{{ route('myestate.financials.tax') }}" class="border border-gray-400 rounded-lg float-right font-semibold text-xs py-2 px-4">Cancel</a>
                        </li>
                        <li class="row-start-11 lg:row-start-8 col-start-8">
                            <button class="bg-[#1f588d] text-white border float-right border-gray-400 rounded-lg font-semibold text-xs py-2 px-5">Save</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
@endsection
