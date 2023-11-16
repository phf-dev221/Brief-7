<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function delete(Request $request, $id)
    {
         // on  Récupére l'ID de l'évaluation à supprimer
    // $evaluationId = $request->input('id');
    // dd($evaluationId);
    

    //  on Vérifier si l'évaluation existe dans la base de données
    $evaluation = Evaluation::findOrFail($request->id);
    $evaluation->is_deleted=1;
    $evaluation->update();
    return back();

    }
}
