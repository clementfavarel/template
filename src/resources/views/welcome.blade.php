<x-main-layout>
    <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-0 h-[calc(100dvh-80px)]">
        @guest
            <h1>Bienvenue, connectez-vous pour accéder à votre profil.</h1>
        @endguest
        @auth
            <h1>Bienvenue {{ Auth::user()->name }} !</h1>
        @endauth
    </div>
</x-main-layout>
