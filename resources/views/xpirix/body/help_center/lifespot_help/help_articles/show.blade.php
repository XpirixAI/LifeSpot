<x-xpirix>


    <div class="container px-5 lg:px-24">

        <!--Breadcrumb links-->
        <div class="my-10 text-sm">
            <span>&larr;</span>
            <a class="text-blue-600 underline" href="{{ route('help_lifespot') }}"> Help Center </a>
            <span>&bull;</span>
            <a class="text-blue-600 underline" href="#!"> Lorem Ipsum </a>
            <span>&bull;</span>
            <a class="text-blue-600 underline" href="#!"> Dolor Sit </a>
        </div>
        <div class="grid lg:grid-cols-12 gap-8">
            <div class="lg:col-span-4">
                <div class="font-bold mb-2">Jump to section</div>
                <ul class="space-y-4">
                    <li class="h-12 border-t-2 border-b-2 border-gray-200 text-blue-600 font-bold bg-[hsl(0,5%,96%)] py-2.5 px-3"><a href="#!">Introduction</a></li>
                    <li class="h-12 py-2 border-b-2 border-gray-200 px-3"><a href="#!">Lorem Ipsum</a></li>
                    <li class="h-12 py-2 border-b-2 border-gray-200 px-3"><a href="#!">Lorem Ipsum Dolor Sit</a></li>
                    <li class="h-12 py-2 border-b-2 border-gray-200 px-3"><a href="#!">Lorem Ipsum Dolor</a></li>
                    <li class="h-12 py-2 border-b-2 border-gray-200 px-3" px-3><a href="#!">Summary</a></li>
                </ul>
            </div>

            <!--Article Section-->
            <div class="lg:col-span-8">
                <h3 class="font-bold text-xl mb-3">Adding Doucments to Lifespot</h3>
                <p class="text-sm text-gray-400">Aug 17, 2022</p>

                <article class="mt-10">
                    <h5 class="font-bold text-lg">Lorem Ipsum Dolor</h5>
                    <p class="text-gray-500 xtext-sm">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus delectus nemo quam eaque quaerat error sunt eos nisi at adipisci. Consectetur, suscipit fuga doloribus excepturi perferendis eum praesentium dignissimos officiis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil consequuntur distinctio accusamus molestias quia sequi eos fuga unde quas ratione at, eligendi, iusto doloremque corrupti, repellendus beatae veniam rem quaerat!
                    </p>
                    <br>
                    <p class="text-gray-500 xtext-sm">
                        Esse beatae, at quas provident voluptates suscipit ab natus vero aut ea doloribus placeat architecto, quisquam labore totam quis alias vel! Facilis, exercitationem assumenda maxime magnam repellendus sit quasi dolorum?
                        Libero et fugit, nesciunt nostrum nobis saepe tempore similique odio eligendi alias nisi atque facilis corrupti nam eum dolores, molestias omnis ab voluptatibus officiis, quasi tempora recusandae. Repellat, maiores qui! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet debitis laboriosam, aut totam vel recusandae eius incidunt laudantium praesentium reiciendis modi optio, quasi veritatis fugit nihil impedit perferendis, facilis tempora.
                    </p>

                    <!--Frequently Asked Questions-->
                    <section class="mb-12">
                        <div class="bg-white" x-data="{isSelected:1}">
                            <ul class="shadow-box xaccordion" xid="accordionExample">

                                <li class="relative bg-[hsl(0,5%,96%)] rounded mt-5">

                                    <button type="button" class="accordion-button w-full px-8 py-3 text-left" @click="isSelected !== 1 ? isSelected = 1 : isSelected = null" xtype="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="flex items-center justify-between">
                                            <span  class="font-bold text-xl tracking-wide">
                                               1. Lorem ipsum dolor sit amet consectetur			</span>
                                                {{-- <i id="icon" class="fa fa-arrow-down"></i> --}}
                                        </div>
                                    </button>

                                    <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="isSelected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                        <div class="px-6 pb-10">
                                            <hr class="border-2 border-b-gray-700 ">
                                            <img src="{{ asset('img/Upload_docs.png') }}" alt="">
                                            <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis laudantium impedit officiis perspiciatis dicta placeat. Delectus laborum esse vero consequatur possimus id accusamus! Aut quibusdam expedita possimus quidem impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, vero? Odit quas doloremque quo libero ex, repudiandae sit exercitationem veniam dolorem quibusdam, ut in dolore maxime dicta? Sit, explicabo voluptatibus?</p>
                                        </div>
                                    </div>

                                </li>

                                <li class="relative  bg-[hsl(0,5%,96%)] rounded mt-5">

                                    <button type="button" class="w-full px-8 py-6 text-left" @click="isSelected !== 2 ? isSelected = 2 : isSelected = null">
                                        <div class="flex items-center justify-between">
                                            <span class="font-bold text-xl tracking-wide">
                                               2. Lorem ipsum dolor sit			</span>
                                            <span class="ico-plus"></span>
                                        </div>
                                                    </button>

                                    <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container2" x-bind:style="isSelected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                        <div class="px-6 pb-10">
                                            <hr class="border-2 border-b-gray-700 ">
                                            <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis laudantium impedit officiis perspiciatis dicta placeat. Delectus laborum esse vero consequatur possimus id accusamus! Aut quibusdam expedita possimus quidem impedit.</p>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, adipisci cumque quis provident veniam excepturi possimus! Dolorem mollitia esse ratione repellat a temporibus nobis labore ab reiciendis omnis. Sequi, quibusdam.</p>
                                                        </div>
                                                    </div>

                                </li>

                                <li class="relative  bg-[hsl(0,5%,96%)] rounded mt-5">

                                    <button type="button" class="w-full px-8 py-6 text-left" @click="isSelected !== 3 ? isSelected = 3 : isSelected = null">
                                        <div class="flex items-center justify-between">
                                            <span class="font-bold text-xl tracking-wide">
                                               3. Lorem ipsum dolor sit amet consectetur			</span>
                                            <span class="ico-plus"></span>
                                        </div>
                                                    </button>

                                    <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container3" x-bind:style="isSelected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                        <div class="px-6 pb-10">
                                            <hr class="border-2 border-b-gray-700 ">
                                            <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis laudantium impedit officiis perspiciatis dicta placeat. Delectus laborum esse vero consequatur possimus id accusamus! Aut quibusdam expedita possimus quidem impedit.</p>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, adipisci cumque quis provident veniam excepturi possimus! Dolorem mollitia esse ratione repellat a temporibus nobis labore ab reiciendis omnis. Sequi, quibusdam.</p>

                                            <ul class="mt-3 space-y-3">
                                                <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga cum enim dignissimos vitae ipsa, saepe consequatur ex illum eligendi eum architecto vel natus praesentium perspiciatis omnis assumenda commodi consectetur fugit!</li>
                                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, quod. Laudantium consequuntur nesciunt vero libero error neque ipsa reprehenderit omnis est voluptas excepturi beatae nisi ab, consectetur nam magnam temporibus.</li>
                                            </ul>

                                        </div>
                                    </div>

                                </li>

                                <li class="relative  bg-[hsl(0,5%,96%)] rounded mt-5">

                                    <button type="button" class="w-full px-8 py-6 text-left" @click="isSelected !== 2 ? isSelected = 2 : isSelected = null">
                                        <div class="flex items-center justify-between">
                                            <span class="font-bold text-xl tracking-wide">
                                               4. Lorem ipsum dolor 				</span>
                                            <span class="ico-plus"></span>
                                        </div>
                                                    </button>

                                    <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container2" x-bind:style="isSelected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                        <div class="px-6 pb-10">
                                            <hr class="border-2 border-b-gray-700 ">
                                            <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis laudantium impedit officiis perspiciatis dicta placeat. Delectus laborum esse vero consequatur possimus id accusamus! Aut quibusdam expedita possimus quidem impedit.</p>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, adipisci cumque quis provident veniam excepturi possimus! Dolorem mollitia esse ratione repellat a temporibus nobis labore ab reiciendis omnis. Sequi, quibusdam.</p>
                                                        </div>
                                                    </div>

                                </li>

                                <li class="relative  bg-[hsl(0,5%,96%)] rounded mt-5">

                                    <button type="button" class="w-full px-8 py-6 text-left" @click.="isSelected !== 4 ? isSelected = 4 : isSelected = null">
                                        <div class="flex items-center justify-between">
                                            <span class="font-bold text-xl tracking-wide">
                                               5. Lorem ipsum dolor sit amet, consectetur 				</span>
                                            <span class="ico-plus"></span>
                                        </div>
                                                    </button>

                                    <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container2" x-bind:style="isSelected == 4 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                        <div class="px-6 pb-10">
                                            <hr class="border-2 border-b-gray-700 ">
                                            <p class="pt-3">Monday is ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis laudantium impedit officiis perspiciatis dicta placeat. Delectus laborum esse vero consequatur possimus id accusamus! Aut quibusdam expedita possimus quidem impedit.</p>
                                            <p>Friday is time sit amet consectetur adipisicing elit. Eligendi, adipisci cumque quis provident veniam excepturi possimus! Dolorem mollitia esse ratione repellat a temporibus nobis labore ab reiciendis omnis. Sequi, quibusdam.</p>
                                                        </div>
                                                    </div>

                                </li>

                            </ul>

                        </div>

                        <div class="text-center mt-8">
                            <button class="bg-[#0682d4] font-bold text-white px-9 py-3 rounded-xl">View More</button>
                        </div>
                    </section>
                </article>
            </div>

        </div>
    </div>


  @include('xpirix.body.footer')
</x-xpirix>
