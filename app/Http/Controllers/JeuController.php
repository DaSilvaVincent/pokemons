<?php

namespace App\Http\Controllers;

use App\Models\Jeu;
use Illuminate\Http\Request;

class JeuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $jeux = Jeu::all();
        return view('jeux.index', ['titre' => "Liste des jeux", 'jeux' => $jeux]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show(Request $request, $id) {
        $jeux = Jeu::findOrFail($id);
        return view('jeux.show', ['jeu' => $jeux]);
    }
}
