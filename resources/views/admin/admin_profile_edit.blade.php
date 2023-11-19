<x-admin-layout>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="w-full bg-white">
        <div class="mt-12 md:mt-2 pb-24 md:pb-5">
            <div class="bg-gray-800 pt-3">
                <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h1 class="font-semibold tracking-wide pl-2">Manage Your Profile</h1>
                </div>
            </div>


            <form method="POST" action="{{ route('storeProfile') }}" enctype="multipart/form-data">
                @csrf
                {{-- @method('PUT') --}}
                <div class="grid grid-cols-3 lg:grid-cols-5 gap-4 rounded-lg bg-gray-100 shadow-xl border-2 border-blue-500 p-2 lg:p-8 m-2 lg:m-8">
                    <div class="text-right items-center space-y-3 mt-2">
                        <p class="text-gray-500 h-10">First Name:</p>
                        <p class="text-gray-500 h-10">Last Name:</p>
                        <p class="text-gray-500 h-10">Email:</p>
                        <p class="text-gray-500 h-10">Username:</p>
                        <p class="text-gray-500 h-10">Profile Image:</p>
                    </div>
                    <div class="items-center col-span-2 space-y-3">
                        <x-jet-input class="w-5/6 h-10 px-2" name="fname" value="{{ $user->fname }}"></x-jet-input>
                        @error('fname')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                        <x-jet-input class="w-5/6 h-10 px-2" name="lname" value="{{ $user->lname }}"></x-jet-input>
                        @error('lname')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                        <x-jet-input class="w-5/6 h-10 px-2" name="email" value="{{ $user->email }}"></x-jet-input>
                        @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                        <x-jet-input class="w-5/6 h-10 px-2" name="uname" value="{{ $user->uname }}"></x-jet-input>
                        @error('uname')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                        <x-jet-input 
                            id="image" 
                            class="w-5/6 h-10 px-2" 
                            type="file" 
                            name="profile_photo_path"
                            accept=".jpeg,.png,.jpg,.webp"
                        />
                        @error('profile_photo_path')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                       <img id="showImage" class="object-cover rounded-full w-20 h-20" src="{{ (!empty($user->profile_photo_path)) ? url('upload/admin_images/'.$user->profile_photo_path) : url('/upload/no_image.png') }}" alt="">
                       <input type="hidden" name="oldProfileimage" value="{{ $user->profile_photo_path }}">
                    </div>


                    {{-- <div>
                        <label for="example-text-input" class="">Current Image</label>
                        <input type="file" name="thumbnail" id="image">
                            @error('thumbnail')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror


                        <img id="showImage" class="rounded h-20 w-auto  mt-5" src="{{ (!empty($post->thumbnail))? url($post->thumbnail):url('thumbnails/no_image.png') }}" alt="Card image cap">

                        <input type="hidden" name="oldimage" value="{{ $post->thumbnail }}">
                    </div> --}}


                    <div class="lg:py-20">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 font-bold rounded">Update</button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</x-admin-layout>

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
