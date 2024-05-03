<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LLOGA extends Model
{
    use HasFactory;
    protected $table = 'lloga';
    protected $primaryKey = ['dni_client', 'matricula_auto'];
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'dni_client',
        'matricula_auto',
        'data_prestec',
        'data_devolucio',
        'lloc_devolucio',
        'preu_dia',
        'prestec_retorn_diposit_ple',
        'tipus_asseguranca'
    ];
}
