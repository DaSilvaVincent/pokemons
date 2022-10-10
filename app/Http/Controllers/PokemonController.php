<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */

    public function index(Request $request)
    {
        $cat = $request->input('cat', null);
        $value = $request->cookie('cat', null);
        if (!isset($cat)) {
            if (!isset($value)) {
                $pokemons = Pokemon::all();
                $cat = 'All';
                Cookie::expire('cat');
            } else {
                $pokemons = Pokemon::where('type', $value)->get();
                $cat = $value;
                Cookie::queue('cat', $cat, 10);
            }
        } else {
            if ($cat == 'All') {
                $pokemons = Pokemon::all();
                Cookie::expire('cat');
            } else {
                $pokemons = Pokemon::where('type', $cat)->get();
                Cookie::queue('cat', $cat, 10);
            }
        }
        $types = Pokemon::distinct('type')->pluck('type');
        return view('pokemons.index-comp', ['titre' => "Liste des pokemons", 'pokemons' => $pokemons, 'cat' => $cat, 'types' => $types]);
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
        $action = $request->query('action', 'show');
        $pokemons = Pokemon::findOrFail($id);
        $users = User::findOrFail($id);
        return view('pokemons.show', ['pokemon' => $pokemons, 'user' => $users, 'action' => $action]);
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

    public function upload(Request $request, $id) {
        $pokemon = Pokemon::findOrFail($id);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
        } else {
            if (!$request->hasFile('image'))
                $msg = "Aucun fichier téléchargé";
            else
                $msg = "fichier mal téléchargé";
            return redirect()->route('pokemons.show', [$pokemon->id])
                ->with('type', 'error')
                ->with('msg', 'Pokemon non modifiée (' . $msg . ')');
        }
        $base = 'image';
        $now = time();
        $nom = sprintf("%s_%d.%s", $base, $now, $file->extension());

        $file->storeAs('images', $nom);
        if (isset($tache->url_media) && $tache->url_media != "images/no_image.png") {
            Log::info("Image supprimée : " . $tache->url_media);
            Storage::delete($tache->url_media);
        }
        $pokemon->url_media = 'images/' . $nom;
        $pokemon->save();
        //$file->store('images');
        return redirect()->route('pokemons.show', [$pokemon->id])
            ->with('type', 'primary')
            ->with('msg', 'Pokemon modifiée avec succès');
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
                ->with('msg', 'Suppression du pokemon réalisé');

        } else {
            return redirect()->route('pokemons.index')
                ->with('type', 'error')
                ->with('msg', 'Suppression du pokemon annulée');
        }
    }
}
