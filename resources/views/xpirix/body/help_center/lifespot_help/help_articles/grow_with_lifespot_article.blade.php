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
            <h1 class="mt-5 pb-10 text-4xl font-thin text-center w-full">Will LifeSpot Help us Grow ?</h1>
            <!--Section description-->
            <p class="px-5 mb-5 pb-3 text-gray-400 text-xl text-center">Watch Your Estate Grow &nbsp; ~ &nbsp; Access is Everything </p>

            <div class="grid lg:grid-cols-12 gap-8">

                    <div class="col-span-12 lg:col-span-5 pt-2 pl-8">
                        <img src="{{ asset('img/helpCenter/cardPic-grow-inside.jpg') }}" alt="" class="rounded-lg shadow-2xl">
                        <h3 class="mt-10 mb-3 text-3xl">Growing Your Legacy</h3>
                        <ul class="ml-10 text-gray-600">
                            <li class="">~ <span class="text-blue-500 underline">Funding your Estate</span></li>
                            <li class="">~ Using Our <span class="text-blue-500 underline">Affiliates</span> </li>
                            <li class="">~  <span class="text-blue-500 underline">Growing</span> with your estate </li>
                            <li class="">~ LifeSpots <span class="text-blue-500 underline">message board</span> will continue to assist you in growing and keeping your information up to date. </li>
                            <li class="">~ Financial help
                                ~ Legal help </li>
                            <li class="">~ Tax Help </li>
                            <li class="">~ Insurance quotes </li>
                            <li class="">~  Buying a home </li>
                        </ul>
                    </div>

                    <div class="col-span-12 lg:col-span-7 pt-2">
                        <h3 class="font-thin text-3xl mb-4">Information Changes</h3>

                        <div class="flex">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">Funding Your Estate</h5>
                                <p class="text-gray-500 mr-16">LifeSpot helps you fund your estate by gathering information then reminding you when items are left blank or need updating. We help you remember your data is changing all the time and we want you to alway have access to edit and amend on the fly. Leave it up to us to help you live in the moment.</p>
                            </div>
                        </div>

                        <div class="flex mt-10">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">Immediate Access to our Affiliates</h5>
                                <p class="text-gray-500 mr-16">Complete snapshot of your LifeSpot account with a unique dashboard and message center that will help keep your files current. Our affiliates can help you to complete your documents, make legal changes or even help with better choices for insurance, home buying, or even investing in your estate and your children.</p>
                            </div>
                        </div>

                        <div class="flex mt-10">
                            <div class="">
                                <i class="fa fa-share fa-lg text-indigo-700"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="text-xl text-gray-600 mb-3">LifeSpot Smartboard</h5>
                                <p class="text-gray-500 mr-16">LifeSpot will notify you when you documents need to be revisited. LifeSpots smart scan will give you tips on gaps in your estate to help you grow.</p>
                            </div>
                        </div>

                    </div>
            </div>
            <div class="text-center m-12">
                <p>When disasters strikes, fire, robbery or just your hard drive gets stolen or destroyed, having your legacy stored would put you at ease. You can be sure that your valuables are safe, secure and accessible with just a click of a button.</p>
                </div>
        </section>
    </div>


  @include('xpirix.body.footer')
</x-xpirix>
