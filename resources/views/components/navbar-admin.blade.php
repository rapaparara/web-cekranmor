<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a wire:navigate class="navbar-brand" href="{{ route('home.admin') }}">
            <i class="bi bi-phone me-2"></i> {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <x-nav-link :active="request()->routeIs('home.admin')" href="{{ route('home.admin') }}"><i
                        class="bi bi-house-fill me-2"></i>Home</x-nav-link>
                <x-nav-link :active="request()->routeIs('home.admin')" href="{{ route('home.admin') }}"><i
                        class="bi bi-chat-dots-fill me-2"></i>Chat</x-nav-link>
                <x-nav-link :active="request()->routeIs('laporan.admin')" href="{{ route('laporan.admin') }}"><i
                        class="bi bi-archive-fill me-2"></i>Laporan</x-nav-link>
                @if (Auth::user())
                    <x-nav-link :active="request()->routeIs('login')" href="{{ route('login') }}"><i
                            class="bi bi-arrow-left-square-fill me-2"></i>Logout</x-nav-link>
                @endif
            </ul>
        </div>
    </div>
</nav>
