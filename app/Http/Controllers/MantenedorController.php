<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MantenedorController extends Controller
{
    // Obtener todos los registros o un registro específico por ID
    public function get($id = null)
    {
        if (is_null($id)) {
            // Retorna todos los registros
            $records = MantenedorModel::all();
            return response()->json($records);
        } else {
            // Retorna solo el registro con el ID especificado
            $record = MantenedorModel::find($id);
            if ($record) {
                return response()->json($record);
            } else {
                return response()->json(['message' => 'Record not found'], 404);
            }
        }
    }

    // Crear un nuevo registro
    public function new(Request $request)
    {
        // Validación de datos de entrada
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'estado' => 'required|string|max:255',
            'responsable' => 'required|string|max:255',
            'monto' => 'required|numeric',
        ]);

        // Creación del registro
        $record = MantenedorModel::create($validated);
        return response()->json($record, 201);
    }

    // Actualizar un registro existente por ID
    public function update(Request $request, $id)
    {
        // Validación de datos de entrada
        $validated = $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'fecha_inicio' => 'sometimes|required|date',
            'estado' => 'sometimes|required|string|max:255',
            'responsable' => 'sometimes|required|string|max:255',
            'monto' => 'sometimes|required|numeric',
        ]);

        // Encontrar y actualizar el registro
        $record = MantenedorModel::find($id);
        if ($record) {
            $record->update($validated);
            return response()->json($record);
        } else {
            return response()->json(['message' => 'Record not found'], 404);
        }
    }

    // Eliminar un registro por ID
    public function delete($id)
    {
        $record = MantenedorModel::find($id);
        if ($record) {
            $record->delete();
            return response()->json(['message' => 'Record deleted']);
        } else {
            return response()->json(['message' => 'Record not found'], 404);
        }
    }
}