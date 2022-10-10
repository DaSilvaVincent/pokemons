<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Pokemon
 *
 * @property int $id
 * @property string $nom
 * @property string $extension
 * @property int $vie
 * @property string $type
 * @property string $faiblesse
 * @property int $degat
 * @property string $url_media
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\PokemonFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon whereDegat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon whereExtension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon whereFaiblesse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon whereUrlMedia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon whereVie($value)
 * @mixin \Eloquent
 */
class Pokemon extends Model
{
    protected $table = 'pokemons';
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nom',
        'extension',
        'vie',
        'type',
        'faiblesse',
        'degat',
    ];


    public function user() {
        return $this->belongsTo(User::class);
    }
}
