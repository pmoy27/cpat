<?php

namespace App\Http\Controllers;

use App\Models\identificacion;
use App\Models\procedimiento;
use Illuminate\Http\Request;

class IdentificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('formulario.identificaciones');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function menu($id)
    {
        $procedimiento = procedimiento::find($id);
        return view('menu.minmenu', [
            'procedimiento' => $procedimiento
        ]);
    }
    public function store(Request $request)
    {
        $criteria = [
            'id_procedimiento' => $request->input('id_procedimiento')
        ];

        // Define los valores que se deben actualizar o crear
        $values = [
            'tipo_registro' => $request->input('tipo_registro'),
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'area_responsable' => $request->input('area_responsable'),
            'cargo_responsable' => $request->input('cargo_responsable'),
            'tipo_inicio' => $request->input('tipo_inicio'),
            'acto_inicio' => $request->input('acto_inicio'),
            'acto_termino' => $request->input('acto_termino'),
            'producto_institucional' => $request->input('producto_institucional')
        ];

        // Usa el método updateOrCreate para insertar o actualizar el registro
        Identificacion::updateOrCreate($criteria, $values);

        // Redirecciona con un mensaje de éxito
        return redirect()->back()->with('success', 'Registro guardado correctamente');
    }
    public function cargar($id)
    {
        $procedimiento = procedimiento::find($id);

        $identificacion = Identificacion::select('*')
            ->where('id_procedimiento', $id)
            ->first();
        if (!$procedimiento) {
            abort(404); // Otra acción en caso de que no se encuentre la identificación
        }

        return view('formulario.identificaciones', [
            'identificacion' => $identificacion,
            'procedimiento' => $procedimiento

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(identificacion $identificacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(identificacion $identificacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, identificacion $identificacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(identificacion $identificacion)
    {
        //
    }
}
