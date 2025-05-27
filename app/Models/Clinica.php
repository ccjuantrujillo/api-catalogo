<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    use HasFactory;

    protected $table = 'clinica';

    protected $fillable = [
        'codigo',
        'usuario_id',
        'ubigeo_id',
        'nombre',
        'ruc',
        'telefono',
        'email',
        'direccion',
        'tipo_clinica_id',
        'ipress',
        'renipress',
        'estado',
        'zona',
        'igv',
        'sede',
        'ubicacion',
        'id_equiv_sis',
        'retener',
        'retraccion',
    ];


}
