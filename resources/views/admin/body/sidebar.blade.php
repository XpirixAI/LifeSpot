<nav aria-label="alternative nav">
    <div class="bg-gray-800 shadow-xl h-20 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48 content-center">

        <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
            <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">

                @auth
                <li class="mr-3 flex-1">
                    <a href="{{ route('dashboard_home') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-blue-600">
                        <i class="fas fa-chart-area pr-0 md:pr-3 text-blue-600"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Dashboard</span>
                    </a>
                </li>
                @endauth
                @can('owner_access')
                <li class="mr-2 flex-1">
                        <x-sidebar-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
                            <i class="fa fa-wallet pr-0 md:pr-3"></i>
                            <span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">
                                {{ __('Users') }}
                            </span>

                        </x-sidebar-link>
                    </li>
                @endcan


                @can('xpirix_edit')
                <li class="mr-2 flex-1">
                    <x-sidebar-link href="{{ route('xpirix_content.edit', 1) }}" :active="request()->routeIs('xpirix_content.edit')">
                        <i class="fa fa-wallet pr-0 md:pr-3"></i>
                        <span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">
                            {{ __('Xpirix Content') }}
                        </span>
                    </x-sidebar-link>
                </li>
                <li class="mr-2 flex-1">
                    <x-sidebar-link href="{{ route('price_content.edit', 1) }}" :active="request()->routeIs('price_content.edit')">
                        <i class="fa fa-wallet pr-0 md:pr-3"></i>
                        <span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">
                            {{ __('Pricing Content') }}
                        </span>
                    </x-sidebar-link>
                </li>
                <li class="mr-2 flex-1">
                    <x-sidebar-link href="{{ route('help_content.index') }}" :active="request()->routeIs('help_content.index')">
                        <i class="fa fa-wallet pr-0 md:pr-3"></i>
                        <span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">
                            {{ __('Help Content') }}
                        </span>
                    </x-sidebar-link>
                </li>
                @endcan
                @can('sponsor_access')
                    <li class="mr-2 flex-1">
                        <x-sidebar-link href="{{ route('sponsors.index') }}" :active="request()->routeIs('sponsors.index')">
                            <i class="fa fa-wallet pr-0 md:pr-3"></i>
                            <span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">
                                {{ __('Sponsor Content') }}
                            </span>
                        </x-sidebar-link>
                    </li>
                @endcan
                @auth
                <li class="mr-2 flex-1">
                    <x-sidebar-link href="{{ route('manage-posts.index') }}" :active="request()->routeIs('manage-posts.index')">
                        <i class="fa fa-wallet pr-0 md:pr-3"></i>
                        <span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">
                            {{ __('Manage Posts') }}
                        </span>
                    </x-sidebar-link>
                </li>
                @endauth

            </ul>
        </div>

    </div>
</nav>
