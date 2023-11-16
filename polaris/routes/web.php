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

Route::get('/', function () {
    return view('layout.nav');
});
Route::get('/etudiant/ajouterEtudiant', function () {
    return view('etudiants.addForm');
});
Route::get('/etudiant/liststudent', function () {
    return view('etudiants.listStudent');
});
/*route pour acceder au formulaire de modification */
Route::get('/etudiant/updateStudent/{id}', [EtudiantController::class,'update']);
/*route pour le traitement de la modification d'etudiant */
Route::get('/etudiant/updateStudent-traitement', [EtudiantController::class,'update_traitement']);

Route::get('/etudiant/detailStudent', function () {
    return view('etudiants.detailStudent');
});
// route pour la matière
Route::get('/matier/addForm', function () {
    return view('matiere.addForm');
});
//route pour modifier evaluation
Route::get('/evaluation/update/{id}', [EvaluationController::class,'update']);
Route::get('/evaluation/update-traitement', [EvaluationController::class,'update_evaluation_traitement']);

