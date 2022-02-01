@extends('adminlte::page')

@section('title', 'Romeral I')

@section('content_header')

    <div class="card-head">
        <a class="btn btn-primary float-right" href="{{route('admin.jefes.create')}}">Nuevo Censo</a>
    </div>

    <h1>Censo Poblacional Comunidad "Romeral 1"</h1>
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
                        <th>Consejo Comunal</th>
                        <th>Estado</th>
                        <th>Municipio</th>
                        <th>Parroquia</th>
                        <th>Sector</th>
                        <th>Comunidad</th>
                        <th>Nucleo Familiar</th>
                        <th>Id User</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($censos as $censo)
                        <tr>
                            <td>{{$censo->id}}</td>
                            <td>{{$censo->consejo_id}}</td>
                            <td>{{$censo->estado_id}}</td>
                            <td>{{$censo->municipio_id}}</td>
                            <td>{{$censo->parroquia_id}}</td>
                            <td>{{$censo->sector_id}}</td>
                            <td>{{$censo->comunidad_id}}</td>
                            <td>{{$censo->nucleo_id}}</td>
                            <td>{{$censo->user_id}}</td>
                            <td width="10px">
                                <a class="btn btn-warning btn-sm" href="{{route('admin.censos.edit', $censo->id)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.censos.destroy', $censo->id)}}" method="POST">
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop