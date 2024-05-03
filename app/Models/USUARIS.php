<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class USUARIS extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'email';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'nom_cognoms',
        'email',
        'contrasenya',
        'tipus',
        'darrera_hora_entrada',
        'darrera_hora_sortida'
    ];
}
