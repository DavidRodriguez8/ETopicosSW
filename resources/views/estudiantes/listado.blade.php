@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>


@stop

@section('content')
    <p>Listado de Estudiantes</p>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Código</th>
      <th scope="col">Nombre</th>
      <th scope="col">Edad</th>
      <th scope="col">Fecha</th>
      <th scope="col">Sexo</th>
      <th scope="col">Programa</th>
      <th scope="col">Opciones</th>
      <th scope="col"><a class="btn btn-success" href="/estudiantes/registrar">Adicionar</a></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($estudiantes as $num => $p)
    <tr>
      <th scope="row">{{ $num + 1}}</th>
      <td>{{ $p->codEstudiante}}</td>
      <td>{{ $p->nomEstudiante}}</td>
      <td>{{ $p->edaEstudiante}}</td>
      <td>{{ $p->fechEstudiante}}</td>
      <td>{{ $p->sexEstudiante}}</td>
      <td>{{ $p->programa}}</td>
      <td>
      <button type="button" class="btn btn-primary">Editar</button>
      <a class="btn btn-danger" href="{{route('eliminaEst',$p->codEstudiante)}}">Eliminar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop