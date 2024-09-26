<footer class="bg-white dark:bg-black/80 text-dark dark:text-white/80 pt-8 sm:pb-8 mb-20 sm:mb-0 shadow-t-lg">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-wrap justify-between items-start">
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <x-application-logo class="block h-24 w-auto fill-current text-black/80 dark:text-white/80 mb-4" />
                <p class="mb-2">&copy; 2024 - {{ config('app.name', 'Le Bistro Foodtruck') }}</p>
                <p>Website created by Clément FAVAREL</p>
            </div>

            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h3 class="mb-3">Contact us</h3>
                <a href="mailto:info@lebistrofoodtruck.co.at"
                    class="block mb-2 underline">info@lebistrofoodtruck.co.at</a>
                <p class="mb-4">+43 676 4204157</p>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/lebistrofoodtruck"
                        class="text-dark hover:text-black dark:hover:text-white" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-facebook h-6 w-6">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/lebistrofoodtruck"
                        class="text-dark hover:text-black dark:hover:text-white" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-instagram h-6 w-6">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h3 class="mb-3">Information</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('impressum') }}" class="hover:underline">Impressum</a></li>
                    <li><a href="{{ route('agb') }}" class="hover:underline">AGB</a></li>
                    <li><a href="{{ route('datenschutz') }}" class="hover:underline">Datenschutz</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
