<x-admin-layout>
    <div class="w-full bg-white">
        <div class="mt-12 md:mt-2 pb-24 md:pb-5">
            <div class="bg-gray-800 pt-3">
                <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h1 class="font-semibold tracking-wide pl-2">Edit {{ Str::limit($user->name, 50, '...') }}'s Role</h1>
                </div>
            </div>
            <div class="overflow-auto rounded-lg shadow xhidden lg:block">
                <table class="w-full shadow-md rounded">
                    <thead class="bg-gray-50 border-b-2 border-gray-200">
                      <tr class="bg-white">
                        <th class="w-72 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Name</th>
                        <th class="w-10 p-4 text-left text-sm font-semibold tracking-wide whitespace-nowrap">Role</th>
                      </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-300">
                      <tr class="bg-gray-50">
                        <td class="p-4 text-sm text-gray-700 whitespace-nowrap">{{ Str::limit($user->name, 50, '...') }}</td>

                        <td class="p-4 text-sm text-gray-700 capitalize whitespace-nowrap">{{ $user->role }}</td>
                        </tr>

                    </tbody>
                </table>
                <div class="flex flex-col mx-10  w-3/4 my-5 p-5 bg-indigo-100">
                    <form method="POST" action="{{ route('users.update', $user->id) }}" class="text-center">
                        @csrf
                        @method('PUT')

                        <select  name="role" class="rounded-md">
                            @if ('Owner' ==$user->role)
                                <option value="Owner" @if ('Owner' ==$user->role) selected

                                    @endif>Owner</option>
                           @else

                            <option value="Member" @if ('Member' ==$user->role) selected

                            @endif>Member</option>
                            <option value="Editor" @if ('Editor' ==$user->role) selected

                            @endif>Editor</option>
                            <option value="Sponsor" @if ('Sponsor' ==$user->role) selected

                            @endif>Sponsor</option>

                            @endif
                        </select>
                        {{-- <input type="text" name="fname" value="{{ $user->fname }}"> --}}

                        <button type="submit"
                        @if ('Owner' ==$user->role) @disabled(true) @endif
                            class="px-3 py-2 mt-10 bg-indigo-400 hover:bg-indigo-600 rounded-md
                                font-medium text-white uppercase
                                focus:outline-none hover:shadow-none">
                            Change Role
                        </button>
                    </form>
                </div>
            </div>

<p class="m-5 text-blue-500"><a href="{{ route('users.index') }}">Back to all users</a></p>




        </div>
    </div>




</x-admin-layout>

