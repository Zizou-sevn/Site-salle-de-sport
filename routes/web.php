<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('Acceuil');
});

Route::get('/cours', function () {
    return view('cours');
});

Route::get('/tarifs', function () {
    return view('tarifs');
});

Route::get('/tarifs', function () {
    return view('tarifs');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/mentions-legales', function () {
    return view('mentions-legales');
});