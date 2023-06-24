<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Estudiante;

class Estudiantes extends Controller
{
    public function index(){
        $estudiantes = DB::table('estudiantes')->get();
        return view('estudiantes.listado', ['estudiantes' =>$estudiantes]);
    }

    public function formulario_reg(){
        return view('estudiantes.formulario_reg');
    }

    public function registrare(Request $e){
        $estudiante = new Estudiante();
        $estudiante->codEstudiante = $e->input('id_Estudiante');
        $estudiante->nomEstudiante = $e->input('nom_Estudiante');
        $estudiante->edaEstudiante = $e->input('eda_Estudiante');
        $estudiante->fechEstudiante = $e->input('fech_Estudiante');
        $estudiante->sexEstudiante = $e->input('sex_Estudiante');
        $estudiante->programa = $e->input('Programa');
        $estudiante->save();
        return redirect()->route('listadoEst');
    }

    public function eliminare($id){
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();
        return redirect()->route('listadoEst');
    }
}
