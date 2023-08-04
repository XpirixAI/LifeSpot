<div>

    <form wire:submit.prevent="submit" enctype="multipart/form-data">




        <div x-cloak x-show="showCustomModal"
            style="background-color: rgba(0, 0, 0, .5)"
            class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50">
            <!-- inner modal -->
            <div
                @click.away="showCustomModal = false"
                x-on:drop="isDroppingFile = false"
                x-on:drop.prevent="handleFileDrop($event)"
                x-on:dragover.prevent="isDroppingFile = true"
                x-on:dragleave.prevent="isDroppingFile = false"
                class="xmax-w-3xl px-5 py-4 mx-auto text-left bg-white rounded-xl shadow-lg"
            >
                <!-- Title / Close-->
                <div class="flex items-center justify-between space-y-3">
                    <h5 class="mr-3 font-black text-black xmax-w-none">Upload a Document</h5>
                    <button type="button" class="z-50 cursor-pointer" @click="showCustomModal = false">
                </div>

                <style>
                    .document-upload>input {
                display: none;
                }
                </style>


                <div
                    x-data="fileUpload()"
                    class="document-upload flex">
                    <div  class="relative flex flex-col items-center justify-center xh-screen xbg-slate-200">
                    {{-- x-on:drop="isDropping = false"
                    x-on:drop.prevent="handleFileDrop($event)"
                    x-on:dragover.prevent="isDropping = true"
                    x-on:dragleave.prevent="isDropping = false"  --}}

                    {{-- <div class="absolute top-4 bottom-4 left-0 right-0 border border-dashed rounded-lg z-30 flex items-center justify-center bg-blue-500 opacity-90"
                        x-show="isDropping">
                        <span class="text-lg text-white">Release file to upload!</span>
                    </div> --}}

                    <label for="document" class="w-48">

                        <div class="border-dashed border-2 border-gray-300 rounded-lg bg-blue-50 text-center cursor-pointer hover:bg-blue-100 p-4 my-4">
                            <span class=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white bg-blue-500 rounded-full p-1 mx-auto mb-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                            </svg>
                            </span>
                            <span class="text-xs font-medium text-sky-900 underline">Click to upload</span>
                            {{-- <span class="invisible text-gray-500 text-xs">or drag and drop</span> --}}
                        </div>


                    </label>
                    <input type="file" id="file-upload" multiple @change="handleFileSelect" class="hidden" />
                </div>
                    <input class="rounded-lg max-h-full h-auto w-full" type="file" wire:model="file" id="document" @change="handleFileSelect" value="''">
                    @error('thumbnail')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror


                    <div class="ml-5 mt-3">
                        <div class="xlg:w-1/2 text-xs lg:text-sm">
                            <label for="title" class="block text-xs lg:text-sm font-black text-black">Name Your Document</label>
                            <input type="text" wire:model="title"  autocomplete="title" class="mt-1 text-gray-700 focus:ring-blue-500 focus:border-blue-500 block w-full text-xs lg:text-sm border-gray-300 rounded-md" value="{{ old('title') }}" placeholder="Document Title">
                            @error('title')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <span class="text-xs text-blue-400">
                            *Title Required
                        </span>
                    </div>
                </div>

                    <!-- content -->
                    <div class="grid grid-cols-2 gap-4  xmt-5 xpt-5 pb-2">
                        <div class="xmt-8">

                            <div class="xlg:w-1/2 text-xs lg:text-sm xbg-blue-400">


                                @if(count($files))
                                    <div xclass="grid grid-cols-2 gap-4">
                                        <ul class="text-gray-700 xbg-gray-100 text-sm font-thin xh-8 xoverflow-y-auto max-w-full">
                                            @foreach($files as $file)
                                            <div class="xflex space-x-1">
                                                <li class="whitespace-normal w-48 my-1">{{$file->getClientOriginalName()}}</li>

                                               <p>




                                                @if ($isImage)
                                                     <img class="h-48 w-48 object-cover rounded" src="{{ $file->temporaryUrl() }}" alt="">
                                                @else
                                                    <a href="{{ asset($filepath) }}">{{ $original_filename }}</a>
                                                @endif





                                               </p>
                                            </div>


                                            @endforeach
                                        </ul>

                                    </div>
                                @endif

                            </div>

                        </div>

                        <script>
                            function fileUpload() {
                                return {
                                    isDropping: false,
                                    isUploading: false,
                                    progress: 0,
                                    handleFileSelect(event) {
                                        if (event.target.files.length) {
                                            this.uploadFiles(event.target.files)
                                        }
                                    },
                                    handleFileDrop(event) {
                                        if (event.dataTransfer.files.length > 0) {
                                            this.uploadFiles(event.dataTransfer.files)
                                        }
                                    },
                                    uploadFiles(files) {
                                        const $this = this;
                                        this.isUploading = true
                                        @this.uploadMultiple('files', files,
                                            function (success) {
                                                $this.isUploading = false
                                                $this.progress = 0
                                            },
                                            function(error) {
                                                console.log('error', error)
                                            },
                                            function (event) {
                                                $this.progress = event.detail.progress
                                            }
                                        )
                                    },
                                    removeUpload(filename) {
                                        @this.removeUpload('files', filename)
                                    },
                                }
                            }
                        </script>




                        <div class="mt-5">
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

                                <button class="border border-blue-800 rounded-lg font-semibold text-xs py-2 px-8 mr-1 text-[#056591]" type="button" wire:click="close">Close</button>
                                @if (session()->has('message'))

                                @else
                                <button  class="bg-[#1f588d] text-white border border-gray-400 rounded-lg font-semibold text-xs py-2 px-8">Upload</button>
                                @endif

                            </div>

                        </div>

                        @if (session()->has('message'))
                            <div class="text-blue-500 bg-gray-100 h-12 py-4 text-center w-full rounded">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>

            </div>
        </div>
    </form>


</div>

<script>
    function fileUpload() {
        return {
            isDropping: false,
            isUploading: false,
            progress: 0,
            handleFileSelect(event) {
                if (event.target.files.length) {
                    this.uploadFiles(event.target.files)
                }
            },
            handleFileDrop(event) {
                if (event.dataTransfer.files.length > 0) {
                    this.uploadFiles(event.dataTransfer.files)
                }
            },
            uploadFiles(files) {
                const $this = this
                this.isUploading = true
                @this.uploadMultiple('files', files,
                    function (success) {  //upload was a success and was finished
                        $this.isUploading = false
                        $this.progress = 0
                    },
                    function(error) {  //an error occured
                        console.log('error', error)
                    },
                    function (event) {  //upload progress was made
                        $this.progress = event.detail.progress
                    }
                )
            }
        }
    }
</script>
