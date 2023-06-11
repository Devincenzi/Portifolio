@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-4 border-sky-500 font-medium leading-5 text-gray-200 focus:outline-none focus:border-cyan-400 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-4 border-transparent font-medium leading-5 text-gray-300 hover:text-gray-200 hover:border-sky-400 focus:outline-none focus:text-gray-200 focus:border-sky-500 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
