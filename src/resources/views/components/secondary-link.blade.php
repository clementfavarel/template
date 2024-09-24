@props(['active'])

@php
    $class =
        'inline-flex items-center px-4 py-2 font-semibold text-black/50 dark:text-white/50 hover:text-black dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150';
@endphp

<a {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</a>
