<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudSoporte extends Model
{
    use HasFactory;

    // Forzamos el nombre de la tabla
    protected $table = 'solicitudes_soporte';

    // Campos que se pueden llenar
    protected $fillable = [
        'solicitante',
        'departamento',
        'description',
        'prioridad',
        'estado'
    ];
}