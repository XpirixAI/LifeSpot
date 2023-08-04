<div class="grid grid-cols-6 gap">
    <!--Public or Private and Category Areas -->
    <div class="col-span-6 md:col-span-2">
      <div class="flex justify-between">
        <div>
            <p class="mb-1">Make this blog post</p>
            <div class="text-black mb-6">

                <div class="flex items-center space-x-5">
                    <div
                        class="flex border-blue-100 text-gray-700 text-center font-semibold  cursor-pointer items-center">
                        <input type="radio" id="publicblog" name="isPublic" value="public" {{ (old('isPublic') == 'public') ? 'checked' : '' }} class="mr-1" checked>
                        <label for="publicblog" class="ml-1 block text-sm font-medium text-gray-700">
                            Public
                        </label>
                    </div>
                    <div
                        class="flex border-blue-100 text-gray-700 text-center font-semibold  cursor-pointer items-center">
                        <input type="radio" id="privateblog" name="isPublic" value="private" {{ (old('isPublic') == 'private') ? 'checked' : '' }} class="mr-1">
                        <label for="privateblog" class="ml-1 block text-sm font-medium text-gray-700">
                            Private
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="ml-3 md:ml-8">
            <p class="mb-1">Publish Post</p>
            <div class="text-black mb-6">

                <div class="flex items-center space-x-5">
                    <div
                        class="flex border-blue-100 text-gray-700 text-center font-semibold  cursor-pointer items-center">
                        {{-- <input type="radio" id="published" name="isPublished" value="Published" class="mr-1" checked> --}}
                        <input type="radio" name="isPublished" value="Published" {{ (old('isPublished') == 'Published') ? 'checked' : '' }}  class="mr-1" checked>
                        <label for="published" class="ml-1 block text-sm font-medium text-gray-700">
                            Yes
                        </label>
                    </div>
                    <div
                        class="flex border-blue-100 text-gray-700 text-center font-semibold  cursor-pointer items-center">
                        {{-- <input type="radio" id="unpublished" name="isPublished" value="Unpublished" class="mr-1"> --}}
                        {{-- <input type="radio" name="isPublished" value="Unpublished"  @if(old('isPublished') == 'Unpublished') checked @endif class="mr-1"> --}}
                        <input type="radio" name="isPublished" value="Unublished" {{ (old('isPublished') == 'Unublished') ? 'checked' : '' }}  class="mr-1">
                        <label for="unpublished" class="ml-1 block text-sm font-medium text-gray-700">
                            No
                        </label>
                    </div>
                </div>
            </div>
        </div>
      </div>
        <div>
            <p class="mb-1">Assign a Category</p>
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"  name="category_id" >
                @foreach ($categories as $category)

                  {{-- <option value="{{ $category->id }}" @if(old('category_id') == $category->id) selected @endif>{{ $category->name }}</option> --}}
                  <option value="{{ $category->id }}" {{ (old('category_id') == $category->id) ? "selected" : '' }}>{{ $category->name }}</option>
                 @endforeach
            </select>
        </div>
    </div>

    <!--Image Input and display Area -->
    <div class="col-span-6 md:col-start-4 md:col-span-3 my-5">
        <div>
            <label for="example-text-input" class="">Add an Image</label>
            <input type="file" name="thumbnail" id="image" value="'{{ old('thumbnail') }}'">
                @error('thumbnail')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror


            <img id="showImage" class="rounded h-20 w-auto text-red-500  mt-2" src="{{ (!empty($post->thumbnail))? url($post->thumbnail):asset('thumbnails/default.jpeg') }}" alt="no image">
            <img src="{{ old('image') }}" alt="">

        </div>
    </div>

    <!--Title -->
    <div class="col-span-6 md:col-start-1 md:col-span-4">
        <div class=""
            x-data="{
                title: '{{ old('title') }}',
                limit: $el.dataset.limit,
                get remaining() {
                    return this.limit - this.title.length
                }
            }"
            data-limit="120"
            class="mb-5">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input  x-model="title" id="title" type="text" name="title"  class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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
                excerpt: '{{ old('excerpt') }}',
                limit: $el.dataset.limit,
                get remaining() {
                    return this.limit - this.excerpt.length
                }
            }"
            data-limit="200"
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
