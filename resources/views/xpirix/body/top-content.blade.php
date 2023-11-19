<div class="">
    <div class="bg-[#056591] py-4">
         <!--Top CTA Area-->
        <div class="grid grid-cols-1 lg:grid-cols-3 bg-[#056591]  items-center xsm:pt-12 pt-4 pb-6 lg:px-24">
            <!--Top Left-->
            <div class="col-span-2 space-y-5 md:mb-4 px-4">
                {{-- <h1 class="font-black text-gray-800 text-4xl md:text-5xl ">{{ $contents->main_title }}</h1> --}}
                <h1 class="text-white text-4xl lg:text-8xl tracking-wider font-semibold">Simplify your digital world</h1>
                {{-- <p class="container  text-gray-700 text-lg font-semibold mr-32">{{ $contents->main_message }}</p> --}}
                <h4 class="text-white text=2xl lg:text-4xl tracking-wide">LifeSpot safeguards your life story and helps you to prepare for what's to come.</h4>
                <div class="flex justify-start ml-5 space-x-4 items-center">
                    <a href="{{ route('register') }}" class=" text-[#056591] text-xl bg-white py-2 px-8 rounded-3xl font-bold">Get Started</a>

                    <a class="text-white text-xs lg:text-sm font-bold" href="{{ route('posts.create') }}">Create a post</a>
                </div>
            </div>

            <!--Top Right-->
            <img src="{{ asset('img/papers.png') }}" class="h-full w-auto object-cover" alt="">
            {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-3 md:mt-0 mt-6 md:px-4">
                <div class="col-span-2">
                    <div class="relative">
                        <a href="">
                            <div class="pr-4 pl-4 pt-4">
                                    <div class="bg-white rounded-xl shadow-xl px-6 py-4">
                                        <div class="overflow-auto scroll-smooth h-44">
                                            <div class="flex space-x-2 items-center">
                                                <img class="h-6 w-6 rounded-full" src="{{ asset('img/WalkerFamilyPics/sara.png') }}" alt="">
                                                <span class="text-xs font-black">Sara Walker</span>
                                            </div>
                                            <div class="bg-gray-200 text-gray-600 rounded-b-lg rounded-tr-lg w-64 p-3 text-xs mx-8  mb-2">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Riusto ea perspiciatis tenetur at molestias!
                                            </div>

                                            <img class="h-28 w-24 rounded-l-lg rounded-b-lg border-8 border-gray-200 mx-8" src="{{ asset('img/pdf.jpeg') }}" alt="">
                                        </div>
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 left-0 rounded-full bg-blue-700 p-2 text-white h-8 w-8" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="ml-2">
                    <div class="relative">
                        <a href="">
                            <style>
                                input[type=checkbox]:checked + label.strikethrough {
                                    text-decoration:line-through;
                                }
                            </style>
                            <div class="pr-4 sm:pl-4 md:pl-0 pt-4">
                                <div class="bg-white rounded-xl shadow-xl px-3 pt-3 pb-6">
                                    <div class="text-gray-400 text-xs uppercase mb-6">Your Tasks</div>
                                    <div class="flex space-x-2 items-center">
                                        <div class="space-y-4 text-xs">
                                            <div class="form-check flex flex-nowrap">
                                                <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-full bg-white checked:bg-gray-600 checked:border-gray-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-1 cursor-pointer" type="checkbox" value="" id="flexCheckChecked1" checked>
                                                <label class="strikethrough form-check-label inline-block text-xs font-bold text-gray-500 pt-1.5" for="flexCheckChecked1">
                                                Update Living Will
                                                </label>
                                            </div>
                                            <div class="form-check flex flex-nowrap">
                                                <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-full bg-white checked:bg-gray-600 checked:border-gray-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-1 cursor-pointer" type="checkbox" value="" id="flexCheckChecked2" checked>
                                                <label class="strikethrough form-check-label inline-block text-xs font-bold text-gray-500 pt-1.5" for="flexCheckChecked2">
                                                Update Executor
                                                </label>
                                            </div>
                                            <div class="form-check flex flex-nowrap">
                                                <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-full bg-white checked:bg-gray-600 checked:border-gray-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-1 cursor-pointer" type="checkbox" value="" id="flexCheckChecked4" xchecked>
                                                <label class="strikethrough form-check-label inline-block text-xs font-bold text-gray-500 pt-1.5" for="flexCheckChecked4">
                                                Add Kendal to Lifespot
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 lg:right-0 left-0 rounded-full bg-orange-500 p-2 text-white h-8 w-8" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="relative mr-1">
                        <a href="">
                            <div class="pr-4 pl-4 pt-4">
                                <div class="bg-white rounded-xl shadow-xl text-center space-y-2 p-3">
                                    <span class="bg-gray-200 text-xs px-2 py-1 uppercasse rounded-xl">Heir</span>
                                    <img class="h-10 w-10 rounded-full m-auto" src="{{ asset('img/WalkerFamilyPics/rocco.png') }}" alt="Rocco">
                                    <p class="text-xs font-black text-blue-800">Rocco Walker</p>
                                    <p class="text-xs">Son</p>
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 md:left-0  rounded-full bg-teal-600 p-2 text-white h-8 w-8" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="relative">
                        <a href="">
                            <div class="pr-4 pl-4 pt-4">
                                <div class="bg-white rounded-xl shadow-xl text-center space-y-2 p-3">
                                    <span class="bg-gray-200 text-xs px-2 py-1 uppercasse rounded-xl">Emergency Contact</span>
                                    <img class="h-10 w-10 rounded-full m-auto" src="{{ asset('img/WalkerFamilyPics/florence.png') }}" alt="Rocco">
                                    <p class="text-xs font-black text-blue-800">Florence Walker</p>
                                    <p class="text-xs">Grandmother</p>
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 md:left-0  rounded-full bg-orange-600 p-2 text-white h-8 w-8" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>

                        </a>
                    </div>
                </div>

                <div class="-mt-6 ml-2 mr-1">
                    <div class="relative">
                        <a href="">
                            <div class="pr-4 pt-4">
                                <div class="bg-white rounded-xl shadow-xl text-center space-y-4 pt-1 pb-2">
                                    <a href="#!" class="flex justify-center rounded-xl">
                                        <div class="rounded-lg bg-white px-1">
                                            <img class="rounded-lg h-20 w-36" src="{{ asset('img/chicago_home.jpeg') }}" alt=""/>
                                            <div class="text-center p-1">
                                                <h5 class="text-blue-900 text-xs font-bold mb-1">Current Residence</h5>
                                                <p class="text-gray-700 text-xs">
                                                123 Street Name,
                                                </p>
                                                <p class="text-gray-700 text-xs">
                                                    Chicago, IL 60007
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0  rounded-full bg-indigo-500 p-2 text-white h-8 w-8" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
        {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-3 md:mt-0 mt-6 md:px-4">
        </div> --}}
    </div>
    <div class="py-16 px-4">
        <h2 class="text-center text-[#056591] font-black text-3xl mb-10">
            Coming Soon
        </h2>
        <div class="w-full flex justify-center mb-10">
            <video width="700" height="240" controls class="border-2 rounded-sm mb-10">
                <source src="{{ asset("storage/files/LifeSpot-Coming-2020-no-date.mp4")}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="w-full flex flex-col md:flex-row justify-center items-center">
            <input 
                id="keep-updated-email" 
                class="w-96 rounded-xl md:mr-4 " 
                type="email"
                placeholder="myemail@gmail.com"
            />
            <button
                type="button"
                id="submit-keep-updated-email"
                class="text-white font-bold rounded-xl mt-4 md:mt-0 py-2 px-3 bg-[#056591]"
            >
                Keep Me Updated
            </button>
        </div>
    </div>
    <div class="bg-[#e1e8ec] py-16 px-4">
        <h1 class="text-[#056591] text-6xl tracking-wide font-bold text-center">Secure. Private. Sharable</h1>
        <p class="font-semibold text-center my-4 text-xl">Store family photos, publish blogs, or simply plan for tomorrow.</p>
        <div class="grid lg:grid-cols-5 gap-6 mx-16">
            <div class="xbg-yellow-400 text-center grid grid-rows-2 h-56 space-y-3">
                <div class="row-span-1 mx-auto mt-1">
                    <img src="{{ asset('img/Lifespot 1.png') }}" class="object-cover h-32 w-auto mx-8" alt="">
                    <img src="{{ asset('img/blue shadow.png') }}" class="object-cover h-12 w-auto mx-12 -mt-10" alt="">
                </div>
                <p class="rows-span-1 pt-5"> Keep your will, medical records, and other legal documents all in one place.</p>
            </div>
            <div class="xbg-green-400 text-center grid grid-rows-2 h-56 space-y-3">
                <div class="row-span-1 mx-auto">
                    <img src="{{ asset('img/Lifespot 2.png') }}" class="object-cover h-32 w-auto mx-8" alt="">
                    <img src="{{ asset('img/blue shadow.png') }}" class="object-cover h-12 w-auto mx-12 -mt-8" alt="">
                </div>
                <p class="rows-span-1 pt-5">Manage your estate and invite members in real time.</p>
            </div>
            <div class="xbg-orange-400 text-center grid grid-rows-2 h-56 space-y-3">
                <div class="row-span-1 mx-auto">
                    <img src="{{ asset('img/Lifespot 3.png') }}" class="object-cover h-32 w-auto mx-9" alt="">
                    <img src="{{ asset('img/blue shadow.png') }}" class="object-cover h-12 w-auto mx-12 -mt-9" alt="">
                </div>
                <p class="rows-span-1 pt-5">Share recipes, blog posts, and pictures with your online community.</p>
            </div>
            <div class="xbg-blue-400 text-center grid grid-rows-2 h-56 space-y-3">
                <div class="row-span-1 mx-auto">
                    <img src="{{ asset('img/Lifespot 4.png') }}" class="object-cover h-32 w-auto mx-8" alt="">
                    <img src="{{ asset('img/blue shadow.png') }}" class="object-cover h-12 w-auto mx-12 -mt-9" alt="">
                </div>
                <p class="rows-span-1 pt-5">Send message through secure communications.</p>
            </div>
            <div class="xbg-red-400 text-center grid grid-rows-2 h-56 space-y-3">
                <div class="row-span-1 mx-auto">
                    <img src="{{ asset('img/Lifespot 5.png') }}" class="object-cover h-32 w-auto mx-8" alt="">
                    <img src="{{ asset('img/blue shadow.png') }}" class="object-cover h-12 w-auto mx-12 -mt-9" alt="">
                </div>
                <p class="rows-span-1 pt-5">Connect with an online community interested in your today and tomorrow.</p>
            </div>
        </div>
        <div class="text-center mt-12 mb-2">
            <a href="{{ route('register') }}" class=" text-[#056591] text-xl bg-white py-2 px-8 rounded-3xl font-bold">Get Started</a>
        </div>
    </div>

    <!--Trending Today top area -->
    <!--Xpriix and Lifespot Articles area -->
    {{-- <div class="px-12 pt-6 md:px-24">
        <div class="text-center text-[#056591] font-black text-3xl">Popular Posts</div>
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-4 mb-12">
            <div class="mt-8">
                <a href="#!">
                    <img class="rounded-xl h-52 w-96" src="{{ asset('img/WalkerFamilyPics/kitchen.jpeg') }}" alt="">
                </a>
                <div class="mt-3">
                    <div class="flex space-x-2 items-center">
                        <span class="text-xs">Jul 18 </span>
                    </div>
                    <h2 class="font-bold text-lg mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
                    <p class="text-sm my-1.5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, sapiente? A, dolores suscipit.
                    </p>
                    <a href="#!" class="text-blue-700">Read more...</a>
                </div>
            </div>
            <div class="mt-8">
                <a href="#!">
                    <img class="rounded-xl h-52 w-96" src="{{ asset('img/WalkerFamilyPics/money.jpeg') }}" alt="">
                </a>
                <div class="mt-3">
                    <div class="flex space-x-2 items-center">
                        <span class="text-sm">Jul 18 </span>
                    </div>
                    <h2 class="font-bold text-lg mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
                    <p class="text-sm my-1.5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, sapiente? A, dolores suscipit.
                    </p>
                    <a href="#!" class="text-blue-700">Read more...</a>
                </div>
            </div>
            <div class="mt-8">
                <a href="#!">
                    <img class="rounded-xl h-52 w-96" src="{{ asset('img/WalkerFamilyPics/doc_signing.jpeg') }}" alt="">
                </a>
                <div class="mt-3">
                    <div class="flex space-x-2 items-center">
                        <span class="text-sm">Jul 18 </span>
                    </div>
                    <h2 class="font-bold text-lg mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
                    <p class="text-sm my-1.5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, sapiente? A, dolores suscipit.
                    </p>
                    <a href="#!" class="text-blue-700">Read more...</a>
                </div>
            </div>
        </div>
    </div> --}}
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#submit-keep-updated-email').on('click', function() {
            console.log('clicked');
            $.ajax({
                url: "{{ route('email.list.add') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    email: $('#keep-updated-email').val(),
                },
                success: function() {
                    console.log('success');
                }
            })
        })
    })
</script>
