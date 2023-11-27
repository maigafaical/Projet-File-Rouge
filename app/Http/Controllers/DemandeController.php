<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DemandeRenouvellement;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demandes = DemandeRenouvellement::all();
        return view('Demandes.liste', compact('demandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Demandes.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $demandes = new DemandeRenouvellement();
        $demandes->nom = $request->nom;
        $demandes->prenom = $request->prenom;
        $demandes->sexe = $request->sexe;
        $demandes->nationalite = $request->nationalite;
        $demandes->telephone = $request->telephone;
        $demandes->numero_progres = $request->numero_progres;
        $demandes->photo_attestation = $request->photo_attestation->store('photo','public');
        $demandes->statut = $request->statut;
        $demandes->motif = $request->motif;

        $demandes->save();

        return redirect()->route('acceuil')->with('status', 'Votre demande a  été bien pris en compte.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('Demandes.details',[

            'demande' => DemandeRenouvellement::find($id)

      ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $demandes = DemandeRenouvellement::find($id);
        return view('Demandes.modifier',compact('demandes'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $demandes = DemandeRenouvellement::find($id);

        $demandes->update([
            'motif' => $request->motif,
            'statut' => $request->statut,
             ]);

        return redirect()->route('demandes.index')->with('status', 'Une Demande a  été modifiée avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $demandes = DemandeRenouvellement::find($id);
        $demandes->delete();
        return redirect()->route('demandes.index')->with('status', 'Demande supprimée avec succes.');
    }
}
