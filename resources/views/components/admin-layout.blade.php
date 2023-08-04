<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

     <!-- Styles -->
     @livewireStyles
     <style>
         [x-cloak] { display: none; }
     </style>

     <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

    @include('company_admin.body.header')

<main>

    <div class="flex flex-col md:flex-row">
        @include('admin.body.sidebar')


                {{ $slot }}


    </div>
</main>







</body>

</html>
