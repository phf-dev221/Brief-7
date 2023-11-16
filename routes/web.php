<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EvaluationController;

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
    return view('etudiants.addForm');
});
Route::post('/etudiant/ajouterEtudiant', [EtudiantController::class, 'store']);
Route::get('/etudiant/liststudent', function () {
    return view('etudiants.listStudent');
});
Route::get('/etudiant/updateStudent', function () {
    return view('etudiants.updateStudent');
});
Route::get('/etudiant/detailStudent', function () {
    return view('etudiants.detailStudent');
});
// route pour la matière
Route::get('/matiere/displayform', function () {
    return view('matiere.addForm');
});
Route::post('/matiere/addForm', [MatiereController::class, 'store']);
//route pour modifier evaluation
Route::post('/evaluation/addForm', [EvaluationController::class, 'store']);

Route::get('evaluation/update', function () {
    return view('evaluation.update');
});

