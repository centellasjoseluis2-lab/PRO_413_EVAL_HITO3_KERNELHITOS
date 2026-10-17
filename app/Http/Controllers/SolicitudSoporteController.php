<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SolicitudSoporte;

class SolicitudSoporteController extends Controller
{
    // Lógica de registro
    public function store(Request $request)
    {
        // Validación de datos obligatorios
        $request->validate([
            'solicitante' => 'required|string|max:255',
            'departamento' => 'required|string|max:255',
            'description' => 'required|string',
            'prioridad' => 'required|in:baja,media,alta',
        ]);

        // Crear el registro
        SolicitudSoporte::create([
            'solicitante' => $request->solicitante,
            'departamento' => $request->departamento,
            'description' => $request->description,
            'prioridad' => $request->prioridad,
            'estado' => 'Pendiente', // Estado inicial obligatorio
        ]);

        return redirect()->back()->with('success', 'Solicitud registrada correctamente.');
    }
}