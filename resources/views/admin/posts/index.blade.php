<x-admin-layout>
    <div class="w-full bg-white">
        <div class="mt-12 md:mt-2 pb-24 md:pb-5">
            <div class="bg-gray-800 pt-3">
                <div class="flex rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h1 class="font-semibold tracking-wide pl-2">Manage My Posts</h1>
                    <x-flash></x-flash>
                </div>
            </div>

            <div class="overflow-auto rounded-lg shadow hidden lg:block">
                {{-- <table class="w-full shadow-md rounded">
                    <thead class="bg-gray-50 border-b-2 border-gray-200">
                      <tr class="bg-white">
                        <th class="w-5 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Id</th>
                        <th class="w-72 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Title</th>

                        <th class="w-10 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">IsPublic</th>


                        <th class="w-10 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Edit</th>
                      </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-300">
                        @php
                            $i = 0
                        @endphp
                      @foreach ($posts as $post)

                      <tr class="bg-gray-50">
                        <td class="p-4 text-sm text-gray-700 whitespace-nowrap">{{ ++$i }}</td>
                        <td class="p-4 text-sm text-gray-700 whitespace-nowrap">{{ $post->title }}</td>

                        <td class="p-4 text-sm text-gray-700 capitalize whitespace-nowrap">{{ $post->isPublic }}</td>


                        <td class="p-4 text-sm text-gray-700 capitalize whitespace-nowrap">
                            <a href="{{ route('posts.edit', $post->id) }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                          </svg>
                          </a></td>
                      </tr>
                      @endforeach

                    </tbody>
                </table> --}}
                <table class="w-full rounded-lg bg-white text-gray-700 p-4">
                    <tbody class="bg-white divide-y divide-gray-200">

                         @if ($posts->count())
                             @foreach ($posts as $post)
                                 <tr>
                                     <td class="px-6 py-4 whitespace-nowrap">

                                         <div class="flex space-x-2 text-sm font-medium text-gray-900 items-center">
                                            @if ($post->thumbnail)

                                            <img src="{{ asset($post->thumbnail) }}" alt="" class="w-12 h-10 object-cover rounded-md mr-4">

                                            @else
                                            <span class="text-orange-500 text-sm mr-4">No Img</span>
                                            @endif
                                             {{-- <a

                                             href="{{ route('manage-posts.show', $post->id) }}"
                                             > --}}
                                                 {{ Str::limit($post->title, 25, '...') }}
                                             {{-- </a> --}}
                                             @if ($post->isPublic=='private')

                                             <i class="fas fa-lock text-blue-400"></i>
                                             @endif
                                         </div>

                                     </td>
                                     <td class="md:px-6 sm:px-2 py-4 whitespace-nowrap  text-sm font-medium">
                                        {{ $post->category->name }}
                                    </td>
                                     <td class="md:px-6 sm:px-2 py-4 whitespace-nowrap text-right text-sm font-medium  {{ ($post->isPublished=="Published" ? "text-gray-500" : "text-orange-500") }}">

                                        {{ $post->isPublished }}
                                    </td>
                                     <td class="md:px-6 sm:px-2 py-4 whitespace-nowrap text-right text-sm font-medium">
                                         <a

                                         href="{{ route('manage-posts.edit', $post->id) }}"
                                         class="text-blue-500 hover:text-blue-600 mx-4">Edit</a>
                                     </td>
                                     <td class="pl-3 pr-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                         <form method="POST" action="{{ route('manage-posts.destroy',$post->id)  }}">
                                             @csrf
                                             @method('DELETE')

                                             <button class="text-xs text-gray-400" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                                         </form>
                                     </td>

                                 </tr>
                             @endforeach
                         @else
                         <div class="m-8 text-center text-blue-500">
                             <a href="{{ route('posts.create') }}" >Create Your First post Post</a>
                         </div>
                         <div class="text-gray-700 m-8 text-center">
                           <a class="border border-cyan-600 px-5 py-2 bg-gray-50 rounded" href=""> Want Some Professional Tips to Write Your First Blog Post? </a>
                         </div>
                         @endif
                     </tbody>

                </table>
            </div>

                        <!--Mobile View-->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:hidden">
                            @if ($posts->count())
                                @forelse ($posts as $post )
                                    <div class="bg-white space-y-1 p-4 rounded-lg shadow text-sm mb-3">
                                        <div class="flex justify-between items-center">
                                            <div class="flex space-x-2 items-center">
                                                <div class="text-gray-500">
                                                    <img src="{{ asset($post->thumbnail) }}" alt="" class="w-12 h-10 object-cover rounded-md mr-4">
                                                </div>
                                                <div class="text-cyan-700">
                                                    @if ($post->isPublic=='private')
                                                    <i class="fas fa-lock text-blue-400"></i>
                                                    @endif
                                                </div>
                                                <div class="text-gray-700">{{ Str::limit($post->title, 25, '...') }}
                                                </div>
                                            </div>
                                            <div class="flex space-x-2">
                                                <div class="xp-4 text-sm text-gray-700 capitalize whitespace-nowrap">
                                                    <a
                                                        href="{{ route('manage-posts.edit', $post->id) }}"
                                                        class="text-blue-500 hover:text-blue-600 mx-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="xp-4 text-sm text-gray-700 capitalize whitespace-nowrap">
                                                    <a
                                                        href="{{ route('manage-posts.edit', $post->id) }}"
                                                        class="text-blue-500 hover:text-blue-600 mx-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex justify-between items-center">

                                            <div class="mb-2">
                                                <div class="text-gray-700">Category:<span class="text-cyan-900 ml-6">{{  $post->category->name }}</span></div>
                                                {{-- <span class="text-cyan-900 text-center"> {{  $post->category->name }}</span> --}}
                                            </div>
                                            {{-- <div class="text-cyan-700 mb-2">
                                                @if ($post->isPublic=='private')
                                                <i class="fas fa-lock text-blue-400"></i>
                                                @endif
                                            </div> --}}
                                            <div class="md:px-6 sm:px-2 py-4 whitespace-nowrap text-right text-sm font-medium  {{ ($post->isPublished=="Published" ? "text-gray-500" : "text-orange-500") }}">

                                                {{ $post->isPublished }}


                                                {{-- <span class="text-cyan-900 ml-6">{{ ($user->created_at)->diffForHumans() }}</span> --}}
                                            </div>
                                            {{-- <div class="text-gray-700"> <a

                                                href="{{ route('manage-posts.edit', $post->id) }}"
                                                class="text-blue-500 hover:text-blue-600 mx-4">Edit</a>
                                                <form method="POST" action="{{ route('manage-posts.destroy',$post->id)  }}">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="text-xs text-gray-400" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                                                </form>

                                            </div> --}}
                                        </div>
                                    </div>
                                    @empty
                                    <div class="m-8 text-center text-blue-500">
                                        <a href="{{ route('posts.create') }}" >Create Your First post Post</a>
                                    </div>
                                    <div class="text-gray-700 m-8 text-center">
                                    <a class="border border-cyan-600 px-5 py-2 bg-gray-50 rounded" href=""> Want Some Professional Tips to Write Your First Blog Post? </a>
                                    </div>
                                @endforelse

                            @endif

                        </div>


        </div>
    </div>
</x-admin-layout>
