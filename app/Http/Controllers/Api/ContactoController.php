<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    // Obtener todos los contactos
    public function index()
    {
        return Contacto::all();
    }

    // Guardar un nuevo contacto
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|numeric',
            'fecha_nacimiento' => 'required|date',
        ]);

        $contacto = Contacto::create($request->all());
        return response()->json($contacto, 201);
    }

    // Mostrar un contacto específico
    public function show(Contacto $contacto)
    {
        return $contacto;
    }

    // Actualizar un contacto
    public function update(Request $request, Contacto $contacto)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|numeric',
            'fecha_nacimiento' => 'required|date',
        ]);

        $contacto->update($request->all());
        return response()->json($contacto, 200);
    }

    // Eliminar un contacto
    public function destroy(Contacto $contacto)
    {
        $contacto->delete();
        return response()->json(null, 204);
    }
}