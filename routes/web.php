<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TacheController;

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

 Route::get('/tache', [TacheController::class, 'lister_tache']);
 Route::get('/ajouter',[TacheController::class, 'ajouter_tache']);
 Route::post('/ajouter/traitement', [TacheController::class, 'ajouter_tache_traitement']);


