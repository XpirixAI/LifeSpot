<x-app-layout>
  {{-- <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script> --}}


  <style>
    [x-cloak] {
      display: none !important;
    }
  </style>
  <div>
    @include('lifespot.body.header')

    <div class="flex min-h-screen xbg-gray-100">
      <!-- ========== Left Sidebar ========== -->
      <div  class="flex xbg-blue-200">
        @include('lifespot.body.sidebar')
      </div>

      <!-- ========== Right Side Main Content ========== -->
      <div class="xbg-green-200 w-full">
        @yield('content')
      </div>
    </div>

    <!-- ========== LifeSpot Footer ========== -->
    {{-- @include('lifespot.body.footer') --}}
  </div>
  {{-- <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script> --}}

  <!-- ========== Resource:  https://flowbite.com/docs/plugins/datepicker/ ========== -->
  {{-- <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script> --}}

  <!--WHAT IS THIS SCRIPT FOR ?  OS IT REALLY NEEDED????-->
  {{-- <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script> --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</x-app-layout>
