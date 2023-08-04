@extends('company_admin.admin_master')
@section('admin')
<div id="users" class="w-full bg-white">
    <div class="mt-12 md:mt-2 pb-24 md:pb-5">
        <div class="bg-gray-800 pt-3">
            <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <h1 class="font-semibold tracking-wide pl-2">Users</h1>
            </div>
        </div>

        <div class="overflow-auto rounded-lg shadow hidden lg:block">
            <table class="w-full shadow-md rounded">
                <thead class="bg-gray-50 border-b-2 border-gray-200">
                  <tr class="bg-white">
                    <th class="w-5 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Id</th>
                    <th class="w-72 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Name</th>
                    <th class="w-72 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Email</th>
                    {{-- <th class="w-10 pr-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Can Edit</th> --}}
                    <th class="w-10 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Role</th>
                    <th class="w-10 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Status</th>
                    <th class="w-32 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Last Seen</th>
                    <th class="w-32 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Start Date</th>
                    {{-- <th class="w-32 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Last Login</th> --}}
                    <th class="w-10 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Edit</th>
                  </tr>
                </thead>

                <tbody class="divide-y divide-gray-300">
                    @php
                        $i = 0
                    @endphp
                  @foreach ($users as $user)

                  <tr class="bg-gray-50">
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">{{ ++$i }}</td>
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">{{ $user->fname }} {{ $user->lname }}</td>
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">{{ $user->email }}</td>
                    {{-- <td class="p-4 text-sm text-gray-700 capitalize whitespace-nowrap">
                       <form method="POST" action="">
                        @csrf
                        @method('PUT')
                        @if ($user->can_edit)
                        <input type="hidden" name="user_id" value="{{ $user->id }}"/>
                        <input type="checkbox" name="can_edit[]" value="1" checked onChange="this.form.submit()">
                        @else
                        <input type="hidden" name="user_id" value="{{ $user->id }}"/>
                        <input type="checkbox" name="can_edit[]" value="0" onChange="this.form.submit()">
                        @endif
                       </form>
                    </td> --}}
                    <td class="p-4 text-sm text-gray-700 capitalize whitespace-nowrap">{{ $user->role }}</td>
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">
                        @if(Cache::has('user-is-online-' . $user->id))
                            <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-700 bg-green-200 rounded-lg bg-opacity-50">Online</span>
                        @else
                            <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-red-700 bg-red-200 rounded-lg bg-opacity-50">Offline</span>
                        @endif
                        {{-- <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-700 bg-green-200 rounded-lg bg-opacity-50">Online</span> --}}
                    </td>
                    <td>
                        {{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                    </td>
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">{{ ($user->created_at)->diffForHumans() }}</td>
                    {{-- <td class="p-4 text-sm text-gray-700 whitespace-nowrap">{{ ($user->created_at)->diffForHumans() }}</td> --}}
                    <td class="p-4 text-sm text-gray-700 capitalize whitespace-nowrap">
                        <a href="{{ route('admin.edit', $user->id) }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                      </svg>
                      </a></td>
                  </tr>
                  @endforeach
                  {{-- <tr class="bg-white">
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">2</td>

                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">Bryon Swanson</td>
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">bswanson@outlook.com</td>
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">Owner</td>
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">
                        <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-700 bg-gray-200 rounded-lg bg-opacity-50">Offline</span>
                    </td>
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">5/28/2021</td>

                  </tr>
                  <tr class="bg-gray-50">
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">3</td>

                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">Bryon Swanson</td>
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">bswanson@outlook.com</td>
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">Owner</td>
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">
                        <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-700 bg-green-200 rounded-lg bg-opacity-50">Online</span>
                    </td>
                    <td class="p-4 text-sm text-gray-700 whitespace-nowrap">5/28/2021</td>

                  </tr> --}}
                </tbody>
            </table>
        </div>


        <!--Mobile View-->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:hidden">
            @foreach ($users as $user)
            <div class="bg-white space-y-1 p-4 rounded-lg shadow text-sm mb-3">
                <div class="flex items-center space-x-4 ">
                    <div class="text-gray-500">{{ $user->id }}</div>
                    <div class="text-gray-700">{{ $user->fname }} {{ $user->lname }}</div>
                    <td class="p-4 text-sm text-gray-700 capitalize whitespace-nowrap"><a href="#!"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                      </svg>
                      </a></td>
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

        </div>
    </div>
</div>
@endsection
