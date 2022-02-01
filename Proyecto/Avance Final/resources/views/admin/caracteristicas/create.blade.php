@extends('adminlte::page')

@section('title', 'Romeral I')

@section('content_header')
    <h1>Características de {{$name}} {{$surname}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.caracteristicas.store', 'autocomplete' => 'off']) !!}

                <div class="form-group">
                    {!! Form::label('situacion_laboral', 'Situación Laboral') !!}
                    {!! Form::text('situacion_laboral', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Situación laboral de la persona']) !!}
                
                    @error('situacion_laboral')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div> 
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">Inscripción CNE</p>

                    <label class="mr-2">
                        {!! Form::radio('inscrip_cne', 1) !!}
                        Si
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::radio('inscrip_cne', 0) !!}
                        No
                    </label>

                    @error('inscrip_cne')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::label('sitio_vota', '¿Donde Vota?') !!}
                    {!! Form::text('sitio_vota', null, ['class' => 'form-control', 'placeholder' => 'Ingrese donde es el lugar donde Vota']) !!}
                
                    @error('sitio_vota')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div> 
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">Misión Hogares de la Patria</p>

                    <label class="mr-2">
                        {!! Form::radio('mision_hogaresp', 1) !!}
                        Si
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::radio('mision_hogaresp', 0) !!}
                        No
                    </label>

                    @error('mision_hogaresp')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">Misión Jose Gregorio Hernandez</p>

                    <label class="mr-2">
                        {!! Form::radio('mision_josegregorio', 1) !!}
                        Si
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::radio('mision_josegregorio', 0) !!}
                        No
                    </label>

                    @error('mision_josegregorio')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">Misión Parto Humanizado</p>

                    <label class="mr-2">
                        {!! Form::radio('mision_partohumanizado', 1) !!}
                        Si
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::radio('mision_partohumanizado', 0) !!}
                        No
                    </label>

                    @error('mision_partohumanizado')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">Misión Lactancia Materna</p>

                    <label class="mr-2">
                        {!! Form::radio('mision_lactanciamaterna', 1) !!}
                        Si
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::radio('mision_lactanciamaterna', 0) !!}
                        No
                    </label>

                    @error('mision_lactanciamaterna')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">Misión Amor Mayor</p>

                    <label class="mr-2">
                        {!! Form::radio('mision_amormayor', 1) !!}
                        Si
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::radio('mision_amormayor', 0) !!}
                        No
                    </label>

                    @error('mision_amormayor')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">Misión Chamba Juvenil</p>

                    <label class="mr-2">
                        {!! Form::radio('mision_chambajuvenil', 1) !!}
                        Si
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::radio('mision_chambajuvenil', 0) !!}
                        No
                    </label>

                    @error('mision_chambajuvenil')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">Misión Movimiento Somos Venezuela</p>

                    <label class="mr-2">
                        {!! Form::radio('mision_movimientosomosv', 1) !!}
                        Si
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::radio('mision_movimientosomosv', 0) !!}
                        No
                    </label>

                    @error('mision_movimientosomosv')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::label('organizacion_p', '¿Pertenece a una Organización? Indique') !!}
                    {!! Form::text('organizacion_p', null, ['class' => 'form-control', 'placeholder' => 'Ingrese si pertenece a una organización']) !!}
                
                    @error('organizacion_p')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div> 
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">Carnet de la Patria</p>

                    <label class="mr-2">
                        {!! Form::radio('carnet_patria', 1) !!}
                        Si
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::radio('carnet_patria', 0) !!}
                        No
                    </label>

                    @error('carnet_patria')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::label('codigo_carnet', 'Codigo del Carnet de la Patria') !!}
                    {!! Form::text('codigo_carnet', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el codigo del carnet de la patria']) !!}
                
                    @error('codigo_carnet')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::label('serial_carnet', 'Serial del Carnet de la Patria') !!}
                    {!! Form::text('serial_carnet', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el serial del carnet de la patria']) !!}
                
                    @error('serial_carnet')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">¿Recibe CLAP?</p>

                    <label class="mr-2">
                        {!! Form::radio('recibe_clap', 1) !!}
                        Si
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::radio('recibe_clap', 0) !!}
                        No
                    </label>

                    @error('recibe_clap')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::label('nro_mercados', 'Nº de Mercados') !!}
                    {!! Form::text('nro_mercados', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el numero de mercados que recibe por el CLAP']) !!}
                
                    @error('nro_mercados')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::label('talla_zapato', 'Talla de Zapato') !!}
                    {!! Form::text('talla_zapato', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la talla de Calzado']) !!}
                
                    @error('talla_zapato')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>  
                <hr>
                <div class="form-group">
                    {!! Form::label('tallaC_id', 'Talla de Camisa') !!}
                    {!! Form::select('tallaC_id', $camisa, null,['class' => 'form-control']) !!}
                    
                    @error('tallaC_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::label('tallaP_id', 'Talla de Pantalon') !!}
                    {!! Form::select('tallaP_id', $pantalon, null,['class' => 'form-control']) !!}
                    
                    @error('tallaP_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::label('persona_id', 'Persona') !!}
                    {!! Form::text('persona_id', $persona, ['class' => 'form-control', 'readonly']) !!}
                
                    @error('persona_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>
                <div class="form-group">
                    {!! Form::label('nucleof_id', 'Nucleo') !!}
                    {!! Form::text('nucleof_id', $nucleo, ['class' => 'form-control', 'readonly']) !!}
                
                    @error('nucleof_id')
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
                
                {!! Form::submit('Siguiente', ['class' => 'btn btn-success']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop