<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\CountryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route pour afficher la liste des pays
Route::get('/', [CountryController::class, 'index'])->name('countries.index');

// Route pour afficher la liste des pays (alternative)
Route::get('countries', [CountryController::class, 'index'])->name('countries.index');

// Route pour afficher la liste des villes d'un pays spécifique
Route::get('/cities/{country}', [CityController::class, 'index'])->name('cities.index');


// Route pour afficher la liste des personnes dans une ville spécifique
Route::get('/cities/people/{city}', [PeopleController::class, 'index'])->name('people.index');


