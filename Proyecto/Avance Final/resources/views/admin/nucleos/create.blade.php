@extends('adminlte::page')

@section('title', 'Romeral I')

@section('content_header')
    <h1>Registro de Nucleo Familiar</h1>
@stop

@section('content')
    <div class="card-body">
        {!! Form::open(['route' => 'admin.nucleos.store', 'autocomplete' => 'off']) !!}

            <div class="form-group">
                {!! Form::label('jefe_id', 'Id_Jefe') !!}
                {!! Form::text('jefe_id', $jefe, ['class' => 'form-control', 'readonly']) !!}
            
                @error('jefe_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('jefe_name', 'Nombre del Jefe') !!}
                {!! Form::text('jefe_name', $jefename, ['class' => 'form-control']) !!}
            
                @error('jefe_name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('vivienda_id', 'Id_Vivienda') !!}
                {!! Form::text('vivienda_id', $vivienda, ['class' => 'form-control', 'readonly']) !!}
                
                @error('vivienda_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('vivienda', 'Vivienda') !!}
                {!! Form::text('vivienda', $viviendaname, ['class' => 'form-control', 'readonly']) !!}
            
                @error('vivienda')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('cant_personas', 'Cantidad de Personas') !!}
                {!! Form::text('cant_personas', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Numero de Personas que Pertenecen al Nucleo Familiar']) !!}
                
                @error('cant_personas')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la persona', 'readonly']) !!}
            
                @error('slug')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            {{-- <div class="form-group">
                {!! Form::label('user_id', 'Id_Usuario') !!}
                {!! Form::select('user_id', $user, null, ['class' => 'form-control']) !!}
                
                @error('user_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div> --}}
            <a class="btn btn-secondary float-right" href="{{route('admin.nucleos.index')}}">Volver</a>
            {!! Form::submit('Crear Nucleo Familiar', ['class' => 'btn btn-success']) !!}

        {!! Form::close() !!}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#jefe_name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
        });
    });
    </script>
@stop