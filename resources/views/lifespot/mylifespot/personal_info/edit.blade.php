@extends('lifespot.mylifespot.mylifespot_layout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@section('mylifespot')

<form method="POST" action="{{ route('mylifespot.personal.update',$user->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')


    <div class="grid lg:grid-cols-5 gap-4">
        <div class="col-span-4 lg:col-span-1 xmax-h-48 xw-auto lg:border-r px-2 xmx-4">
            <a class="lg:hidden flex text-sm text-blue-800 font-semibold mb-4" href="{{ route('mylifespot.personal') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-blue-800 font-semibold">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                  </svg>
                 Go Back
            </a>
            <div class="relative top-0 left-0 xh-full">
                <img id="showImage" class="object-fit rounded-lg min-h-72 h-auto w-full"src="{{ (!empty(Auth::user()->profile_photo_path)) ? url('upload/admin_images/'.Auth::user()->profile_photo_path) : url('upload/no_image.png') }}" alt="Profile Image">

                <input xclass="rounded-lg xmax-h-56 h-full w-full" type="hidden" name="oldimage" value="{{ $user->thumbnail }}">
                <style>
                    .image-upload>input {
                display: none;
                }
                </style>


                <div class="hidden image-upload">

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
            <div class="lg:bg-gray-50 rounded-lg mt-5 px-3 lg:px-2 py-4">
                <div class="xmt-6">
                    <label for="gender" class="block text-sm font-black text-black">Gender</label>
                    <select class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" name="gender">
                        <option value="">Select One</option>
                        @foreach ($genders as $gender)
                            <option value="{{ $gender->name }}"
                                {{ $gender->name == old('gender',$user->personalInformation->gender) ? 'selected' : '' }}>{{ $gender->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('location')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
               </div>
               <div class="mt-6">
                    <label for="marital_status" class="block text-sm font-black text-black">Marital Status</label>
                    <select class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" name="marital_status">
                        <option value="">Select One</option>
                        @foreach ($marital_status as $status)
                            <option value="{{ $status->marital_status }}"
                                {{ $status->marital_status == old('marital_status', $user->personalInformation->marital_status) ? 'selected' : '' }}>{{ $status->marital_status }}
                            </option>
                        @endforeach
                    </select>
                    @error('location')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-6">
                    <label for="number_of_dependents" class="block text-sm font-black text-black">Num of Dependents</label>
                <input type="text" name="number_of_dependents"  autocomplete="given-name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('number_of_dependents',$user->personalInformation->number_of_dependents) }}">
                </div>
            </div>
        </div>

        <!--QUESTIONS-->
        <div class="col-span-4 lg:col-span-3 space-y-3 px-4">
            <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">
                <div class="lg:w-1/2">
                    <label for="fname" class="block text-sm font-black text-black">First Name</label>
                    <input type="text" name="fname"  autocomplete="fname" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('fname',$user->fname) }}" placeholder="First Name">
                    @error('fname')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="lg:w-1/2">
                    <label for="lname" class="block text-sm font-black text-black">Last Name</label>
                    <input type="text" name="lname"  autocomplete="lname" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('lname',$user->lname) }}" placeholder="Last Name">
                    @error('lname')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">
                <div class="lg:w-1/2">
                     <label for="phone" class="block text-sm font-black text-black">Phone</label>
                     <input type="text" name="phone"  autocomplete="phone" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                     value="{{ old('phone',$user->personalInformation->phone) }}" placeholder="Phone">
                     @error('phone')
                         <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                     @enderror
                </div>
                <div class="lg:w-1/2">
                     <label for="alt_phone" class="block text-sm font-black text-black">Alternate Phone</label>
                     <input type="text" name="alt_phone"  autocomplete="given-name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('alt_phone', $user->personalInformation->alt_phone) }}">
                 </div>
             </div>
             <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">
                <div class="lg:w-1/2">
                    <label for="email" class="block text-sm font-black text-black">Email</label>
                    <input type="email" name="email"  autocomplete="email" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('email',$user->email) }}" placeholder="Email">
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="lg:w-1/2">
                    <label for="uname" class="block text-sm font-black text-black">Username</label>
                    <input type="text" name="uname"  autocomplete="uname" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('uname',$user->uname) }}" placeholder="Username">
                    @error('uname')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
             </div>

          <div class="py-2 lg:py-6">
            <div class="flex space-x-5 lg:mx-8">
                <div class="w-36">
                    <label for="birth_month" class="block text-sm font-black text-black">Birth Month</label>
                    <select class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"  name="birth_month" >
                        <option value="">Select One</option>
                          @foreach ($months as $month)

                          <option value="{{ $month->id }}"
                            {{ $month->id == old('birth_month',$user->personalInformation->birth_month) ? 'selected' : '' }}>{{ $month->mth }}
                        </option>

                         @endforeach
                    </select>
                </div>


                <div class="w-28 lg:w-24">
                    <label for="birth_day" class="block text-sm font-black text-black">Birth Day</label>
                    <select class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"  name="birth_day" >
                        <option value="">Select</option>
                        @foreach ($days as $day)
                            <option value="{{ $day->id }}"
                                {{ $day->id == old('birth_day',$user->personalInformation->birth_day) ? 'selected' : '' }}>{{ $day->days }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="birth_year" class="block text-sm font-black text-black">Birth Year</label>
                    <input class=" mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md border px-4 py-2 pr-8" placeholder="yyyy"  name="birth_year"
                     value="{{ old('birth_year',$user->personalInformation->birth_year)  }}"
                     >
                    @error('birth_year')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>
            </div>
          </div>

            <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">
                <div class="lg:w-3/4">
                    <label for="address" class="block text-sm font-black text-black">Address</label>
                    <input type="text" name="address"  autocomplete="address" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('address',$user->personalInformation->address) }}" placeholder="Address">
                    @error('address')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

               <div class="lg:w-1/4">
                    <label for="address2" class="block text-sm font-black text-black">Address 2</label>
                    <input type="text" name="address2"  autocomplete="address2" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                    value="{{ old('address2',$user->personalInformation->address2) }}" placeholder="Address 2">
                    @error('address2')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
               </div>
            </div>

            <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">
                <div class="lg:w-1/2">
                    <label for="city" class="block text-sm font-black text-black">City</label>
                    <input type="text" name="city"  autocomplete="city" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('city',$user->personalInformation->city) }}" placeholder="City">
                    @error('city')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

               <div class="lg:w-1/4">
                    <label for="st" class="block text-sm font-black text-black">State</label>
                    <input type="text" name="st"  autocomplete="st" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                    value="{{ old('st',$user->personalInformation->st) }}" placeholder="State">
                    @error('st')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
               </div>
               <div class="lg:w-1/4">
                <label for="zip" class="block text-sm font-black text-black">Zip</label>
                <input type="text" name="zip"  autocomplete="zip" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                value="{{ old('zip',$user->personalInformation->zip) }}" placeholder="Zip">
                @error('zip')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
           </div>
            </div>






            <div class="py-2"></div>
            <div>
                <label for="notes_wishes" class="block text-sm font-black text-black">Notes/Wishes</label>
                <textarea class="w-full border border-gray-300 rounded-lg" name="notes_wishes" id="notes_wishes"  rows="5">{{ old('notes_wishes',$user->personalInformation->notes_wishes) }}</textarea>

                @error('notes_wishes')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-8">
                <a href="{{ route('mylifespot.personal') }}" class="border border-gray-400 rounded-lg float-right font-semibold text-xs py-2 px-4">Cancel</a>

                <button class="bg-[#1f588d] text-white border float-right border-gray-400 rounded-lg font-semibold text-xs py-2 px-5 mr-4">Save</button>
            </div>
        </div>
        <!--END QUESTIONS-->

        <div class="col-span-4 lg:col-span-1 xmr-4 px-4">
            <div class="h-72 overflow-y-auto bg-blue-50 rounded-xl p-6">
                <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                <h3 class="text-black font-black">Why is this information important?</h3>
                <p class="mt-2 text-xs">LifeSpot is an online platform designed to help you organize and store important information about your life and estate. By completing your profile information, you can store critical information such as your will & trust, insurance policies, and financial accounts in Lifespot's secure online vault. Completing your profile information can help your estate continue to add additional documents, accounts, and other important information over time. In addition, LifeSpot can help you “grow as you go,” to create an action plan to ensure that your loved ones have the information they need to manage your estate as you wish.</p>
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
