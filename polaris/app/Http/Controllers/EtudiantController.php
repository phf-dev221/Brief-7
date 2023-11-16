<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
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
    {   $etudiant = Etudiant::find($id);
        return view('etudiants.updateStudent',compact('etudiant'));
    }

    public function update_traitement(Request $request){
        $request->validate([
            'nom'=>'required|max:50|string',
            'prenom'=>'required|max:50|string',
            'date_naissance'=>'required',
            'classe'=>'required',
            'sexe'=>'required'
        ]);
        $etudiant=Etudiant::find($request->id);

        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->date_naissance =$request->born;
        $etudiant->classe = $request->classe;
        $etudiant->sexe = $request->sexe;
        $etudiant->update();

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
