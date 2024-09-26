@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'p-2 text-lg text-orange-400 transition duration-150 ease-in-out'
            : 'p-2 text-lg text-gray-400 hover:text-black dark:hover:text-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
