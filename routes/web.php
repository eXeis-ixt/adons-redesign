<?php

use App\Livewire\BlogPage;
use App\Livewire\FeaturePage;
use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;



Route::get('/', HomePage::class)->name('home');

Route::get('/feature', FeaturePage::class)->name('feature');
Route::get('/blog', BlogPage::class)->name('blog');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
