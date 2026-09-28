<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/katalog', function () {
    return view('katalog');
})->name('katalog');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/berhasil', function () {
    return view('berhasil');
})->name('berhasil');