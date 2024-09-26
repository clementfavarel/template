<x-main-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-0 sm:w-2/3 py-12">
        <div class="flex justify-between items-center pb-6">
            <h1 class="text-4xl font-bold text-white">{{ __($burger->name) }}</h1>
            <div class="bg-orange-500 hover:bg-orange-300 px-3 py-2 rounded-lg text-white font-bold w-fit">
                {{ __($burger->price) }}€
            </div>
        </div>

        <div class="flex flex-col gap-4">
            <img src="{{ $burger->img_src }}" alt="{{ $burger->img_alt }}" class="rounded-md">
            <div class="flex flex-col gap-2">
                <h2 class="text-xl font-semibold text-white mt-2">{{ __('Beschreibung') }}</h2>
                <p class="text-gray-100/50">
                    {{ __($burger->description) }}
                </p>
            </div>

            <div class="flex flex-col gap-2">
                <h2 class="text-xl font-semibold text-white mt-2">{{ __('Zutaten') }}</h2>
                <p class="text-gray-100/50">
                    {{ __($burger->ingredients) }}
                </p>
            </div>

            <div class="flex flex-col gap-2">
                <h2 class="text-xl font-semibold text-white mt-2">{{ __('Allergene') }}</h2>
                <p class="text-gray-100/50">
                    {{ __($burger->allergens) }}
                </p>
            </div>
        </div>
    </div>
</x-main-layout>
