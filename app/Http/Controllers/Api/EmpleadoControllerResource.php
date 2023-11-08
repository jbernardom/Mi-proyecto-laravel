<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoControllerResource extends Controller
{
    public function index()
    {
        $empleados = Empleado::all(); // Obtener todos los empleados

        return response()->json($empleados);
    }

    public function store(Request $request)
    {
        // Crear un nuevo registro con los datos del request
        $empleado = Empleado::create($request->all());

        return response()->json($empleado, 201);
    }

    public function show(string $id)
    {
        $empleado = Empleado::find($id);

        if (!$empleado) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }

        return response()->json($empleado);
    }

    public function update(Request $request, string $id)
    {
        $empleado = Empleado::find($id);

        if (!$empleado) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }

        $empleado->update($request->all());

        return response()->json($empleado);
    }

    public function destroy(string $id)
    {
        $empleado = Empleado::find($id);

        if (!$empleado) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }

        $empleado->delete();

        return response()->json(['message' => 'Empleado eliminado']);
    }
}
