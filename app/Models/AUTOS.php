<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AUTOS extends Model
{
    use HasFactory;
    protected $table = 'autos';
    protected $primaryKey = 'matricula_auto';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'matricula_auto',
        'numero_bastidor',
        'marca',
        'model',
        'color',
        'nombre_places',
        'nombre_portes',
        'grandaria_maleter',
        'tipus_combustible'
    ];
}
