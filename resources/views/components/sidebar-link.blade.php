@props(['active'])

@php

$classes = $active ?? false ? 'block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 text-gray-100 bg-gray-700 bg-opacity-25' : 'block py-1 md:py-3 pl-0 md:pl-1 align-middle xtext-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500 text-gray-500 hover:bg-gray-700 hover:-bg-opacity-25 hover:text-gray-100';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
