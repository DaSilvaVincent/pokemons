<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pokemon::factory([
            'nom' => "Bulbizarre",
            'extension' => "X",
            'vie' => "45",
            'type' => "plante",
            'faiblesse' => "feu,glace,psy,vol",
            'degat' => "49",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Salamèche",
            'extension' => "XY",
            'vie' => "39",
            'type' => "feu",
            'faiblesse' => "eau,roche,sol",
            'degat' => "52",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Carapuce",
            'extension' => "X",
            'vie' => "44",
            'type' => "eau",
            'faiblesse' => "électrique,plante",
            'degat' => "48",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Chenipan",
            'extension' => "X",
            'vie' => "45",
            'type' => "insecte",
            'faiblesse' => "feu,roche,vol",
            'degat' => "30",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Ratatta",
            'extension' => "XY",
            'vie' => "30",
            'type' => "normal",
            'faiblesse' => "combat",
            'degat' => "56",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Pikachu",
            'extension' => "XY",
            'vie' => "35",
            'type' => "électrique",
            'faiblesse' => "sol",
            'degat' => "55",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Goupix",
            'extension' => "X",
            'vie' => "38",
            'type' => "feu",
            'faiblesse' => "eau,roche,sol",
            'degat' => "41",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Rondoudou",
            'extension' => "XY",
            'vie' => "115",
            'type' => "fée",
            'faiblesse' => "acier,poison",
            'degat' => "45",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Taupiqueur",
            'extension' => "XY",
            'vie' => "10",
            'type' => "sol",
            'faiblesse' => "eau,glace,plante",
            'degat' => "55",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Miaouss",
            'extension' => "Y",
            'vie' => "40",
            'type' => "normal",
            'faiblesse' => "combat",
            'degat' => "45",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Psykokwak",
            'extension' => "X",
            'vie' => "50",
            'type' => "eau",
            'faiblesse' => "électrique,plante",
            'degat' => "52",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Caninos",
            'extension' => "XY",
            'vie' => "55",
            'type' => "feu",
            'faiblesse' => "eau,roche,sol",
            'degat' => "70",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Grolem",
            'extension' => "XY",
            'vie' => "80",
            'type' => "sol",
            'faiblesse' => "acier,combat,eau,glace,plante,sol",
            'degat' => "120",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Ponyta",
            'extension' => "XY",
            'vie' => "50",
            'type' => "feu",
            'faiblesse' => "eau,roche,sol",
            'degat' => "85",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Onix",
            'extension' => "X",
            'vie' => "35",
            'type' => "roche",
            'faiblesse' => "acier,combat,eau,glace,plante,sol",
            'degat' => "45",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Voltorbe",
            'extension' => "Y",
            'vie' => "40",
            'type' => "électrique",
            'faiblesse' => "acier,poison",
            'degat' => "30",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Poissirène",
            'extension' => "Y",
            'vie' => "45",
            'type' => "eau",
            'faiblesse' => "électrique,plante",
            'degat' => "67",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Lippoutou",
            'extension' => "XY",
            'vie' => "65",
            'type' => "glace",
            'faiblesse' => "acier,feu,insecte,roche,spectre,ténèbres",
            'degat' => "50",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Evoli",
            'extension' => "XY",
            'vie' => "55",
            'type' => "normal",
            'faiblesse' => "combat",
            'degat' => "55",
            'user_id' => "1"
        ])->create();

        Pokemon::factory([
            'nom' => "Flamiaou",
            'extension' => "X",
            'vie' => "45",
            'type' => "feu",
            'faiblesse' => "eau,roche,sol",
            'degat' => "65",
            'user_id' => "1"
        ])->create();
    }

}
