@extends('lifespot_layout')

@section('content')
<div class="h-screen ml-6 mt-6 mx-6">
    <h1 class="font-black text-xl mb-4">My Estate</h1>

    <div class="grid lg:grid-cols-5 gap-4 py-4">

        <div class="col-span-4">
            <div class=" grid-cols-1 grid lg:grid-cols-2 gap-8">

                <div class="relative flex justify-center text-center border-t-8 rounded-lg border-blue-500 mb-4">
                    <a
                    href="{{ route('myestate.financials.banking') }}"
                    class="absolute top-2 right-4 text-blue-800">View</a>
                    <div class="block p-6 rounded-lg shadow-xl bg-white xmax-w-sm">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 p-2 text-white bg-blue-500 rounded-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                        </div>
                        <div class="flex justify-center space-x-4 items-center">
                            <h5 class="text-gray-900 text-xl leading-tight font-black mb-2">Finanacial</h5>
                            <span class="flex items-center text-white bg-blue-500 rounded-full text-xs py-0.5 px-2 uppercase font-bold mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 font-bold text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>

                            completed</span>
                        </div>
                        <p class="text-gray-700 text-sm mb-4">
                            Securely Store Your Financial Data with Lifespot - Get Access, Anytime, Anywhere!
                        </p>
                        <div class="flex space-x-3 justify-around mx-4 items-center">
                            <a class=" inline-block px-12 py-4 bg-[#1f588d] text-white font-bold text-xs leading-tight  rounded-xl shadow-md hover:active:bg-[#1f588d] hover:shadow-lg focus:bg-[#1f588d] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#1f588d] active:shadow-lg transition duration-150 ease-in-out"
                                href="{{ route('myestate.financials.banking') }}">
                           Edit</a>
                            <ul class="flex items-center pb-4 pt-2">

                                <li>
                                    <a href="#!">
                                        <img class="rounded-full h-6 w-6" src="{{ asset('img/WalkerFamilyPics/jared.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <img class="rounded-full h-6 w-6" src="{{ asset('img/WalkerFamilyPics/howard.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <span class="bg-gray-500 text-white text-xs font-bold rounded-full h-6 w-6 uppercase py-2 px-2">+3</span>
                                    </a>
                                </li>
                                <li class="ml-5">
                                    <a href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-center text-center border-t-8 rounded-lg border-indigo-600 mb-4">
                    <a href="#!" class="absolute top-2 right-4 text-blue-800">View</a>
                    <div class="block p-6 rounded-lg shadow-xl bg-white xmax-w-sm">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 p-2 text-white bg-indigo-600 rounded-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
                              </svg>
                        </div>
                      <div class="relative flex justify-center space-x-4 items-center">
                        <h5 class="text-gray-900 text-xl leading-tight font-black mb-2">Legal</h5>
                        <span class="flex items-center  bg-gray-100 rounded-full text-xs py-0.5 px-2 uppercase font-medium mb-2">
                        60% completed</span>
                      </div>
                      <p class="text-gray-700 text-sm mb-4">
                        Your Legal Lifeline: Securely Store and Access Your Legal Needs with Lifespot.
                      </p>
                      <div class="relative flex space-x-3 justify-around mx-4">
                        <button type="button" class=" inline-block px-12 py-1 bg-[#1f588d] text-white font-bold text-xs leading-tight  rounded-xl shadow-md hover:active:bg-[#1f588d] hover:shadow-lg focus:bg-[#1f588d] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#1f588d] active:shadow-lg transition duration-150 ease-in-out">Edit</button>
                            <ul class="flex items-center pb-4 pt-2">

                                <li>
                                    <a href="#!">
                                        <img class="rounded-full h-6 w-6" src="{{ asset('img/WalkerFamilyPics/jared.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <img class="rounded-full h-6 w-6" src="{{ asset('img/WalkerFamilyPics/howard.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <span class="bg-gray-500 text-white text-xs font-bold rounded-full h-6 w-6 uppercase py-2 px-2">+3</span>
                                    </a>
                                </li>
                                <li class="ml-5">
                                    <a href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-center text-center border-t-8 rounded-lg border-red-600 mb-4">
                    <a href="#!" class="absolute top-2 right-4 text-blue-800">View</a>
                    <div class="block p-6 rounded-lg shadow-xl bg-white xmax-w-sm">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 p-2 text-white bg-red-600 rounded-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                              </svg>
                        </div>
                      <div class="flex justify-center space-x-4 items-center">
                        <h5 class="text-gray-900 text-xl leading-tight font-black mb-2">Health</h5>
                      <span class="flex items-center  bg-gray-100 rounded-full text-xs py-0.5 px-2 uppercase font-medium mb-2">
                        20% completed</span>
                      </div>
                      <p class="text-gray-700 text-sm mb-4">
                        Stay Connected and In Control of Your Health documents and contacts with Lifespot!
                      </p>
                      <div class="flex space-x-3 justify-around mx-4">
                        <button type="button" class=" inline-block px-12 py-1 bg-[#1f588d] text-white font-bold text-xs leading-tight  rounded-xl shadow-md hover:active:bg-[#1f588d] hover:shadow-lg focus:bg-[#1f588d] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#1f588d] active:shadow-lg transition duration-150 ease-in-out">Edit</button>
                            <ul class="flex items-center pb-4 pt-2">

                                <li>
                                    <a href="#!">
                                        <img class="rounded-full h-6 w-6" src="{{ asset('img/WalkerFamilyPics/jared.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <img class="rounded-full h-6 w-6" src="{{ asset('img/WalkerFamilyPics/howard.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <span class="bg-gray-500 text-white text-xs font-bold rounded-full h-6 w-6 uppercase py-2 px-2">+3</span>
                                    </a>
                                </li>
                                <li class="ml-5">
                                    <a href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-center text-center border-t-8 rounded-lg border-cyan-600 mb-4">
                    <a href="#!" class="absolute top-2 right-4 text-blue-800">View</a>
                    <div class="block p-6 rounded-lg shadow-xl bg-white xmax-w-sm">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 p-2 text-white bg-cyan-600 rounded-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                        </div>
                        <div class="flex justify-center space-x-4 items-center">
                                <h5 class="text-gray-900 text-xl leading-tight font-black mb-2">Retirement</h5>
                                <span class="flex items-center  bg-gray-100 rounded-full text-xs py-0.5 px-2 uppercase font-medium mb-2">
                                80% completed</span>
                        </div>
                        <p class="text-gray-700 text-sm mb-4">
                            Secure your retirement wishes, and contacts with Lifespot - Plan for your future, today!
                        </p>
                        <div class="flex space-x-3 justify-around mx-4">
                            <button type="button" class=" inline-block px-12 py-1 bg-[#1f588d] text-white font-bold text-xs leading-tight  rounded-xl shadow-md hover:active:bg-[#1f588d] hover:shadow-lg focus:bg-[#1f588d] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#1f588d] active:shadow-lg transition duration-150 ease-in-out">Edit</button>
                            <ul class="flex items-center pb-4 pt-1">

                                <li>
                                    <a href="#!">
                                        <img class="rounded-full h-6 w-6" src="{{ asset('img/WalkerFamilyPics/jared.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <img class="rounded-full h-6 w-6" src="{{ asset('img/WalkerFamilyPics/howard.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <span class="bg-gray-500 text-white text-xs font-bold rounded-full h-6 w-6 uppercase py-2 px-2">+3</span>
                                    </a>
                                </li>
                                <li class="ml-5">
                                    <a href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-center text-center border-t-8 rounded-lg border-green-600 mb-4">
                    <a href="#!" class="absolute top-2 right-4 text-blue-800">View</a>
                    <div class="block p-6 rounded-lg shadow-xl bg-white xmax-w-sm">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 p-2 text-white bg-green-600 rounded-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                        </div>
                        <div class="flex justify-center space-x-4 items-center">
                                <h5 class="text-gray-900 text-xl leading-tight font-black mb-2">Spiritual</h5>
                                <span class="flex items-center  bg-gray-100 rounded-full text-xs py-0.5 px-2 uppercase font-medium mb-2">
                                40% completed</span>
                        </div>
                        <p class="text-gray-700 text-sm mb-4">
                            Unlock your spiritual potential with Lifespot Estate - we help you keep spiritual needs and wishes accessible and organized
                        </p>
                        <div class="flex space-x-3 justify-around mx-4">
                            <button type="button" class=" inline-block px-12 py-1 bg-[#1f588d] text-white font-bold text-xs leading-tight  rounded-xl shadow-md hover:active:bg-[#1f588d] hover:shadow-lg focus:bg-[#1f588d] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#1f588d] active:shadow-lg transition duration-150 ease-in-out">Edit</button>
                            <ul class="flex items-center pb-4 pt-1">

                                <li>
                                    <a href="#!">
                                        <img class="rounded-full h-6 w-6" src="{{ asset('img/WalkerFamilyPics/jared.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <img class="rounded-full h-6 w-6" src="{{ asset('img/WalkerFamilyPics/howard.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <span class="bg-gray-500 text-white text-xs font-bold rounded-full h-6 w-6 uppercase py-2 px-2">+3</span>
                                    </a>
                                </li>
                                <li class="ml-5">
                                    <a href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden lg:block h-96 lg:col-start-5 bg-blue-50 rounded-xl p-6">
            <div class="rounded-full w-8 h-8 fond-black bg-blue-500 text-white text-xl py-1 px-3 mb-2">?</div>
            <h3 class="text-black font-black">Why is this information important?</h3>
            <p class="mt-2 text-xs">Access to your financial, health, retirement, and legal documents is important because these documents contain information about your estate and provide guidance for those who may need to handle your affairs after your death. They also serve to protect your assets and ensure that your wishes are followed. </p>
        </div>

    </div>

</div>

@endsection
