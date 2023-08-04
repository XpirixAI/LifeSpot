<x-xpirix>

    <div class="px-5 xlg:px-24">

        <!--Breadcrumb links-->
        <div class="mt-10 text-sm">
            <span>&larr;</span>
            {{-- <a class="text-blue-600 underline" href="{{ route('help_lifespot') }}"> Back to Help Center </a> --}}
            <button onclick="history.back()">Go Back</button>
            {{-- <span>&bull;</span>
            <a class="text-blue-600 underline" href="#!"> Lorem Ipsum </a>
            <span>&bull;</span>
            <a class="text-blue-600 underline" href="#!"> Dolor Sit </a> --}}
        </div>
        <section>

            <!--Section heading-->
            <h1 class="mt-5 pb-10 text-4xl font-thin text-center w-full">What is WebSpot?</h1>
            <!--Section description-->
            <p class="px-5 mb-5 pb-3 text-gray-400 text-xl text-center">We Help Save your Legacy &nbsp; ~ &nbsp; Access is Everything </p>

            <div class="grid lg:grid-cols-12 gap-8">

                    <div class="col-span-12 lg:col-span-5 pt-2 pl-8">
                        <img src="{{ asset('img/helpCenter/cardPic-webspot.jpg') }}" alt="" class="rounded-lg shadow-2xl">
                        <h3 class="mt-10 mb-3 text-3xl">Accessing Your Private WebSpot</h3>
                        <ul class="ml-10 text-gray-600">
                            <li class="">~ Blog and share what you wish. Share sections you wish </li>
                            <li class="">~ Use WebSpot as your own secure dairy </li>
                            <li class="">~ Save historic photos to share with family </li>
                            <li class="">~ Combine your blog and create your biography
                            </li>
                            <li class="">~ Password protected </li>
                            <li class="">~ One System to share your Legacy </li>
                            <li class="">~ Create your child's custom personal page </li>
                        </ul>
                    </div>

                    <div class="col-span-12 lg:col-span-7 pt-2">
                        <h3 class="font-thin text-3xl mb-4">WebSpot Your Private Website</h3>

                        <div class="flex">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">Create Your Legacy Your Story</h5>
                                <p class="text-gray-500 mr-16">LifeSpot is the only platform giving you the only place for your custom private website and blog called WebSpot. Leave your story with anything personal you wish to leave behind like photos or videos to share with your grandchildren. Keep private with a security key that unlocks this part of your legacy.</p>
                            </div>
                        </div>

                        <div class="flex mt-10">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">Save Historic Family Files</h5>
                                <p class="text-gray-500 mr-16">Complete snapshot of your LifeSpot account with a unique dashboard and message center that will help keep your files up to date. View and edit members of your estate, and what documents they have access and eliminate any questions about who will take care of your estate if something should happen .Easily upload and change your estate with your android or iOS devices and with our new feature WebSpot create and access your daily private blog.</p>
                            </div>
                        </div>

                        <div class="flex mt-10">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">Save and Share what you wish</h5>
                                <p class="text-gray-500 mr-16">LifeSpot is giving you the opportunity to create your own website, this will allow you to customize your page and share individual stories and/ or photos.</p>
                            </div>
                        </div>

                    </div>
            </div>
            <div class="text-center m-12">
                <p>When disasters strikes, fire, robbery or just your hard drive gets stolen or destroyed, having your legacy stored would put you at ease. You can be sure that your legacy is safe, secure and accessible with just a click of a button.</p>
                </div>
        </section>
    </div>


  @include('xpirix.body.footer')
</x-xpirix>
