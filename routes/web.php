<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
          Route::get('/', \App\Livewire\Home::class)->name('home');
          Route::get('/login', \App\Livewire\Login::class)->name('login');
          Route::get('/register', \App\Livewire\Register::class)->name('register');
          Route::get('/cek-rangka', \App\Livewire\CekRangka::class)->name('cek-rangka');
});
Route::prefix('admin')->middleware(IsAdmin::class)->group(function () {
          Route::get('/', \App\Livewire\Admin::class)->name('home.admin');
          Route::get('/logout', \App\Livewire\Login::class)->name('logout');
});
Route::middleware(['auth'])->group(function () {
          Route::get('/pengguna', \App\Livewire\Pengguna::class)->name('home.pengguna');
});
