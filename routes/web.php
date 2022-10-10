<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/apropos', function () {
    return view('apropos');
})->name('apropos');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::resource('pokemons', PokemonController::class);

Route::post('/pokemons/{id}/upload', [PokemonController::class, 'upload'])->name('pokemons.upload');

Route::middleware(['auth'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';
