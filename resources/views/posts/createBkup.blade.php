<x-xpirix>
    <script src="https://cdn.tiny.cloud/1/{{env('TINY_MCE_API_KEY')}}/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="pt-4 pb-6 px-8 lg:px-24">
        <div class="flex justify-between">
            <h2 class="my-8 text-gray-800 font-bold text-2xl text-center">Create a New Post</h2>
            <div class="border border-grblueay-700 p-4 mb-4">
                <ul class="text-sm text-gray-500">
                    <li>&#x2022; Behave like you would in real life</li>
                    <li>&#x2022; Search for duplicates before posting</li>
                    <li>&#x2022; Understand the <a href="#!" class="text-blue-500">community rules</a></li>
                    <li>&#x2022; Look for the original source of content</li>
                </ul>
            </div>
        </div>

        <div class="container mx-auto p-6 bg-gray-100 rounded-lg">

            <div class="mt-5 md:mt-0 md:col-span-2 text-gray-700">
                <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <p class="mb-1">Make this blog post</p>
                            <div class="col-span-12 sm:col-span-3 text-black mb-6">
                                {{-- Choose One --}}
                                <div class="flex items-center space-x-5">
                                    <div
                                        class="flex border-blue-100 text-gray-700 text-center font-semibold  cursor-pointer items-center">
                                        <input type="radio" id="publicblog" name="isPublic" value="public" class="mr-1" checked>
                                        <label for="publicblog" class="ml-1 block text-sm font-medium text-gray-700">
                                            Public
                                        </label>
                                    </div>
                                    <div
                                        class="flex border-blue-100 text-gray-700 text-center font-semibold  cursor-pointer items-center">
                                        <input type="radio" id="privateblog" name="isPublic" value="private" class="mr-1">
                                        <label for="privateblog" class="ml-1 block text-sm font-medium text-gray-700">
                                            Private
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <p class="mb-1">Pick a Category</p>
                            <div class="md:w-1/5 mb-5">
                                <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"  name="category_id" >
                                    <option value="1">Family</option>
                                    <option value="2">Tech</option>
                                    <option value="3">Hobbies</option>
                                    <option value="4">Estate</option>
                                    <option value="5">Finance</option>
                                    <option value="6">Sports</option>
                                    <option value="7">Influencers</option>
                                    <option value="8">Social</option>
                                    <option value="9">For Fun</option>
                                    <option value="10">Science</option>
                                </select>
                            </div>

                            <div class="grid grid-cols-6 gap-4">

                                <div class="col-span-6 md:col-start-1 md:col-end-4"
                                    x-data="{
                                        title: '',
                                        limit: $el.dataset.limit,
                                        get remaining() {
                                            return this.limit - this.title.length
                                        }
                                    }"
                                    data-limit="60"
                                    class="w-1/3 mb-5">
                                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                        <input  x-model="title" id="title" type="text" name="title" value="{{ old('title') }}"  class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        <p id="remaining">
                                            You have <span x-text="remaining"></span> characters remaining.
                                        </p>
                                        @error('title')
                                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>

                                <div class="col-span-6 md:col-start-1 md:col-end-7"
                                    x-data="{
                                        excerpt: '',
                                        limit: $el.dataset.limit,
                                        get remaining() {
                                            return this.limit - this.excerpt.length
                                        }
                                        }" data-limit="160" class="w-2/3 mb-10">
                                        <label for="excerpt" class="block text-sm font-medium text-gray-700">Excerpt</label>
                                        <input  x-model="excerpt" id="excerpt" type="text" name="excerpt" value="{{ old('excerpt') }}"  class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        <p id="remaining">
                                            You have <span x-text="remaining"></span> characters remaining.
                                        </p>
                                        @error('excerpt')
                                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                                <div class="mb-5">
                                    <div class="xcol-span-12 xsm:col-span-2 mb-5">
                                        <label for="example-text-input" class="">Select an Image</label>
                                        <input type="file" name="thumbnail" id="image">
                                            @error('thumbnail')
                                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                    </div>
                                    <div class="col-span-2">
                                        <img id="showImage" class="rounded  mx-5" src="{{ (!empty($post->thumbnail))? url($post->thumbnail):url('thumbnails/no_image.png') }}" alt="Card image cap">
                                    </div>
                                </div>

                            </div>

                            <div class="col-span-6">
                                <label for="main-content" class="block text-sm font-medium text-gray-700">Main Content</label>
                                <textarea name="body">{{ old('body') }}</textarea>
                                @error('body')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="px-4 py-5 bg-white text-right sm:px-6">
                                <button type="submit" class="float-left xinline-flex xjustify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Publish
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</x-xpirix>

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

<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
  </script>
