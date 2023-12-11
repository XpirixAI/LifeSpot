
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <!-- Styles -->
        @livewireStyles
        <style>
            [x-cloak] { display: none; }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-white xg-[#faf6f5]">
        <div class="min-h-screen bg-white">
            <main>
                 <div class="w-screen h-screen flex justify-center items-center">
                    <div>
                        <h2 class="text-center text-[#056591] font-black text-3xl mb-10">
                            Coming Soon
                        </h2>
                        <div class="w-full flex justify-center mb-10">
                            <video width="700" height="240" class="border-2 rounded-xl mb-10" controls autoplay muted>
                                <source src="{{ asset("storage/files/LifeSpot-Coming-2020-no-date.mp4")}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="w-full flex flex-col md:flex-row justify-center items-center">
                            <input 
                                id="keep-updated-email" 
                                class="w-96 rounded-xl md:mr-4 " 
                                type="email"
                                placeholder="myemail@gmail.com"
                            />
                            <button
                                type="button"
                                id="submit-keep-updated-email"
                                class="text-white font-bold rounded-xl mt-4 md:mt-0 py-2 px-3 bg-[#056591]"
                            >
                                Keep Me Updated
                            </button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        
        @stack('modals')
        @livewireScripts
    </body>
</html>