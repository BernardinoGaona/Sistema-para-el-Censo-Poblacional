@extends('adminlte::page')

@section('title', 'Romeral I')

@section('content_header')
    <h1>Censo Poblacional</h1>
@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.censos.store', 'autocomplete' => 'off']) !!}

            <div class="form-group">
                {!! Form::label('consejo_id', 'Consejo Comunal') !!}
                {!! Form::select('consejo_id', $consejos, null,['class' => 'form-control']) !!}
                
                @error('consejo_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('estado_id', 'Estado') !!}
                {!! Form::select('estado_id', $estados, null,['class' => 'form-control']) !!}
                
                @error('estado_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('municipio_id', 'Municipio') !!}
                {!! Form::select('municipio_id', $municipios, null,['class' => 'form-control']) !!}
                
                @error('municipio_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('parroquias_id', 'Parroquia') !!}
                {!! Form::select('parroquias_id', $parroquias, null,['class' => 'form-control']) !!}
                
                @error('parroquias_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('sector_id', 'Sector') !!}
                {!! Form::select('sector_id', $sectores, null,['class' => 'form-control']) !!}
                
                @error('sector_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('comunidad_id', 'Comunidad') !!}
                {!! Form::select('comunidad_id', $comunidades, null,['class' => 'form-control']) !!}
                
                @error('comunidad_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('nucleo_id', 'Nucleo Familiar') !!}
                {!! Form::text('nucleo_id', $nucleos, ['class' => 'form-control', 'readonly']) !!}
            
                @error('nucleo_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            {!! Form::submit('Crear Censo', ['class' => 'btn btn-success']) !!}

        {!! Form::close() !!}
    </div>
</div>

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop