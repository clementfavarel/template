<x-main-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-0 sm:w-2/3 py-12">
        <h1 class="text-4xl font-bold text-white pb-2">{{ __('Catering') }}</h1>

        <p class="text-slate-50">
            {{ __('Möchten Sie uns mit nach Hause oder zu einer Veranstaltung nehmen? Das Bistro Foodtruck bietet seinen Catering-Service an und garantiert, dass Sie keinen Hunger verspüren.') }}
        </p>
        <div class="mt-8">
            <div class="flex flex-col gap-2 p-4 bg-[#171717] shadow-sm rounded-lg mt-2">
                <img src="/img/catering.jpg" alt="Le Bistro Foodtruck photo" class="rounded-md aspect-video object-cover">
                <h2 class="text-xl font-semibold text-white mt-2">
                    {{ __('Unser Foodtruck kommt zu Ihnen nach Hause') }}</h2>
                <p>
                    {{ __('Nachfolgend finden Sie ein Formular für Ihre Catering-Anfrage. Wir werden Ihnen so schnell wie möglich antworten!') }}
                </p>
                <a href="#form"
                    class="mt-4 bg-orange-500 hover:bg-orange-300 px-3 py-2 rounded-lg text-white font-bold w-fit mx-auto">
                    {{ __('Bilden') }} &rarr;
                </a>
            </div>
        </div>
        <div class="mt-8" id="form">
            <form method="POST" action="{{ route('catering') }}"
                class="flex flex-col gap-2 p-4 bg-[#171717] shadow-sm rounded-lg mt-2">
                @csrf

                <h2 class="text-xl font-semibold text-white py-2">Catering-Anfrage</h2>

                <!-- Firstname -->
                <div>
                    <x-input-label for="firstname" :value="__('Firstname')" />
                    <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname"
                        :value="old('firstname')" required autocomplete="firstname" />
                    <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                </div>

                <!-- Lastname -->
                <div>
                    <x-input-label for="lastname" :value="__('Lastname')" />
                    <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname"
                        :value="old('lastname')" required autocomplete="lastname" />
                    <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autocomplete="email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Phone -->
                <div>
                    <x-input-label for="phone" :value="__('Phone')" />
                    <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                        :value="old('phone')" required autocomplete="phone" />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>

                <!-- Event type -->
                <div>
                    <x-input-label for="type" :value="__('Event type')" />
                    <x-text-input id="type" class="block mt-1 w-full" type="text" name="type"
                        :value="old('type')" required autocomplete="type" />
                    <x-input-error :messages="$errors->get('type')" class="mt-2" />
                </div>

                <!-- Start date -->
                <div>
                    <x-input-label for="date" :value="__('Start date')" />
                    <x-text-input id="date" class="block mt-1 w-full" type="date" name="date"
                        :value="old('date')" required autocomplete="date" />
                    <x-input-error :messages="$errors->get('date')" class="mt-2" />
                </div>

                <!-- End date -->
                <div>
                    <x-input-label for="end_date" :value="__('End date')" />
                    <x-text-input id="end_date" class="block mt-1 w-full" type="date" name="end_date"
                        :value="old('end_date')" required autocomplete="end_date" />
                    <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                </div>

                <!-- UNGEFÄHRE DAUER -->
                <div>
                    <x-input-label for="time" :value="__('Ungefähre Dauer')" />
                    <p class="text-gray-400 text-sm my-1">
                        Beginn der Feier: [Beginn-Uhrzeit]<br />
                        Ende der Feier: [Ende-Uhrzeit]<br />
                        Dauer der Feier: [Anzhal Stunden]<br />
                        Service-Dauer: [Anzhal Stunden</p>
                    <textarea id="time" class="block mt-1 w-full rounded-md" name="time" required autocomplete="time"></textarea>
                    <x-input-error :messages="$errors->get('time')" class="mt-2" />
                </div>

                <!-- Pax -->
                <div>
                    <x-input-label for="pax" :value="__('Pax')" />
                    <x-text-input id="pax" class="block mt-1 w-full" type="text" name="pax"
                        :value="old('pax')" required autocomplete="pax" />
                    <x-input-error :messages="$errors->get('pax')" class="mt-2" />
                </div>

                <!-- Additional services -->
                <div>
                    <x-input-label for="services" :value="__('Zusätzliche Dienstleistungen')" />
                    <x-text-input id="services" class="block mt-1 w-full" type="text" name="services"
                        :value="old('services')" required autocomplete="services" />
                    <x-input-error :messages="$errors->get('services')" class="mt-2" />
                </div>

                <!-- Drinks -->
                <div>
                    <x-input-label for="drinks" :value="__('Drinks')" />
                    <x-text-input id="drinks" class="block mt-1 w-full" type="text" name="drinks"
                        :value="old('drinks')" required autocomplete="drinks" />
                    <x-input-error :messages="$errors->get('drinks')" class="mt-2" />
                </div>

                <!-- Food -->
                <div>
                    <x-input-label for="food" :value="__('Food')" />
                    <x-text-input id="food" class="block mt-1 w-full" type="text" name="food"
                        :value="old('food')" required autocomplete="food" />
                    <x-input-error :messages="$errors->get('food')" class="mt-2" />
                </div>

                <!-- Infrastructure -->
                <div>
                    <x-input-label for="infrastructure" :value="__('Infrastruktur')" />
                    <x-text-input id="infrastructure" class="block mt-1 w-full" type="text" name="infrastructure"
                        :value="old('infrastructure')" required autocomplete="infrastructure" />
                    <x-input-error :messages="$errors->get('infrastructure')" class="mt-2" />
                </div>

                <!-- Budget -->
                <div>
                    <x-input-label for="budget" :value="__('Budget')" />
                    <x-text-input id="budget" class="block mt-1 w-full" type="text" name="budget"
                        :value="old('budget')" required autocomplete="budget" />
                    <x-input-error :messages="$errors->get('budget')" class="mt-2" />
                </div>

                <!-- Message -->
                <div>
                    <x-input-label for="message" :value="__('Message')" />
                    <textarea id="message" class="block mt-1 w-full rounded-md" name="message" required autocomplete="message"></textarea>
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                </div>

                <x-primary-button class="w-fit mx-auto my-3">
                    {{ __('Anfrage senden') }}
                </x-primary-button>
            </form>
        </div>
    </div>
</x-main-layout>
