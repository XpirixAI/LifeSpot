<x-admin-layout>

    <div class="w-full bg-white">
        <div class="mt-12 md:mt-2 pb-24 md:pb-5">
            <div class="bg-gray-800 pt-3">
                <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h1 class="font-semibold tracking-wide pl-2">Change Password</h1>
                </div>
            </div>
            <div class="mt-24 mx-12">
            <form action="{{ route('update-password') }}" method="POST">
                @csrf
                <div class="card-body">
                    @if (session('status'))
                        <div class="bg-green-200 text-green-500" role="alert">
                            {{ session('status') }}
                        </div>
                    @elseif (session('error'))
                        <div class="text-red-500" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="mb-4">
                        {{-- <label for="oldPasswordInput" class="form-label">Old Password</label> --}}
                        <x-jet-label>Old Password</x-jet-label>
                        <input name="old_password" type="password" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                            placeholder="Old Password">
                        @error('old_password')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <x-jet-label>New Password</x-jet-label>
                        {{-- <label for="newPasswordInput" class="form-label">New Password</label> --}}
                        <input name="new_password" type="password" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm @error('new_password') is-invalid @enderror" id="newPasswordInput"
                            placeholder="New Password">
                        @error('new_password')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <x-jet-label>Confirm Password</x-jet-label>
                        {{-- <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label> --}}
                        <input name="new_password_confirmation" type="password" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" id="confirmNewPasswordInput"
                            placeholder="Confirm New Password">
                    </div>

                </div>

                <div class="mt-8">
                    <button type="submit" class="bg-blue-500 text-white px-12 py-2 font-bold rounded">Update</button>
            </div>

            </form>
            </div>

        </div>
    </div>














        {{-- <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Chnage Password') }}</div>

                        <form action="{{ route('update-password') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @elseif (session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif

                                <div class="mb-3">
                                    <label for="oldPasswordInput" class="form-label">Old Password</label>
                                    <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                        placeholder="Old Password">
                                    @error('old_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="newPasswordInput" class="form-label">New Password</label>
                                    <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                        placeholder="New Password">
                                    @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                                    <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                        placeholder="Confirm New Password">
                                </div>

                            </div>

                            <div class="card-footer">
                                <button class="btn btn-success">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div> --}}



</x-admin-layout>
