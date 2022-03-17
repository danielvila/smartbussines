<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'codigo',
        'tipo',
        'descripcion',
        'id_fiscal',
        'dv',        
        'representante',
        'direcction1',
        'direcction2',
        'pais',
        'estado',
        'ciudad',
        'municipio',
        'telefono',
        'celular',
        'activo',
        'email',
    ];
}
