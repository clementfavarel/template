<x-main-layout>
    @guest
        <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-0">
            <div class="flex flex-col gap-8 justify-center items-center">
                <img src="img/header.jpg" alt="Miko Dani burger foodtruck" class="rounded-lg sm:w-2/3">
                <div class="flex flex-col gap-4 justify-center text-center">
                    <h2 class="text-2xl sm:text-4xl">Welcome to Le Bistro Foodtruck</h2>
                    <p class="text-lg">Come discover the best premium quality burgers of Linz in our foodtruck.</p>
                    <x-primary-link :href="route('menu.index')" class="mx-auto mt-4">
                        {{ __('See Menü') }}
                    </x-primary-link>
                </div>
            </div>
        </div>
    @endguest

    @auth
        <div class="mx-4 mt-8">
            <div class="bg-white dark:bg-[#171717] overflow-hidden shadow-sm rounded-lg sm:w-2/3 mx-auto">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex flex-col gap-2">
                    <h1 class="font-bold text-2xl">{{ __('Hello ') }} {{ Auth::user()->name }},</h1>
                    {{-- <p>You have <span class="text-orange-400">{{ $points }} points</span></p> --}}
                    <p>You have <span class="text-orange-400">X points</span></p>
                    <a href="/fidelity"
                        class="inline-block mt-4 bg-orange-500 hover:bg-orange-300 px-3 py-2 rounded-lg text-white font-bold w-fit mx-auto">
                        {{ __('See my QR code') }}
                    </a>
                </div>
            </div>
        </div>
    @endauth

    <div class="mt-8 px-4 sm:w-2/3 mx-auto">
        <h2 class="text-white font-semibold text-xl px-4">Le Bistro Foodtruck's menü</h2>
        <div class="flex flex-col gap-2 p-4 bg-[#171717] shadow-sm rounded-lg mt-2">
            <img src="/img/menu-burger-and-fries-compilation.jpg" alt="Menu burgers and fries compilation"
                class="rounded-md aspect-video object-cover">
            <p class="sm:text-center sm:mt-4">
                {{ __('Discover our delicious and premium-ingredients based products !') }}
            </p>
            <x-primary-link :href="route('menu.index')" class="mx-auto mt-4">
                {{ __('See Menü') }}
            </x-primary-link>
        </div>
    </div>

    <div class="mt-8 px-4 sm:w-2/3 mx-auto">
        <h2 class="text-white font-semibold text-xl px-4">Le Bistro Foodtruck's location</h2>
        <div class="flex items-center justify-center p-4 bg-[#171717] shadow-sm rounded-lg mt-2">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2653.516251688664!2d14.296495976868432!3d48.312154538990576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47739751fd4dd095%3A0xc8dc0daf738fa9f6!2sLe%20Bistro%20Foodtruck!5e0!3m2!1sfr!2sfr!4v1725951577122!5m2!1sfr!2sfr"
                style="border:0;" allowfullscreen="" loading="lazy" class="aspect-video w-full rounded-md"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="mt-8 px-4 sm:w-2/3 mx-auto">
        <h2 class="text-white font-semibold text-xl px-4">Le Bistro Foodtruck's news</h2>
        <div class="flex flex-col gap-2 p-4 bg-[#171717] shadow-sm rounded-lg mt-2">
            <img src="/img/anita-guest.png" alt="Anita guest at Le Bistro Foodtruck"
                class="rounded-md aspect-video object-cover">
            <h2 class="text-xl font-semibold text-white mt-2">
                {{ __('Le Bistro Foodtruck: Ein Besuch von Private Taste by Anita') }}</h2>
            <p>
                {{ __("Im Februar besuchte uns die Food-Bloggerin 'Private Taste by Anita' am Le Bistro Foodtruck. Ihre Worte über unsere frischen, handgemachten Burger und die familiäre Atmosphäre haben uns zutiefst berührt. Lesen Sie ihren Bericht und erfahren Sie mehr über ihre Erfahrungen bei uns!") }}
            </p>
            <a href="/news/1"
                class="mt-4 bg-orange-500 hover:bg-orange-300 px-3 py-2 rounded-lg text-black font-bold w-fit sm:mx-auto">
                {{ __('Mehr sehen') }} &rarr;
            </a>
        </div>
    </div>

    <div class="my-8 px-4 sm:w-2/3 mx-auto">
        <div class="flex flex-col gap-2 p-4 bg-[#171717] shadow-sm rounded-lg mt-2">
            <h2 class="text-xl font-semibold text-white mt-2">
                {{ __('Need help? Contact us !') }}</h2>
            <p>
                {{ __('Stellen Sie Ihre Frage und wir werden Ihnen per E-Mail antworten.') }}
            </p>
            <a href="/news/1"
                class="mt-4 bg-orange-500 hover:bg-orange-300 px-3 py-2 rounded-lg text-white font-bold w-fit sm:mx-auto">
                {{ __('Kontaktieren Sie uns') }} &rarr;
            </a>
        </div>
    </div>
</x-main-layout>
