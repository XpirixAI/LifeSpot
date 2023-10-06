@extends('lifespot.myestate.financials.financials-taxes-layout')
@section('financials')

<div>
    <div>
        <div class="py-3">
            <form method="POST" action="{{route('myestate.financials.update.tax', $asset->id)}}">
                @csrf
                @method('PUT')
                <ul class="grid grid-cols-8 md:grid-cols-10 gap-4">
                    {{-- <li class="row-start-1 row-span-3 col-span-2">

                        <div class="relative top-0 left-0">
                            <img class="relative top-0 left-0 rounded-full h-16 w-16 lg:h-32 lg:w-32 mt-12" src="{{ asset('img/doggles.jpeg') }}" alt="">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 bg-white rounded-full p-1 absolute top-12 left-10 lg:top-24 lg:left-20 fill-blue-600 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </a>
                        </div>
                    </li> --}}


                    <li class="hidden lg:block row-span-4 col-start-9 col-span-2">
                        <div class="h-72 bg-blue-50 rounded-xl p-6">
                            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                            <h3 class="text-black font-black">Why is this information important?</h3>
                            <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
                        </div>
                    </li>

                    <li class="row-start-1 col-span-3 rounded-lg">
                        <label for="tax_advisor" class="block text-sm font-black text-black">Tax Advisor</label>
                        <input
                            type="text"
                            name="tax_advisor" 
                            autocomplete="given-name"
                            class="bg-gray-50 mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md"
                            placeholder="Advisor Name..."
                            value="{{$asset->tax_advisor}}"
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
                            value="{{$asset->account_type}}"
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
                            value="{{$asset->account_description}}"
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
                            value="{{$asset->contact_name}}"
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
                            value="{{$asset->email}}"
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
                            value="{{$asset->phone}}"
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
                            value="{{$asset->account_number}}"
                        >
                    </li>
                    <li class="row-start-3 col-span-6 rounded-lg" rows="8">
                        <label for="notes" class="block text-sm font-black text-black">Special Notes</label>
                        <textarea 
                            type="text" 
                            name="special_notes" 
                            autocomplete="given-name" 
                            class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                            value="{{$asset->special_notes}}"
                        >
                        </textarea>
                    </li>

                    <li class="row-start-11 lg:row-start-8 col-start-6 lg:col-start-7">
                        <a href="{{ route('myestate.financials.show.tax', $asset->id) }}" class="border border-gray-400 rounded-lg float-right font-semibold text-xs py-2 px-4">Cancel</a>
                    </li>

                    <li class="row-start-11 lg:row-start-8 col-start-8">
                        <button type="submit" class="bg-[#1f588d] text-white border float-right border-gray-400 rounded-lg font-semibold text-xs py-2 px-5">Save</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>

</div>

@endsection
