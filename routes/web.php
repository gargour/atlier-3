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
Route::delete('/delete/{etudiant} ',[EtudiantController::Class,"delete"])->name('etudiant.delete');
