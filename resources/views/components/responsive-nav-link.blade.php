@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-sky-500 text-base font-medium text-slate-100 focus:outline-none focus:text-slate-200 focus:bg-sky-600 focus:border-sky-700 transition duration-200 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-slate-100 hover:text-slate-200 hover:bg-gradient-to-r hover:from-sky-500 hover:to-cyan-400 hover:border-sky-700 focus:outline-none focus:text-gray-800 focus:from-sky-600 focus:to-cyan-500 focus:border-sky-700 transition duration-200 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
