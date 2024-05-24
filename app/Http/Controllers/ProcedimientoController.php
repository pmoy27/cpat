<?php

namespace App\Http\Controllers;

use App\Models\procedimiento;
use Illuminate\Http\Request;

class ProcedimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $procedimiento = procedimiento::all();
        $id_usuario = auth()->id();
        return view('procedimientos.listado', compact('procedimiento'), ['id_usuario' => $id_usuario]);
    }
    public function dashboard()
    {
        $procedimiento = procedimiento::all();
        return view('dashboard', compact('procedimiento'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(procedimiento $procedimiento)
    {
        //
    }
}
