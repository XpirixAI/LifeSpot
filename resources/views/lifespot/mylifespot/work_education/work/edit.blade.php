@extends('lifespot.mylifespot.work_education.work_education_layout')
@section('work')

<li class="row-start-1 col-span-6 rounded-lg">
        <label for="fname" class="block text-sm font-black text-black">Title</label>
        <input type="text" name="fname"  autocomplete="given-name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
</li>
<li class="bg-white row-start-2 col-span-6 rounded-lg">
        <label for="lname" class="block text-sm font-black text-black">Company Name</label>
        <input type="text" name="lname"  autocomplete="given-name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
</li>
<li class="row-start-3 col-span-3 lg:col-span-2 rounded-lg">
        <label for="nickname" class="block text-sm font-black text-black">Start Month</label>
        <input type="text" name="nickname"  autocomplete="given-name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
</li>
<li class="row-start-3 col-span-3 lg:col-span-1  rounded-lg">
        <label for="gender" class="block text-sm font-black text-black">Start Year</label>
        <input type="text" name="gender"  autocomplete="given-name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
</li>
<li class="lg:row-start-3 lg:col-span-2">
 </li>

<li class="row-start-4 col-span-3 lg:col-span-2 col-start-3  lg:col-start-3 rounded-lg">
    <label for="nickname" class="block text-sm font-black text-black">Start Month</label>
    <input type="text" name="nickname"  autocomplete="given-name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
</li>
<li class="row-start-4 col-span-3 lg:col-span-1 lg:col-start-5 rounded-lg">
    <label for="year2" class="block text-sm font-black text-black">Start Year</label>
    <input type="text" name="year2"  autocomplete="given-name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
</li>
<li class="row-start-5 lg:row-start-4 col-start-5 col-span-3 lg:col-start-6 lg:col-span-2">
    <div class="flex space-x-2 pt-8">
        <input type="checkbox" name="phone"  autocomplete="given-name" class="rounded bg-blue-800" checked>
    <label for="phone" class="block text-sm font-black text-black">I currently work here</label>
    </div>
</li>

<li class="row-start-5 col-span-4 rounded-lg">
    <div></div>
</li>


<li class="invisible row-start-5 col-span-4 rounded-lg">
        <label for="bday" class="block text-sm font-black text-white">Birthdate</label>
        <input type="text" name="bday"  autocomplete="given-name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
</li>
<li class="invisible row-start-6 col-span-4 rounded-lg">
        <label for="marital" class="block text-sm font-black text-white">Marital Status</label>
        <input type="text" name="marital"  autocomplete="given-name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
</li>
<li class="invisible row-start-6 col-span-4 rounded-lg">
        <label for="num_dependents" class="block text-sm font-black text-black">Number of Dependents</label>
        <input type="text" name="num_dependents"  autocomplete="given-name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
</li>

<li class="invisible row-start-7 col-span-8 rounded-lg">
        <label for="notes" class="block text-sm font-black text-black">Notes/Wishes</label>
        <textarea type="text" name="notes"  autocomplete="given-name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"> </textarea>
</li>

<li class="row-start-8 col-start-6 lg:col-start-7">
    <a href="{{ route('mylifespot.work_education.work') }}" class="border border-gray-400 rounded-lg float-right font-semibold text-xs py-2 px-4">Cancel</a>
</li>

<li class="row-start-8 col-start-8">
    <button class="bg-[#1f588d] text-white border float-right border-gray-400 rounded-lg font-semibold text-xs py-2 px-5">Save</button>
</li>
</ul>
<ul class="lg:col-span-3 col-span-12 mb-12 mt-8">
    <div class="lg:flex lg:space-x-8 space-y-4">
     <li class="h-72 bg-blue-50 rounded-xl p-6">
         <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
         <h3 class="text-black font-black text-xl">Advertise Here</h3>
         <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
     </li>
     <li class="h-72 bg-blue-50 rounded-xl p-6">
         <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
         <h3 class="text-black font-black text-xl">Advertise Here</h3>
         <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
     </li>
     <li class="h-72 bg-blue-50 rounded-xl p-6">
         <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
         <h3 class="text-black font-black text-xl">Advertise Here</h3>
         <p class="mt-2 text-xs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque atque inventore nisi, cupiditate recusandae.</p>
     </li>
    </div>
 </ul>

@endsection
