<?php

namespace App\Http\Controllers;

use App\Models\Marco;
use App\Models\procedimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarcoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('formulario.marco');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $criteria = [
            'id_procedimiento' => $request->input('id_procedimiento')
        ];

        // Define los valores que se deben actualizar o crear
        $values = [
            'n_ley' => $request->input('n_ley'),
            'url_ley' => $request->input('url_ley'),
            'fuentes_normativas' => $request->input('fuentes_normativas'),
            'tipo_fuente' => $request->input('tipo_fuente'),
            'nombre_fuente' => $request->input('nombre_fuente'),
            'url_fuente' => $request->input('url_fuente')
        ];

        // Usa el método updateOrCreate para insertar o actualizar el registro
        Marco::updateOrCreate($criteria, $values);

        // Redirecciona con un mensaje de éxito
        return redirect()->back()->with('guardado', 'guardado');
    }
    public function cargar($id)
    {
        $procedimiento = procedimiento::find($id);
        $userName = Auth::user()->name;
        $marco = Marco::select('*')
            ->where('id_procedimiento', $id)
            ->first();
        if (!$procedimiento) {
            abort(404); // Otra acción en caso de que no se encuentre la identificación
        }

        return view('formulario.marco', compact('userName'), [
            'marco' => $marco,
            'procedimiento' => $procedimiento

        ]);
    }
    public function show(Marco $marco)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marco $marco)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Marco $marco)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marco $marco)
    {
        //
    }
}
