@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'p-2 text-lg text-black dark:text-white transition duration-150 ease-in-out'
            : 'p-2 text-lg text-black/50 dark:text-white/50 hover:text-black dark:hover:text-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
