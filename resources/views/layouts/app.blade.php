<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

        <!--NEED this SCRIPt for the 'Read More' on the Blog live feed on Getting Started Lifespot Tab-->
        <!-- https://tailwind-elements.com/quick-start/-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('styles')
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="xmin-h-screen bg-white">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
<!--NEED this SCRIPt for the 'Read More' on the Blog live feed on Getting Started Lifespot Tab-->
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        @stack('js')
        @stack('modals')

        @livewireScripts
    </body>
</html>
