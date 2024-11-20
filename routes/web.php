<?php

use App\Livewire\AddPost;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/add-post',AddPost::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
