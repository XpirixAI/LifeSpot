<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <div wire:ignore.self id="addUserWork" tabindex="-1" aria-labelledby="addUserWorkLabel" aria-hidden="true" class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto">
        <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="addUserWorkLabel">Add your work info </h5>
                </div>
                <div class="modal-body relative p-4">
                    <form wire:submit.prevent="addUserWork">

                            <div class="max-h-screen grid lg:grid-cols-4 gap-4">

                                <!--QUESTIONS-->
                                <div class="col-span-4 xlg:col-span-5 space-y-3 pb-5">
                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-full">
                                            <label for="employer" class="block text-sm font-black text-black">Employer</label>
                                            <input type="text" name="employer" wire:model="employer"  autocomplete="employer" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('employer') }}" placeholder="Employer Name">

                                            @error('employer')
                                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            @enderror


                                        </div>



                                    </div>
                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-full">
                                                <label for="title_position" class="block text-sm font-black text-black">Title/Position</label>
                                                <input type="text" xname="title_position" wire:model="title_position"  autocomplete="title_position" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                value="{{ old('title_position') }}" placeholder="Title/Position">

                                                @error('title_position') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-full">
                                                <label for="work_phone" class="block text-sm font-black text-black">Work Phone</label>
                                                <input type="text" xname="work_phone" wire:model="work_phone"  autocomplete="work_phone" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                value="{{ old('work_phone') }}" placeholder="Work Phone">

                                                @error('work_phone') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-full">
                                                <label for="work_email" class="block text-sm font-black text-black">Work Email</label>
                                                <input type="text" xname="work_email" wire:model="work_email"  autocomplete="work_email" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                value="{{ old('work_email') }}" placeholder="Work Email">

                                                @error('work_email') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-full">
                                                <label for="notes" class="block text-sm font-black text-black"> Notes</label>
                                                <textarea wire:model="notes" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Notes"></textarea>

                                                @error('notes') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                </div>
                                    <!--END QUESTIONS-->

                                <div class="col-span-4">
                                    <div class="bg-blue-50 rounded-xl p-4 max-h-36 overflow-y-auto">
                                        <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                                        <h3 class="text-black font-black">Why is this information important?</h3>
                                        <p class="mt-2 text-xs"> Documenting your employment information to your estate is important to make sure that your estate is properly managed and that your finances are in order. Lifespot’s Document Center can help you organize these documents so that they are easily accessible and well-organized. LifeSpot’s Document Center allows you to store and manage all of your important estate-related documents in one secure place. You can easily search for documents, and you can also add notes and reminders to each document. This will help you keep track of all your documents and make sure that your estate is being managed correctly.</p>
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
                                ml-1"  data-bs-dismiss="modal">Add Work Information</button>
                            </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <!-- View Work Info Modal -->

    @isset($work[0])
        <div id="viewUserWorkModal" tabindex="-1" aria-labelledby="viewUserWorkModal" aria-hidden="true" class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto">
            <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="viewUserWorkModal">Work info for you</h5>
                <button type="button"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">

                <h3 class="flex text-lg font-semibold"> {{ $work[0]->employer}}

                    <button wire:click="editUserWork({{ $work[0]->id }})" type="button" data-bs-toggle="modal" data-bs-target="#updateUserWorkModal" class="flex ml-3 text-xs underline text-gray-500 items-center">Edit</button>
                    <div wire:loading>
                        Processing Data...
                    </div>

                </h3>
                    <div class="grid grid-cols-5 gap-4 mt-2 mx-2">
                        <div class="col-span-1 text-left">

                            <p class="text-gray-800 whitespace-nowrap">Title:</p>
                            <p class="text-gray-800 whitespace-nowrap">Phone:</p>
                            <p class="text-gray-800 whitespace-nowrap">Email:</p>
                            <p class="text-gray-800 whitespace-nowrap">Notes:</p>



                        </div>
                        <div class="col-span-4 text-left">

                        {{-- <p class="text-gray-800 whitespace-nowrap">{{ $work[0]->title_position }}</p>
                        <p class="text-gray-800 whitespace-nowrap">{{ $work[0]->work_phone }}</p>
                        <p class="text-gray-800 whitespace-nowrap">{{ $work[0]->work_email }}</p>
                        <p class="text-gray-800">{{ $work[0]->notes }}</p> --}}
                        <p class="text-gray-800 whitespace-nowrap">{{ ($work[0]->title_position) != NULL || '' ? $work[0]->title_position : '-' }}</p>
                        <p class="text-gray-800 whitespace-nowrap">{{ ($work[0]->work_phone) != NULL || '' ? $work[0]->work_phone : '-' }}</p>
                        <p class="text-gray-800 whitespace-nowrap">{{ ($work[0]->work_email) != NULL || '' ? $work[0]->work_email : '-' }}</p>
                        <p class="text-gray-800">{{ ($work[0]->notes) != NULL || '' ? $work[0]->notes : '-' }}</p>


                    </div>

                    </div>


                    <div class="col-span-4 mt-8 mb-2 mx-1">
                        <div class="bg-blue-50 rounded-xl p-4 max-h-36 overflow-y-auto">
                            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                            <h3 class="text-black font-black">Why is this information important?</h3>
                            <p class="mt-2 text-xs"> Documenting your employment information to your estate is important to make sure that your estate is properly managed and that your finances are in order. Lifespot’s Document Center can help you organize these documents so that they are easily accessible and well-organized. LifeSpot’s Document Center allows you to store and manage all of your important estate-related documents in one secure place. You can easily search for documents, and you can also add notes and reminders to each document. This will help you keep track of all your documents and make sure that your estate is being managed correctly.</p>
                        </div>
                    </div>

                </div>
                <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-between p-4 border-t border-gray-200 rounded-b-md">


                <button type="button" class="text-right text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none xfocus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600
                    transition
                    duration-150
                    ease-in-out" data-bs-dismiss="modal">Close</button>

                    <button wire:click="destroy({{ $work[0]->id }})" type="button"
                        {{-- onclick="return confirm('Are you sure you want to delete this?')"  --}}
                        class="text-right text-gray-500 bg-white hover:bg-red-100 focus:ring-4 focus:outline-none xfocus:ring-red-300 rounded-lg border border-red-200 text-sm font-medium px-5 py-2.5 hover:text-red-900 focus:z-10 dark:bg-red-700 dark:text-red-300 dark:border-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-gray-600
                    transition
                    duration-150
                    ease-in-out">Delete Work Info
                </button>
                </div>
            </div>
            </div>
        </div>
    @endisset

    <!-- Edit/Update Work Modal -->
    @isset($work[0])
        <div wire:ignore.self id="updateUserWorkModal" tabindex="-1" aria-labelledby="updateUserWorkModal" aria-hidden="true" class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto">

            <div class="modal-dialog relative w-auto pointer-events-none">
                <div
                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div
                        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                        <h5 class="text-xl font-medium leading-normal text-gray-800" id="updateUserWorkModal">Update this Work Information </h5>
                    </div>
                    <div class="modal-body relative p-4">
                        <form wire:submit.prevent="updateUserWork({{ $work[0]->id }})">

                                <div class="max-h-screen grid lg:grid-cols-4 gap-4">

                                    <!--QUESTIONS-->
                                    <div class="col-span-4 xlg:col-span-5 space-y-3 pb-5">
                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                            <div class="lg:w-full">
                                                <label for="employer"  class="block text-sm font-black text-black">Employer</label>

                                                <input type="text" wire:model="employer" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" >


                                                @error('employer') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>



                                        </div>


                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-full">
                                                <label for="title_position" class="block text-sm font-black text-black">Title/Position</label>
                                                <input type="text" xname="title_position" wire:model="title_position"  autocomplete="title_position" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                value="{{ old('title_position') }}" placeholder="Title/Position">

                                                @error('title_position') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-full">
                                                <label for="work_phone" class="block text-sm font-black text-black">Work Phone</label>
                                                <input type="text" xname="work_phone" wire:model="work_phone"  autocomplete="work_phone" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                value="{{ old('work_phone') }}" placeholder="Work Phone">

                                                @error('work_phone') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-full">
                                                <label for="work_email" class="block text-sm font-black text-black">Work Email</label>
                                                <input type="text" xname="work_email" wire:model="work_email"  autocomplete="work_email" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                value="{{ old('work_email') }}" placeholder="Work Email">

                                                @error('work_email') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                            <div class="lg:w-full">
                                                    <label for="notes"  class="block text-sm font-black text-black">Notes</label>
                                                    <textarea wire:model="notes" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Notes"></textarea>

                                                    @error('notes') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>
                                        </div>


                                    </div>
                                        <!--END QUESTIONS-->

                                    <div class="hidden lg:block col-span-4">
                                        <div class="bg-blue-50 rounded-xl p-4 max-h-36 overflow-y-auto">
                                            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                                            <h3 class="text-black font-black">Why is this information important?</h3>
                                            <p class="mt-2 text-xs"> Documenting your employment information to your estate is important to make sure that your estate is properly managed and that your finances are in order. Lifespot’s Document Center can help you organize these documents so that they are easily accessible and well-organized. LifeSpot’s Document Center allows you to store and manage all of your important estate-related documents in one secure place. You can easily search for documents, and you can also add notes and reminders to each document. This will help you keep track of all your documents and make sure that your estate is being managed correctly.</p>
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
