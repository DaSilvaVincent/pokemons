<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jeu extends Model
{
    protected $table = 'jeux';
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['nom', 'editeur', 'genre'];

    function pokemons() {
        return $this->belongsToMany(Pokemon::class, 'version')
            ->withPivot('numero', 'date_sortie')->as('information');
    }
}
