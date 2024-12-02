<?php

namespace App\Http\Controllers;

use App\Models\Laboratorio;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laboratorios = Laboratorio::all();
        return view("admin.laboratorios.index",compact("laboratorios"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.laboratorios.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nombre" => "required",
            "curso" => "required",
            "piso" => "required",
            "especialidad" => "required",
            "estado" => "required",
        ]);

        $laboratorio = new Laboratorio();
        $laboratorio->nombre = $request->nombre;
        $laboratorio->curso = $request->curso;
        $laboratorio->piso = $request->piso;
        $laboratorio->especialidad = $request->especialidad;
        $laboratorio->estado = $request->estado;
        $laboratorio->save();

        return redirect()->route("admin.laboratorios.index")
        ->with("mensaje","Se registro el laboratorio de manera correcta")
        ->with("icono","success");
    }

    /**
     * Display the specified resource.
     */
    public function show(Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laboratorio $laboratorio)
    {
        //
    }
}
