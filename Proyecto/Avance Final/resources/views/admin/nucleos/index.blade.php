@extends('adminlte::page')

@section('title', 'Romeral I')

@section('content_header')

    <div class="card-head">
        <a class="btn btn-primary float-right" href="{{route('admin.nucleos.create')}}">Nuevo Núcleo Familiar</a>
    </div>

    <h1>Nucleos Familiares</h1>
@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Jefe de Familia</th>
                        <th>Vivienda</th>
                        <th>Cantidad de Personas</th>
                        <th>Status</th>
                        <th>Id User</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($nucleos as $nucleo)
                        <tr>
                            <td>{{$nucleo->id}}</td>
                            <td>{{$nucleo->jefe_name}}</td>
                            <td>{{$nucleo->vivienda_id}}</td>
                            <td>{{$nucleo->cant_personas}}</td>
                            <td>
                            @if ($nucleo->status == 1)
                                    {{'Activo'}}
                            @else
                                    {{'Inactivo'}}
                            @endif
                            </td>
                            <td>{{$nucleo->user_id}}</td>
                            <td width="10px">
                                <a class="btn btn-warning btn-sm" href="{{route('admin.nucleos.edit', $nucleo->id)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.nucleos.destroy', $nucleo->id)}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
    <div  class="card-head">
        <a class="btn btn-link" href="{{route('admin.personas.create')}}">Agregar Persona</a>
    </div>
    <div  class="card-head">
        <a class="btn btn-link" href="{{route('admin.situaciones.create')}}">Agregar Situación de la Vivienda</a>
    </div>
    <div class="card-head">
        <a class="btn btn-link" href="{{route('admin.servicios.create')}}">Agregar Servicios de la Vivienda</a>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop