<?php

use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsNotLogin;
use App\Http\Middleware\IsPengguna;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->middleware(IsNotLogin::class)->group(function () {
          Route::get('/', \App\Livewire\Home::class)->name('home');
          Route::get('/login', \App\Livewire\Login::class)->name('login');
          Route::get('/register', \App\Livewire\Register::class)->name('register');
});
Route::prefix('admin')->middleware(IsAdmin::class)->group(function () {
          Route::get('/', \App\Livewire\Admin::class)->name('home.admin');
          Route::get('/laporan', \App\Livewire\Laporan::class)->name('laporan.admin');
          Route::get('/logout', \App\Livewire\Login::class)->name('logout');
          Route::get('/chat', \App\Livewire\Chat::class)->name('chat.admin');
});
Route::prefix('pengguna')->middleware(IsPengguna::class)->group(function () {
          Route::get('/', \App\Livewire\Pengguna::class)->name('home.pengguna');
          Route::get('/chat', \App\Livewire\Chat::class)->name('chat.pengguna');
          Route::get('/logout', \App\Livewire\Login::class)->name('logout');
});

Route::get('/cek-rangka', \App\Livewire\CekRangka::class)->name('cek-rangka');
