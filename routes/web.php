<?php

use App\Livewire\Coba;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('index');
})->name('index');

Route::get('/bc', function () {
    return view('bc');
})->name('bc');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/draft', function () {
    return view('draft');
})->name('draft');

Route::get('/msg', function () {
    return view('msg');
})->name('msg');

Route::get('/package', function () {
    return view('package');
})->name('package');

Route::get('/notif', function () {
    return view('notif');
})->name('notif');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/logout', function () {
    return view('logout');
})->name('logout');

Route::get('/bclist', function () {
    return view('bclist');
})->name('bclist');

Route::get('/stat', function () {
    return view('stat');
})->name('stat');

Route::get('/buy', function () {
    return view('buy');
})->name('buy');

Route::get('/confirm', function () {
    return view('confirm');
})->name('confirm');