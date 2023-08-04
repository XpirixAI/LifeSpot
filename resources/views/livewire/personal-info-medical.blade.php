<div>
    {{-- Success is as dangerous as failure. --}}

    <div wire:ignore.self id="addUserMedical" tabindex="-1" aria-labelledby="addUserMedicalLabel" aria-hidden="true" class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto">
        <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="addUserMedicalLabel">Add your medical info </h5>
                </div>
                <div class="modal-body relative p-4">
                    <form wire:submit.prevent="addUserMedical">

                            <div class="max-h-screen grid lg:grid-cols-4 gap-4">

                                <!--QUESTIONS-->
                                <div class="col-span-4 xlg:col-span-5 space-y-3 pb-5">
                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-full">
                                            <label for="family_doctor" class="block text-sm font-black text-black">Family Doctor</label>
                                            <input type="text" name="family_doctor" wire:model="family_doctor"  autocomplete="family_doctor" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('family_doctor') }}" placeholder="Family Doctor">

                                            @error('family_doctor')
                                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            @enderror


                                        </div>



                                    </div>

                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-full">
                                                <label for="phone" class="block text-sm font-black text-black">Phone</label>
                                                <input type="text" xname="phone" wire:model="phone"  autocomplete="phone" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                value="{{ old('phone') }}" placeholder="Phone">

                                                @error('phone') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-full">
                                                <label for="notes" class="block text-sm font-black text-black">Medicine/Notes</label>
                                                <textarea wire:model="notes" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Medicine/Notes"></textarea>

                                                @error('notes') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                </div>
                                    <!--END QUESTIONS-->

                                <div class="col-span-4">
                                    <div class="bg-blue-50 rounded-xl p-4 max-h-36 overflow-y-auto">
                                        <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                                        <h3 class="text-black font-black">Why is this information important?</h3>
                                        <p class="mt-2 text-xs"> Identifying and adding your medical information to your estate is important because it ensures that your medical wishes are respected and carried out in the event of an emergency or death. Lifespot will help you organize these documents within the document center by providing an easy to use interface to store and organize all your important medical documents. You can securely upload and store your documents, add notes, and even share your documents with family and trusted advisors. Lifespot also helps you keep track of when your documents were last updated and allows you to set reminders for when documents need to be updated.</p>
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
                                ml-1"  data-bs-dismiss="modal">Add Medical Information</button>
                            </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <!-- View Medical Info Modal -->

    @isset($medical[0])
        <div id="viewUserMedicalModal" tabindex="-1" aria-labelledby="viewUserMedicalModal" aria-hidden="true" class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto">
            <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="viewUserMedicalModal">Medical info for you</h5>
                <button type="button"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">

                <h3 class="flex text-lg font-semibold"> {{ $medical[0]->family_doctor}}

                    <button wire:click="editUserMedical({{ $medical[0]->id }})" type="button" data-bs-toggle="modal" data-bs-target="#updateUserMedicalModal" class="flex ml-3 text-xs underline text-gray-500 items-center">Edit</button>
                    <div wire:loading>
                        Processing Data...
                    </div>

                </h3>
                    <div class="grid grid-cols-5 gap-4 mt-2 mx-2">
                        <div class="col-span-1 text-left">

                            <p class="text-gray-800 whitespace-nowrap">Phone:</p>
                            <p class="text-gray-800 whitespace-nowrap">Notes:</p>



                        </div>
                        <div class="col-span-4 text-left">
                            {{-- <div class="text-gray-500">{{ ($asset->notes_wishes) != NULL || '' ? $asset->notes_wishes : '-' }}</div> --}}
                        <p class="text-gray-800 whitespace-nowrap">{{ ($medical[0]->phone) != NULL || '' ? $medical[0]->phone : '-' }}</p>
                        <p class="text-gray-800">{{ ($medical[0]->notes) != NULL || '' ? $medical[0]->notes : '-' }}</p>
                        {{-- <p class="text-gray-800">{{ $medical[0]->notes }}</p> --}}


                    </div>

                    </div>


                    <div class="col-span-4 mt-8 mb-2 mx-1">
                        <div class="bg-blue-50 rounded-xl p-4 max-h-36 overflow-y-auto">
                            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                            <h3 class="text-black font-black">Why is this information important?</h3>
                            <p class="mt-2 text-xs"> Identifying and adding your medical information to your estate is important because it ensures that your medical wishes are respected and carried out in the event of an emergency or death. Lifespot will help you organize these documents within the document center by providing an easy to use interface to store and organize all your important medical documents. You can securely upload and store your documents, add notes, and even share your documents with family and trusted advisors. Lifespot also helps you keep track of when your documents were last updated and allows you to set reminders for when documents need to be updated.</p>
                        </div>
                    </div>

                </div>
                <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-between p-4 border-t border-gray-200 rounded-b-md">


                <button type="button" class="text-right text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none xfocus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600
                    transition
                    duration-150
                    ease-in-out" data-bs-dismiss="modal">Close</button>

                    <button wire:click="destroy({{ $medical[0]->id }})" type="button"
                        {{-- onclick="return confirm('Are you sure you want to delete this?')"  --}}
                        class="text-right text-gray-500 bg-white hover:bg-red-100 focus:ring-4 focus:outline-none xfocus:ring-red-300 rounded-lg border border-red-200 text-sm font-medium px-5 py-2.5 hover:text-red-900 focus:z-10 dark:bg-red-700 dark:text-red-300 dark:border-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-gray-600
                    transition
                    duration-150
                    ease-in-out">Delete Medical Info
                </button>
                </div>
            </div>
            </div>
        </div>
    @endisset

    <!-- Edit/Update Medical Modal -->
    @isset($medical[0])
        <div wire:ignore.self id="updateUserMedicalModal" tabindex="-1" aria-labelledby="updateUserMedicalModal" aria-hidden="true" class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto">

            <div class="modal-dialog relative w-auto pointer-events-none">
                <div
                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div
                        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                        <h5 class="text-xl font-medium leading-normal text-gray-800" id="updateUserMedicalModal">Update this Medical Information </h5>
                    </div>
                    <div class="modal-body relative p-4">
                        <form wire:submit.prevent="updateUserMedical({{ $medical[0]->id }})">

                                <div class="max-h-screen grid lg:grid-cols-4 gap-4">

                                    <!--QUESTIONS-->
                                    <div class="col-span-4 xlg:col-span-5 space-y-3 pb-5">
                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                            <div class="lg:w-full">
                                                <label for="family_doctor"  class="block text-sm font-black text-black">Family Doctor</label>

                                                <input type="text" wire:model="family_doctor" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" >


                                                @error('family_doctor') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>



                                        </div>

                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">


                                            <div class="lg:w-full">
                                                    <label for="phone"  class="block text-sm font-black text-black">Phone</label>

                                                    <input type="text" wire:model="phone" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" >


                                                    @error('phone') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                            <div class="lg:w-full">
                                                    <label for="notes"  class="block text-sm font-black text-black">Medicine/Notes</label>
                                                    <textarea wire:model="notes" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Medicine/Notes"></textarea>

                                                    @error('notes') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>
                                        </div>


                                    </div>
                                        <!--END QUESTIONS-->

                                    <div class="hidden lg:block col-span-4">
                                        <div class="bg-blue-50 rounded-xl p-4 max-h-36 overflow-y-auto">
                                            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                                            <h3 class="text-black font-black">Why is this information important?</h3>
                                            <p class="mt-2 text-xs"> Identifying and adding your medical information to your estate is important because it ensures that your medical wishes are respected and carried out in the event of an emergency or death. Lifespot will help you organize these documents within the document center by providing an easy to use interface to store and organize all your important medical documents. You can securely upload and store your documents, add notes, and even share your documents with family and trusted advisors. Lifespot also helps you keep track of when your documents were last updated and allows you to set reminders for when documents need to be updated.</p>
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
