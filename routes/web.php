<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('/login', \App\Livewire\Login::class)->name('login');
Route::get('/register', \App\Livewire\Register::class)->name('register');
Route::get('/cek-rangka', \App\Livewire\CekRangka::class)->name('cek-rangka');
