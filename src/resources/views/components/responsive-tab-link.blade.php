@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'flex flex-col items-center gap-1 text-black'
            : 'flex flex-col items-center gap-1 text-black/50 dark:text-white/50 hover:text-black transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
