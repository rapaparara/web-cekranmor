@extends('layouts.index')
@section('content')
    <h1
        class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-5xl dark:text-white">
        Selamat datang di Cekranmor Polres Sorong!</h1>
    <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Aplikasi ini adalah
        langkah inovatif Polres Sorong untuk memastikan keamanan komunitas berkendara. Dengan fitur canggih, kami
        menyediakan alat yang memudahkan Anda memverifikasi keaslian rangka motor secara langsung dari perangkat pintar
        Anda.</p>
    <a href="/login"
        class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
        Chat dengan Admin
        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9" />
        </svg>
    </a>
@endsection
