<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.index', ['pokemons' => $pokemons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view ('pokemons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request) {
        // validation des données de la requête
        $this->validate(
            $request,
            [
                'nom' => 'required',
                'extension' => 'required',
                'vie' => 'required',
                'type' => 'required',
                'faiblesse' => 'required',
                'degat' => 'required',
            ]
        );

        // code exécuté uniquement si les données sont validaées
        // sinon un message d'erreur est renvoyé vers l'utilisateur

        // préparation de l'enregistrement à stocker dans la base de données
        $pokemon = new Pokemon;

        $pokemon->nom = $request->nom;
        $pokemon->extension = $request->extension;
        $pokemon->vie = $request->vie;
        $pokemon->type = $request->type;
        $pokemon->faiblesse = $request->faiblesse;
        $pokemon->degat = $request->degat;

        // insertion de l'enregistrement dans la base de données
        $pokemon->save();

        // redirection vers la page qui affiche la liste des tâches
        return redirect()->route('pokemons.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show(Request $request, $id) {
        $pokemons = Pokemon::findOrFail($id);
        return view('pokemons.show', ['pokemon' => $pokemons]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $pokemon = Pokemon::find($id);
        return view('pokemons.edit', ['pokemon' => $pokemon]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $pokemon = Pokemon::find($id);

        $this->validate(
            $request,
            [
                'nom' => 'required',
                'extension' => 'required',
                'vie' => 'required',
                'type' => 'required',
                'faiblesse' => 'required',
                'degat' => 'required',
            ]
        );
        $pokemon->nom = $request->nom;
        $pokemon->extension = $request->extension;
        $pokemon->vie = $request->vie;
        $pokemon->type = $request->type;
        $pokemon->faiblesse = $request->faiblesse;
        $pokemon->degat = $request->degat;

        $pokemon->save();

        return redirect()->route('pokemons.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy(Request $request, $id)
    {
        if ($request->delete == 'valide') {
            $pokemon = Pokemon::find($id);
            $pokemon->delete();
            return redirect()->route('pokemons.index')
                ->with('type', 'primary')
                ->with('msg', 'Pokemon ajoutée avec succès');

        } else {
            return redirect()->route('pokemons.index')
                ->with('type', 'error')
                ->with('msg', 'Suppression pokemon annulée');
        }
    }
}
