<?php

namespace App\Http\Controllers;

use App\Models\Digital;
use App\Models\procedimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        /*     $resultados = DB::table('soportes')
            ->select(
                DB::raw("CASE 
                        WHEN (canales_atencion IS NULL OR canales_atencion = '') 
                          OR (nivel_digitalizacion = 'Nivel 5' AND (fecha_digitalizacion IS NULL OR fecha_digitalizacion = '')) 
                          OR (nivel_digitalizacion <> 'Nivel 0' AND (chile_atiende IS NULL OR chile_atiende = '' OR url_inicio IS NULL OR url_inicio = ''))
                        THEN TRUE 
                        ELSE FALSE 
                     END AS es_vacio")
            )
            ->where('id_procedimiento', $id)
            ->first();*/

        $nivel = DB::table('soportes')
            ->select(
                DB::raw("CASE 
                        WHEN (nivel_digitalizacion <> 'Nivel 0') 

                        THEN TRUE 
                        ELSE FALSE 
                     END AS nivel_0")
            )
            ->where('id_procedimiento', $id)
            ->first();

        $procedimiento = procedimiento::find($id);

        $userName = Auth::user()->name;
        $digital = Digital::select('*')
            ->where('id_procedimiento', $id)
            ->first();
        if (!$procedimiento) {
            abort(404); // Otra acción en caso de que no se encuentre la identificación
        }
        $autenticacion = $digital && $digital->autenticacion ? explode(',', $digital->autenticacion) : [];
        return view('formulario.digital', compact('userName'), [
            'digital' => $digital,
            'procedimiento' => $procedimiento,
            'autenticacion' => $autenticacion,
            /*'es_vacio' => $resultados->es_vacio,*/
            'nivel_0' => $nivel->nivel_0



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
            'mecanismos' => $request->input('mecanismos'),

            'autenticacion' => $autenticacion,


        ];

        // Usa el método updateOrCreate para insertar o actualizar el registro
        Digital::updateOrCreate($criteria, $values);

        // Redirecciona con un mensaje de éxito
        return redirect()->back()->with('guardado', 'guardado');
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
