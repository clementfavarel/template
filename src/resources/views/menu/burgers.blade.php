<x-main-layout>
    <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-white pb-6">{{ __('Burgers') }}</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($burgers as $burger)
                <div class="flex flex-col gap-2 p-4 bg-[#171717] shadow-sm rounded-lg">
                    <img src="{{ $burger->img_src }}" alt="{{ $burger->img_alt }}"
                        class="w-full aspect-video rounded-md object-cover">
                    <h2 class="text-xl font-semibold text-white mt-2">{{ __($burger->name) }}</h2>
                    <p class="text-gray-100/50 flex-grow">
                        {{ __(Str::words($burger->description, 15)) }}
                    </p>
                    <a href="/menu/burgers/{{ $burger->id }}"
                        class="mt-4 bg-orange-500 hover:bg-orange-300 px-3 py-2 rounded-lg text-white font-bold w-fit self-end">
                        {{ __('Erfahren Sie mehr') }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-main-layout>
