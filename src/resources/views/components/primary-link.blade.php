@props(['active'])

@php
    $class =
        'inline-flex items-center px-4 py-2 bg-black dark:bg-white rounded-md font-semibold text-white dark:text-black hover:bg-black/80 dark:hover:bg-white/90 focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150';
@endphp

<a {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</a>
