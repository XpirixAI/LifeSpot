<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div wire:ignore.self id="addUserSpouse" tabindex="-1" aria-labelledby="addUserSpouseLabel" aria-hidden="true" class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto">
        <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="addUserSpouseLabel">Add your spouse/partner's info </h5>
                </div>
                <div class="modal-body relative p-4">
                    <form wire:submit.prevent="addUserSpouse">

                            <div class="max-h-screen grid lg:grid-cols-4 gap-4">

                                    <!--QUESTION Inputs-->
                                    <div class="col-span-4 xlg:col-span-5 space-y-3 pb-5">
                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                            <div class="lg:w-1/2">
                                                <label for="spouse_fname" class="block text-sm font-black text-black">First Name</label>
                                                <input type="text" name="spouse_fname" wire:model="spouse_fname"  autocomplete="spouse_fname" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('spouse_fname') }}" placeholder="First Name">

                                                @error('spouse_fname')
                                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                                @enderror


                                            </div>
                                            <div class="lg:w-1/2">
                                                <label for="spouse_lname" class="block text-sm font-black text-black">Last Name</label>
                                                <input type="text" xname="spouse_lname" wire:model="spouse_lname"  autocomplete="spouse_lname" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                value="{{ old('spouse_lname') }}" placeholder="Last Name">

                                                @error('spouse_lname') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>


                                        </div>
                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">


                                        </div>
                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                            <div class="lg:w-full">
                                                    <label for="estate_role" class="block text-sm font-black text-black">Estate Role</label>
                                                    <input type="text" xname="estate_role" wire:model="estate_role"  autocomplete="estate_role" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                    value="{{ old('estate_role') }}" placeholder="Estate Role">

                                                    @error('estate_role') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                            <div class="lg:w-1/2">
                                                    <label for="spouse_phone" class="block text-sm font-black text-black">Phone</label>
                                                    <input type="text" xname="spouse_phone" wire:model="spouse_phone"  autocomplete="spouse_phone" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                    value="{{ old('spouse_phone') }}" placeholder="Phone">

                                                    @error('spouse_phone') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>


                                            <div class="lg:w-1/2">
                                                    <label for="spouse_email" class="block text-sm font-black text-black">Email</label>
                                                    <input type="email" xname="spouse_email" wire:model="spouse_email"  autocomplete="spouse_email" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                    value="{{ old('spouse_email') }}" placeholder="Email">

                                                    @error('spouse_email') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                            <div class="lg:w-1/2">
                                                <label for="birth_month" class="block text-sm font-black text-black">Birth Month</label>
                                                {{-- <input type="text" xname="birth_month" wire:model="birth_month"  autocomplete="birth_month" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                value="{{ old('birth_month') }}" placeholder="Month"> --}}
                                                <select class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"  wire:model="birth_month" >
                                                    <option value="">Select One</option>
                                                      @foreach ($months as $month)

                                                      <option value="{{ $month->id }}"

                                                        {{ $month->id == old('birth_month') ? 'selected' : '' }}>{{ $month->mth }}
                                                    </option>

                                                     @endforeach
                                                </select>

                                                @error('birth_month') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>


                                            <div class="lg:w-1/4">
                                                    <label for="birth_day" class="block text-sm font-black text-black">Birth Day</label>
                                                    {{-- <input type="text" xname="birth_day" wire:model="birth_day"  autocomplete="birth_day" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                    value="{{ old('birth_day') }}" placeholder="Day"> --}}
                                                    <select class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"  wire:model="birth_day" >
                                                        <option value="">Select One</option>
                                                          @foreach ($days as $day)

                                                          <option value="{{ $day->id }}"

                                                            {{ $day->id == old('birth_day') ? 'selected' : '' }}>{{ $day->days }}
                                                        </option>

                                                         @endforeach
                                                    </select>

                                                    @error('birth_day') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>


                                            <div class="lg:w-1/4">
                                                    <label for="birth_year" class="block text-sm font-black text-black">Birth Year</label>
                                                    <input type="text" xname="birth_year" wire:model="birth_year"  autocomplete="birth_year" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                    value="{{ old('birth_year') }}" placeholder="Year">

                                                    @error('birth_year') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                            <div class="lg:w-1/2">
                                                    <label for="anniversary_month" class="block text-sm font-black text-black">Anniversary Month</label>
                                                    {{-- <input type="text" xname="anniversary_month" wire:model="anniversary_month"  autocomplete="anniversary_month" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                    value="{{ old('anniversary_month') }}" placeholder="Month"> --}}
                                                    <select class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"  wire:model="anniversary_month" >
                                                        <option value="">Select One</option>
                                                          @foreach ($months as $month)

                                                          <option value="{{ $month->id }}"

                                                            {{ $month->id == old('anniversary_month') ? 'selected' : '' }}>{{ $month->mth }}
                                                        </option>

                                                         @endforeach
                                                    </select>

                                                    @error('anniversary_month') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>


                                            <div class="lg:w-1/4">
                                                    <label for="anniversary_day" class="block text-sm font-black text-black">Anniversary Day</label>
                                                    {{-- <input type="text" xname="anniversary_day" wire:model="anniversary_day"  autocomplete="anniversary_day" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                    value="{{ old('anniversary_day') }}" placeholder="Day"> --}}
                                                    <select class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"  wire:model="anniversary_day" >
                                                        <option value="">Select One</option>
                                                          @foreach ($days as $day)

                                                          <option value="{{ $day->id }}"

                                                            {{ $day->id == old('anniversary_day') ? 'selected' : '' }}>{{ $day->days }}
                                                        </option>

                                                         @endforeach
                                                    </select>

                                                    @error('anniversary_day') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>


                                            <div class="lg:w-1/4">
                                                    <label for="anniversary_year" class="block text-sm font-black text-black">Anniversary Year</label>
                                                    <input type="text" xname="anniversary_year" wire:model="anniversary_year"  autocomplete="anniversary_year" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                    value="{{ old('anniversary_year') }}" placeholder="Year">

                                                    @error('anniversary_year') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>
                                        </div>


                                    </div>
                                    <!--END QUESTIONS-->

                                <div class="col-span-4">
                                    <div class="bg-blue-50 rounded-xl p-4 max-h-36 overflow-y-auto">
                                        <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                                        <h3 class="text-black font-black">Why is this information important?</h3>
                                        <p class="mt-2 text-xs"> Identifying and adding your spouse or partner to your estate is important because it ensures that your wishes for how you would like your assets to be handled in the event of your death are carried out. Lifespot will help you organize these documents see: document center. This document center allows you to store and organize important documents, such as wills, trusts, life insurance policies, and financial statements, in one place that can be accessed by your spouse or partner in the event of your death. This ensures that all of your important documents are in one place and easily accessible.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-between p-4 border-t border-gray-200 rounded-b-md mt-8">

                                <button type="button" class="text-right text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none xfocus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600
                                transition
                                duration-150
                                ease-in-out" data-bs-dismiss="modal">Cancel</button>

                                <button wire:click="closeModal()" type="submit" class="px-6
                                py-2.5
                                bg-blue-600
                                text-white
                                font-semibold
                                text-xs
                                leading-tight
                                uppercase
                                rounded
                                shadow-md
                                hover:bg-blue-700 hover:shadow-lg
                                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                                active:bg-blue-800 active:shadow-lg
                                transition
                                duration-150
                                ease-in-out
                                ml-1"  data-bs-dismiss="modal">Add Spouse Information</button>
                            </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <!-- View Spouse Info Modal -->

    @isset($spouse[0])
        <div id="viewUserSpouseModal" tabindex="-1" aria-labelledby="viewUserSpouseModal" aria-hidden="true" class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto">
            <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="viewUserSpouseModal">Spouse/Partner info</h5>
                <button type="button"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">

                    <h3 class="flex text-lg font-semibold"> {{ $spouse[0]->spouse_fname }}   {{ $spouse[0]->spouse_lname }}

                        <button wire:click="editUserSpouse({{ $spouse[0]->id }})" type="button" data-bs-toggle="modal" data-bs-target="#updateUserSpouseModal" class="flex ml-3 text-xs underline text-gray-500 items-center">Edit</button>
                        <div wire:loading>
                            Processing Data...
                        </div>

                    </h3>
                    <div class="grid grid-cols-5 gap-4 mt-2 mx-2">
                        <div class="col-span-1 text-left">

                            <p class="text-gray-800 whitespace-nowrap">Role:</p>
                            <p class="text-gray-800 whitespace-nowrap">Phone:</p>
                            <p class="text-gray-800 whitespace-nowrap">Email:</p>
                            <p class="text-gray-800 whitespace-nowrap">Birthdate:</p>
                            <p class="text-gray-800 whitespace-nowrap">Anniversary:</p>



                        </div>
                        <div class="col-span-4 text-left">

                      {{--  <p class="text-gray-800 whitespace-nowrap">{{ $spouse[0]->estate_role }}</p>
                        <p class="text-gray-800 whitespace-nowrap">{{ $spouse[0]->spouse_phone }}</p>
                        <p class="text-gray-800 whitespace-nowrap">{{ $spouse[0]->spouse_email }}</p>
                        <p class="text-gray-800">{{ $spouse[0]->birth_month }}/{{ $spouse[0]->birth_day }}/{{ $spouse[0]->birth_year}}</p>
                        <p class="text-gray-800">{{ $spouse[0]->anniversary_month }}/{{ $spouse[0]->anniversary_day }}/{{ $spouse[0]->anniversary_year}}</p> --}}

                        <p class="text-gray-800 whitespace-nowrap">{{ ($spouse[0]->estate_role) != NULL || '' ? $spouse[0]->estate_role : '-' }}</p>
                        <p class="text-gray-800 whitespace-nowrap">{{ ($spouse[0]->spouse_phone) != NULL || '' ? $spouse[0]->spouse_phone : '-' }}</p>
                        <p class="text-gray-800 whitespace-nowrap">{{ ($spouse[0]->spouse_email) != NULL || '' ? $spouse[0]->spouse_email : '-' }}</p>
                        <p class="text-gray-800 whitespace-nowrap">{{ ($spouse[0]->birth_month) != NULL || '' ? $spouse[0]->birth_month : '-' }}/{{ ($spouse[0]->birth_day) != NULL || '' ? $spouse[0]->birth_day : '-' }}/{{ ($spouse[0]->birth_year) != NULL || '' ? $spouse[0]->birth_year : '-' }}</p>
                        <p class="text-gray-800 whitespace-nowrap">{{ ($spouse[0]->anniversary_month) != NULL || '' ? $spouse[0]->anniversary_month : '-' }}/{{ ($spouse[0]->anniversary_day) != NULL || '' ? $spouse[0]->anniversary_day : '-' }}/{{ ($spouse[0]->anniversary_year) != NULL || '' ? $spouse[0]->anniversary_year : '-' }}</p>
                        {{-- <p class="text-gray-800 whitespace-nowrap">{{ ($spouse[0]->estate_role) != NULL || '' ? $spouse[0]->estate_role : '-' }}</p> --}}


                    </div>

                    </div>


                    <div class="col-span-4 mt-8 mb-2 mx-1">
                        <div class="bg-blue-50 rounded-xl p-4 max-h-36 overflow-y-auto">
                            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                            <h3 class="text-black font-black">Why is this information important?</h3>
                            <p class="mt-2 text-xs"> Identifying and adding your spouse or partner to your estate is important because it ensures that your wishes for how you would like your assets to be handled in the event of your death are carried out. Lifespot will help you organize these documents see: document center. This document center allows you to store and organize important documents, such as wills, trusts, life insurance policies, and financial statements, in one place that can be accessed by your spouse or partner in the event of your death. This ensures that all of your important documents are in one place and easily accessible.</p>
                        </div>
                    </div>

                </div>
                <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-between p-4 border-t border-gray-200 rounded-b-md">


                <button type="button" class="text-right text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none xfocus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600
                    transition
                    duration-150
                    ease-in-out" data-bs-dismiss="modal">Close</button>

                    <button wire:click="destroy({{ $spouse[0]->id }})" type="button"
                        {{-- onclick="return confirm('Are you sure you want to delete this?')"  --}}
                        class="text-right text-gray-500 bg-white hover:bg-red-100 focus:ring-4 focus:outline-none xfocus:ring-red-300 rounded-lg border border-red-200 text-sm font-medium px-5 py-2.5 hover:text-red-900 focus:z-10 dark:bg-red-700 dark:text-red-300 dark:border-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-gray-600
                    transition
                    duration-150
                    ease-in-out">Delete Spouse Info
                </button>
                </div>
            </div>
            </div>
        </div>
    @endisset

    <!-- Edit/Update Spouse Modal -->
    @isset($spouse[0])
        <div wire:ignore.self id="updateUserSpouseModal" tabindex="-1" aria-labelledby="updateUserSpouseModal" aria-hidden="true" class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto">

            <div class="modal-dialog relative w-auto pointer-events-none">
                <div
                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div
                        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                        <h5 class="text-xl font-medium leading-normal text-gray-800" id="updateUserSpouseModal">Update this Spouse/Partner Information </h5>
                    </div>
                    <div class="modal-body relative p-4">
                        <form wire:submit.prevent="updateUserSpouse({{ $spouse[0]->id }})">

                                <div class="max-h-screen grid lg:grid-cols-4 gap-4">

                                    <!--QUESTIONS-->
                                    <div class="col-span-4 xlg:col-span-5 space-y-3 pb-5">
                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                            <div class="lg:w-1/2">
                                                <label for="spouse_fname" class="block text-sm font-black text-black">First Name</label>
                                                <input type="text" name="spouse_fname" wire:model="spouse_fname"  autocomplete="spouse_fname" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('spouse_fname') }}" placeholder="First Name">

                                                @error('spouse_fname')
                                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                                @enderror


                                            </div>
                                            <div class="lg:w-1/2">
                                                <label for="spouse_lname" class="block text-sm font-black text-black">Last Name</label>
                                                <input type="text" xname="spouse_lname" wire:model="spouse_lname"  autocomplete="spouse_lname" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                value="{{ old('spouse_lname') }}" placeholder="Last Name">

                                                @error('spouse_lname') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>


                                        </div>
                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">


                                        </div>
                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                            <div class="lg:w-full">
                                                    <label for="estate_role" class="block text-sm font-black text-black">Estate Role</label>
                                                    <input type="text" xname="estate_role" wire:model="estate_role"  autocomplete="estate_role" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                    value="{{ old('estate_role') }}" placeholder="Estate Role">

                                                    @error('estate_role') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                            <div class="lg:w-1/2">
                                                    <label for="spouse_phone" class="block text-sm font-black text-black">Phone</label>
                                                    <input type="text" xname="spouse_phone" wire:model="spouse_phone"  autocomplete="spouse_phone" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                    value="{{ old('spouse_phone') }}" placeholder="Phone">

                                                    @error('spouse_phone') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>


                                            <div class="lg:w-1/2">
                                                    <label for="spouse_email" class="block text-sm font-black text-black">Email</label>
                                                    <input type="email" xname="spouse_email" wire:model="spouse_email"  autocomplete="spouse_email" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                    value="{{ old('spouse_email') }}" placeholder="Email">

                                                    @error('spouse_email') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                            <div class="lg:w-1/2">
                                                <label for="birth_month" class="block text-sm font-black text-black">Birth Month</label>
                                                {{-- <input type="text" xname="birth_month" wire:model="birth_month"  autocomplete="birth_month" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                value="{{ old('birth_month') }}" placeholder="Month"> --}}
                                                <select class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"  wire:model="birth_month" >
                                                    <option value="">Select One</option>
                                                      @foreach ($months as $month)

                                                      <option value="{{ $month->id }}"

                                                        {{ $month->id == old('birth_month') ? 'selected' : '' }}>{{ $month->mth }}
                                                    </option>

                                                     @endforeach
                                                </select>

                                                @error('birth_month') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>


                                            <div class="lg:w-1/4">
                                                    <label for="birth_day" class="block text-sm font-black text-black">Birth Day</label>
                                                    {{-- <input type="text" xname="birth_day" wire:model="birth_day"  autocomplete="birth_day" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                    value="{{ old('birth_day') }}" placeholder="Day"> --}}
                                                    <select class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"  wire:model="birth_day" >
                                                        <option value="">Select One</option>
                                                          @foreach ($days as $day)

                                                          <option value="{{ $day->id }}"

                                                            {{ $day->id == old('birth_day') ? 'selected' : '' }}>{{ $day->days }}
                                                        </option>

                                                         @endforeach
                                                    </select>

                                                    @error('birth_day') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>


                                            <div class="lg:w-1/4">
                                                    <label for="birth_year" class="block text-sm font-black text-black">Birth Year</label>
                                                    <input type="text" xname="birth_year" wire:model="birth_year"  autocomplete="birth_year" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                    value="{{ old('birth_year') }}" placeholder="Year">

                                                    @error('birth_year') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                            <div class="lg:w-1/2">
                                                    <label for="anniversary_month" class="block text-sm font-black text-black">Anniversary Month</label>
                                                    {{-- <input type="text" xname="anniversary_month" wire:model="anniversary_month"  autocomplete="anniversary_month" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                    value="{{ old('anniversary_month') }}" placeholder="Month"> --}}
                                                    <select class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"  wire:model="anniversary_month" >
                                                        <option value="">Select One</option>
                                                          @foreach ($months as $month)

                                                          <option value="{{ $month->id }}"

                                                            {{ $month->id == old('anniversary_month') ? 'selected' : '' }}>{{ $month->mth }}
                                                        </option>

                                                         @endforeach
                                                    </select>

                                                    @error('anniversary_month') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>


                                            <div class="lg:w-1/4">
                                                    <label for="anniversary_day" class="block text-sm font-black text-black">Anniversary Day</label>
                                                    {{-- <input type="text" xname="anniversary_day" wire:model="anniversary_day"  autocomplete="anniversary_day" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                    value="{{ old('anniversary_day') }}" placeholder="Day"> --}}
                                                    <select class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"  wire:model="anniversary_day" >
                                                        <option value="">Select One</option>
                                                          @foreach ($days as $day)

                                                          <option value="{{ $day->id }}"

                                                            {{ $day->id == old('anniversary_day') ? 'selected' : '' }}>{{ $day->days }}
                                                        </option>

                                                         @endforeach
                                                    </select>

                                                    @error('anniversary_day') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>


                                            <div class="lg:w-1/4">
                                                    <label for="anniversary_year" class="block text-sm font-black text-black">Anniversary Year</label>
                                                    <input type="text" xname="anniversary_year" wire:model="anniversary_year"  autocomplete="anniversary_year" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                    value="{{ old('anniversary_year') }}" placeholder="Year">

                                                    @error('anniversary_year') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>
                                        </div>


                                    </div>
                                        <!--END QUESTIONS-->

                                    <div class="hidden lg:block col-span-4">
                                        <div class="bg-blue-50 rounded-xl p-4 max-h-36 overflow-y-auto">
                                            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                                            <h3 class="text-black font-black">Why is this information important?</h3>
                                            <p class="mt-2 text-xs"> Identifying and adding your spouse or partner to your estate is important because it ensures that your wishes for how you would like your assets to be handled in the event of your death are carried out. Lifespot will help you organize these documents see: document center. This document center allows you to store and organize important documents, such as wills, trusts, life insurance policies, and financial statements, in one place that can be accessed by your spouse or partner in the event of your death. This ensures that all of your important documents are in one place and easily accessible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-between p-4 border-t border-gray-200 rounded-b-md mt-8">

                                    <button type="button" class="text-right text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none xfocus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600
                                    transition
                                    duration-150
                                    ease-in-out" data-bs-dismiss="modal">Cancel</button>

                                    <button wire:click="closeModal()" type="submit" class="px-6
                                    py-2.5
                                    bg-blue-600
                                    text-white
                                    font-semibold
                                    text-xs
                                    leading-tight
                                    uppercase
                                    rounded
                                    shadow-md
                                    hover:bg-blue-700 hover:shadow-lg
                                    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                                    active:bg-blue-800 active:shadow-lg
                                    transition
                                    duration-150
                                    ease-in-out
                                    ml-1" data-bs-dismiss="modal">Update</button>
                                </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    @endisset
</div>
