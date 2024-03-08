<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <style>
        /* Add custom styles if needed */
        .table-container {
            overflow-x: auto;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    @auth
        @if (Auth::user()->role === 'admin')
            <x-navbar-admin />
        @else
            <x-navbar />
        @endif
    @endauth
    @guest
        <x-navbar />
    @endguest
    <main class="p-3 bg-light">
        <div class="container">
            {{ $slot }}
        </div>
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            </ul>
            <p class="text-center text-body-secondary">&copy; 2024 CekRanMor | Polres Sorong</p>
        </footer>
    </main>
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
