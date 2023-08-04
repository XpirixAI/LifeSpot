<div class="bg-gray-700 rounded-lg xmin-h-screen w-full flex pb-20 pl-1 xml-12 lg:ml-0">

    <div class="xbg-white bg-transparent xmx-auto my-auto pt-6">
      <div x-data="app()" x-init="[initColor()]">
        <div @click="isOpen = !isOpen" class="flex items-center">
          {{-- <label for="color-picker" class="block font-semibold text-white">Select a background color</label> --}}
          <div  class="cursor-pointer rounded-full xml-3 m-auto h-10 w-10 flex" :class="`bg-${currentColor}`" >
            <svg xmlns="http://www.w3.org/2000/svg" :class="`${iconColor}`" class="h-6 w-6 mx-auto my-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
            </svg>
          </div>
          <label for="color-picker" class="block font-semibold text-white ml-2"><span class="hidden lg:inline">Background</span> Color</label>
          <div class="flex flex-row relative mt-2">
            <!-- <input id="color-picker" name="left_color" class=" invisible border border-gray-400 p-2 rounded-lg" x-model="currentColor" bg-{{ $myxpirix->currentColor }}> -->
            <input id="color-picker" name="left_color" class="hidden border border-gray-400 p-2 rounded-lg" x-model="currentColor" bg-{{ $myxpirix->left_color }}>

           <div class="px-24 lg:px-12">
            <div class="lg:ml-36">
                <div  class="border border-gray-300 origin-top-right absolute right-0 top-full mt-5 xlg:mt-0 rounded-md shadow-lg">
                    <div class="rounded-md bg-white shadow-xs xlg:p-2 ">
                      <div class="flex">
                        <template x-for="color in colors">
                          <div class="">
                            <template x-for="variant in variants">
                              <div @click="selectColor(color,variant)" class="cursor-pointer w-6 h-6 rounded-full mx-0.5 lg:mx-1 my-1" :class="`bg-${color}-${variant}`"></div>
                            </template>
                          </div>
                        </template>
                      </div>
                    </div>
                  </div>
            </div>
           </div>
          </div>
        </div>
      </div>
    </div>
</div>
    <script>
      function app() {
          return {
            colors: ['gray', 'red', 'orange', 'yellow', 'green', 'teal', 'blue', 'sky', 'indigo', 'purple', 'pink'],
            variants: [500, 600],
            // variants: [100, 200, 300, 400, 500, 600, 700, 800, 900],
            currentColor: '',
            iconColor: '',
            isOpen: false,
            initColor () {
              this.currentColor = '{{ $myxpirix->left_color }}'
              this.setIconWhite()
            },
            setIconWhite () {
              this.iconColor = 'text-white'
            },
            setIconBlack () {
              this.iconColor = 'text-black'
            },
            selectColor (color, variant) {
              this.currentColor = color + '-' + variant
              if (variant < 500) {
                this.setIconBlack()
              }
              else {
                this.setIconWhite()
              }
            }
          }
      }
    </script>

