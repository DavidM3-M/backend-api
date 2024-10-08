<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarea = Tarea::get();
        return response()->json($tarea);
    }


    public function store(Request $request)
    {
        $tarea = Tarea::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'estado' => $request->estado,
            'fecha_de_vencimiento'=> $request->fecha_de_vencimiento,
        ]);
        return response()->json($tarea);
    }


    public function show(string $id)
    {
        $tarea = Tarea::where('id', $id)->first();
        return response()->json($tarea);
    }

    public function update(Request $request, string $id)
    {
        $tareas = Tarea::where('id', $id)->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'estado' => $request->estado,
            'fecha_de_vencimiento'=> $request->fecha_de_vencimiento,
        ]);
        return response()->json($tareas);
    }


    public function destroy(string $id)
    {
        $tarea = Tarea::where('id', $id)->delete();
        return response()->json($tarea);
    }
}
