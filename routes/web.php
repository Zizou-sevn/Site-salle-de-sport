<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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


Route::get('/', [MainController::class, 'AccueilController'])->name('main.accueil');

Route::get('/Cours', [MainController::class, 'CoursController'])->name('main.Cours');

Route::get('/Tarifs', [MainController::class, 'TarifsController'])->name('main.Tarifs');

Route::get('/Contacts', [MainController::class, 'ContactController'])->name('main.Contact');

Route::get('/mentions-legales', [MainController::class, 'MentionsLegalescontroller'])->name('main.mentions-legales');
