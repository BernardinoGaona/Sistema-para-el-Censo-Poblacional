@extends('adminlte::page')

@section('title', 'Romeral I')

@section('content_header')
    <h1>Editar Vivienda</h1>
@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

<div class="card">
    <div class="card-body">
        {!! Form::model($vivienda, ['route' => ['admin.viviendas.update', $vivienda->id], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('nro_identificacion', 'Nº Vivienda') !!}
                {!! Form::text('nro_identificacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el numero de identificacion de la Vivienda']) !!}
            
                @error('nro_vivienda')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('direccion', 'Direccción') !!}
                {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la dirección de la Vivienda']) !!}
                
                @error('direccion')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la Vivienda', 'readonly']) !!}
            
                @error('slug')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('user_id', 'Id_Usuario') !!}
                {!! Form::text('user_id', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la id del Usuario']) !!}
                
                @error('user_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            {!! Form::submit('Actualizar Vivienda', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

        <script>
            $(document).ready( function() {
                $("#nro_identificacion").stringToSlug({
                    setEvents: 'keyup keydown blur',
                    getPut: '#slug',
                    space: '-'
                    });
                    });
        </script>
    @stop