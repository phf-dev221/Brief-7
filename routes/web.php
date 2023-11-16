<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EvaluationController;
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



Route::get('/etudiant/liststudent/', [EtudiantController::class, 'index']);

Route::get('/etudiant/detailStudent/{id}', [EtudiantController::class, 'show']);