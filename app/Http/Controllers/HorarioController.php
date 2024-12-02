<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Laboratorio;
use App\Models\Personal;
use Illuminate\Http\Request;
use Carbon\Carbon;


class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $horarios = Horario::with("personal","laboratorio")->get();
        return view("admin.horarios.index",compact("horarios"));
        
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personals = Personal::all();
        $laboratorios = Laboratorio::all();
        return view("admin.horarios.create", compact("personals","laboratorios"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
                'dia' => 'required',
                'hora_inicio' => 'required|date_format:H:i',
                'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
            ]);
            
            // Verificar si el horario ya existe para ese día y rango de horas
            $horarioExistente = Horario::where('dia', $request->dia)
                ->where(function ($query) use ($request) {
                    $query->where(function ($query) use ($request) {
                        $query->where('hora_inicio', '>=', $request->hora_inicio)
                              ->where('hora_inicio', '<', $request->hora_fin);
                    })
                    ->orWhere(function ($query) use ($request) {
                        $query->where('hora_fin', '>', $request->hora_inicio)
                              ->where('hora_fin', '<=', $request->hora_fin);
                    })
                    ->orWhere(function ($query) use ($request) {
                        $query->where('hora_inicio', '<', $request->hora_inicio)
                              ->where('hora_fin', '>', $request->hora_fin);
                    });
                })
                ->exists();
            ;

        if ($horarioExistente) {
            return redirect()->back()
                ->withInput()
                ->with('mensaje', 'Ya existe un horario que ocupa este laboratorio')
                ->with('icono', 'error');
        }


        Horario::create($request->all());

        return redirect()->route("admin.horarios.index")
        ->with("mensaje","Se registro el horario de manera correcta")
        ->with("icono","success");
    }

    /**
     * Display the specified resource.
     */
    public function show(Horario $horario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Horario $horario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Horario $horario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Horario $horario)
    {
        //
    }
}
