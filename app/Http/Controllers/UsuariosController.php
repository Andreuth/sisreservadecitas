<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
      public function index () {
        $usuarios = User::all();
        return view("admin.usuarios.index", compact("usuarios") );
      }

      public function create(){
        return view("admin.usuarios.create");
      }
      
      public function store (Request $request) {
        //$datos = request()->all();
        //return response()->json($datos);
        $request->validate([
          "name"=>"required|max:250",
          "email"=>"required|max:250|unique:users",
          "password"=>"required|max:250|confirmed",
        ]);
        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request["password"]);
        $usuario->save();

        return redirect()->route("admin.usuarios.index")
        ->with("mensaje","Se registro al usuario de manera correcta")
        ->with("icono","success");
      }
}