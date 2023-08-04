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
            <h1 class="mt-5 pb-10 text-4xl font-thin text-center w-full">Why are my Members so Important?</h1>
            <!--Section description-->
            <p class="px-5 mb-5 pb-3 text-gray-400 text-xl text-center">We help invite your members &nbsp; ~ &nbsp; Access is Everything </p>

            <div class="grid lg:grid-cols-12 gap-8">

                    <div class="col-span-12 lg:col-span-5 pt-2 pl-8">
                        <img src="{{ asset('img/helpCenter/cardPic-membersInside.jpg') }}" alt="" class="rounded-lg shadow-2xl">
                        <h3 class="mt-10 mb-3 text-3xl">Members of Your Estate</h3>
                        <ul class="ml-10 text-gray-600">
                            <li class="">~ <span class="text-blue-500 underline">Executor</span>, finds the deceased person's assets and manage them until they are distributed to inheritors. </li>
                            <li class="">~ <span class="text-blue-500 underline">Trustee</span>, Upon the death of surviving spouse, the trustee shall distribute special gifts </li>
                            <li class="">~ <span class="text-blue-500 underline">Co-Trustee</span>, individuals responsible for managing the trust and distributing the assets. Spouse or partner. </li>
                            <li class="">~ <span class="text-blue-500 underline">Beneficiary</span>,  legal entity who receives money or other benefits from a benefactor. </li>
                            <li class="">~ <span class="text-blue-500 underline"> Successors Trustee</span>, the person who assumes control of the trust after the initial trustee dies </li>
                            <li class="">~ <span class="text-blue-500 underline">  Legal Guardian</span>, a person with the authority and duty to care for the interests of another. Children & Pets </li>
                        </ul>
                    </div>

                    <div class="col-span-12 lg:col-span-7 pt-2">
                        <h3 class="font-thin text-3xl mb-4">Members the most important</h3>

                        <div class="flex">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">Inviting members</h5>
                                <p class="text-gray-500 mr-16">By signing up with LifeSpot you will Invite those you choose to take care of your estate and you family. Giving members access to appropriate documents, you are ensuring your personal wishes according to your will and trust will be taken care of according to your wishes. Attach documents and add a personal note in LifeSpot to make sure your estate members have the most current family information.</p>
                            </div>
                        </div>

                        <div class="flex mt-10">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">Share</h5>
                                <p class="text-gray-500 mr-16">Complete snapshot of your LifeSpot members with a unique <span class="text-blue-500 underline">LifSpot dashboard</span> and <span class="text-blue-500 underline">message center</span> that will help keep members involved. View and edit members of your estate, and what documents they have access and eliminate any questions about who will take care of your estate if something should happen. Grant special access to your important <span class="text-blue-500 underline">password safe</span> and <span class="text-blue-500 underline">Emergency Contacts</span>.</p>
                            </div>
                        </div>

                        <div class="flex mt-10">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">Tagging</h5>
                                <p class="text-gray-500 mr-16">Tag members with personal assets, family photos, historic documents. Keep your collections in the family and leave a personal note. Your executor will know exactly who these items will be gifted to.</p>
                            </div>
                        </div>

                        <div class="flex mt-10">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">LifeSpots Easy Pay (sponsored by Venmo)</h5>
                                <p class="text-gray-500 mr-16">Send payments through LifeSpot to pay family and friends. Set up payments to your college student church or favorite charity etc.</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="text-center m-12">
                <p>When disasters strikes, accidents, death or just a family medical emergency, having your estate members and family with access will put you at ease. You can be sure that your medical instructions, records will and trust are up to date, secure and accessible with just a click of a button.</p>
                </div>
        </section>
    </div>


  @include('xpirix.body.footer')
</x-xpirix>
