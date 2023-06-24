@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Formulario Registro</h1>


@stop

@section('content')
<form action="{{url('estudiantes/registrar')}}" method="POST">
    @csrf
    <div class="col-md-6">
    <label for="formGroupExampleInput" class="form-label">Código</label>
    <input type="text" class="form-control" id="id_Estudiante" name="id_Estudiante">
    </div>
    <br>
    <div class="col-md-6">
    <label for="formGroupExampleInput2" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nom_Estudiante" name="nom_Estudiante">
    </div>
    <br>
    <div class="col-md-6">
    <label for="formGroupExampleInput2" class="form-label">Edad</label>
    <input type="text" class="form-control" id="eda_Estudiante" name="eda_Estudiante">
    </div>
    <br>
    <div class="col-md-6">
    <label for="formGroupExampleInput2" class="form-label">Fecha</label>
    <input type="text" class="form-control" id="fech_Estudiante" name="fech_Estudiante" placeholder="1998,12,29">
    </div>
    <br>
    <div class="col-md-6">
    <label for="formGroupExampleInput2" class="form-label">Sexo</label>
    <input type="text" class="form-control" id="sex_Estudiante" name="sex_Estudiante" placeholder="M o F">
    </div>
    <br>
    <div class="col-md-6">
    <label for="formGroupExampleInput2" class="form-label">Programa</label>
    <input type="text" class="form-control" id="Programa" name="Programa">
    </div>
    <br><br><br>
    <div class="col-md-2">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop