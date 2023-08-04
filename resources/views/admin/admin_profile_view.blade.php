<x-admin-layout>
    <div class="w-full bg-white">
        <div class="mt-12 md:mt-2 pb-24 md:pb-5">
            <div class="bg-gray-800 pt-3">
                <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h1 class="font-semibold tracking-wide pl-2">Manage Your Profile</h1>
                </div>
            </div>


            <div class="grid grid-cols-3 lg:grid-cols-5 gap-4 rounded-lg bg-gray-100 shadow-xl border-2 border-blue-500 p-8 m-8">
                <div class="text-right items-center space-y-3">
                    <p class="text-gray-500">First Name:</p>
                    <p class="text-gray-500">Last Name:</p>
                    <p class="text-gray-500">Email:</p>
                    <p class="text-gray-500">Username:</p>
                    <p class="text-gray-500">Profile Image:</p>
                </div>
                <div class="items-center space-y-3">
                    <p class="text-gray-700">{{ $user->fname }}</p>
                    <p class="text-gray-700">{{ $user->lname }}</p>
                    <p class="text-gray-700">{{ $user->email }}</p>
                    <p class="text-gray-700">{{ $user->uname }}</p>
                    <img id="showImage" class="object-cover rounded w-20 h-20" src="{{ (!empty($user->profile_photo_path)) ? url('upload/admin_images/'.$user->profile_photo_path) : url('upload/no_image.png') }}" alt="">
                </div>
                <a href="{{ route('editProfile') }}" class="flex items-center justify-end">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                      </svg>
                      <span class="ml-2 text-blue-500">Edit</span>
                </a>
            </div>

        </div>
    </div>
</x-admin-layout>
