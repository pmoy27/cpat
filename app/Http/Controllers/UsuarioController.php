<?php

namespace App\Http\Controllers;

use App\Models\procedimiento;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('formulario.usuario');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function cargar($id)
    {
        $procedimiento = procedimiento::find($id);

        $usuario = Usuario::select('*')
            ->where('id_procedimiento', $id)
            ->first();
        if (!$procedimiento) {
            abort(404); // Otra acción en caso de que no se encuentre la identificación
        }

        return view('formulario.usuario', [
            'usuario' => $usuario,
            'procedimiento' => $procedimiento

        ]);
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
            'pago_asociado' => $request->input('pago_asociado'),
            'tipo_moneda' => $request->input('tipo_moneda'),
            'monto_pagar' => $request->input('monto_pagar'),
            'tipo_usuario' => $request->input('tipo_usuario'),
            'segmento_usuario' => $request->input('segmento_usuario'),
            'registro_social' => $request->input('registro_social'),
            'disponibilidad' => $request->input('disponibilidad')

        ];

        // Usa el método updateOrCreate para insertar o actualizar el registro
        Usuario::updateOrCreate($criteria, $values);

        // Redirecciona con un mensaje de éxito
        return redirect()->back()->with('guardado', 'guardado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
