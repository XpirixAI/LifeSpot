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
            <h1 class="mt-5 pb-10 text-4xl font-thin text-center w-full">Getting Started with your LifeSpot account </h1>
            <!--Section description-->
            <p class="px-5 mb-5 pb-3 text-gray-400 text-xl text-center">How can we help  &nbsp; ~ &nbsp; Access is Everything </p>

            <div class="grid lg:grid-cols-12 gap-8">

                    <div class="col-span-12 lg:col-span-5 pt-2 pl-8">
                        <img src="{{ asset('img/getting_started_pic.jpeg') }}" alt="" class="rounded-lg shadow-2xl">
                        <h3 class="mt-10 mb-3 text-3xl">Getting Started</h3>
                        <ul class="ml-10 text-gray-600">
                            <li class="">~ Invite Important members of your estate </li>
                            <li class="">~ Invite family </li>
                            <li class="">~ Personalize your profile so your friends know who you are </li>
                            <li class="">~ Building your profile will help you organize your documents </li>
                            <li class="">~ Only you and your members have access </li>
                            <li class="">~ 24/7 availability </li>
                            <li class="">~ Update your estate, Including Asset </li>
                            <li class="">~ Easily upload your important documents in one place </li>
                        </ul>
                    </div>

                    <div class="col-span-12 lg:col-span-7 pt-2">
                        <h3 class="font-thin text-3xl mb-4">Getting Started with Lifespot</h3>

                        <div class="flex">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">Inviting a New Member</h5>
                                <p class="text-gray-500 mr-16">To invite a new member to join your Lifespot account, simply click the “Invite” button in the top right corner of the dashboard. Enter the email address of the person you would like to invite and click the “Send Invitation” button. The invited user will receive an email with a link to set up their account.
                                </p>
                            </div>
                        </div>

                        <div class="flex mt-10">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">Personalizing Your Profile</h5>
                                <p class="text-gray-500 mr-16">To personalize your profile, click on the “My LifeSpot” tab on the left side of the dashboard. Here you can edit your profile picture, add a biography, update your contact information, and add important documents pertaining to you.</p>
                            </div>
                        </div>

                        <div class="flex mt-10">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">Updating Your Estate</h5>
                                <p class="text-gray-500 mr-16">To update your estate, click on the “My Estate” tab on the left side of the dashboard. Here you can add or update information about your assets, beneficiaries, family, pets and executors. You can also add notes and reminders to keep track of important dates and deadlines.</p>
                            </div>
                        </div>
                        <div class="flex mt-10">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">Uploading documents to your Estate</h5>
                                <p class="text-gray-500 mr-16">• Gather all documents that are important to your estate, such as birth certificates, marriage certificates, wills, and trust documents. • Scan or take pictures of all documents and save them in a secure file. • Log into your Lifespot account and as you build your profile upload to the suggested or add custom documents to your account and let LifeSpot help you organize them. • Once your documents are uploaded, you can review and share or manage them in the Documents tab.
                                </p>
                            </div>
                        </div>
                        <div class="flex mt-10">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">Enjoy your personal webpage</h5>
                                <p class="text-gray-500 mr-16">• Log into your Lifespot account and navigate to the “My Xpirix” tab. • Here, you can create and edit your own personal webpage, including a profile picture, bio, and blog posts. • Share your blogs or pages with friends and family to showcase your legacy.
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="text-center m-12">
                <p>We hope you find Lifespot valuable in planning, managing and protecting your estate. If you have questions or need help, please feel free to reach out to our support team. Have fun!</p>
                </div>
        </section>
    </div>


  @include('xpirix.body.footer')
</x-xpirix>
