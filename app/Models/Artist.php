<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Artist extends Model
{
    use HasFactory;

    public $fillable = [
        'artistTitle',
        'country',
        'active'
    ];

    public static function rules() : array
    {
        return [
            'artistTitle' => 'required|string|max:255',
            'country' => [
                'required',
                Rule::in(['Latvija', 'Amerikas Savienotās Valstis', 'Lielbritānija', 'Zviedrija', 'Vācija', 'Lietuva', 'Latvia', 'Austrālija', 'Austrija', 'Beļģija', 'Brazīlija', 'Bulgārija',
                    'Čīle', 'Dānija', 'Dienvidāfrika', 'Ēģipte', 'Francija', 'Grieķija', 'Horvātija', 'Igaunija', 'Islande', 'Itālija', 'Izraēla', 'Īrija', 'Turcija', 'Ukraina', 'Venecuēla',
                    'Japāna', 'Jaunzēlande', 'Kanāda', 'Kolumbija', 'Krievija', 'Ķīna', 'Meksika', 'Nīderlande', 'Norvēģija', 'Polija', 'Portugāle', 'Rumānija', 'Somija', 'Spānija', 'Šveice'])
            ],
            'active' => 'boolean'
        ];
    }
}
