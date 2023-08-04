<!-- component -->
<!-- Calendar Icon -->
<div x-data="{ open: false }">


    <div x-show.important="open">
        <div class="min-w-32 h-44 bg-white rounded-lg min-h-48 p-3 mb-4 font-medium">
            <div class="xw-32 flex-none rounded-t lg:rounded-t-none lg:rounded-l text-center shadow-lg ">
              <div class="block rounded-t overflow-hidden  text-center ">
                <div class="bg-blue-500 text-white py-1">
                  {{ date('F') }}
                </div>
                <div class="pt-1 border-l border-r border-white bg-white">
                  <span class="text-5xl font-bold leading-tight">
                    {{ date('d')  }}
                  </span>
                </div>
                <div class="border-l border-r border-b rounded-b-lg text-center border-white bg-white -pt-2 -mb-1">
                  <span class="text-sm">
                    {{ date('l') }}
                  </span>
                </div>
                <div class="pb-2 border-l border-r border-b rounded-b-lg text-center border-white bg-white">
                  <span class="text-xs leading-normal">
                    8:00 am to 5:00 pm
                  </span>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div x-show.important="!open">
        <div class="min-w-32 h-44 bg-white rounded-lg min-h-48 p-3 mb-4 font-medium">
            <div class="xw-32 flex-none rounded-t lg:rounded-t-none lg:rounded-l text-center shadow-lg ">
              <div class="block rounded-t overflow-hidden  text-center ">
                <div id="monthly">
                    <img src="{{ asset('img/calendar_b.png') }}" alt="">
                    {{-- @include('lifespot.messages.calendar-monthly') --}}
                </div>
              </div>
            </div>
        </div>
    </div>
    <div x-show.important="!open">

    </div>
    <div class="text-center">
        <button x-on:click="open = ! open" class="text-center text-blue-600">Toggle View</button>
    </div>
</div>

{{-- <div x-data="{ open: false }">
    <button x-on:click="open = ! open">Monthly View</button>

    <div x-show.important="open">
        <div id="monthly"><img src="{{ asset('img/calendar_b.png') }}" alt=""></div>
    </div>
</div> --}}



