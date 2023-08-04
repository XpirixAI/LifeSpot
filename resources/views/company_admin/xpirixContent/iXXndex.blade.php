@extends('company_admin.admin_master')
@section('admin')


<div id="users" class="w-full bg-white pb-32">
    <!--Leading Content - Main CTA -->
    <div class="mt-12 md:mt-2 pb-24 md:pb-5">
        <div class="bg-gray-800 pt-3">
            <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <h1 class="font-semibold tracking-wide pl-2">Manage Xpirix Landing Page Content</h1>
            </div>
        </div>

        <div class="pt-4">

            <div class="grid grid-cols-2 gap-8">
                 <!--Left Col-->
                <div class="ml-8 lg:w-4/6">
                    <h3 class="underline m-4 font-semibold text-lg ">
                        Top Left
                    </h3>
                    <div class="space-y-5">
                        <div class="md:col-span-5">
                            <label class="text-cyan-700" for="main_title">Main Title</label>
                            <input type="text" name="main_title" id="main_title" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Grow as you go." />
                        </div>

                        <div class="md:col-span-5">
                            <label class="text-cyan-700" for="main_message">Main Message</label>
                            <textarea type="text" name="main_message" id="main_message" rows="3" cols="25" class="xh-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae atque veritatis quis</textarea>
                        </div>
                        <button type="submit" class="mx-auto lg:mx-0 hover:underline font-bold rounded-full my-6 py-4 px-8 shadow-lg bg-cyan-600 text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-10">
                            Update
                        </button>
                    </div>
                </div>

                 <!--Right Col-->
                <div class="ml-4 mr-8">
                    <h3 class="underline m-4 font-semibold text-lg">
                        Top Right
                    </h3>
                    <div class="grid lg:grid-cols-2 gap-4">

                        <div class="xmd:col-span-5">
                            <label class="text-cyan-700" for="message_area">Message Area</label>
                            <textarea type="text" name="message_area" id="message_area" rows="5" xcols="4" class="xh-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae atque veritatis quis</textarea>
                        </div>

                        <div class="xmd:col-span-5">
                            <label class="text-cyan-700" for="task_area">Task Area</label>
                            <textarea type="text" name="task_area" id="task_area" rows="5" cols="2" class="xh-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae atque veritatis quis</textarea>
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-3 gap-4 mt-5">
                        <div class="xmd:col-span-5">
                            <label class="text-cyan-700" for="family_area_1">Family Area</label>
                            <textarea type="text" name="family_area_1" id="family_area_1" rows="5" cols="2" class="xh-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae atque veritatis quis</textarea>
                        </div>
                        <div class="xmd:col-span-5">
                            <label class="text-cyan-700" for="family_area_2">Family Area</label>
                            <textarea type="text" name="family_area_2" id="family_area_2" rows="5" cols="2" class="xh-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae atque veritatis quis</textarea>
                        </div>
                        <div class="xmd:col-span-5">
                            <label class="text-cyan-700" for="residence_area">Residence Area</label>
                            <textarea type="text" name="residence_area" id="residence_area" rows="5" cols="2" class="xh-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae atque veritatis quis</textarea>
                        </div>

                        <button type="submit" class="mx-auto lg:mx-0 hover:underline font-bold rounded-full my-6 py-4 px-8 shadow-lg bg-cyan-600 text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out ">
                            Update
                        </button>
                        {{-- <p class="text-red-500 font-semibold">Brian A., once we know content for a guest user, this Top Right area will get an upgrade.</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4">

    <!--Trending Today -->
    <div class="mx-8">
        <label class="underline m-4 font-semibold text-lg" for="trending_title">Trending Today Section</label>
        <input type="text" name="trending_title" id="trending_title" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value= "Trending Today" />

        <button type="submit" class=" mx-8 lg:mx-0 hover:underline font-bold rounded-full my-6 py-4 px-8 shadow-lg bg-cyan-600 text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-10">
            Update
        </button>
    </div>
    <hr class="my-4">

  <!--Below Categories on right side -->
    <div class="mx-8 space-y-5">
        <h3 class="underline m-4 font-semibold text-lg ">
            Mini Call-to-Action (right side of general blog/posts below category list)
        </h3>
        <div class="md:col-span-5">
            <label class="text-cyan-700" for="cta_1_title">CTA Title</label>
            <input type="text" name="cta_1_title" id="cta_1_title" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value= "Lorem Ipsum Dolor Sit Amet" />
        </div>
        <div class="xmd:col-span-5">
            <label class="text-cyan-700" for="cta_1_description">CTA Descriptioin</label>
            <textarea type="text" name="cta_1_description" id="cta_1_description" rows="2" cols="2" class="xh-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae aperiam doloribus quis.</textarea>
        </div>
        <div class="md:col-span-5">
            <label class="text-cyan-700" for="cta_button_text">Button CTA</label>
            <input type="text" name="cta_button_text" id="cta_button_text" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Click Me" />
        </div>
        <button type="submit" class=" mx-8 lg:mx-0 hover:underline font-bold rounded-full my-6 py-4 px-8 shadow-lg bg-cyan-600 text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-10">
            Update
        </button>
    </div>


     <!--Footer -->
     <hr class="my-8 border-8 border-b">
     <div class="mx-8 space-y-5">
        <h2 class="text-cyan-700 m-4 font-semibold text-2xl ">
            Top Footer Area
        </h2>
        <h3 class="underline m-4 font-semibold text-lg ">
            Big Blue Box CTA(Call-to-Action) Area
        </h3>
        <div class="md:col-span-5">
            <label class="text-cyan-700" for="footer_title">Title</label>
            <input type="text" name="footer_title" id="footer_title" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Lorem Ipsum Dolor Sit Amet" />
        </div>
        <div class="xmd:col-span-5">
            <label class="text-cyan-700" for="footer_message">CTA Descriptioin</label>
            <textarea type="text" name="footer_message" id="footer_message" rows="2" cols="2" class="xh-10 border mt-1 rounded-lg px-4 w-full bg-gray-50" value="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae aperiam doloribus quis.</textarea>
        </div>
        <div class="md:col-span-5">
            <label class="text-cyan-700" for="footer_button_cta">Button CTA</label>
            <input type="text" name="footer_button_cta" id="footer_button_cta" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Click Me" />
        </div>
        <button type="submit" class=" mx-8 lg:mx-0 hover:underline font-bold rounded-full my-6 py-4 px-8 shadow-lg bg-cyan-600 text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-10">
            Update
        </button>
    </div>
    <hr class="my-4">
    <div class="mx-8 space-y-5">
        <h2 class="text-cyan-700 m-4 font-semibold text-2xl ">
            Bottom Footer Area
        </h2>
        <div class="grid grid-cols-3 gap-8">
            <div class="space-y-5">
                <h3 class="underline m-4 font-semibold text-lg ">
                    Links
                </h3>
                <div class="md:col-span-5">
                    <label class="text-cyan-700" for="footer_left_link_1">Title</label>
                    <input type="text" name="footer_left_link_1" id="footer_left_link_1" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Link Title" />
                </div>
                <div class="md:col-span-5">
                    <label class="text-cyan-700" for="footer_left_link_2">Title</label>
                    <input type="text" name="footer_left_link_2" id="footer_left_link_2" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Link Title" />
                </div>
                <div class="md:col-span-5">
                    <label class="text-cyan-700" for="footer_left_link_3">Title</label>
                    <input type="text" name="footer_left_link_3" id="footer_left_link_3" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Link Title" />
                </div>
                <div class="md:col-span-5">
                    <label class="text-cyan-700" for="footer_left_link_4">Title</label>
                    <input type="text" name="footer_left_link_4" id="footer_left_link_4" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Link Title" />
                </div>
                <div class="md:col-span-5">
                    <label class="text-cyan-700" for="footer_left_link_5">Title</label>
                    <input type="text" name="footer_left_link_5" id="footer_left_link_5" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Link Title" />
                </div>
            </div>
            <div class="space-y-5">
                <h3 class="underline m-4 font-semibold text-lg ">
                    Links
                </h3>
                <div class="md:col-span-5">
                    <label class="text-cyan-700" for="footer_middle_link_1">Title</label>
                    <input type="text" name="footer_middle_link_1" id="footer_middle_link_1" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Link Title" />
                </div>
                <div class="md:col-span-5">
                    <label class="text-cyan-700" for="footer_middle_link_2">Title</label>
                    <input type="text" name="footer_middle_link_2" id="footer_middle_link_2" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Link Title" />
                </div>
                <div class="md:col-span-5">
                    <label class="text-cyan-700" for="footer_middle_link_3">Title</label>
                    <input type="text" name="footer_middle_link_3" id="footer_middle_link_3" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Link Title" />
                </div>
                <div class="md:col-span-5">
                    <label class="text-cyan-700" for="footer_middle_link_4">Title</label>
                    <input type="text" name="footer_middle_link_4" id="footer_middle_link_4" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Link Title" />
                </div>
                <div class="md:col-span-5">
                    <label class="text-cyan-700" for="footer_middle_link_5">Title</label>
                    <input type="text" name="footer_middle_link_5" id="footer_middle_link_5" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Link Title" />
                </div>
            </div>
            <div class="space-y-5">
                <h3 class="underline m-4 font-semibold text-lg ">
                    Links
                </h3>
                <div class="md:col-span-5">
                    <label class="text-cyan-700" for="footer_right_link_1">Title</label>
                    <input type="text" name="footer_right_link_1" id="footer_right_link_1" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Link Title" />
                </div>
                <div class="md:col-span-5">
                    <label class="text-cyan-700" for="footer_right_link_2">Title</label>
                    <input type="text" name="footer_right_link_2" id="footer_right_link_2" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Link Title" />
                </div>
                <div class="md:col-span-5">
                    <label class="text-cyan-700" for="footer_right_link_3">Title</label>
                    <input type="text" name="footer_right_link_3" id="footer_right_link_3" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Link Title" />
                </div>
                <div class="md:col-span-5">
                    <label class="text-cyan-700" for="footer_right_link_4">Title</label>
                    <input type="text" name="footer_right_link_4" id="footer_right_link_4" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Link Title" />
                </div>
                <div class="md:col-span-5">
                    <label class="text-cyan-700" for="footer_right_link_5">Title</label>
                    <input type="text" name="footer_right_link_5" id="footer_right_link_5" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "Link Title" />
                </div>
            </div>
        </div>

        <button type="submit" class=" mx-8 lg:mx-0 hover:underline font-bold rounded-full my-6 py-4 px-8 shadow-lg bg-cyan-600 text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-10">
            Update
        </button>
    </div>
    <hr class="my-4">
    <div class="mx-8 space-y-5">
        <h2 class="text-cyan-700 m-4 font-semibold text-2xl ">
            Social Media Links
        </h2>
        <div class="md:col-span-5">
            <label class="text-cyan-700" for="facebook_url">Facebook Link</label>
            <input type="text" name="facebook_url" id="facebook_url" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "https://www.google.com" />
        </div>
        <div class="md:col-span-5">
            <label class="text-cyan-700" for="twitter_url">Twitter Link</label>
            <input type="text" name="twitter_url" id="twitter_url" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "https://www.google.com" />
        </div>
        <div class="md:col-span-5">
            <label class="text-cyan-700" for="instagram_url">SnapChat Link</label>
            <input type="text" name="instagram_url" id="instagram_url" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "https://www.google.com" />
        </div>
        <div class="md:col-span-5">
            <label class="text-cyan-700" for="youtube_url">YouTube Link</label>
            <input type="text" name="youtube_url" id="youtube_url" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "https://www.google.com" />
        </div>
        <div class="md:col-span-5">
            <label class="text-cyan-700" for="linkedin_url">Linkedin Link</label>
            <input type="text" name="linkedin_url" id="linkedin_url" class="h-10 border mt-1 rounded-lg px-4 w-full bg-gray-50"value= "https://www.google.com" />
        </div>

       <!-- Resource
            https://www.javatpoint.com/how-to-add-social-media-icons-in-html
        -->
        <button type="submit" class=" mx-8 lg:mx-0 hover:underline font-bold rounded-full my-6 py-4 px-8 shadow-lg bg-cyan-600 text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-10">
            Update
        </button>
    </div>
</div>
@endsection
