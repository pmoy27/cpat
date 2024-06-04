<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use App\Models\procedimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\alert;

class DatoController extends Controller
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
        $userName = Auth::user()->name;
        $dato = Dato::select('*')
            ->where('id_procedimiento', $id)
            ->first();
        if (!$procedimiento) {
            abort(404); // Otra acción en caso de que no se encuentre la identificación
        }

        return view('formulario.datos', compact('userName'), [
            'dato' => $dato,
            'procedimiento' => $procedimiento

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
        $procedimiento = procedimiento::where('id', $request->input('id_procedimiento'))
            ->first();
        $action = $request->input('action');
        if ($action == 'guardar') {
            $criteria = [
                'id_procedimiento' => $request->input('id_procedimiento')
            ];

            // Define los valores que se deben actualizar o crear
            $values = [
                'expediente_otro_organo' => $request->input('expediente_otro_organo'),

                'medio_utilizado' => $request->input('medio_utilizado'),
                'institucion' => $request->input('institucion'),
                'tipo_informacion' => $request->input('tipo_informacion'),
                'identifique_dato' => $request->input('identifique_dato'),
                'identifique_documento' => $request->input('identifique_documento'),
                'enviar_comunicaciones' => $request->input('enviar_comunicaciones'),
                'doc_notarial' => $request->input('doc_notarial'),
                'name_doc' => $request->input('name_doc')

            ];

            // Usa el método updateOrCreate para insertar o actualizar el registro
            Dato::updateOrCreate($criteria, $values);

            // Redirecciona con un mensaje de éxito
            return redirect()->back()->with('guardado', 'guardado');
        } elseif ($action == 'finalizar') {
            $criteria = [
                'id_procedimiento' => $request->input('id_procedimiento')
            ];

            // Define los valores que se deben actualizar o crear
            $values = [
                'expediente_otro_organo' => $request->input('expediente_otro_organo'),

                'medio_utilizado' => $request->input('medio_utilizado'),
                'institucion' => $request->input('institucion'),
                'tipo_informacion' => $request->input('tipo_informacion'),
                'identifique_dato' => $request->input('identifique_dato'),
                'identifique_documento' => $request->input('identifique_documento'),
                'enviar_comunicaciones' => $request->input('enviar_comunicaciones'),
                'doc_notarial' => $request->input('doc_notarial'),
                'name_doc' => $request->input('name_doc')

            ];
            $procedimiento->update(['estado' => 'Finalizado']);
            // Usa el método updateOrCreate para insertar o actualizar el registro
            Dato::updateOrCreate($criteria, $values);

            // Redirecciona con un mensaje de éxito
            return redirect()->route('procedimiento.listado')->with('finalizado', 'finalizado');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Dato $dato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dato $dato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dato $dato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dato $dato)
    {
        //
    }
}
