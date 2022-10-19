<?php

namespace App\Http\Controllers;

use App\Models\Jeu;
use App\Models\Version;
use Illuminate\Http\Request;

class VersionController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show(Request $request, $id) {
        $jeu = Jeu::findOrFail($id);
        $pokemons = $jeu->pokemons()->get();
        return view('version.show', ['jeu'=>$jeu ,'pokemons' => $pokemons,'titre' => 'Versions']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function showDate(Request $request, $id) {
        $jeu = Jeu::findOrFail($id);
        $pokemons = $jeu->pokemons()->get();
        if ($request->date==null)
            return view('version.show', ['jeu'=>$jeu ,'pokemons' => $pokemons,'titre' => 'Versions']);
        $pokemons = $jeu->pokemons()->where('date_sortie','<',$request->date)->get();
        return view('version.show', ['jeu'=>$jeu ,'pokemons' => $pokemons,'titre' => 'Versions']);
    }
}
