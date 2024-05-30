<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use App\Models\Digital;
use App\Models\identificacion;
use App\Models\Marco;
use App\Models\Notificacion;
use App\Models\procedimiento;
use App\Models\Soporte;
use App\Models\User;
use App\Models\Usuario;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ProcedimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtén el ID del usuario autenticado
        $userId = auth()->id();
        $userName = Auth::user()->name;
        // Obtén solo los procedimientos del usuario autenticado
        $procedimiento = Procedimiento::where('id_usuario', $userId)->get();
        $totalAsignado = $procedimiento->where('estado', 'Asignado')->count();
        $totalFinalizado = $procedimiento->where('estado', 'Finalizado')->count();

        // Pasa los procedimientos a la vista
        return view('procedimientos.listado', compact('procedimiento', 'userName', 'totalAsignado', 'totalFinalizado'));
    }

    public function dashboard()
    {
        $procedimiento = procedimiento::all();
        $userName = Auth::user()->name;
        $totalAsignado = $procedimiento->where('estado', 'Asignado')->count();
        $totalFinalizado = $procedimiento->where('estado', 'Finalizado')->count();
        $users = User::all();
        return view('dashboard', compact('procedimiento', 'userName',  'totalAsignado', 'totalFinalizado'), ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function detalle($id)
    {
        $procedimiento = Procedimiento::find($id);
        $identificacion = Identificacion::where('id_procedimiento', $id)->first();
        $marco = Marco::where('id_procedimiento', $id)->first();
        $usuario = Usuario::where('id_procedimiento', $id)->first();
        $soporte = Soporte::where('id_procedimiento', $id)->first();
        $digital = Digital::where('id_procedimiento', $id)->first();
        $notificacion = Notificacion::where('id_procedimiento', $id)->first();
        $dato = Dato::where('id_procedimiento', $id)->first();
        $userName = Auth::user()->name;

        return view('procedimientos.vista', compact('userName'), [
            'procedimiento' => $procedimiento, 'identificacion' => $identificacion, 'marco' => $marco,
            'usuario' => $usuario,
            'soporte' => $soporte,
            'digital' => $digital,
            'notificacion' => $notificacion,
            'dato' => $dato
        ]);
    }

    public function reporte($id)
    {
        $procedimiento = Procedimiento::find($id);
        $identificacion = Identificacion::where('id_procedimiento', $id)->first();
        $marco = Marco::where('id_procedimiento', $id)->first();
        $usuario = Usuario::where('id_procedimiento', $id)->first();
        $soporte = Soporte::where('id_procedimiento', $id)->first();
        $digital = Digital::where('id_procedimiento', $id)->first();
        $notificacion = Notificacion::where('id_procedimiento', $id)->first();
        $dato = Dato::where('id_procedimiento', $id)->first();
        $userName = Auth::user()->name;
        $pdf = PDF::loadView('procedimientos.detalle', compact('userName'), [
            'procedimiento' => $procedimiento, 'identificacion' => $identificacion, 'marco' => $marco,
            'usuario' => $usuario,
            'soporte' => $soporte,
            'digital' => $digital,
            'notificacion' => $notificacion,
            'dato' => $dato
        ]);
        return $pdf->stream();
    }
    public function store(Request $request)
    {
        $procedimiento = new procedimiento();
        $procedimiento->nombre = $request->input('nombre');
        $procedimiento->Tipo_procedimiento = $request->input('Tipo_procedimiento');
        $procedimiento->id_usuario = $request->input('id_usuario');
        $procedimiento->save();

        return redirect()->back()->with('success', 'Registro guardado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(procedimiento $procedimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(procedimiento $procedimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, procedimiento $procedimiento)
    {
        $id = $request->input('id');
        $procedimiento = procedimiento::find($id);
        $procedimiento->nombre = $request->input('nombre');


        $procedimiento->update();

        return redirect()->back()->with('success', 'Registro guardado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, procedimiento $procedimiento)
    {
        $id = $request->input('id');
        $procedimiento = procedimiento::find($id);
        $procedimiento->delete();
        return redirect()->route('dashboard')->with('success', 'success');
    }
}
