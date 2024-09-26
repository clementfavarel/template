<x-main-layout>
    <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-0">
        <h1 class="text-4xl font-bold text-white pb-2">{{ __('Menü') }}</h1>

        <p class="pb-6 text-slate-50">
            {{ __('Unsere Speisekarte besteht aus leckeren Produkten, die ausschließlich aus erstklassigen Zutaten zubereitet werden.') }}
        </p>

        <div class="flex flex-col gap-4 justify-center items-center lg:flex-row">
            <div class="flex flex-col gap-2 p-4 bg-[#171717] shadow-sm rounded-lg sm:flex-1">
                <img src="/img/burgers/burning-man.jpg" alt="Burning Man burger" class="rounded-md">
                <h2 class="text-xl font-semibold text-white mt-2">{{ __('Burgers') }}</h2>
                <p class="text-gray-100/50">
                    {{ __('Entdecken Sie unsere luxuriösen Burger, die mit hochwertigen Zutaten und Liebe zubereitet werden. Ein echtes kulinarisches Erlebnis.') }}
                </p>
                <a href="/menu/burgers"
                    class="mt-4 bg-orange-500 hover:bg-orange-300 px-3 py-2 rounded-lg text-white font-bold w-fit self-end">
                    {{ __('Mehr sehen') }} &rarr;
                </a>
            </div>

            <div class="flex flex-col gap-2 p-4 bg-[#171717] shadow-sm rounded-lg sm:flex-1">
                <img src="/img/snacks/fries.jpg" alt="French fries" class="rounded-md">
                <h2 class="text-xl font-semibold text-white mt-2">{{ __('Snacks') }}</h2>
                <p class="text-gray-100/50">
                    {{ __('Entdecken Sie unsere köstlichen Snacks, ideal, wenn Sie nicht hungrig genug sind, um unsere Burger zu probieren. (Sie sollten sie trotzdem ausprobieren)') }}
                </p>
                <a href="/menu/snacks"
                    class="mt-4 bg-orange-500 hover:bg-orange-300 px-3 py-2 rounded-lg text-white font-bold w-fit self-end">
                    {{ __('Mehr sehen') }} &rarr;
                </a>
            </div>

            <div class="flex flex-col gap-2 p-4 bg-[#171717] shadow-sm rounded-lg sm:flex-1">
                <img src="/img/drinks/coca-cola.jpg" alt="Coca Cola can" class="rounded-md">
                <h2 class="text-xl font-semibold text-white mt-2">{{ __('Drinks') }}</h2>
                <p class="text-gray-100/50">
                    {{ __('Entdecken Sie unsere frischen und leckeren Getränke, perfekt als Begleitung zu Ihren Burgern oder gegen die Hitze.') }}
                </p>
                <a href="/menu/drinks"
                    class="mt-4 bg-orange-500 hover:bg-orange-300 px-3 py-2 rounded-lg text-white font-bold w-fit self-end">
                    {{ __('Mehr sehen') }} &rarr;
                </a>
            </div>
        </div>
    </div>
    </div>
</x-main-layout>
