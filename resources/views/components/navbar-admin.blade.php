<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a wire:navigate class="navbar-brand" href="{{ route('home.admin') }}">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <x-nav-link :active="request()->routeIs('home.admin')" href="{{ route('home.admin') }}">Home</x-nav-link>
                <x-nav-link :active="request()->routeIs('home.admin')" href="{{ route('home.admin') }}">Chat dengan Admin</x-nav-link>
                <x-nav-link :active="request()->routeIs('login')" href="{{ route('login') }}">Login</x-nav-link>
            </ul>
        </div>
    </div>
</nav>
