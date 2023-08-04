@extends('company_admin.admin_master')
@section('admin')
<div class="w-full bg-white">
    <div class="mt-12 md:mt-2 pb-24 md:pb-5">
        <div class="bg-gray-800 pt-3">
            <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <h1 class="font-semibold tracking-wide pl-2">Manage Pricing Page Content</h1>
            </div>
        </div>

    </div>
    <!--Pricing Page Title Area-->
    <div class="pt-4">
        <!--Page Title Area -->
        <div class="mx-8 space-y-5">
            <h3 class="underline font-semibold text-lg ">
                Pricing Page Title Area
            </h3>

            <div class="space-y-8">
                <div>
                    <label class="text-cyan-700" for="main_title">Pricing Page Title</label>
                    <input type="text" name="main_title" id="main_title" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="Plans that help you grow." />
                </div>
                <div>
                    <label class="text-cyan-700" for="main_title">Pricing Page Short Description Info</label>
                    <input type="text" name="main_title" id="main_title" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod nibh." />
                </div>
            </div>
            <button type="submit" class=" mx-8 lg:mx-0 hover:underline font-bold rounded-full my-6 py-4 px-8 shadow-lg bg-cyan-600 text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-10">
                Update
            </button>
        </div>
        <hr class="my-4">
    </div>

    <!--Price Plan Options Area-->
    <div class="pt-8 mx-8">

        <section class="lg:max-w-5xl lg:container lg:mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4 pb-12">
            <div class="rounded-xl border-2 border-gray-900 py-4 px-6">
                <input type="text" name="xpirix_plan_title" id="xpirix_plan_title" value="xpirix" class="w-1/2 border border-black rounded-2xl pl-4 uppercase text-xs font-black p-1">
                <input type="text" name="month_price_free" id="month_price_free" value="Free" class="w-full font-black xtext-3xl text-gray-900 my-2">
                <input type="text" name="button_free_text" id="button_free_text" value="Get Started" class=" w-full bg-black text-white px-8 py-2 rounded-lg text-sm font-bold">
                <ul class="mt-4 space-y-3">
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span>
                        <input type="text" name="free_feature_1" id="free_feature_1" value="Included feature 1" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg></span>
                        <input type="text" name="free_feature_2" id="free_feature_2" value="Included feature 2" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg></span>
                        <input type="text" name="free_feature_3" id="free_feature_3" value="Included feature 3" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg></span>
                        <input type="text" name="free_feature_4" id="free_feature_4" value="Additional feature 4" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg></span>
                        <input type="text" name="free_feature_5" id="free_feature_5" value="Additional feature 5" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg></span>
                        <input type="text" name="free_feature_6" id="free_feature_6" value="Additional feature 6" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg></span>
                        <input type="text" name="free_feature_7" id="free_feature_7" value="Additional feature 7" class="w-full text-sm">
                </li>

                </ul>
            </div>
            <div  class="rounded-xl shadow-xl bg-white py-4 px-6">
                <input type="text" name="basic_plan_title" id="basic_plan_title" value="Basic Lifespot" class="w-3/4 rounded-2xl bg-[hsl(0,5%,96%)] pl-4 uppercase text-xs xfont-black p-1">
                <input type="text" name="month_price_basic" id="month_price_basic" value="$1.99/mo" class="w-full xfont-black text-3xl text-gray-900 my-2">

                <input type="text" name="year_price_basic" id="year_price_basic" value="$9.99/yr" class="w-full xfont-black text-3xl text-gray-900 my-2">

                <input type="text" name="button_basic_text" id="button_basic_text" value="Get Started" class=" w-full bg-black text-white px-8 py-2 rounded-lg text-sm font-bold">

                <ul class="mt-4 space-y-3">
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-black text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span>
                        <input type="text" name="basic_feature_1" id="basic_feature_1" value="Included feature 1" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-black text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span>
                        <input type="text" name="basic_feature_2" id="basic_feature_2" value="Included feature 2" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-black text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span>
                        <input type="text" name="basic_feature_3" id="basic_feature_3" value="Included feature 3" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg></span>
                        <input type="text" name="basic_feature_4" id="basic_feature_4" value="Included feature 4" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg></span>
                        <input type="text" name="basic_feature_5" id="basic_feature_5" value="Additional feature 5" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg></span>
                        <input type="text" name="basic_feature_6" id="basic_feature_6" value="Additional feature 6" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg></span>
                        <input type="text" name="basic_feature_7" id="basic_feature_7" value="Additional feature 7" class="w-full text-sm">
                </li>

                </ul>
            </div>
            <div  class="rounded-xl shadow-xl border bg-white border-blue-700 py-4 px-6">
                <input type="text" name="family_plan_title" id="family_plan_title" value="Family Lifespot" class="w-3/4 rounded-2xl bg-cyan-100 text-cyan-800 pl-4 uppercase text-xs font-black p-1">
                <div class="text-3xl text-gray-900 my-2">
                    <input type="text" name="month_price_family" id="month_price_family" value="$9.99/mo" class="w-full xfont-black text-3xl text-gray-900 my-2">

                    <input type="text" name="year_price_family" id="year_price_family" value="$99.99/yr" class="w-full xfont-black text-3xl text-gray-900 my-2">
                </div>
                <input type="text" name="button_family_text" id="button_family_text" value=" Lorem Ipsum" class=" w-full bg-cyan-600 text-white px-8 py-2 rounded-lg text-sm font-bold">
                <ul class="mt-4 space-y-3">
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span>
                        <input type="text" name="family_feature_1" id="family_feature_1" value="Included feature 1" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span>
                        <input type="text" name="family_feature_2" id="family_feature_2" value="Included feature 2" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span>
                        <input type="text" name="family_feature_3" id="family_feature_3" value="Additional feature 3" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span>
                        <input type="text" name="family_feature_4" id="family_feature_4" value="Additional feature 4" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span>
                        <input type="text" name="family_feature_5" id="family_feature_5" value="Additional feature 5" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg></span>
                        <input type="text" name="family_feature_6" id="family_feature_6" value="Additional feature 6" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-black text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg></span>
                        <input type="text" name="family_feature_7" id="family_feature_7" value="Additional feature 7" class="w-full text-sm">
                </li>

                </ul>
            </div>
            <div  class="rounded-xl shadow-xl bg-white py-4 px-6">
                <input type="text" name="premium_plan_title" id="premium_plan_title" value="Premium Lifespot"class="w-3/4 rounded-2xl bg-indigo-100 text-indigo-800 pl-4 uppercase text-xs font-black p-1">
                <div class="text-3xl text-gray-900 my-2">
                    <input type="text" name="month_price_premium" id="month_price_premium" value="$19.99/mo" class="w-full xfont-black text-3xl text-gray-900 my-2">

                    <input type="text" name="year_price_premium" id="year_price_premium" value="$199.99/yr" class="w-full xfont-black text-3xl text-gray-900 my-2">
                </div>
                <input type="text" name="button_premium_text" id="button_premium_text" value=" Lorem Ipsum"  class=" w-full bg-indigo-700 text-white px-8 py-2 rounded-lg text-sm font-bold">
                <ul class="mt-4 space-y-3">
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span>
                        <input type="text" name="premium_feature_1" id="premium_feature_1" value="Included feature 1" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span>
                        <input type="text" name="premium_feature_2" id="premium_feature_2" value="Included feature 2" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span>
                        <input type="text" name="premium_feature_3" id="premium_feature_3" value="Included feature 3" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span>
                        <input type="text" name="premium_feature_4" id="premium_feature_4" value="Additional feature 4" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span>
                        <input type="text" name="premium_feature_5" id="premium_feature_5" value="Additional feature 5" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span>
                        <input type="text" name="premium_feature_6" id="premium_feature_6" value="Additional feature 6" class="w-full text-sm">
                </li>
                <li class="flex justify-start space-x-2 items-center">
                    <span class="font-bold text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span>
                        <input type="text" name="premium_feature_7" id="premium_feature_7" value="Additional feature 7" class="w-full text-sm">
                </li>

                </ul>
            </div>

        </section>
        <button type="submit" class=" mx-8 lg:mx-0 hover:underline font-bold rounded-full my-6 py-4 px-8 shadow-lg bg-cyan-600 text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-10">
            Update
        </button>

    </div>
    <hr class="my-4">


    <!--Additional Plans Area-->
    <div class="pt-8 mx-8">
        <div class="lg:max-w-5xl container mx-auto grid lg:grid-cols-3 gap-8 text-center">
            <div class="space-y-4 px-5 mb-8">
                <span class="container mx-auto"><svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-20 w-20 p-4 mr-0 text-center rounded-full bg-red-100 text-red-300 font-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                  </svg></span>
                  <input type="text" name="additonal_plans_title_1" id="additonal_plans_title_1" value="Influencers" class="font-black text-2xl">
                <textarea name="additonal_plans_desc_1" id="additonal_plans_desc_1" cols="35" class="text-gray-800">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Etiam euismod nibh.</textarea>
                <input type="text" name="button_premium_text" id="button_premium_text" value=" Lorem Ipsum"  class="bg-[#0682d4] font-bold text-white px-6 py-3 rounded-xl">
            </div>
            <div class="space-y-4 px-5 mb-8">
                <span class="container mx-auto"><svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-20 w-20 p-4 mr-0 text-center rounded-full bg-green-100 text-green-300 font-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg></span>
                  <input type="text" name="additonal_plans_title_2" id="additonal_plans_title_2" value="Developers" class="font-black text-2xl">
                <textarea name="additonal_plans_desc_2" id="additonal_plans_desc_2" cols="35" class="text-gray-800">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Etiam euismod nibh.</textarea>
                <input type="text" name="button_premium_text" id="button_premium_text" value=" Lorem Ipsum"  class="bg-[#0682d4] font-bold text-white px-6 py-3 rounded-xl">
            </div>
            <div class="space-y-4 px-5 mb-8">
                <span class="container mx-auto"><svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-20 w-20 p-4 mr-0 text-center rounded-full bg-blue-100 text-blue-300 font-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                  </svg></span>
                  <input type="text" name="additonal_plans_title_3" id="additonal_plans_title_3" value="Advertisers" class="font-black text-2xl">
                <textarea name="additonal_plans_desc_3" id="additonal_plans_desc_3" cols="35" class="text-gray-800">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Etiam euismod nibh.</textarea>
                <input type="text" name="button_premium_text" id="button_premium_text" value=" Lorem Ipsum"  class="bg-[#0682d4] font-bold text-white px-6 py-3 rounded-xl">
            </div>

        </div>
        <button type="submit" class=" mx-8 lg:mx-0 hover:underline font-bold rounded-full my-6 py-4 px-8 shadow-lg bg-cyan-600 text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-10">
            Update
        </button>
        <hr class="my-4">
    </div>

    <!--FAQ Area-->
    <div class="pt-8 mx-8">
        <div class="mx-8 space-y-5">
            <h3 class="underline font-semibold text-lg ">
                Frequently Asked Questions Area
            </h3>

            <div class="space-y-8 pb-8">
                <div>
                    <label class="text-cyan-700" for="faq_title_1">FAQ Title 1</label>
                    <input type="text" name="faq_title_1" id="faq_title_1" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="Lorem, ipsum dolor sit amet consectetur?" />
                </div>
                <div>
                    <label class="text-cyan-700" for="faq_desc_1">FAQ Description 1</label>
                    <textarea name="faq_desc_1" id="" xcols="60" rows="10" class="w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis laudantium impedit officiis perspiciatis dicta placeat. Delectus laborum esse vero consequatur possimus id accusamus! Aut quibusdam expedita possimus quidem impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, vero? Odit quas doloremque quo libero ex, repudiandae sit exercitationem veniam dolorem quibusdam, ut in dolore maxime dicta? Sit, explicabo voluptatibus?</textarea>
                </div>
                <button type="submit" class="mx-8 lg:mx-0 hover:underline font-bold rounded-full my-6 py-4 px-8 shadow-lg bg-cyan-600 text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-10">
                    Update
                </button>
            </div>

            <div class="space-y-8 pb-8">
                <div>
                    <label class="text-cyan-700" for="faq_title_2">FAQ Title 2</label>
                    <input type="text" name="faq_title_2" id="faq_title_2" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="Lorem, ipsum dolor sit amet consectetur?" />
                </div>
                <div>
                    <label class="text-cyan-700" for="faq_desc_2">FAQ Description 2</label>
                    <textarea name="faq_desc_2" id="" xcols="60" rows="10" class="w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis laudantium impedit officiis perspiciatis dicta placeat. Delectus laborum esse vero consequatur possimus id accusamus! Aut quibusdam expedita possimus quidem impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, vero? Odit quas doloremque quo libero ex, repudiandae sit exercitationem veniam dolorem quibusdam, ut in dolore maxime dicta? Sit, explicabo voluptatibus?</textarea>
                </div>
                <button type="submit" class=" mx-8 lg:mx-0 hover:underline font-bold rounded-full my-6 py-4 px-8 shadow-lg bg-cyan-600 text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-10">
                    Update
                </button>
            </div>
            <div class="space-y-8 pb-8">
                <div>
                    <label class="text-cyan-700" for="faq_title_3">FAQ Title 3</label>
                    <input type="text" name="faq_title_3" id="faq_title_3" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="Lorem, ipsum dolor sit amet consectetur?" />
                </div>
                <div>
                    <label class="text-cyan-700" for="faq_desc_3">FAQ Description 3</label>
                    <textarea name="faq_desc_3" id="" xcols="60" rows="10" class="w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis laudantium impedit officiis perspiciatis dicta placeat. Delectus laborum esse vero consequatur possimus id accusamus! Aut quibusdam expedita possimus quidem impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, vero? Odit quas doloremque quo libero ex, repudiandae sit exercitationem veniam dolorem quibusdam, ut in dolore maxime dicta? Sit, explicabo voluptatibus?</textarea>
                </div>
                <button type="submit" class=" mx-8 lg:mx-0 hover:underline font-bold rounded-full my-6 py-4 px-8 shadow-lg bg-cyan-600 text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-10">
                    Update
                </button>
            </div>
            <div class="space-y-8 pb-8">
                <div>
                    <label class="text-cyan-700" for="faq_title_4">FAQ Title 4</label>
                    <input type="text" name="faq_title_4" id="faq_title_4" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="Lorem, ipsum dolor sit amet consectetur?" />
                </div>
                <div>
                    <label class="text-cyan-700" for="faq_desc_4">FAQ Description 4</label>
                    <textarea name="faq_desc_4" id="" xcols="60" rows="10" class="w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis laudantium impedit officiis perspiciatis dicta placeat. Delectus laborum esse vero consequatur possimus id accusamus! Aut quibusdam expedita possimus quidem impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, vero? Odit quas doloremque quo libero ex, repudiandae sit exercitationem veniam dolorem quibusdam, ut in dolore maxime dicta? Sit, explicabo voluptatibus?</textarea>
                </div>
                <button type="submit" class=" mx-8 lg:mx-0 hover:underline font-bold rounded-full my-6 py-4 px-8 shadow-lg bg-cyan-600 text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-10">
                    Update
                </button>
            </div>
        </div>
        <hr class="my-4">
    </div>

    <!--Testimonials Area-->
    <div class="pt-8 mx-8">
        <div class="mx-8 space-y-5">
            <h3 class="underline font-semibold text-lg ">
               Testimonials Carousel Area
            </h3>

            <div class="space-y-4 pb-8">
                <div>
                    <label class="text-cyan-700" for="carousel_testimonial_1">Testimonial 1</label>
                    <textarea name="carousel_testimonial_1" id="" xcols="60" rows="10" class="w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis laudantium impedit officiis perspiciatis dicta placeat. Delectus laborum esse vero consequatur possimus id accusamus! Aut quibusdam expedita possimus quidem impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, vero? Odit quas doloremque quo libero ex, repudiandae sit exercitationem veniam dolorem quibusdam, ut in dolore maxime dicta? Sit, explicabo voluptatibus?</textarea>
                </div>
                <div>
                    <label class="text-cyan-700" for="testiomonial_person_1">First & Last Name</label>
                    <input type="text" name="testiomonial_person_1" id="faq_title_1" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="- Firstname L." />
                    <input type="text" name="testiomonial_info_1" id="faq_title_1" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="Addtional Info" />
                </div>
                <button type="submit" class="mx-8 lg:mx-0 hover:underline font-bold rounded-full my-6 py-4 px-8 shadow-lg bg-cyan-600 text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-10">
                    Update
                </button>
            </div>

            <div class="space-y-4 pb-8">
                <div>
                    <label class="text-cyan-700" for="carousel_testimonial_2">Testimonial 2</label>
                    <textarea name="carousel_testimonial_2" id="" xcols="60" rows="10" class="w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis laudantium impedit officiis perspiciatis dicta placeat. Delectus laborum esse vero consequatur possimus id accusamus! Aut quibusdam expedita possimus quidem impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, vero? Odit quas doloremque quo libero ex, repudiandae sit exercitationem veniam dolorem quibusdam, ut in dolore maxime dicta? Sit, explicabo voluptatibus?</textarea>
                </div>
                <div>
                    <label class="text-cyan-700" for="testiomonial_person_2">First & Last Name</label>
                    <input type="text" name="testiomonial_person_2" id="testiomonial_person_2" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="- Firstname L." />
                    <input type="text" name="testiomonial_info_2" id="testiomonial_info_2" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="Addtional Info" />
                </div>
                <button type="submit" class="mx-8 lg:mx-0 hover:underline font-bold rounded-full my-6 py-4 px-8 shadow-lg bg-cyan-600 text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-10">
                    Update
                </button>
            </div>

            <div class="space-y-4 pb-8">
                <div>
                    <label class="text-cyan-700" for="carousel_testimonial_3">Testimonial 3</label>
                    <textarea name="carousel_testimonial_3" id="" xcols="60" rows="10" class="w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis laudantium impedit officiis perspiciatis dicta placeat. Delectus laborum esse vero consequatur possimus id accusamus! Aut quibusdam expedita possimus quidem impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, vero? Odit quas doloremque quo libero ex, repudiandae sit exercitationem veniam dolorem quibusdam, ut in dolore maxime dicta? Sit, explicabo voluptatibus?</textarea>
                </div>
                <div>
                    <label class="text-cyan-700" for="testiomonial_person_3">First & Last Name</label>
                    <input type="text" name="testiomonial_person_3" id="testiomonial_person_3" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="- Firstname L." />
                    <input type="text" name="testiomonial_info_3" id="testiomonial_info_3" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="Addtional Info" />
                </div>
                <button type="submit" class="mx-8 lg:mx-0 hover:underline font-bold rounded-full my-6 py-4 px-8 shadow-lg bg-cyan-600 text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-10">
                    Update
                </button>
            </div>
        </div>
        <hr class="my-4">
    </div>
</div>
@endsection
