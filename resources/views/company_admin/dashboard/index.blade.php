@extends('company_admin.admin_master')
@section('admin')
<div id="users" class="w-full bg-white">
    <div class="mt-12 md:mt-2 pb-24 md:pb-5">
        <div class="bg-gray-800 pt-3">
            <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <h1 class="font-semibold tracking-wide pl-2">Dashboard</h1>
            </div>
        </div>

        <h1 class="font-bold text-center items-center text-gray-700 text-3xl mt-28">Welcome to Your Dashboard</h1>
        {{-- <div class="overflow-auto rounded-lg shadow hidden lg:block">
            <table class="w-full shadow-md rounded">
                <thead class="bg-gray-50 border-b-2 border-gray-200">
                  <tr class="bg-white">
                    <th class="w-5 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Id</th>
                    <th class="w-72 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Name</th>
                    <th class="w-72 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Email</th>
                    <th class="w-10 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Role</th>
                    <th class="w-10 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Status</th>
                    <th class="w-32 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Last Seen</th>
                    <th class="w-32 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Start Date</th>

                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-300">
                  @foreach ($users as $user)
                  <tr class="bg-gray-50">
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">{{ $user->id }}</td>
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">{{ $user->fname }} {{ $user->lname }}</td>
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">{{ $user->email }}</td>
                    <td class="p-4 text-sm text-gray-700 capitalize whitespace-nowrap">{{ $user->role }}</td>
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">
                        @if(Cache::has('user-is-online-' . $user->id))
                            <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-700 bg-green-200 rounded-lg bg-opacity-50">Online</span>
                        @else
                            <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-red-700 bg-red-200 rounded-lg bg-opacity-50">Offline</span>
                        @endif

                    </td>
                    <td>
                        {{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                    </td>
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">{{ ($user->created_at)->diffForHumans() }}</td>

                  </tr>
                  @endforeach

                </tbody>
            </table>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:hidden">
            @foreach ($users as $user)
            <div class="bg-white space-y-1 p-4 rounded-lg shadow text-sm mb-3">
                <div class="flex items-center space-x-4 ">
                    <div class="text-gray-500">{{ $user->id }}</div>
                    <div class="text-gray-700">{{ $user->fname }} {{ $user->lname }}</div>
                </div>

                <div class="ml-5">
                    <div class="flex items-center space-x-2 mb-3">
                        @if(Cache::has('user-is-online-' . $user->id))
                        <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-700 bg-green-200 rounded-lg bg-opacity-50">Online</span>
                    @else
                        <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-red-700 bg-red-200 rounded-lg bg-opacity-50">Offline</span>
                    @endif
                    </div>

                    <div class="mb-2"> <span class="text-cyan-900">{{ $user->email }}</span></div>
                    <div class="text-cyan-700 mb-2">{{ $user->role }}</div>
                    <div class="text-gray-700">Started:<span class="text-cyan-900 ml-6">{{ ($user->created_at)->diffForHumans() }}</span></div>
                    <div class="text-gray-700">Last Login: <span class="text-cyan-900 ml-1">{{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}</span></div>
                </div>
            </div>
            @endforeach

        </div> --}}
    </div>
</div>
@endsection
