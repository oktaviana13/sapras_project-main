<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');               // resources/views/home.blade.php
Route::view('/', 'dashboard')->name('dashboard');
Route::view('/', 'sma_negeri')->name('sma_negeri');
Route::view('/', 'sma_swasta')->name('sma_swasta');
Route::view('/', 'tambah_sman')->name('tambah_sman');
Route::view('/', 'tambah_smas')->name('tambah_smas');
Route::view('/', 'edit_sman')->name('edit_sman');
Route::view('/', 'edit_smas')->name('edit_smas');
Route::view('/', 'detail_sman')->name('detail_sman');
Route::view('/', 'detail_smas')->name('detail_smas');

