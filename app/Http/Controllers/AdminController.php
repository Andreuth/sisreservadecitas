<?php

namespace App\Http\Controllers;
use App\Models\Docente;
use App\Models\Laboratorio;
use App\Models\Personal;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index (){
        $total_usuarios = User::count();
        $total_laboratorios = Laboratorio::count();
        $total_personals = Personal::count();
        return view("admin.index",compact("total_usuarios", "total_laboratorios", "total_personals"));
    }
}
