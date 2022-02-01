@extends('adminlte::page')

@section('title', 'Romeral I')

@section('content_header')

    <h1>Lista de Personas</h1>

    <div class="card-head">
        <br>
        <a class="btn btn-warning float-left" href="{{route('admin.censos.index')}}">Regresar a Censo</a>
    </div>

    <div class="card-head">
        <a class="btn btn-primary float-right" href="{{route('admin.personas.create')}}">Agregar Persona</a>
    </div>
@stop

@section('content')
<br><br>
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
                        <th>Cedula</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Sexo</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Parentesco</th>
                        <th>Estado Civil</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Nivel de Instrucción</th>
                        <th>Profesión u Ocupación</th>
                        <th>Jefe</th>
                        <th>Status</th>
                        <th>Id User</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($personas as $persona)
                        <tr>
                            <td>{{$persona->id}}</td>
                            <td>{{$persona->cedula}}</td>
                            <td>{{$persona->names}}</td>
                            <td>{{$persona->surnames}}</td>
                            <td>
                                @if ($persona->sexo == 2)
                                    {{'Masculino'}}
                               @elseif($persona->sexo == 3)
                                    {{'Femenino'}}
                               @endif
                            </td>
                            <td>{{$persona->fecha_n}}</td>
                            <td>{{$persona->parentesco}}</td>
                            <td>
                                @switch($persona->estado_civil)
                                    @case(1)
                                        {{'-'}}
                                        @break
                                    @case(2)
                                        {{'Casado'}}
                                        @break
                                    @case(3)
                                        {{'Casada'}}
                                        @break
                                    @case(4)
                                        {{'Soltero'}}
                                        @break
                                    @case(5)
                                        {{'Soltera'}}
                                        @break
                                    @default
                                        {{' '}}
                                @endswitch
                            </td>
                            <td>{{$persona->telefono}}</td>
                            <td>{{$persona->email}}</td>
                            <td>
                                @switch($persona->nivel_instruccion)
                                    @case(1)
                                        {{'-'}}
                                        @break
                                    @case(2)
                                        {{'Primaria'}}
                                        @break
                                    @case(3)
                                        {{'Secundaria'}}
                                        @break
                                    @case(4)
                                        {{'Universitaria'}}
                                        @break
                                    @case(5)
                                        {{'Primaria no Concluida'}}
                                        @break
                                    @case(6)
                                        {{'Secundaria no Concluida'}}
                                        @break
                                    @case(7)
                                        {{'Universitaria no Concluida'}}
                                        @break
                                    @case(8)
                                        {{'Universitaria con Posgrado'}}
                                        @break
                                    @default
                                        {{' '}}
                                @endswitch
                            </td>
                            <td>{{$persona->profecion_ocu}}</td>
                            <td>
                                @if ($persona->jefe == 2)
                                    {{'Si'}}
                               @elseif($persona->jefe == 3)
                                    {{'No'}}
                               @endif
                            </td>
                            <td>
                            @if ($persona->status == 1)
                                    {{'Activo'}}
                            @else
                                    {{'Inactivo'}}
                            @endif
                            </td>
                            <td>{{$persona->user_id}}</td>
                            <td width="10px">
                                <a class="btn btn-warning btn-sm" href="{{route('admin.personas.edit', $persona->id)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.personas.destroy', $persona->id)}}" method="POST">
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
    
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}">
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            var table_persons = $('#table_persons').DataTable({
                lengthChange: false,
                responsive: true,
                lenguage: {
                    url: "{{ asset('js/Spanish.json')}}",
                }
            });
        });
    </script>

@endsection