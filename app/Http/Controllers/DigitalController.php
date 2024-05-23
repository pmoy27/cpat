<?php

namespace App\Http\Controllers;

use App\Models\Digital;
use App\Models\procedimiento;
use Illuminate\Http\Request;

class DigitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function cargar($id)
    {

        $procedimiento = procedimiento::find($id);


        $digital = Digital::select('*')
            ->where('id_procedimiento', $id)
            ->first();
        if (!$procedimiento) {
            abort(404); // Otra acción en caso de que no se encuentre la identificación
        }
        $autenticacion = $digital && $digital->autenticacion ? explode(',', $digital->autenticacion) : [];
        return view('formulario.digital', [
            'digital' => $digital,
            'procedimiento' => $procedimiento,
            'autenticacion' => $autenticacion



        ]);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $autenticacion = implode(',', $request->input('autenticacion', []));
        $criteria = [
            'id_procedimiento' => $request->input('id_procedimiento')
        ];

        // Define los valores que se deben actualizar o crear
        $values = [
            'firma_electronica' => $request->input('firma_electronica'),

            'autenticacion' => $autenticacion,


        ];

        // Usa el método updateOrCreate para insertar o actualizar el registro
        Digital::updateOrCreate($criteria, $values);

        // Redirecciona con un mensaje de éxito
        return redirect()->back()->with('success', 'Registro guardado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Digital $digital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Digital $digital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Digital $digital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Digital $digital)
    {
        //
    }
}
