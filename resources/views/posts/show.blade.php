<x-xpirix>
    <div class="px-24 my-12">

      <a href="/" class="my-4 text-blue-500">Back to All Posts</a>

        <div class="relative grid md:grid-cols-6 gap-8">
            <article class="md:col-span-4">
                <h1 class="font-black text-4xl text-black mb-8">
                    @if ($post->isPublic=='private')
                         <i class="fas fa-lock text-blue-400 mr-2 text-xl"></i>
                     @endif
                    {{ $post->title }}
                </h1>
                <img class="object-cover w-auto h-auto  mb-8 rounded" src="{{ asset($post->thumbnail) }}" alt="">
                <div class="mt-4">
                    {!! $post->body !!}
                </div>
            </article>
            <div class="md:col-start-5 md:col-span-2 mt-28">
                <a href="#!" class="flex space-x-2 items-center">
                    <img class="relative top-0 left-0 object-cover rounded h-12 w-12" src="{{ (!empty($post->author->profile_photo_path)) ? url('upload/admin_images/'.$post->author->profile_photo_path) : url('upload/no_image.png') }}" alt="">
                   <div>
                    <a href="/?author={{ $post->author->uname}}" class="text-cyan-500 font-bold">{{ $post->author->fname }} {{ $post->author->lname }}</a>
                    <p class="text-gray-700 font-semibold xmt-4">Published {{ $post->created_at->diffForHumans() }}</p>
                   </div>
                </a>
                <p class="mt-4"><a class="bg-cyan-500 text-white p-2 rounded mt-2"  href="/?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>


                <div class="sticky top-52 bg-gray-100 p-5 w-full rounded mt-8">
                    <p>Share this post </p>
                        <div class="flex space-x-4 my-4">
                            <div>
                                <a href="#!" target="_blank"><img class="h-5 w-5" src="{{ asset('img/WalkerFamilyPics/facebook.webp') }}" alt=""></a>
                            </div>
                            <div>
                                <a href="#!" target="_blank"><img class="h-5 w-5" src="{{ asset('img/WalkerFamilyPics/twitter.webp') }}" alt=""></a>
                            </div>
                            <div>
                                <a href="#!" target="_blank"><img class="h-5 w-5" src="{{ asset('img/WalkerFamilyPics/instagram.webp') }}" alt=""></a>
                            </div>
                            <div>
                                <a href="#!" target="_blank"><img class="h-5 w-5" src="{{ asset('img/WalkerFamilyPics/youtube.webp') }}" alt=""></a>
                            </div>
                            <div>
                                <a href="#!" target="_blank"><img class="h-5 w-5" src="{{ asset('img/WalkerFamilyPics/linkedIn.webp') }}" alt=""></a>
                            </div>
                        </div>

                </div>
            </div>

        </div>

    </div>
    <div class="pt-12">
        @include('xpirix.body.footer')
    </div>
</x-xpirix>
