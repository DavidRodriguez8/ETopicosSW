@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Facultades</h1>


@stop

@section('content')
    <p>Listado de Facultades</p>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Código</th>
      <th scope="col">Nombre</th>
      <th scope="col">Opciones</th>
      <th scope="col"><a class="btn btn-success" href="/facultades/registrar">Adicionar</a></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($facultades as $num => $f)
    <tr>
      <th scope="row">{{ $num + 1}}</th>
      <td>{{ $f->codFacultad}}</td>
      <td>{{ $f->nomFacultad}}</td>
      <td>
      <a class="btn btn-primary" href="{{route('editaFac',$f->codFacultad)}}">Editar</a>
      <a class="btn btn-danger" href="{{route('eliminaFac',$f->codFacultad)}}">Eliminar</a>
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
