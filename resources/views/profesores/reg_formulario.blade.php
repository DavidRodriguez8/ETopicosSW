@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Formulario Registro</h1>


@stop

@section('content')
<form action="{{url('profesores/registrar')}}" method="POST">
    @csrf
    <div class="col-md-6">
    <label for="formGroupExampleInput" class="form-label">Código</label>
    <input type="text" class="form-control" id="id_Profesor" name="id_Profesor">
    </div>
    <br>
    <div class="col-md-6">
    <label for="formGroupExampleInput2" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nom_Profesor" name="nom_Profesor">
    </div>
    <br>
    <div class="col-md-6">
    <label for="formGroupExampleInput2" class="form-label">Categoría</label>
    <input type="text" class="form-control" id="cat_Profesor" name="cat_Profesor">
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