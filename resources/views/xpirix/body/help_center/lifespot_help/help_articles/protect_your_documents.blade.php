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
            <h1 class="mt-5 pb-10 text-4xl font-thin text-center w-full">Protect your Documents</h1>
            <!--Section description-->
            <p class="px-5 mb-5 pb-3 text-gray-400 text-xl text-center">Your Documents &nbsp; ~ &nbsp; Access is Everything </p>

            <div class="grid lg:grid-cols-12 gap-8">

                    <div class="col-span-12 lg:col-span-5 pt-2 pl-8">
                        <img src="{{ asset('img/helpCenter/cardPic_store.jpeg') }}" alt="" class="rounded-lg shadow-2xl">
                        <h3 class="mt-10 mb-3 text-3xl">Your Suggested Documents</h3>
                        <ul class="ml-10 text-gray-600">
                            <li class="">~ <span class="text-blue-500 underline">Last Will and Testament of (Each Member)</span> </li>
                            <li class="">~ <span class="text-blue-500 underline">Will</span> </li>
                            <li class="">~ <span class="text-blue-500 underline">Trust</span> </li>
                            <li class="">~ <span class="text-blue-500 underline">Living Wills (Each Member).</span> </li>
                            <li class="">~ <span class="text-blue-500 underline">General Durable of Attorney (Each Member)</span> </li>
                            <li class="">~ <span class="text-blue-500 underline">Health Care Power of Attorney (Each Member)</span> </li>
                            <li class="">~ <span class="text-blue-500 underline">Medical Durable Power of Attorney (Each Member)</span></li>
                            <li class="">~ <span class="text-blue-500 underline">Ongoing Care Documents</span></li>
                            <li class="">~ <span class="text-blue-500 underline">Hipaa release, organ donor forms</span></li>
                            <li class="">~ <span class="text-blue-500 underline">Asset Documents</span></li>
                            <li class="">~ <span class="text-blue-500 underline">  More</span></li>
                        </ul>
                    </div>

                    <div class="col-span-12 lg:col-span-7 pt-2">
                        <h3 class="font-thin text-3xl mb-4">Access Your Data</h3>

                        <div class="flex">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">Documents</h5>
                                <p class="text-gray-500 mr-16">LifeSpot allows you to create and edit your estate in one place at any time. Always accessible to edit and amend on the fly. Upload and securely store your estate documents and more. Leave it up to us to help you live in the moment and share only the files you choose. No longer do you have to hide your files where estate members do not have access. Accessible documents can be On Going Care, Property deeds, Insurance, auto titles, taxes, military records and more.</p>
                            </div>
                        </div>

                        <div class="flex mt-10">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">Save</h5>
                                <p class="text-gray-500 mr-16">Complete snapshot of your LifeSpot account with a unique dashboard and message center that will help keep your files up to date. View and edit members of your estate, and what documents they have access and eliminate any questions about who will take care of your estate if something should happen .Easily upload and change your estate with your android or iOS devices and with our new feature Webspot create and access your daily private blog.</p>
                            </div>
                        </div>

                        <div class="flex mt-10">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">Protect</h5>
                                <p class="text-gray-500 mr-16">You can choose or decide how you want to share your legacy or decide not to share it if you want. The full control on the LifSpot storage gives you the room to make changes in sharing rights based on your personal wishes. The fact that it can also be on your mobile device like your iOS, Android and Windows phone means you have the freedom to control how you view it even when you are offline.</p>
                            </div>
                        </div>

                    </div>
            </div>
            <div class="text-center m-12">
                <p>When disasters strikes, fire, robbery or just your hard drive gets stolen or destroyed, having your documents stored and shared would put you at ease. You can be sure that your valuables are safe, secure and accessible with just a click of a button.</p>
                </div>
        </section>
    </div>


  @include('xpirix.body.footer')
</x-xpirix>
