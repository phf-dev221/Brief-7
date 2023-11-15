<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Evaluation;
use App\Models\Matiere;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allStudents = Etudiant::all();

        return view('etudiants.listStudent', compact('allStudents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        dd($id);
        $etudiant = Etudiant::findOrFail($id);
        $matiere = Matiere::all();
        $evaluation = Evaluation::findOrFail($id);
        return view('etudiants.detailStudent', compact('etudiants', 'matieres', 'evaluations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
