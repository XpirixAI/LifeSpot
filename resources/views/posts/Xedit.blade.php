<x-xpirix>
    <script src="https://cdn.tiny.cloud/1/detamb5laj9woxfosdw977t3pb43ni4maa7f6eege035mgdd/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-6 gap">
                                <!--Public or Private and Category Areas -->
                                <div class="col-span-6 md:col-span-2">
                                    <div>
                                        <p class="mb-1">Make this blog post</p>
                                        <div class="text-black mb-6">

                                            <div class="flex items-center space-x-5">
                                                <div
                                                    class="flex border-blue-100 text-gray-700 text-center font-semibold  cursor-pointer items-center">
                                                    <input type="radio" id="publicblog" name="isPublic" {{ ($post->isPublic=="public")? "checked" : "" }}  class="mr-1" >
                                                    <label for="publicblog" class="ml-1 block text-sm font-medium text-gray-700">
                                                        Public
                                                    </label>
                                                </div>
                                                <div
                                                    class="flex border-blue-100 text-gray-700 text-center font-semibold  cursor-pointer items-center">
                                                    <input type="radio" id="privateblog" name="isPublic" {{ ($post->isPublic=="private")? "checked" : "" }}   class="mr-1">
                                                    <label for="privateblog" class="ml-1 block text-sm font-medium text-gray-700">
                                                        Private
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Assign a Category</p>
                                        <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"  name="category_id" >
                                            @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}" {{ $cat->id == $post->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!--Image Input and display Area -->
                                <div class="col-span-6 md:col-start-4 md:col-span-3 my-5">
                                    <div>
                                        <label for="example-text-input" class="">Add an Image</label>
                                        <input type="file" name="thumbnail" id="image">
                                            @error('thumbnail')
                                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            @enderror


                                        <img id="showImage" class="rounded h-20 w-auto  mt-5" src="{{ (!empty($post->thumbnail))? url($post->thumbnail):url('thumbnails/no_image.png') }}" alt="Card image cap">
                                    </div>
                                </div>

                                <!--Title -->
                                <div class="col-span-6 md:col-start-1 md:col-span-4">
                                    <div class=""
                                        x-data="{
                                            title: '{{ $post->title }}',
                                            limit: $el.dataset.limit,
                                            get remaining() {
                                                return this.limit - this.title.length
                                            }
                                        }"
                                        data-limit="60"
                                        class="mb-5">
                                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                            <input  x-model="title" id="title" type="text" name="title" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            <p class="text-sm text-gray-500" id="remaining">
                                                You have <span x-text="remaining"></span> characters remaining.
                                            </p>
                                            @error('title')
                                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                    </div>
                                </div>

                                 <!--Excerpt -->
                                 <div class="col-span-6 my-5">
                                    <div class=""
                                        x-data="{
                                            excerpt: '{{ $post->excerpt }}',
                                            limit: $el.dataset.limit,
                                            get remaining() {
                                                return this.limit - this.excerpt.length
                                            }
                                        }"
                                        data-limit="120"
                                        class="w-1/3 mb-5">
                                            <label for="excerpt" class="block text-sm font-medium text-gray-700">Excerpt</label>
                                            <input  x-model="excerpt" id="excerpt" type="text" name="excerpt"
                                              class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            <p class="text-sm text-gray-500" id="remaining">
                                                You have <span x-text="remaining"></span> characters remaining.
                                            </p>
                                            @error('excerpt')
                                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                    </div>
                                </div>

                                 <!--Body -->
                                 <div class="col-span-6">
                                    <label for="main-content" class="block text-sm font-medium text-gray-700">Main Content</label>
                                    <textarea name="body">{{ $post->body }}</textarea>
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


                        </form>

                    </div>
                </div>
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
