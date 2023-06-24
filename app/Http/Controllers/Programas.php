<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Programa;
use App\Models\Facultad;

class Programas extends Controller
{
    public function index(){
        $programas = DB::table('programas')->get();
        return view('programas.listado', ['programas' =>$programas]);
    }

    public function registro_form(){
        return view('programas.registro_form');
    }

    public function registrarp(Request $r){
        $programa = new Programa();
        $programa->codPrograma = $r->input('id_Programa');
        $programa->nomPrograma = $r->input('nom_Programa');
        $programa->facultad = $r->input('Facultad');
        $programa->save();
        return redirect()->route('listadoPro');
    }

    public function eliminarp($id){
        $programa = Programa::findOrFail($id);
        $programa->delete();
        return redirect()->route('listadoPro');
    }
}
