<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <div wire:ignore.self id="addActivity" tabindex="-1" aria-labelledby="addActivityLabel" aria-hidden="true" class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto">
        <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="addActivityLabel">Add activity info for {{ $asset->fname }}</h5>
                </div>
                <div class="modal-body relative p-4">
                    <form wire:submit.prevent="addActivity">

                            <div class="max-h-screen grid lg:grid-cols-4 gap-4">

                                <!--QUESTIONS-->
                                <div class="col-span-4 xlg:col-span-5 space-y-3 pb-5">
                                    <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                        <div class="lg:w-full">
                                            <label for="activity_name" class="block text-sm font-black text-black">Activity Name</label>
                                            <input type="text" name="activity_name" wire:model="activity_name"  autocomplete="activity_name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('activity_name') }}" placeholder="activity Name">

                                            @error('activity_name')
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
                                                <label for="notes" class="block text-sm font-black text-black">Activity/Notes</label>
                                                <textarea wire:model="notes" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Activity/Notes"></textarea>

                                                @error('notes') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                </div>
                                    <!--END QUESTIONS-->

                                <div class="col-span-4">
                                    <div class="bg-blue-50 rounded-xl p-4">
                                        <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                                        <h3 class="text-black font-black">Why is this information important?</h3>
                                        <p class="mt-2 text-xs"> Keep current contact information for you dependent's activities convenient and easy to share with emergency contacts.</p>
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
                                ml-1"  data-bs-dismiss="modal">Add Activity Information</button>
                            </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <!-- View Activity Info Modal -->

    @isset($activity[0])
        <div id="viewActivityModal" tabindex="-1" aria-labelledby="viewActivityModal" aria-hidden="true" class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto">
            <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="viewActivityModal">Activity info for {{ $asset->fname }}</h5>
                <button type="button"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">

                <h3 class="flex text-lg font-semibold"> {{ $activity[0]->activity_name}}

                    <button wire:click="editActivity({{ $activity[0]->id }})" type="button" data-bs-toggle="modal" data-bs-target="#updateActivityModal" class="flex ml-3 text-xs underline text-gray-500 items-center">Edit</button>
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

                        {{-- <p class="text-gray-800 whitespace-nowrap">{{ $activity[0]->phone }}</p>
                        <p class="text-gray-800">{{ $activity[0]->notes }}</p> --}}
                        <p class="text-gray-800 whitespace-nowrap">{{ ($activity[0]->phone) != NULL || '' ? $activity[0]->phone : '-' }}</p>
                        <p class="text-gray-800">{{ ($activity[0]->notes) != NULL || '' ? $activity[0]->notes : '-' }}</p>


                    </div>

                    </div>


                    <div class="col-span-4 mt-8 mb-2 mx-1">
                        <div class="bg-blue-50 rounded-xl p-4">
                            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                            <h3 class="text-black font-black">Why is this information important?</h3>
                            <p class="mt-2 text-xs"> Keep current contact information for you dependent's activities convenient and easy to share with emergency contacts.</p>
                        </div>
                    </div>

                </div>
                <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-between p-4 border-t border-gray-200 rounded-b-md">


                <button type="button" class="text-right text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none xfocus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600
                    transition
                    duration-150
                    ease-in-out" data-bs-dismiss="modal">Close</button>

                    <button wire:click="destroy({{ $activity[0]->id }})" type="button"
                        {{-- onclick="return confirm('Are you sure you want to delete this?')"  --}}
                        class="text-right text-gray-500 bg-white hover:bg-red-100 focus:ring-4 focus:outline-none xfocus:ring-red-300 rounded-lg border border-red-200 text-sm font-medium px-5 py-2.5 hover:text-red-900 focus:z-10 dark:bg-red-700 dark:text-red-300 dark:border-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-gray-600
                    transition
                    duration-150
                    ease-in-out">Delete Activity Info
                </button>
                </div>
            </div>
            </div>
        </div>
    @endisset

    <!-- Edit/Update Activity Modal -->
    @isset($activity[0])
        <div wire:ignore.self id="updateActivityModal" tabindex="-1" aria-labelledby="updateActivityModal" aria-hidden="true" class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto">

            <div class="modal-dialog relative w-auto pointer-events-none">
                <div
                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div
                        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                        <h5 class="text-xl font-medium leading-normal text-gray-800" id="updateActivityModal">Update this Activity Information </h5>
                    </div>
                    <div class="modal-body relative p-4">
                        <form wire:submit.prevent="updateActivity({{ $activity[0]->id }})">

                                <div class="max-h-screen grid lg:grid-cols-4 gap-4">

                                    <!--QUESTIONS-->
                                    <div class="col-span-4 xlg:col-span-5 space-y-3 pb-5">
                                        <div class="lg:flex lg:space-x-2 space-y-4 lg:space-y-0">

                                            <div class="lg:w-full">
                                                <label for="activity_name"  class="block text-sm font-black text-black">Activity Name</label>

                                                <input type="text" wire:model="activity_name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" >


                                                @error('activity_name') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
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
                                                    <label for="notes"  class="block text-sm font-black text-black">Activity/Notes</label>
                                                    <textarea wire:model="notes" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Activity/Notes"></textarea>

                                                    @error('notes') <span class="text-red-500 text-xs xmt-2">{{ $message }}</span> @enderror
                                            </div>
                                        </div>


                                    </div>
                                        <!--END QUESTIONS-->

                                    <div class="hidden lg:block col-span-4">
                                        <div class="bg-blue-50 rounded-xl p-4">
                                            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
                                            <h3 class="text-black font-black">Why is this information important?</h3>
                                            <p class="mt-2 text-xs"> Keep current contact information for you dependent's activities convenient and easy to share with emergency contacts.</p>
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
