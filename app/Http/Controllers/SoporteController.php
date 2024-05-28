<?php

namespace App\Http\Controllers;

use App\Models\procedimiento;
use App\Models\Soporte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('formulario.soporte');
    }

    public function cargar($id)
    {

        $procedimiento = Procedimiento::find($id);
        $userName = Auth::user()->name;
        // Verifica si $procedimiento es nulo
        if (!$procedimiento) {
            abort(404);
        }

        $soporte = Soporte::select('*')
            ->where('id_procedimiento', $id)
            ->first();

        // Inicializa las variables como arrays vacíos si $soporte es nulo
        $canales_atencion = $soporte && $soporte->canales_atencion ? explode(',', $soporte->canales_atencion) : [];
        $canales_transaccionales = $soporte && $soporte->canales_transaccionales ? explode(',', $soporte->canales_transaccionales) : [];
        $plataforma_utilizado = $soporte && $soporte->plataforma_utilizado ? explode(',', $soporte->plataforma_utilizado) : [];

        return view('formulario.soporte', compact('userName'), [
            'soporte' => $soporte,
            'procedimiento' => $procedimiento,
            'canales_atencion' => $canales_atencion,
            'canales_transaccionales' => $canales_transaccionales,
            'plataforma_utilizado' => $plataforma_utilizado
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
        $canales_atencion = implode(',', $request->input('canales_atencion', []));
        $canales_transaccionales = implode(',', $request->input('canales_transaccionales', []));
        $plataforma_utilizado = implode(',', $request->input('plataforma_utilizado', []));
        $criteria = [
            'id_procedimiento' => $request->input('id_procedimiento')
        ];

        // Define los valores que se deben actualizar o crear
        $values = [
            'nivel_digitalizacion' => $request->input('nivel_digitalizacion'),
            'fecha_digitalizacion' => $request->input('fecha_digitalizacion'),
            'tipo_expediente' => $request->input('tipo_expediente'),
            'acceso_expediente' => $request->input('acceso_expediente'),
            'url_inicio' => $request->input('url_inicio'),
            'chile_atiende' => $request->input('chile_atiende'),
            'url_ficha' => $request->input('url_ficha'),
            'n_plataformas' => $request->input('n_plataformas'),
            'alcance_plataformas' => $request->input('alcance_plataformas'),
            'plataforma_utilizado' => $plataforma_utilizado,
            'canales_atencion' => $canales_atencion,
            'canales_transaccionales' => $canales_transaccionales

        ];

        // Usa el método updateOrCreate para insertar o actualizar el registro
        Soporte::updateOrCreate($criteria, $values);

        // Redirecciona con un mensaje de éxito
        return redirect()->back()->with('guardado', 'guardado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Soporte $soporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Soporte $soporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Soporte $soporte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Soporte $soporte)
    {
        //
    }
}
