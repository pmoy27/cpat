<?php

namespace App\Http\Controllers;

use App\Models\Notificacion;
use App\Models\procedimiento;
use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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


        $notificacion = Notificacion::select('*')
            ->where('id_procedimiento', $id)
            ->first();
        if (!$procedimiento) {
            abort(404); // Otra acción en caso de que no se encuentre la identificación
        }
        $etapas_notificaciones = $notificacion && $notificacion->etapas_notificaciones ? explode(',', $notificacion->etapas_notificaciones) : [];
        return view('formulario.notificaciones', [
            'notificacion' => $notificacion,
            'procedimiento' => $procedimiento,
            'etapas_notificaciones' => $etapas_notificaciones



        ]);
    }
    public function store(Request $request)
    {
        $etapas_notificaciones = implode(',', $request->input('etapas_notificaciones', []));
        $criteria = [
            'id_procedimiento' => $request->input('id_procedimiento')
        ];

        // Define los valores que se deben actualizar o crear
        $values = [
            'noti_practicadas' => $request->input('noti_practicadas'),
            'medio_notificacion' => $request->input('medio_notificacion'),
            'medio_envio_comuni' => $request->input('medio_envio_comuni'),
            'medio_envio_personales' => $request->input('medio_envio_personales'),
            'etapas_notificaciones' => $etapas_notificaciones,


        ];

        // Usa el método updateOrCreate para insertar o actualizar el registro
        Notificacion::updateOrCreate($criteria, $values);

        // Redirecciona con un mensaje de éxito
        return redirect()->back()->with('success', 'Registro guardado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Notificacion $notificacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notificacion $notificacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notificacion $notificacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notificacion $notificacion)
    {
        //
    }
}
