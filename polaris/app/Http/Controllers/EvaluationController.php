<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
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
        $evaluation = Evaluation::find($id);
        return view('evaluation.update',compact('evaluation'));
    }

    public function update_evaluation_traitement(Request $request,$id){

        $request->validate([
            'matiere'=>'required',
            'etudiant'=>'required',
            'note'=>'required'

        ]);
        $evaluation=Evaluation::find($request->id);

        $evaluation->matiere = $request->matiere;
        $evaluation->etudiant = $request->etudiant;
        $evaluation->note = $request->note;


        $evaluation->update();

        return back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
