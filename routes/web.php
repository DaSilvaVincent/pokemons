<?php

use App\Http\Controllers\JeuController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\VersionController;
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

Route::get('/dashboard', function () {
    return view('dashboard', ['titre'=>'Admin']);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('/pokemons', PokemonController::class)->except('index');
    Route::get('/pokemons', [PokemonController::class, 'index'])->name('pokemons.index');
    Route::post('/pokemons/{id}/upload', [PokemonController::class, 'upload'])->name('pokemons.upload');
    Route::get('/jeux', [JeuController::class, 'index'])->name('jeux.index');
    Route::get('/jeux/{id}', [JeuController::class, 'show'])->name('jeux.show');
    Route::get('/version/{id}', [VersionController::class, 'show'])->name('version.show');
    Route::post('/version/{id}', [VersionController::class, 'showDate'])->name('version.showDate');


});


require __DIR__.'/auth.php';
