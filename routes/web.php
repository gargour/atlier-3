<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
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
    return view('welcome');
});

Route::get('/etudiant ',[EtudiantController::Class,"index"])->name("etudiant");
Route::get('/create ',[EtudiantController::Class,"create"])->name("etudiant.create");
Route::get('/create ',[EtudiantController::Class,"store"])->name("etudiant.ajouter");


Route::put('/etudiant/{etudiant}',[EtudiantController::Class,"update"])->name("etudiant.update");
Route::get('/etudiant/{etudiant}',[EtudiantController::Class,"edit"])->name("etudiant.edit");