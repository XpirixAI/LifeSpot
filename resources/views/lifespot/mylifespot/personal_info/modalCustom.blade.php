    <!-- Modal -->
    <div x-cloak x-show="showCustomModal" style="background-color: rgba(0, 0, 0, .5)"
        class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50">
        <!-- inner modal -->
        <div
            @click.away="showCustomModal = false"
            x-transition:enter="motion-safe:ease-out duration-500"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            class="xmax-w-3xl px-5 py-4 mx-auto text-left bg-white rounded-xl shadow-lg">
            <!-- Title / Close-->
            <div class="flex items-center justify-between space-y-3">
                <h5 class="mr-3 font-black text-black xmax-w-none">Upload a Document</h5>
                <button type="button" class="z-50 cursor-pointer" @click="showCustomModal = false">
                    <svg xmlns="http://www.w3.org/2000/svg" xwidth="20" xheight="20 text-gray-300" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <img class="mt-2" src="{{ asset('img/WalkerFamilyPics/drag_drop.png') }}" alt="">

                <!-- content -->
                <div class="grid grid-cols-2 gap-4 pt-5 pb-2">
                    <div>
                        <div class="font-semibold text-gray-700 text-xs lg:text-sm mb-2 ">Documnet Title</div>
                        <div class="xlg:w-1/2 text-xs lg:text-sm">
                            <label for="title" class="block text-xs lg:text-sm font-black text-black">Name Your Document</label>
                            <input type="text" name="title"  autocomplete="title" class="mt-1 text-gray-700 focus:ring-blue-500 focus:border-blue-500 block w-full text-xs lg:text-sm border-gray-300 rounded-md" value="{{ old('title') }}" placeholder="Document Title">
                            @error('title')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <a class="text-xs text-blue-400" href="#!">
                            Title Required
                        </a>
                    </div>
                    {{-- <div>
                        <label for="title">Document Title</label>
                        <input type="text" name="title">
                    </div> --}}
                    <div>
                        <div class="font-semibold text-sm mb-2 text-gray-700">Sharing With</div>
                        <ul class="flex items-center mb-2">
                            <li>
                                <a href="#!">
                                    <span class="bg-teal-600 text-white text-xs font-bold rounded-full h-8 w-8 uppercase py-3 px-2">SW</span>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img class="rounded-full h-8 w-8" src="{{ asset('img/WalkerFamilyPics/jared.png') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img class="rounded-full h-8 w-8" src="{{ asset('img/WalkerFamilyPics/howard.png') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 border border-dashed rounded-full text-gray-300 text-center" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                            </svg>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <a class="text-xs text-blue-400 mb-2" href="#!">
                            Add a Member
                        </a> <br>
                        <div class="float-right mt-5 space-y-2">
                            <button @click="showCustomModal = false" class="border border-blue-800 rounded-lg font-semibold text-xs py-2 px-8 mr-1 text-[#056591]">Cancel</button>
                            <button class="bg-[#1f588d] text-white border border-gray-400 rounded-lg font-semibold text-xs py-2 px-8">Upload</button>
                        </div>

                    </div>


                </div>

        </div>
    </div>
