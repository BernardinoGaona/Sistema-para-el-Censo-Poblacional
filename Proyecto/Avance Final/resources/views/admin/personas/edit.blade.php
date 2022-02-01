@extends('adminlte::page')

@section('title', 'Romeral I')

@section('content_header')
    <h1>Editar Persona</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($persona, ['route' => ['admin.personas.update', $persona->id], 'method' => 'put', 'autocomplete' => 'off']) !!}

            <div class="form-group">
                {!! Form::label('cedula', 'Cedula') !!}
                {!! Form::text('cedula', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cedula de la persona']) !!}
            
                @error('cedula')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('names', 'Nombres') !!}
                {!! Form::text('names', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los nombres de la persona']) !!}
                
                @error('names')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('surnames', 'Apellidos') !!}
                {!! Form::text('surnames', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los apellidos de la persona']) !!}
                
                @error('surnames')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('sexo', 'Sexo') !!}
                {!! Form::select('sexo', $sexos, null,['class' => 'form-control']) !!}
                
                @error('sexo')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('fecha_n', 'Fecha de Nacimiento') !!}
                {!! Form::text('fecha_n', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha de nacimiento de la persona ----- Formato dd/mm/aaaa']) !!}
                
                @error('fecha_n')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('parentesco', 'Parentesco') !!}
                {!! Form::text('parentesco', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el parentesco de la persona']) !!}
                
                @error('parentesco')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('estado_civil', 'Estado Civil') !!}
                {!! Form::select('estado_civil', $estados, null,['class' => 'form-control']) !!}
                
                @error('estado_civil')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('telefono', 'Telefono') !!}
                {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el numero de telefono de la persona']) !!}
                
                @error('telefono')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Correo Electronico') !!}
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo electronico de la persona']) !!}
                
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('nivel_instruccion', 'Nivel de Instrucción') !!}
                {!! Form::select('nivel_instruccion', $nivel, null,['class' => 'form-control']) !!}
                
                @error('nivel_instruccion')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('profecion_ocu', 'Profesion u Ocupación') !!}
                {!! Form::text('profecion_ocu', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la profesión u ocupación de la persona']) !!}
                
                @error('profecion_ocu')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="form-group">
                {!! Form::label('jefe', 'Jefe de Familia') !!}
                {!! Form::select('jefe', $respuest, null,['class' => 'form-control']) !!}
                
                @error('jefe')
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

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            {!! Form::submit('Actualizar Persona', ['class' => 'btn btn-primary']) !!}

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
            $("#names").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
  });
});
    </script>

@endsection