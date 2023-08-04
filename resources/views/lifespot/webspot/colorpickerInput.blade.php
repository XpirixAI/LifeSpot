<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="bg-white mx-auto my-auto p-6">
  <div x-data="app()" x-init="[initColor()]">
    <div>
      <label for="color-picker" class="block mb-1 font-semibold">Select a color</label>
      <div class="flex flex-row relative">
        <input type="hidden" id="color-picker" name="left_color" class="border border-gray-400 p-2 rounded-lg" x-model="currentColor" value="{{ 'sky-500' }}">
        <div @click="isOpen = !isOpen" class="cursor-pointer rounded-full ml-3 my-auto h-10 w-10 flex" :class="`bg-${currentColor}`" >
          <svg xmlns="http://www.w3.org/2000/svg" :class="`${iconColor}`" class="h-6 w-6 mx-auto my-auto" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
          </svg>
        </div>
        <div x-show="isOpen" @click.away="isOpen = false" x-transition:enter="transition ease-out duration-100 transform"
          x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
          x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100"
          x-transition:leave-end="opacity-0 scale-95" class="border border-gray-300 origin-top-right absolute right-0 top-full mt-2 rounded-md shadow-lg">
          <div class="rounded-md bg-white shadow-xs p-2">
            <div class="flex">
              <template x-for="color in colors">
                <div class="">
                  <template x-for="variant in variants">
                    <div @click="selectColor(color,variant)" class="cursor-pointer w-6 h-6 rounded-full mx-1 my-1" :class="`bg-${color}-${variant}`"></div>
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

<script>
  function app() {
      return {
        colors: ['gray', 'red', 'yellow', 'green', 'blue', 'sky', 'indigo', 'purple', 'pink'],
        // variants: [100, 200, 300, 400, 500, 600, 700, 800, 900],
        variants: [500, 600],
        currentColor: '',
        iconColor: '',
        isOpen: false,
        initColor () {
          this.currentColor = 'red-800'
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
