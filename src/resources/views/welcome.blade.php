<x-main-layout>
    <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-0 h-[calc(100dvh-80px)]">
        <h1>Accueil</h1>
        @auth
            <div>{{ Auth::user()->name }}</div>
        @endauth
    </div>
</x-main-layout>
