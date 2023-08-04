<x-admin-layout>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    <div x-data="{ 'showModal': false }" @keydown.escape="showModal = false" x-cloak class="w-full bg-white">
        <div class="mt-12 md:mt-2 pb-24 md:pb-5">
            <div class="bg-gray-800 pt-3">
                <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h1 class="font-semibold tracking-wide pl-2">Dashboard</h1>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-8 mx-8">
                <a href="{{ route('manage-posts.index') }}" class="text-center">
                    <div class="border-4 border-blue-300 rounded-md bg-gray-50 pb-4">
                        <img class="object-cover w-full h-72 mt-2" src="{{ asset('img/blog_post.webp') }}" alt="">
                        <h3 class="font-semibold text-lg text-blue-500 mt-4">Manage Your Posts</h3>
                           <div class="grid grid-cols-12 gap-4 mt-1 text-gray-500">
                                <div class="col-start-4 col-span-1 text-right">
                                    <p>{{ $posts->count() }}</p>
                                    <p>{{ $private->count() }}</p>
                                    <p>{{ $public->count() }}</p>
                                </div>
                                <div class="col-start-5 col-span-8 text-left">
                                    <p>Posts</p>
                                    <p>Private posts</p>
                                    <p>Public posts</p>
                                </div>
                           </div>
                    </div>
                </a>

                <a @click="showModal = true" href="#!" class="text-center">
                    <div class="border-4 border-pink-500 rounded-md bg-gray-50 pb-4">
                        <img class="object-cover w-full h-72 mt-2" src="{{ asset('img/influence_marketing.webp') }}" alt="">
                        <h3 class="font-semibold text-lg text-pink-500 mt-4">Grow Your Influence</h3>
                        <div class="grid grid-cols-12 gap-4 mt-1 text-gray-500">
                            <div class="col-start-4 col-span-1 text-right">
                                <p>0</p>
                                <p>0</p>
                                <p>0</p>
                            </div>
                            <div class="col-start-5 col-span-8 text-left">
                                 <p>do something</p>
                                <p>something more</p>
                                <p>something extra</p>
                            </div>
                       </div>
                    </div>
                </a>
                <a href="" class="text-center">
                    <div class="border-4 border-cyan-500 rounded-md bg-gray-50 pb-4">
                        <img class="object-cover w-full h-72 mt-2" src="{{ asset('img/planning.webp') }}" alt="">
                        <h3 class="font-semibold text-lg text-cyan-500 mt-4">Grow Your Estate</h3>
                        <div class="grid grid-cols-12 gap-4 mt-1 text-gray-500">
                            <div class="col-start-4 col-span-1 text-right">
                                {{-- <p>0</p>
                                <p>0</p>
                                <p>0</p> --}}
                            </div>
                            <div class="col-start-5 col-span-8 text-left">
                                <p>Some Ideas</p>
                                <p>Some More Ideas</p>
                                <p>Something extra</p>
                            </div>
                       </div>
                    </div>
                </a>
                {{-- <div class="bg-teal-300">Card 4</div>
                <div class="bg-cyan-300">Card 5</div> --}}
            </div>

        </div>

                <!-- Modal -->
                <div x-cloak x-show="showModal" style="background-color: rgba(0, 0, 0, .5)"
                class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50">
                    <!-- inner modal -->
                    <div
                        @click.away="showModal = false"

                        class="xmax-w-3xl px-5 py-4 mx-auto text-left bg-white rounded-xl shadow-lg">
                        <!-- Title / Close-->
                        <div class="flex items-center justify-between space-y-3">
                            <h5 class="mr-3 font-black text-black xmax-w-none">Upgrade Your Membership ... it's that simple!</h5>

                        </div>


                            <!-- content -->
                            <div class="grid grid-cols-2 gap-4 pt-5 pb-2">
                               <div>
                                <ul class="space-y-3">
                                    <li>Unlock the new ways to see your blogs get noticed!</li>
                                    <li>Get access to professional content</li>
                                    <li>More easily share</li>
                                    <li>Learn about 'Key Words'</li>
                                    <li>Get Paid to Blog</li>
                                    <li class="text-red-400 italic">This MODAL is temporay!!!</li>
                                </ul>
                               </div>


                            </div>

                    </div>
                </div>
    </div>


</x-admin-layout>
