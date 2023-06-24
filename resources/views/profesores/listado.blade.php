@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profesores</h1>


@stop

@section('content')
    <p>Listado de Profesores</p>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Código</th>
      <th scope="col">Nombre</th>
      <th scope="col">Categoría</th>
      <th scope="col">Opciones</th>
      <th scope="col"><a class="btn btn-success" href="/profesores/registrar">Adicionar</a></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($profesores as $num => $p)
    <tr>
      <th scope="row">{{ $num + 1}}</th>
      <td>{{ $p->codProfesor}}</td>
      <td>{{ $p->nomProfesor}}</td>
      <td>{{ $p->catProfesor}}</td>
      <td>
      <button type="button" class="btn btn-primary">Editar</button>
      <a class="btn btn-danger" href="{{route('eliminaTea',$p->codProfesor)}}">Eliminar</a>
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