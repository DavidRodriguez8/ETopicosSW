@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Formulario Actualización</h1>


@stop

@section('content')
<form action="{{route('actualizar_Fac', $facultad->codFacultad)}}" method="POST">
    @csrf
    <div class="col-md-6">
    <label for="formGroupExampleInput" class="form-label">Código</label>
    <input type="text" class="form-control" id="id_facultad" name="id_facultad" value='{{$facultad->codFacultad}}' disabled>
    </div>
    <br>
    <div class="col-md-6">
    <label for="formGroupExampleInput2" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nom_Facultad" name="nom_facultad" value='{{$facultad->nomFacultad}}'>
    </div>
    <br><br><br>
    <div class="col-md-2">
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
</form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop