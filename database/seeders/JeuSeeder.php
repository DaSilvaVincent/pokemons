<?php

namespace Database\Seeders;

use App\Models\Jeu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class JeuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jeu::factory([
            'nom' => "Pokémon X et Y",
            'editeur' => "Nintendo",
            'genre' => "Jeu de role",
        ])->create();

        Jeu::factory([
            'nom' => "Pokémon X",
            'editeur' => "Nintendo",
            'genre' => "Jeu de role",
        ])->create();

        Jeu::factory([
            'nom' => "Pokémon épée",
            'editeur' => "Nintendo",
            'genre' => "Jeu de role",
        ])->create();

        Jeu::factory([
            'nom' => "Pokémon unite",
            'editeur' => "Nintendo",
            'genre' => "Jeu de role",
        ])->create();

        Jeu::factory([
            'nom' => "Pokémon écarlate et Violet",
            'editeur' => "Nintendo",
            'genre' => "Jeu de role",
        ])->create();

        Jeu::factory([
            'nom' => "Pokédex 3D",
            'editeur' => "Nintendo",
            'genre' => "Jeu de role",
        ])->create();
    }
}
