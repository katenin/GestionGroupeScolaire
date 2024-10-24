<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Eleve;

class EleveController extends Controller
{
    //$eleves = Eleve::all();
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves = Eleve::all();

        return view('inscription-eleve',

         [
            'eleves' =>$eleves,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $eleves = Eleve::all();
         return view('eleve.index', [
            'eleves' =>$eleves,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:eleves,email',
            'date_naissance' => 'required|date',
            'sexe' => 'required|in:Homme,Femme',
        ]);

        // Création de l'élève
        Eleve::create($validated);

        return redirect()->route('eleves.index')->with('success', 'Élève créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('eleves.show', compact('eleve'));
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
    public function update(Request $request, Eleve $eleve)
    {
        // Validation des données
        $validated = $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:eleves,email,'.$eleve->id,
            'date_naissance' => 'required|date',
            'sexe' => 'required|in:Homme,Femme',
        ]);

        // Mise à jour de l'élève
        $eleve->update($validated);

        return redirect()->route('eleves.index')->with('success', 'Élève mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eleve $eleve)
    {
        $eleve->delete();
        return redirect()->route('eleves.index')->with('success', 'Élève supprimé avec succès');
    }
}
