<?php

namespace Database\Seeders;

use App\Models\Version;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Version::factory([
            'jeu_id' => "1",
            'pokemon_id' => "17",
        ])->create();

        Version::factory([
            'jeu_id' => "1",
            'pokemon_id' => "16",
        ])->create();

        Version::factory([
            'jeu_id' => "1",
            'pokemon_id' => "13",
        ])->create();

        Version::factory([
            'jeu_id' => "1",
            'pokemon_id' => "8",
        ])->create();

        Version::factory([
            'jeu_id' => "1",
            'pokemon_id' => "7",
        ])->create();

        Version::factory([
            'jeu_id' => "2",
            'pokemon_id' => "20",
        ])->create();

        Version::factory([
            'jeu_id' => "2",
            'pokemon_id' => "18",
        ])->create();

        Version::factory([
            'jeu_id' => "2",
            'pokemon_id' => "15",
        ])->create();

        Version::factory([
            'jeu_id' => "2",
            'pokemon_id' => "12",
        ])->create();

        Version::factory([
            'jeu_id' => "2",
            'pokemon_id' => "10",
        ])->create();

        Version::factory([
            'jeu_id' => "2",
            'pokemon_id' => "8",
        ])->create();

        Version::factory([
            'jeu_id' => "2",
            'pokemon_id' => "7",
        ])->create();

        Version::factory([
            'jeu_id' => "2",
            'pokemon_id' => "3",
        ])->create();

        Version::factory([
            'jeu_id' => "3",
            'pokemon_id' => "17",
        ])->create();

        Version::factory([
            'jeu_id' => "3",
            'pokemon_id' => "6",
        ])->create();

        Version::factory([
            'jeu_id' => "3",
            'pokemon_id' => "3",
        ])->create();

        Version::factory([
            'jeu_id' => "4",
            'pokemon_id' => "14",
        ])->create();

        Version::factory([
            'jeu_id' => "5",
            'pokemon_id' => "11",
        ])->create();

        Version::factory([
            'jeu_id' => "5",
            'pokemon_id' => "7",
        ])->create();

        Version::factory([
            'jeu_id' => "5",
            'pokemon_id' => "1",
        ])->create();

        Version::factory([
            'jeu_id' => "5",
            'pokemon_id' => "20",
        ])->create();

        Version::factory([
            'jeu_id' => "5",
            'pokemon_id' => "19",
        ])->create();

        Version::factory([
            'jeu_id' => "5",
            'pokemon_id' => "18",
        ])->create();

        Version::factory([
            'jeu_id' => "5",
            'pokemon_id' => "17",
        ])->create();

        Version::factory([
            'jeu_id' => "5",
            'pokemon_id' => "16",
        ])->create();

        Version::factory([
            'jeu_id' => "5",
            'pokemon_id' => "15",
        ])->create();

        Version::factory([
            'jeu_id' => "5",
            'pokemon_id' => "13",
        ])->create();

        Version::factory([
            'jeu_id' => "5",
            'pokemon_id' => "10",
        ])->create();

        Version::factory([
            'jeu_id' => "5",
            'pokemon_id' => "8",
        ])->create();

        Version::factory([
            'jeu_id' => "5",
            'pokemon_id' => "2",
        ])->create();

        Version::factory([
            'jeu_id' => "6",
            'pokemon_id' => "15",
        ])->create();

        Version::factory([
            'jeu_id' => "6",
            'pokemon_id' => "13",
        ])->create();

        Version::factory([
            'jeu_id' => "6",
            'pokemon_id' => "11",
        ])->create();

        Version::factory([
            'jeu_id' => "6",
            'pokemon_id' => "9",
        ])->create();

        Version::factory([
            'jeu_id' => "6",
            'pokemon_id' => "7",
        ])->create();

        Version::factory([
            'jeu_id' => "6",
            'pokemon_id' => "5",
        ])->create();

        Version::factory([
            'jeu_id' => "6",
            'pokemon_id' => "3",
        ])->create();

        Version::factory([
            'jeu_id' => "6",
            'pokemon_id' => "1",
        ])->create();




    }
}
