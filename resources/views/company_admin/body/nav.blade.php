<nav aria-label="alternative nav">
    <div class="bg-gray-800 shadow-xl h-20 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48 content-center">

        <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
            <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                {{-- <li class="mr-3 flex-1">
                    <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                        <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Tasks</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                        <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Messages</span>
                    </a>
                </li> --}}
                @auth
                <li class="mr-3 flex-1">
                    <a href="#!" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-blue-600">
                        <i class="fas fa-chart-area pr-0 md:pr-3 text-blue-600"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Dashboard</span>
                    </a>
                </li>
                @endauth
                @can('owner_access')
                <li class="mr-3 flex-1">
                    {{-- <a href="{{ route('company_admin_users') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white xborder-b-2 xborder-blue-600"> --}}
                        <a href="{{ route('admin.index') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                        <i class="fas fa-chart-area pr-0 md:pr-3 xtext-blue-600"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Users</span>
                    </a>
                </li>
                @endcan
                {{-- <li class="mr-3 flex-1">
                    <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white hover:border-b-2 hover:border-pink-600">
                        <i class="fas fa-chart-area pr-0 md:pr-3 hover:text-pink-600"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Xpirix Content</span>
                    </a>
                </li> --}}

                @can('xpirix_edit')
                <li class="mr-3 flex-1">
                    <a
                    {{-- href="{{ route('xpirix_content.edit',$xpirixContent->id) }}" --}}

                    href="/xpirix_content/1/edit"
                    class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Xpirix Content</span>
                    </a>
                </li>


                <li class="mr-3 flex-1">
                    <a href="/price_content/1/edit" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Pricing Content</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="#!" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Help Content</span>
                    </a>
                </li>
                @endcan
                @can('sponsor_access')
                    <li class="mr-3 flex-1">
                        <a href="#!" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                            <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Sponsor Access</span>
                        </a>
                    </li>
                @endcan

            </ul>
        </div>


    </div>
</nav>
