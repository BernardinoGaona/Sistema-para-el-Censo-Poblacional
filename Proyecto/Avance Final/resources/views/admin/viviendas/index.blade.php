@extends('adminlte::page')

@section('title', 'Romeral I')

@section('content_header')

    <div class="card-head">
        <a class="btn btn-primary float-right" href="{{route('admin.viviendas.create')}}">Agregar Vivienda</a>
    </div>

    <h1>Lista de Viviendas</h1>
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
                        <th>Nº de Identificacion</th>
                        <th>Direccion</th>
                        <th>Status</th>
                        <th>Id User</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($viviendas as $vivienda)
                        <tr>
                            <td>{{$vivienda->id}}</td>
                            <td>{{$vivienda->nro_identificacion}}</td>
                            <td>{{$vivienda->direccion}}</td>
                            <td>
                               @if ($vivienda->status == 1)
                                    {{'Activo'}}
                               @else
                                    {{'Inactivo'}}
                               @endif
                            </td>
                            <td>{{$vivienda->user_id}}</td>
                            <td width="10px">
                                <a class="btn btn-warning btn-sm" href="{{route('admin.viviendas.edit', $vivienda->id)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.viviendas.destroy', $vivienda->id)}}" method="POST">
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
@stop
