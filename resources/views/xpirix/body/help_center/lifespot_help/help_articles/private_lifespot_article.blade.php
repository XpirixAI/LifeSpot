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
            <h1 class="mt-5 pb-10 text-4xl font-thin text-center w-full">Why LifeSpot is so Private?</h1>
            <!--Section description-->
            <p class="px-5 mb-5 pb-3 text-gray-400 text-xl text-center">Protect Your Estate &nbsp; ~ &nbsp; Access is Everything </p>

            <div class="grid lg:grid-cols-12 gap-8">

                    <div class="col-span-12 lg:col-span-5 pt-2 pl-8">
                        <img src="{{ asset('img/helpCenter/carPic-protectionInside.jpg') }}" alt="" class="rounded-lg shadow-2xl">
                        <h3 class="mt-10 mb-3 text-3xl">Protect Your Legacy</h3>
                        <ul class="ml-10 text-gray-600">
                            <li class="">~ Complete snapshot of your estate </li>
                            <li class="">~ Impressive security </li>
                            <li class="">~ Protected document files </li>
                            <li class="">~ Accessible to you anywhere </li>
                            <li class="">~ Only you can access and share your data </li>
                            <li class="">~ Read Only copies </li>
                            <li class="">~ 24/7 access </li>
                        </ul>
                    </div>

                    <div class="col-span-12 lg:col-span-7 pt-2">
                        <h3 class="font-thin text-3xl mb-4">Protecting Your Data</h3>

                        <div class="flex">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">You Create Your Estate</h5>
                                <p class="text-gray-500 mr-16">LifeSpot allows you to create and edit your estate in one place at any time. Always accessible to edit and amend on the fly. Upload and securely store your estate documents and more. Leave it up to us to help you live in the moment and share only the files you choose. No longer do you have to hide your files where estate members do not have access.</p>
                            </div>
                        </div>

                        <div class="flex mt-10">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">You Control Access</h5>
                                <p class="text-gray-500 mr-16">Complete snapshot of your LifeSpot account with a unique dashboard and message center that will help keep your files up to date. View and edit members of your estate, and what documents they have access to and eliminate any questions about who will take care of your estate if something should happen . Easily upload and change your estate with your android or iOS devices and with our new feature Webspot create and access your daily private blog.</p>
                            </div>
                        </div>

                        <div class="flex mt-10">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">You Control Your Data</h5>
                                <p class="text-gray-500 mr-16">You can choose or decide how you want to share your legacy or decide not to share it if you want. The full control on the LifeSpot storage gives you the room to make changes in sharing rights based on your personal wishes. The fact that it can also be on your mobile iOS, Android and Windows devices means you have the freedom to control how you view it even when you are offline</p>
                            </div>
                        </div>

                    </div>
            </div>
            <div class="text-center m-12">
                <p>LifeSpot helps you protect, organize and securely share important legal, financial and health information in one place so that your loved ones and estate holders can access important files when needed. All information is encrypted and securely stored in a vault that allows users to control who sees what information and when.</p>
                </div>
        </section>
    </div>


  @include('xpirix.body.footer')
</x-xpirix>
