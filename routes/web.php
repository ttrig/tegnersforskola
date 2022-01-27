<?php

use Illuminate\Support\Facades\Route;

Route::view('', 'pages.home')->name('home');
Route::view('foraldrar', 'pages.parents')->name('parents');
Route::view('oppettider', 'pages.opening-hours')->name('opening-hours');
Route::view('intresse', 'pages.queue')->name('queue');
Route::view('personal', 'pages.staff')->name('staff');
Route::view('verksamhet', 'pages.business')->name('business');
