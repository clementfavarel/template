@props(['active'])

@php
    $class =
        'inline-flex w-fit items-center px-4 py-2 bg-black dark:bg-orange-400 rounded-md font-semibold text-black dark:text-black hover:bg-orange-500 dark:hover:bg-orange-500 focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150';
@endphp

<a {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</a>
