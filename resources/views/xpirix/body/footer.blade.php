<div class="lg:max-w-5xl container mx-auto text-center items-center rounded-lg bg-blue-50 mt-10 mb-12 px-24 py-24 xmx-24">
    <h2 class="font-bold text-2xl capitalize">{{ $contents->footer_title }}</h2>
    <p class="text-sm text-gray-500">{{ $contents->footer_message }}</p>
    <div class="pt-8">
        <a href="#!" class="border border-[#0682d4] text-white bg-[#0682d4] py-2 px-2 lg:px-8 rounded-xl font-bold">{{ $contents->footer_button_cta }}</a>
    </div>
</div>
<footer class="px-12 md:px-24 pt-6">
    <div class="mb-24">
        <div class="grid md:grid-cols-7 gap-4">
            <div class="space-y-4">
                {{-- <div class="h-20 w-20 rounded-full bg-gray-700 mr-3"></div> --}}
                <img src="{{ asset('logos/xpirix-logo-transparent.png') }}" class="mr-3 h-12 xsm:h-9" alt="Xpirix Logo">
            </div>
            <div></div>
            <div class="lg:col-span-3">
                <div class="grid md:grid-cols-3 md:gap-8">
                    <div>
                        <ul class="text-xs space-y-5 my-5">
                            <li class="font-bold">
                                <a href="#!">{{ $contents->footer_left_link_1 }}</a>
                            </li>
                            <li>
                                <a href="#!">{{ $contents->footer_left_link_2 }}</a>
                            </li>
                            <li>
                                <a href="#!">{{ $contents->footer_left_link_3 }}</a>
                            </li>
                            <li>
                                <a href="#!">{{ $contents->footer_left_link_4 }}</a>
                            </li>
                            <li>
                                <a href="#!">{{ $contents->footer_left_link_5 }}</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="text-xs space-y-5 my-5">
                            <li class="font-bold">
                                <a href="#!">{{ $contents->footer_middle_link_1 }}</a>
                            </li>
                            <li>
                                <a href="#!">{{ $contents->footer_middle_link_2 }}</a>
                            </li>
                            <li>
                                <a href="#!">{{ $contents->footer_middle_link_3 }}</a>
                            </li>
                            <li>
                                <a href="#!">{{ $contents->footer_middle_link_4 }}</a>
                            </li>
                            <li>
                                <a href="#!">{{ $contents->footer_middle_link_5 }}</a>
                            </li>
                            <li>
                                <a href="#!">{{ $contents->footer_middle_link_6 }}</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="text-xs space-y-5 my-5">
                            <li class="font-bold">
                                <a href="#!">{{ $contents->footer_right_link_1 }}</a>
                            </li>
                            <li>
                                <a href="#!">{{ $contents->footer_right_link_2 }}</a>
                            </li>
                            <li>
                                <a href="#!">{{ $contents->footer_right_link_3 }}</a>
                            </li>
                            <li>
                                <a href="#!">{{ $contents->footer_right_link_4 }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div></div>
            <div class="flex space-x-2">
                <div>
                    <a href="{{ $contents->facebook_url }}" target="_blank"><img class="h-5 w-5" src="{{ asset('img/WalkerFamilyPics/facebook.webp') }}" alt=""></a>
                </div>
                <div>
                    <a href="{{ $contents->twitter_url }}" target="_blank"><img class="h-5 w-5" src="{{ asset('img/WalkerFamilyPics/twitter.webp') }}" alt=""></a>
                </div>
                <div>
                    <a href="{{ $contents->instagram_url }}" target="_blank"><img class="h-5 w-5" src="{{ asset('img/WalkerFamilyPics/instagram.webp') }}" alt=""></a>
                </div>
                <div>
                    <a href="{{ $contents->youtube_url }}" target="_blank"><img class="h-5 w-5" src="{{ asset('img/WalkerFamilyPics/youtube.webp') }}" alt=""></a>
                </div>
                <div>
                    <a href="{{ $contents->linkedin_url }}" target="_blank"><img class="h-5 w-5" src="{{ asset('img/WalkerFamilyPics/linkedIn.webp') }}" alt=""></a>
                </div>
            </div>
        </div>

    </div>
</footer>
