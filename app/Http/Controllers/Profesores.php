<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profesor;

class Profesores extends Controller
{
    public function index(){
        $profesores = DB::table('profesores')->get();
        return view('profesores.listado', ['profesores' =>$profesores]);
    }

    public function reg_formulario(){
        return view('profesores.reg_formulario');
    }

    public function registrart(Request $r){
        $profesor = new Profesor();
        $profesor->codProfesor = $r->input('id_Profesor');
        $profesor->nomProfesor = $r->input('nom_Profesor');
        $profesor->catProfesor = $r->input('cat_Profesor');
        $profesor->save();
        return redirect()->route('listadoTea');
    }

    public function eliminart($id){
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();
        return redirect()->route('listadoTea');
    }
}
