<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CLIENTS extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $primaryKey = 'dni_client';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'dni_client',
        'nom_cognoms',
        'edat',
        'telefon',
        'adreça',
        'ciutat',
        'pais',
        'email',
        'numero_permis_conduccio',
        'punts',
        'tipus_targeta',
        'numero_targeta'
    ];
}
