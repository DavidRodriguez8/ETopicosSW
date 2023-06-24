<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Facultad;

class Facultades extends Controller
{
    public function index(){
        $facultades = DB::table('facultades')->get();
        return view('facultades.listado', ['facultades' =>$facultades]);
    }

    public function form_registro(){
        return view('facultades.form_registro');
    }

    public function registrar(Request $r){
        $facultad = new Facultad();
        $facultad->codFacultad = $r->input('id_facultad');
        $facultad->nomFacultad = $r->input('nom_Facultad');
        $facultad->save();
        return redirect()->route('listadoFac');
    }

    public function eliminar($id){
        $facultad = Facultad::findOrFail($id);
        $facultad->delete();
        return redirect()->route('listadoFac');
    }

    public function form_edita($id){
        $facultad = Facultad::findOrFail($id);
        return view('facultades.form_edita',
            compact('facultad'));

    }

    public function actualizar(Request $f, $id){
        $facult = Facultad::findOrFail($id);
        $facult->nomFacultad = $f->input('nom_facultad');
        $facult->save();
        return redirect()->route('listadoFac');
    }
}
