@props(['active'])

@php
    $class =
        'inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-black rounded-md font-semibold text-white dark:text-gray-800 hover:bg-white hover:text-black dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150';
@endphp

<a {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</a>
