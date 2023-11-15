<?php

use App\Http\Controllers\EtudiantController;
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
Route::get('/etudian/displayForm', function () {
    return view('etudiants.addForm');
});
Route::post('/etudiant/ajouterEtudiant', [EtudiantController::class, 'store']);
Route::get('/etudiant/liststudent/', [EtudiantController::class, 'index']);
Route::get('/etudiant/updateStudent', [EtudiantController::class, 'update']);
Route::get('/etudiant/detailStudent/{id}', [EtudiantController::class, 'show']);
Route::get('/etudiant/deleteStudent/{id}', [EtudiantController::class, 'show']);

// route pour la matière
Route::get('/matier/addForm', function () {
    return view('matiere.addForm');
});
//route pour modifier evaluation
Route::get('evaluation/update', function () {
    return view('evaluation.update');
});
