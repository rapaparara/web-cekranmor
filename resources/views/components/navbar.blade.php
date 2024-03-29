<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container-fluid">
        <a wire:navigate class="navbar-brand" href="{{ route('home') }}">
            <i class="bi bi-phone me-2"></i>{{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <x-nav-link :active="request()->routeIs('home.pengguna')" href="{{ route('home.pengguna') }}"><i
                        class="bi bi-house-fill me-2"></i>Home</x-nav-link>
                @if (Auth::user())
                    <x-nav-link :active="request()->routeIs('chat.pengguna')" href="{{ route('chat.pengguna') }}"><i
                            class="bi bi-chat-dots-fill me-2"></i>Chat dengan Admin</x-nav-link>
                @else
                    <x-nav-link :active="request()->routeIs('register')" href="{{ route('register') }}"><i
                            class="bi bi-chat-dots-fill me-2"></i>Chat dengan Admin</x-nav-link>
                @endif
                <x-nav-link :active="request()->routeIs('cek-rangka')" href="{{ route('cek-rangka') }}"><i class="bi bi-search me-2"></i>Periksa
                    Kendaraan</x-nav-link>
                @if (Auth::user())
                    <livewire:logout />
                @endif
            </ul>
        </div>
    </div>
</nav>
