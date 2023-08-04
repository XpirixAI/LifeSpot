@if (session()->has('success'))
    <div x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 4000)"
            x-show="show"
            class="xfixed w-1/3 text-center bg-blue-500 text-white py-1 px-4 rounded-xl xbottom-3 xright-3 text-sm ml-5">
        <p>{{ session('success') }}</p>
    </div>
@endif
