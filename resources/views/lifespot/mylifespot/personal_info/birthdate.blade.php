<div class="flex space-x-5">
    <div class="w-36">
        <label for="birth_month" class="block text-sm font-black text-black">Birth Month</label>
        <select class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"  name="birth_month" >
              @foreach ($months as $month)

              <option value="{{ $month->id }}"
                {{ $month->id == old('birth_month', $user->personalInformation->birth_month) ? 'selected' : '' }}>{{ $month->mth }}
            </option>

             @endforeach
        </select>
    </div>


    <div class="w-24">
        <label for="birth_day" class="block text-sm font-black text-black">Birth Day</label>
        <select class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md"  name="birth_day" >
            @foreach ($days as $day)
                <option value="{{ $day->id }}"
                    {{ $day->id == old('birth_day', $user->personalInformation->birth_day) ? 'selected' : '' }}>{{ $day->days }}
                </option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="birth_year" class="block text-sm font-black text-black">Birth Year</label>
        <input class=" mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md border px-4 py-2 pr-8" placeholder="yyyy"  name="birth_year" value="{{ old('birth_year', $user->personalInformation->birth_year)  }}">
        @error('birth_year')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror

    </div>
</div>
