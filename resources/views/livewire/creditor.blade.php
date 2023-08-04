<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    <div wire:ignore.self id="addCreditor" tabindex="-1" aria-labelledby="addCreditorLabel" aria-hidden="true" class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto">
        <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="addCreditorLabel">Add creditor info for {{ $asset->name }}</h5>
                </div>
                <div class="modal-body relative p-4">
                    <form wire:submit.prevent="addCreditor">

                            <div class="max-h-screen grid lg:grid-cols-4 gap-4">

                                <!--QUESTIONS-->
                                <div class="col-span-4 xlg:col-span-5 space-y-3 pb-5">
                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-full">
                                            <label for="creditor_name" class="block text-sm font-black text-black">Creditor Name</label>
                                            <input type="text" name="creditor_name" wire:model="creditor_name"  autocomplete="creditor_name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('creditor_name') }}" placeholder="Creditor Name">

                                            @error('creditor_name')
                                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            @enderror


                                        </div>



                                    </div>

                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-1/2">
                                                <label for="balance_owed" class="block text-sm font-black text-black">Balance Owed</label>
                                                <input type="text" xname="balance_owed" wire:model="balance_owed"  autocomplete="balance_owed" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                value="{{ old('balance_owed') }}" placeholder="Balance Owed">

                                                @error('balance_owed') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="lg:w-1/2">
                                            <label for="account_number" class="block text-sm font-black text-black">Account Number</label>
                                            <input type="text" xname="account_number" wire:model="account_number"  autocomplete="account_number" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                            value="{{ old('account_number') }}" placeholder="Account Number">

                                            @error('account_number') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>

                                    </div>

                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-1/2">
                                                <label for="phone" class="block text-sm font-black text-black">Phone</label>
                                                <input type="text" xname="phone" wire:model="phone"  autocomplete="phone" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                value="{{ old('phone') }}" placeholder="Phone">

                                                @error('phone') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="lg:w-1/2">
                                            <label for="website" class="block text-sm font-black text-black">Website</label>
                                            <input type="text" xname="website" wire:model="website"  autocomplete="website" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                            value="{{ old('website') }}" placeholder="Website">

                                            @error('website') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                         </div>
                                    </div>
                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-full">
                                                <label for="notes" class="block text-sm font-black text-black">Notes</label>
                                                <textarea wire:model="notes" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Notes"></textarea>

                                                @error('notes') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                </div>
                                    <!--END QUESTIONS-->

                                <div class="col-span-4">
                                    <div class="bg-blue-50 rounded-xl p-4">
                                        <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                                        <h3 class="text-black font-black">Why is this information important?</h3>
                                        <p class="mt-2 text-xs"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptatum quae aut ex necessitatibus aliquid, aperiam vero nemo harum tempore dolorum alias nesciunt, dignissimos, minima at! Perspiciatis alias itaque excepturi!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-between p-4 border-t border-gray-200 rounded-b-md">

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
                                ml-1"  data-bs-dismiss="modal">Add Creditor Information</button>
                            </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <!-- View Creditor Info Modal -->

    @isset($creditor[0])
        <div id="viewCreditorModal" tabindex="-1" aria-labelledby="viewCreditorModal" aria-hidden="true" class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto">
            <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="viewCreditorModal">Creditor info for {{ $asset->name }}</h5>
                <button type="button"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">

                <h3 class="flex text-lg font-semibold"> {{ $creditor[0]->creditor_name}}

                    <button wire:click="editCreditor({{ $creditor[0]->id }})" type="button" data-bs-toggle="modal" data-bs-target="#updateCreditorModal" class="flex ml-3 text-xs underline text-gray-500 items-center">Edit</button>
                    <div wire:loading>
                        Processing Data...
                    </div>

                </h3>
                    <div class="grid grid-cols-5 gap-4 mt-2 mx-2">
                        <div class="col-span-1 text-left">

                            <p class="text-gray-800 whitespace-nowrap">Owed:</p>
                            <p class="text-gray-800 whitespace-nowrap">Account:</p>
                            <p class="text-gray-800 whitespace-nowrap">Phone:</p>
                            <p class="text-gray-800 whitespace-nowrap">Website:</p>
                            <p class="text-gray-800 whitespace-nowrap">Notes:</p>


                        </div>
                        <div class="col-span-4 text-left">

                        {{-- <p class="text-gray-800 whitespace-nowrap">{{ $medical[0]->phone }}</p>
                        <p class="text-gray-800">{{ $medical[0]->notes }}</p> --}}

                        <p class="text-gray-800 whitespace-nowrap">{{ ($creditor[0]->balance_owed) != NULL || '' ? $creditor[0]->balance_owed : '-' }}</p>
                        <p class="text-gray-800 whitespace-nowrap">{{ ($creditor[0]->account_number) != NULL || '' ? $creditor[0]->account_number : '-' }}</p>
                        <p class="text-gray-800 whitespace-nowrap">{{ ($creditor[0]->phone) != NULL || '' ? $creditor[0]->phone : '-' }}</p>
                        <p class="text-gray-800 whitespace-nowrap">{{ ($creditor[0]->website) != NULL || '' ? $creditor[0]->website : '-' }}</p>
                        <p class="text-gray-800">{{ ($creditor[0]->notes) != NULL || '' ? $creditor[0]->notes : '-' }}</p>

                    </div>

                    </div>


                    <div class="col-span-4 mt-8 mb-2 mx-1">
                        <div class="bg-blue-50 rounded-xl p-4">
                            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                            <h3 class="text-black font-black">Why is this information important?</h3>
                            <p class="mt-2 text-xs"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptatum quae aut ex necessitatibus aliquid, aperiam vero nemo harum tempore dolorum alias nesciunt, dignissimos, minima at! Perspiciatis alias itaque excepturi!</p>
                        </div>
                    </div>

                </div>
                <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-between p-4 border-t border-gray-200 rounded-b-md">


                <button type="button" class="text-right text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none xfocus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600
                    transition
                    duration-150
                    ease-in-out" data-bs-dismiss="modal">Close</button>

                    <button wire:click="destroy({{ $creditor[0]->id }})" type="button"
                        {{-- onclick="return confirm('Are you sure you want to delete this?')"  --}}
                        class="text-right text-gray-500 bg-white hover:bg-red-100 focus:ring-4 focus:outline-none xfocus:ring-red-300 rounded-lg border border-red-200 text-sm font-medium px-5 py-2.5 hover:text-red-900 focus:z-10 dark:bg-red-700 dark:text-red-300 dark:border-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-gray-600
                    transition
                    duration-150
                    ease-in-out">Delete Creditor Info
                </button>
                </div>
            </div>
            </div>
        </div>
    @endisset

    <!-- Edit/Update Creditor Modal -->
    @isset($creditor[0])
        <div wire:ignore.self id="updateCreditorModal" tabindex="-1" aria-labelledby="updateCreditorModal" aria-hidden="true" class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto">

            <div class="modal-dialog relative w-auto pointer-events-none">
                <div
                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div
                        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                        <h5 class="text-xl font-medium leading-normal text-gray-800" id="updateCreditorModal">Update this Creditor Information </h5>
                    </div>
                    <div class="modal-body relative p-4">
                        <form wire:submit.prevent="updateCreditor({{ $creditor[0]->id }})">

                                <div class="max-h-screen grid lg:grid-cols-4 gap-4">

                                <!--QUESTIONS-->
                                <div class="col-span-4 xlg:col-span-5 space-y-3 pb-5">
                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-full">
                                            <label for="creditor_name" class="block text-sm font-black text-black">Creditor Name</label>
                                            <input type="text" name="creditor_name" wire:model="creditor_name"  autocomplete="creditor_name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('creditor_name') }}" placeholder="Creditor Name">

                                            @error('creditor_name')
                                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            @enderror


                                        </div>



                                    </div>

                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-1/2">
                                                <label for="balance_owed" class="block text-sm font-black text-black">Balance Owed</label>
                                                <input type="text" xname="balance_owed" wire:model="balance_owed"  autocomplete="balance_owed" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                value="{{ old('balance_owed') }}" placeholder="Balance Owed">

                                                @error('balance_owed') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="lg:w-1/2">
                                            <label for="account_number" class="block text-sm font-black text-black">Account Number</label>
                                            <input type="text" xname="account_number" wire:model="account_number"  autocomplete="account_number" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                            value="{{ old('account_number') }}" placeholder="Account Number">

                                            @error('account_number') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>

                                    </div>

                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-1/2">
                                                <label for="phone" class="block text-sm font-black text-black">Phone</label>
                                                <input type="text" xname="phone" wire:model="phone"  autocomplete="phone" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                value="{{ old('phone') }}" placeholder="Phone">

                                                @error('phone') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="lg:w-1/2">
                                            <label for="website" class="block text-sm font-black text-black">Website</label>
                                            <input type="text" xname="website" wire:model="website"  autocomplete="website" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                            value="{{ old('website') }}" placeholder="Website">

                                            @error('website') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                         </div>
                                    </div>
                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-full">
                                                <label for="notes" class="block text-sm font-black text-black">Notes</label>
                                                <textarea wire:model="notes" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Notes"></textarea>

                                                @error('notes') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                </div>
                                    <!--END QUESTIONS-->

                                    <div class="hidden lg:block col-span-4">
                                        <div class="bg-blue-50 rounded-xl p-4">
                                            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                                            <h3 class="text-black font-black">Why is this information important?</h3>
                                            <p class="mt-2 text-xs"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptatum quae aut ex necessitatibus aliquid, aperiam vero nemo harum tempore dolorum alias nesciunt, dignissimos, minima at! Perspiciatis alias itaque excepturi!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-between p-4 border-t border-gray-200 rounded-b-md">

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
