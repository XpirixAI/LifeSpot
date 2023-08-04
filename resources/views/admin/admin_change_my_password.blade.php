<x-admin-layout>

    <div class="w-full bg-white">
        <div class="mt-12 md:mt-2 pb-24 md:pb-5">
            <div class="bg-gray-800 pt-3">
                <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h1 class="font-semibold tracking-wide pl-2">Change Password</h1>
                </div>
            </div>

            <div class="card-body">
                @if(session()->has('error'))
                    <span class="alert alert-danger">
                        <strong>{{ session()->get('error') }}</strong>
                    </span>
                @endif
                @if (count($errors))
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{$error}}</p>
                    @endforeach
                @endif
                <form action="{{ route('updateMyPassword') }}" method="POST">
                    @csrf
                    {{-- @method('PATCH') --}}
                    <div class="form-group">
                        <label>Enter Old Password :</label>
                        <input type="password" id="first-name" class="form-control"  placeholder="Enter old password" name="oldpassword">
                    </div>
                    <div class="form-group">
                        <label>Enter New Password :</label>
                        <input type="password" id="first-name" placeholder="Enter new password" class="form-control" name="newpassword">
                    </div>
                    <div class="form-group">
                        <label>Enter Confirm Password :</label>
                        <input type="password" id="first-name"  class="form-control"placeholder="Enter password confirmation"  name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>

        </div>
    </div>
</x-admin-layout>

