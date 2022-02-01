@extends('adminlte::page')

@section('title', 'Romeral I')

@section('content_header')
    <h1>Censo</h1>
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
@stop

@section('content')
<br>
    <a class="btn btn-primary btn-block " href="{{route('admin.jefes.create')}}">Registrar Jefe de Familia</a>
    <br><br>
    <a class="btn btn-primary btn-block" href="{{route('admin.viviendas.create')}}">Registrar Vivienda</a>
    <br><br>
    <a class="btn btn-primary btn-block" href="{{route('admin.nucleos.create')}}">Registrar Nucleo Familiar</a>
    <br>
    <br>
    <br>
    <a class="btn btn-secondary" href="{{route('admin.censos.index')}}">Volver</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop